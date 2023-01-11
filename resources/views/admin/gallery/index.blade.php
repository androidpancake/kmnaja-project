@extends('template-admin.template')
@section('content')

.<div class="container-fluid">
    <div class="rows-col">
        <div class="d-flex justify-content-between my-2">
            <h4 class="text-center">Gambar</h4>
            <a class="btn btn-primary" href="{{ route('gallery.create') }}">
                <span><i class="fa fa-plus"></i></span>    
            Tambah Gambar Paket Travel</a>
        </div>

        <div class="table-responsive table-borderless">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Travel</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $data)
                    <tr class="">
                        <td>{{$data->id}}</td>
                        <td scope="row">{{$data->travel_packages->title}}</td>
                        <td>
                            <img src="{{ Storage::url($data->image) }}" class="img-thumbnail" style="width: 168px" alt="">
                        </td>
                        <td>
                            <a href="{{ route('gallery.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('gallery.destroy', $data->id) }}" class="d-inline" method="post">
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