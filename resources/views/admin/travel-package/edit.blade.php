@extends('template-admin.template')
@section('content')

<div class="container my-3">
    <div class="d-flex justify-content-center">
        <h4 class="text-center">Edit Paket Travel</h4>
    </div>
    <form action="{{ route('travel-packages.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="" value="{{ $item->title }}" placeholder="masukkan title">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">slug</label>
          <input type="text" class="form-control" name="slug" id="" aria-describedby="helpId" value="{{ $item->slug }}" placeholder="masukkan slug">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">location</label>
          <input type="text" class="form-control" name="location" id="" aria-describedby="helpId" value="{{ $item->location }}" placeholder="masukkan location">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">about</label>
          <input type="textarea" row="10" class="form-control" name="about" id="" aria-describedby="helpId" value="{{ $item->about }}" placeholder="masukkan about">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">featured_event</label>
          <input type="text" class="form-control" name="featured_event" id="" aria-describedby="helpId" value="{{ $item->featured_event }}" placeholder="masukkan featured event">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">languange</label>
          <input type="text" class="form-control" name="languange" id="" aria-describedby="helpId" value="{{ $item->languange }}" placeholder="masukkan languange">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">foods</label>
          <input type="text" class="form-control" name="foods" id="" aria-describedby="helpId" value="{{ $item->foods }}" placeholder="masukkan foods">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">departure date</label>
          <input type="date" class="form-control" name="departure_date" id="" aria-describedby="helpId" value="{{ $item->departure_date }}" placeholder="masukkan dept date">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">type</label>
          <input type="text" class="form-control" name="type" id="" aria-describedby="helpId" value="{{ $item->type }}" placeholder="masukkan price">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">price</label>
          <input type="number" class="form-control" name="price" id="" aria-describedby="helpId" value="{{ $item->price }}" placeholder="masukkan price">
        </div>
        <button class="btn btn-primary float-right" type="submit">Update</button>
    </form>
</div>
@endsection 