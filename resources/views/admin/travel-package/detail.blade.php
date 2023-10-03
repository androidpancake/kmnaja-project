@extends('template.header')
@section('content')

<div class="bg-light" style="min-height: 310px;"></div>
        <section class="section-details">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <div class="p-4 bg-white border border-1 rounded-3">
                            <h1 class="fw-semibold">Bromo</h1>
                            <div class="fs-6 text-muted">Bromo, Indonesia</div>
                            <div class="row mt-2 g-2">
                                <div class="col-lg-12">
                                    <img src="./frontend/image/bromo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="./frontend/image/bromo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="./frontend/image/bromo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="./frontend/image/bromo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="./frontend/image/bromo.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="mt-3">
                                <h4>Title</h4>
                                <div class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe obcaecati esse totam tempora, accusamus dolores aliquid sed commodi sequi. Eius maxime corrupti eligendi dolorum enim repudiandae nihil at perferendis harum.</div>
                                <div class="row mt-5">
                                    <div class="col-md-4 border-end d-flex align-items-center gap-3">
                                        <span class="bg-light p-3 rounded-circle float-start">
                                            <i class="bi bi-ticket"></i>
                                        </span>
                                        <div>   
                                            <div class="fs-5">
                                                Test test
                                            </div>
                                            <div class="fs-6 fw-light">Test</div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 border-end d-flex align-items-center gap-3">
                                        <span class="bg-light p-3 rounded-circle float-start">
                                            <i class="bi bi-ticket"></i>
                                        </span>
                                        <div>   
                                            <div class="fs-5">
                                                Test test
                                            </div>
                                            <div class="fs-6 fw-light">Test</div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center gap-3">
                                        <span class="bg-light p-3 rounded-circle float-start">
                                            <i class="bi bi-ticket"></i>
                                        </span>
                                        <div>   
                                            <div class="fs-5">
                                                Test test
                                            </div>
                                            <div class="fs-6 fw-light">Test</div>
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
                                        <td class="text-end">Test</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">Date of Departure</td>
                                        <td class="text-end">Test</td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- end card -->
                        <!-- button -->
                        <div class="container-fluid">
                            <button class="btn btn-primary text-white w-100 rounded-0 p-3" type="button">Text</button>
                        </div>
                        <!-- end button -->
                    </div>
                </div>
            </div>
        </section> 

@include('template.footer')
@endsection