 @extends('template.header-checkout')
 @section('content')   
    <main>
        <div class="bg-light" style="min-height: 310px;"></div>
        <section class="section-details">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <div class="p-4 bg-white border border-1 rounded-3">
                            <h1 class="fw-semibold">Who is going?</h1>
                            <div class="fs-6 text-muted">Trip to Bromo, Indonesia</div>
                            <div class="table-responsive">
                                <table class="table table-borderless     mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Picture</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">VISA</th>
                                            <th scope="col">Passport</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row"><img src="./frontend/image/bali.png" style="width: 128px;" alt=""></td>
                                            <td>Halo</td>
                                            <td>IDN</td>
                                            <td>30 days</td>
                                            <td>No passport</td>
                                            <td><button type="button" class="btn"><i class="bi bi-x"></i></button></td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row">Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="mt-3">
                                <h4 class="text-primary fw-bold">Add members</h4>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="" id="" placeholder="Username">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary text-white">Add Now</button>
                                    </div>
                                </div>
                                <div class="fs-6 fw-semibold mt-3">Note</div>
                                <p class="text-muted">Test</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <!-- card -->
                        <div class="card border border-1 border-bottom-0 rounded-0 rounded-top">
                          <div class="card-body">
                            <p class="card-title fw-semibold">Members are going</p>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Members</td>
                                        <td class="text-end">Test</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Additional VISA</td>
                                        <td class="text-end">Test</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Trip Price</td>
                                        <td class="text-end">Test</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Sub Total</td>
                                        <td class="text-end">Test</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="border">
                            <p class="card-text fw-semibold">Payments Instruction</p>
                            <p class="text-muted">Please complete your payment before to continue wonderful trip</p>
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
                            <button class="btn btn-primary text-white w-100 rounded-0 p-3" type="button">Join now</button>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="" class="text-muted">Cancel booking</a>
                            </div>
                        </div>
                        <!-- end button -->
                    </div>
                </div>
            </div>
        </section>  
    </main>
@include('template.footer')
@endsection
