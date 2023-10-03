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
                            <div class="fs-6 text-muted">Trip {{ $item->travel_packages->title }}, {{ $item->travel_packages->location }}</div>
                            <div class="table-responsive">
                                <table class="table table-borderless mt-3">
                                    <thead>
                                        <tr>    
                                            <th scope="col">Picture</th>
                                            <!-- <th scope="col">Name</th> -->
                                            <th scope="col">Username</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">VISA</th>
                                            <th scope="col">Passport</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($item->details as $detail)
                                        <tr class="">
                                            <td scope="row"><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" style="width: 64px;" alt=""></td>
                                            <!-- <td>{{ $detail->name }}</td> -->
                                            <td>{{ $detail->username }}</td>
                                            <td>{{ $detail->nationality }}</td>
                                            <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                            <td class="align-middle">
                                                {{ \Carbon\Carbon::createFromDate($detail->doe_passport ) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout.remove', $detail->id) }}" class="btn"><i class="bi bi-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="">
                                            <td colspan="10">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="mt-3">
                                <h4 class="text-primary fw-bold">Add members</h4>
                                <form action="{{ route('checkout.create', $item->id) }}" method="post">
                                    @csrf
                                    <div class="row d-flex align-items-end">
                                        <div class="col">
                                            <label for="username" class="sr-only">Username</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                        </div>
                                        <div class="col">
                                            <label for="is_visa" class="sr-only">VISA</label>
                                            <select name="is_visa" id="is_visa" class="form-control" required>
                                                <option value="" selected>VISA</option>
                                                <option value="1" selected>30 Days</option>
                                                <option value="0" selected>N/A</option>
                                            </select> 
                                        </div>
                                        <div class="col">
                                            <label for="nationality" class="sr-only">Nationality</label>
                                            <input type="nationality" class="form-control" name="nationality" id="doe_passport" placeholder="Nationality" required>
                                        </div>
                                        <div class="col">
                                            <label for="doe_passport">DOE Passport</label>
                                            <input type="date" class="form-control" name="doe_passport" id="" placeholder="DOE Passport" required>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary text-white">Add Now</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="fs-6 fw-semibold mt-3">Note</div>
                                <p class="text-muted">Hanya bisa menambahkan username dari user yang sudah memiliki akun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <!-- card -->
                        <div class="card border border-1 border-bottom-0 rounded-0 rounded-top">
                          <div class="card-body">
                            <p class="card-title fw-semibold">Checkout Informations</p>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Members</td>
                                        <td class="text-end text-muted">{{ $item->details->count() }} person</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Additional VISA</td>
                                        <td class="text-end text-muted">{{ $item->additional_visa }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Trip Price</td>
                                        <td class="text-end text-muted">Rp.{{ $item->travel_packages->price }},00</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Sub Total</td>
                                        <td class="text-end text-muted">
                                            Rp.{{ $item->transaction_total }},00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary">Total + Unique</td>
                                        <td class="text-end text-muted">
                                            <span class="text-blue">
                                            Rp.{{ $item->transaction_total }},</span>
                                            <span class="text-primary">{{ mt_rand(0,99) }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="border">
                            <p class="card-text fw-semibold">Payments Instruction</p>
                            <p class="text-muted">Please complete your payment before to continue wonderful trip</p>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;" class="text-primary fw-semibold">PT KEMANA AJA TRAVEL</td>
                                        <td class="text-end fw-semibold">
                                            0181670893
                                            BCA
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- end card -->
                        <!-- button -->
                        <div class="container-fluid">
                            <a class="btn btn-primary text-white w-100 rounded-0 p-3" href="{{ route('checkout.success', $item->id) }}">Bayar</a>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="{{ route('detail', $item->travel_packages->slug) }}" class="text-muted">Cancel booking</a>
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
