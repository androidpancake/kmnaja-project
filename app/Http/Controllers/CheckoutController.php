<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Exception;
use Midtrans\Config;
use Midtrans\Snap;

use Illuminate\Support\Facades\Auth;

class CheckoutController extends 
Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travel_packages', 'user'])->findOrFail($id);
        return view('customer.checkout', [
            'item' => $item
        ]);
    }


    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);
        // dd($process);
        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_packages'])->find($id);

        if($request->is_visa)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travel_packages->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function remove($detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'travel_packages'])->findOrFail($item->transactions_id);

        if($item->is_visa)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_packages->price;

        $transaction->save();

        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        dd($transaction);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        // config midtrans
        // Config::$serverKey = config('midtrans.serverKey');
        // Config::$isProduction = config('midtrans.isProduction');
        // Config::$isSanitized = config('midtrans.isSanitized');
        // Config::$is3ds = config('midtrans.is3ds');

        // buat array
        // $midtrans_params = [
        //     'transaction_details' => [
        //         'order_id' => 'MIDTRANS-' . $transaction->id,
        //         'gross_amount' => (int) $transaction->transaction_total
        //     ],
        //     'customer_detail' => [
        //         'first_name' => $transaction->user->name,
        //         'email' => $transaction->user->email
        //     ],
        //     'enabled_payment' => ['gopay'],
        //     'vtweb' => []
        // ];

        // try {
        //     //ambil halaman payment midtrans
        //     $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;
        //     //redirect ke halaman midtrans
        //     header('location: '.$paymentUrl);
        // } catch (Exception $e) {
        //     //throw $th;
        //     echo $e->getMessage();
        // }
        return view('customer.success');
    }
}
