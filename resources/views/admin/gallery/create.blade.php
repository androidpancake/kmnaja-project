@extends('template-admin.template')
@section('content')

<div class="container my-3">
    <div class="d-flex justify-content-center">
        <h4 class="text-center">Tambah Gallery</h4>
    </div>
    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="" class="form-label">Paket travel</label>
          <select name="travel_packages_id" class="form-control" required>
            @foreach($travel_packages as $travel_data)
                <option value="{{ $travel_data->id }}">
                    {{ $travel_data->title }}
                </option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Foto</label>
          <input type="file" class="form-control" name="image" placeholder="masukkan image">
        </div>
        
        <button class="btn btn-primary float-right" type="submit">Tambahkan Gambar</button>
    </form>
</div>
@endsection 