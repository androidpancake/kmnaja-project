@extends('template-admin.template')
@section('content')

.<div class="container-fluid">
    <div class="rows-col">
        <div class="d-flex justify-content-between my-2">
            <h4 class="text-center">Transaksi</h4>
        </div>

        <div class="table-responsive table-borderless">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Travel</th>
                        <th scope="col">User</th>
                        <th scope="col">Visa</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $data)
                    <tr class="">
                        <td>{{$data->id}}</td>
                        <td>{{$data->travel_packages->title}}</td>
                        <td>{{$data->user->name}}</td>
                        <td>${{$data->additional_visa}}</td>
                        <td>${{$data->transaction_total}}</td>
                        <td>{{$data->transaction_status}}</td>
                        <td>
                            <a href="{{ route('transaction.show', $data->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('transaction.edit', $data->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('transaction.destroy', $data->id) }}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')    
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection