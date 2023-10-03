@extends('template.header')
@section('content')
<main>
    <div class="bg-light" style="min-height: 310px;"></div>
    <section class="section-details">
        <div class="container my-5">
            <div class="row">
                <div class="col-8">
                    <div class="p-4 bg-white border border-1 rounded-3">
                        <h1 class="fw-semibold">{{ $item->title }}</h1>
                        <div class="fs-6 text-muted">{{ $item->location }}</div>
                        @if($item->galleries->count())
                        <div class="row mt-2 g-2">
                            <div class="col-lg-12">
                                <img src="{{ Storage::url($item->galleries->first()->image) }}" class="img-fluid" alt="">
                            </div>
                            @foreach($item->galleries as $gallery)
                            <div class="col-md-3">
                                <img src="{{ Storage::url($gallery->image)}}" class="img-fluid" alt="">
                            </div>
                            @endforeach
                        </div>
                        @endif
                        
                        <div class="mt-3">
                            <h4 class="fw-semibold">Deskripsi</h4>
                            <div class="fs-6">
                                {{ $item->about }}
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 border-end d-flex align-items-center gap-3">
                                    <span class="bg-light p-3 rounded-circle float-start">
                                        <i class="bi bi-ticket"></i>
                                    </span>
                                    <div>   
                                        <div class="fs-5 fw-semibold">
                                            Featured Event
                                        </div>
                                        <div class="fs-6 fw-light">{{ $item->featured_event }}</div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 border-end d-flex align-items-center gap-3">
                                    <span class="bg-light p-3 rounded-circle float-start">
                                        <i class="bi bi-ticket"></i>
                                    </span>
                                    <div>   
                                        <div class="fs-5 fw-semibold">
                                            Languange
                                        </div>
                                        <div class="fs-6 fw-light">{{ $item->languange }}</div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 d-flex align-items-center gap-3">
                                    <span class="bg-light p-3 rounded-circle float-start">
                                        <i class="bi bi-ticket"></i>
                                    </span>
                                    <div>   
                                        <div class="fs-5 fw-semibold">
                                            Foods
                                        </div>
                                        <div class="fs-6 fw-light">{{ $item->foods }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <!-- card -->
                    <div class="card border border-1 border-bottom-0 rounded-0 rounded-top">
                        <div class="card-body">
                        <p class="card-title">Members</p>
                        <hr class="border">
                        <p class="card-text fw-semibold">Trip Informations</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 50%;">Date of Departure</td>
                                    <td class="text-end">{{ $item->departure_data }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;">Type</td>
                                    <td class="text-end">{{$item->type}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%;">Price</td>
                                    <td class="text-end">Rp.{{$item->price}} / person</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- button -->
                    @auth
                    <div class="container-fluid">
                        <!-- <p>{{ $item->id }}</p> -->
                        <form action="{{ route('checkout.process', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary text-white w-100 rounded-0 p-3">Join Now</button>
                        </form>
                    </div>
                    @endauth
                    @guest
                    <div class="container-fluid">
                        <a href="{{ route('login')}}" class="btn btn-primary text-white w-100 rounded-0 p-3" type="button">Login or Register</a>
                    </div>
                    @endguest

                    <!-- end button -->
                </div>
            </div>
        </div>
    </section>  
</main>
@include('template.footer')