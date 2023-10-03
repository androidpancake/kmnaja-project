<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        // $items = TravelPackage::with(['galleries'])->get();
        // return view('customer.detail', [
        //     'items' => $items
        // ]);
        $item = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('customer.detail', [
            'item' => $item
        ]);
    }
}
