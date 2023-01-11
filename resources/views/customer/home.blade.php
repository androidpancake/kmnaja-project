
@extends('template.header')
@section('content')
<!-- header -->
    <div class="container-fluid header">
      <div class="p-5">
          <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="my-5 p-5">
                <h1 class="display-6 text-white fw-semibold">Wisata #DiIndonesiaAja</h1>
              </div>
              <div>
                <button class="btn btn-primary w-100 text-white p-3" type="button">
                  <div class="d-flex gap-3 fs-5 fw-bold">
                  Get Started
                  <i class="bi bi-globe-asia-australia"></i>
                </div>
                </button>
              </div>
            </div>
            <div class="p-4 mt-5 rounded-2 bg-white">
              <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex gap-5">
                  <div class="me-5">
                    <div class="col">
                      <h4 class="fw-semibold">20K</h4>
                    </div>
                    <div class="col">
                      Members
                    </div>
                  </div>
                  <div class="me-5">
                    <div class="col">
                      <h4 class="fw-semibold">20K</h4>
                    </div>
                    <div class="col">
                      Members
                    </div>
                  </div>
                  <div class="me-5">
                    <div class="col">
                      <h4 class="fw-semibold">20K</h4>
                    </div>
                    <div class="col">
                      Members
                    </div>
                  </div>
                  <div class="me-5">
                    <div class="col">
                      <h4 class="fw-semibold">20K</h4>
                    </div>
                    <div class="col">
                      Members
                    </div>
                  </div>
                </div>
                <!-- kanan -->
                <div>
                  <button class="btn btn-primary" type="button">
                    <span><i class="bi bi-search text-white"></i></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
<!-- end header -->
<!-- content -->
      <!-- section1 -->
      <section>
        <div class="container my-5">
          <h3 class="fw-semibold py-2">Popular Destinations and Events</h3>
          <div class="row">
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/komodo.png" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Melihat Komodo</h5>
                  <p class="card-text">Lombok</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top" src="./frontend/image/bromo.png" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Gunung Bromo</h5>
                  <p class="card-text">East Java</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top" src="./frontend/image/bali.png" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Upacara Adat</h5>
                  <p class="card-text">Bali</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top" src="./frontend/image/labuan-bajo.png" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Labuan Bajo</h5>
                  <p class="card-text">NTB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section1 -->
      <!-- section2 -->
      <section>
        <div class="container my-5">
          <div class="d-flex justify-content-between">
            <h4 class="fw-semibold">Hotels and restaurants</h4>
            <button class="btn btn-light text-primary" type="button">
              View All
              <i class="bi bi-arrow-right"></i>
            </button>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/NIHI SUMBA 95.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Nihi Sumba</h5>
                  <p class="card-text">
                    <div class="col d-flex justify-content-between gap-2">
                      <div>
                        <i class="bi bi-geo-alt"></i>
                        Test
                      </div>
                      
                      <div>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/MULIA BALI 35.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Mulia Bali</h5>
                  <p class="card-text">
                    <div class="col d-flex justify-content-between gap-2">
                      <div>
                        <i class="bi bi-geo-alt"></i>
                        Test
                      </div>
                      
                      <div>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/smarapura.jpg" style="height: 144px;" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Smarapura Resto</h5>
                  <p class="card-text">
                    <div class="col d-flex justify-content-between gap-2">
                      <div>
                        <i class="bi bi-geo-alt"></i>
                        Test
                      </div>
                      
                      <div>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/plataran.jpg" style="height: 144px;" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Plataran</h5>
                  <p class="card-text">
                    <div class="col d-flex justify-content-between gap-2">
                      <div>
                        <i class="bi bi-geo-alt"></i>
                        Test
                      </div>
                      
                      <div>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section2 -->
      <!-- section3 -->
      <section>
        <div class="container my-5">
          <div class="d-flex justify-content-between my-2">
            <h4 class="fw-semibold">Inspirations</h4>
            <button class="btn btn-light text-primary" type="button">
              View All
              <i class="bi bi-arrow-right"></i>
            </button>
          </div>
          <div class="row">
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/kebun-raya.png" alt="">
              </div>
            </div>
            <div class="col">
              <h5 class="fw-semibold">Ingin seru-seruan di alam bebas?</h5>
              <div class="fs-6">Setelah sekian lama berkutat di depan laptop dan mengurus setumpuk pekerjaan, kini waktunya Sobat Pesona seru-seruan di alam bebas di daerah Bogor. Bogor memiliki banyak pilihan wisata yang family friendly, sehingga seluruh anggota keluarga bisa menikmati perjalanan wisatanya.</div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/borobudur.png" alt="">
              </div>
            </div>
            <div class="col">
              <h5 class="fw-semibold">Yuk, selami budaya dan sejarah Nusantara yang penuh dengan cerita di Magelang dan Yogyakarta!</h5>
              <div class="fs-6">
                Supaya liburan akhir tahun bersama keluarga jadi lebih berkesan dan menambah wawasan, Sobat Pesona bisa menjelajahi daerah Magelang dan Yogyakarta, nih.
            </div>
          </div>
        </div>
      </section>

      <!-- end section3 -->
      <!-- section4 -->
      <section>
        <div class="container my-5">
          <div class="d-flex justify-content-between my-2">
            <h4 class="fw-semibold">Activities</h4>
            <button class="btn btn-light text-primary" type="button">
              View All
              <i class="bi bi-arrow-right"></i>
            </button>
          </div>
          <div class="row">
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/heritage.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Heritage</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/culinary.jfif" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Culinary</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/bali.png" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Culture</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <img class="card-img-top h-50" src="./frontend/image/hiking.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Hiking</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section4 -->
    <!-- end content -->
    @include('template.footer')
    @endsection
