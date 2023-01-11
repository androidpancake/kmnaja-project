@extends('template-admin.template')
@section('content')

.<div class="container-fluid">
    <div class="rows-col">
        <div class="d-flex justify-content-between my-2">
            <h4 class="text-center">Paket Travel</h4>
            <a class="btn btn-primary" href="{{ route('travel-packages.create') }}">
                <span><i class="fa fa-plus"></i></span>    
            Tambah Paket Travel</a>
        </div>

        <div class="table-responsive table-borderless">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Location</th>
                        <th scope="col">Foods</th>
                        <th scope="col">Dept. Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @forelse($travel as $data)
                    <tr class="">
                        <td>{{$data->id}}</td>
                        <td scope="row">{{$data->title}}</td>
                        <td>{{$data->location}}</td>
                        <td>{{$data->foods}}</td>
                        <td>{{$data->departure_date}}</td>
                        <td>{{$data->type}}</td>
                        <td>
                            <a href="{{ route('travel-packages.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('travel-packages.destroy', $data->id) }}" class="d-inline" method="post">
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