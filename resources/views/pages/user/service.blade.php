@extends('layouts.user')

@section('title')
Layanan Mandala Cargo
@endsection

@section('content')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="{{ asset('user/assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Layanan Kami</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#"></a>Layanan</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Service</span>
                            <h2>Kami Dapat Menjadi Solusi Pengiriman Anda!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Free PickUp</a></h5>
                                <p>Setiap penjemputan barang dan kendaraan tidak kenakan biaya khusus wilayah terjangkau.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Survey</a></h5>
                                <p>Dengan meningkatkan layanan, kami memberi gratis biaya survey untuk mengestimasi harga
                                    barang setiap pengiriman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Door to Door</a></h5>
                                <p>Pengantaran barang dan kendaraan sampai ketujuan tanpa dikenakan biaya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Free Packinging</a></h5>
                                <p>Langkah penting untuk memastikan melindungi barang & kendaraan selama proses pengiriman.
                                    Dengan menggunakan bahan dan teknik pengemasan yang tepat, packing memastikan barang
                                    tiba di tujuan dalam kondisi baik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
