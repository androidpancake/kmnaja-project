@extends('template-admin.template')
@section('content')

<div class="container my-3">
    <div class="d-flex justify-content-center">
        <h4 class="text-center">Detail Transaksi {{ $item->user->name }}</h4>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th>Paket travel</th>
            <td>{{ $item->travel_packages->title }}</td>
        </tr>
        <tr>
            <th>Pembeli</th>
            <td>{{ $item->user->name }}</td>
        </tr>
        <tr>
            <th>Add Visa</th>
            <td>${{ $item->additional_visa }}</td>
        </tr>
        <tr>
            <th>Total transaksi</th>
            <td>${{ $item->transaction_total }}</td>
        </tr>
        <tr>
            <th>Status transaksi</th>
            <td>{{ $item->transaction_status }}</td>
        </tr>
        <tr>
            <th>Pembelian</th>
            <td>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nationality</th>
                        <th>VISA</th>
                        <th>DOE Passport</th>
                    </tr>
                    @foreach($item->details as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->username }}</td>
                            <td>{{ $detail->nationality }}</td>
                            <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                            <td>{{ $detail->doe_passport }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>
</div>
@endsection 