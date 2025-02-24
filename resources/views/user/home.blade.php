@extends('layouts.user')

@section('title')
    Home Page
@endsection

@section('content')
<main class="container-main-content my-3">
    <!-- Warning -->
    <button type="button" class="btn btn-outline-warning text-black border-secondary my-3" style="display: flex; ">
        <p class="d-inline-flex gap-1">
            <img src="/icons/error.svg" alt="">
            <a href="kontak">Kontak</a>
            <a href="kontak" class="" role="button">
                Jangan ragu untuk menghubungi Furniture Jati Indonesia melalui kontak yang tertera di website kami!!
            </a>
        </p>
    </button>
    <!-- END Warning -->

    <!-- DISKON -->

    <section class="container">
        <h5 class="h3 card-title font-bold">Diskon</h5>
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouseldiskon" class="carousel slide my-3">
                    <div class="carousel-inner">
                      <div class="carousel-item ratio ratio-21x9 active">
                         <a href="">
                             <img src="/icons/Diskon/1.png" class="d-block w-100 ratio " alt="...">
                         </a>
                      </div>
                      <div class="carousel-item ratio ratio-21x9 ">
                         <a href="">
                             <img src="/icons/Diskon/2.png" class="d-block w-100" alt="...">
                         </a>
                      </div>
                      <div class="carousel-item ratio ratio-21x9">
                         <a href="">
                             <img src="/icons/Diskon/3.png" class="d-block w-100" alt="...">
                         </a>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouseldiskon" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouseldiskon" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </section>
    <!-- END DISKON -->

    <!-- Testimoni -->
    <section class="container">
        <h5 class="h3 card-title font-bold">Testimoni</h5>
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouseltestimoni" class="carousel slide my-3">
                    <div class="carousel-inner">
                      <div class="carousel-item ratio ratio-21x9 active">
                        <img src="/icons/1.jpeg" class="d-block w-100 ratio " alt="...">
                      </div>
                      <div class="carousel-item ratio ratio-21x9 ">
                        <img src="/icons/2.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item ratio ratio-21x9">
                        <img src="/icons/WhatsApp Image 2024-11-25 at 23.51.53.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouseltestimoni" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouseltestimoni" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </section>
    <!-- END Testimoni -->

    <!-- Produk Unggulan -->
    <section class="container container-custom">
        <h5 class="h3 card-title font-bold ">Produk Unggulan</h5>
        <div class="row justify-content-center" style="background-color: grey">
            <div class="col-md-10">
                <div class="row text-center">
                    <div class="col-2 item">
                        <a class="btn btn-primary w-100" href="#" role="button">Kursi</a>
                    </div>
                    <div class="col-2 item">
                        <a class="btn btn-primary w-100" href="#" role="button">Bangku</a>
                    </div>
                    <div class="col-2 item">
                        <a class="btn btn-primary w-100" href="#" role="button">Meja</a>
                    </div>
                    <div class="col-2 item">
                        <a class="btn btn-primary w-100" href="#" role="button">Lemari</a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                    <div class="col-2 item">Meja</div>
                    <div class="col-2 item">Lemari</div>
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                </div>
                <div class="row text-center">
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                    <div class="col-2 item">Meja</div>
                    <div class="col-2 item">Lemari</div>
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                </div>
                <div class="row text-center">
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                    <div class="col-2 item">Meja</div>
                    <div class="col-2 item">Lemari</div>
                    <div class="col-2 item">Kursi</div>
                    <div class="col-2 item">Bangku</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- END Katalog Produk -->

    <!-- Custom Furniture -->
    <section class="container my-3">
        <h5 class="h3 card-title font-bold">Custom Furniture</h5>
        <div class="row">
            <div class="col-md-6 section left d-flex flex-column justify-content-center align-items-start">
                <h3 class="fw-bold text-uppercase">Pilih</h3>
                <h1 class="fw-bold">Warnamu</h1>
                <p>Temukan warna, model dan bahan sesuai selera anda</p>
                <button class="btn btn-custom">GET ALL COLOR</button>
            </div>
            <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
                <h3 class="fw-bold">Room ideas and inspiration</h3>
                <p>Temukan inspirasi ruangan untuk rumah anda</p>
                <button class="btn btn-custom">GET INSPIRED</button>
            </div>
        </div>
    </section>
    <!-- END Custom Furniture -->

    <!-- Furniture Set -->
    <div class="container px-0">
        <h5 class="h3 card-title font-bold">Furniture Set</h5>
        <div class="row"> 
            <div class="col-3 mb-3 mb-sm-0"> 
                <div class="card text-bg-dark border-none">
                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay justify-content-center d-flex items-center">
                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3 mb-sm-0"> 
                <div class="card text-bg-dark border-none">
                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay justify-content-center d-flex items-center">
                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3 mb-sm-0"> 
                <div class="card text-bg-dark border-none">
                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay justify-content-center d-flex items-center">
                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3 mb-sm-0"> 
                <div class="card text-bg-dark border-none">
                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay justify-content-center d-flex items-center">
                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Furniture Set -->

    <!-- Perawatan Furniture -->
    <section class="container px-0 my-3">
        <div class="row">
            <div class="col-12">
                <h5 class="h3 card-title font-bold">Perawatan Furniture</h5> 
            </div>
        </div>
        <div class="row px-2">
            <div class="col-md-6 section left d-flex flex-column justify-content-center align-items-start">
                <h3 class="fw-bold text-uppercase">Pilih</h3>
                <h1 class="fw-bold">Warnamu</h1>
                <p>Temukan warna, model dan bahan sesuai selera anda</p>
                <button class="btn btn-custom">GET ALL COLOR</button>
            </div>
            <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
                <h3 class="fw-bold">Room ideas and inspiration</h3>
                <p>Temukan inspirasi ruangan untuk rumah anda</p>
                <button class="btn btn-custom">GET INSPIRED</button>
            </div>
        </div>
    </section>
    <!-- END Perawatan Furniture -->
 </main>
@endsection
