@extends('layouts.user')

@section('title')
@endsection

@section('content')
    <main>
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1><span>MANDALA CARGO</span> INDONESIA</h1>
                                </div>
                                <form action="{{ route('cek-resi.check') }}" method="POST" class="search-box">
                                    @csrf
                                    <div class="input-form">
                                        <input type="text" name="resi" placeholder="Masukkan Nomor Resi Anda!" required>
                                    </div>
                                    <div class="search-form">
                                        <button type="submit" style="background-color: red; padding: 18px; color: white; border: none">CEK RESI</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-info-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="info-caption">
                                <p>Call</p>
                                <span>0853 4394 8113</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="info-caption">
                                <p>OPERASIONAL</p>
                                <span>Senin-Sabtu 9.00 - 18.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-place"></span>
                            </div>
                            <div class="info-caption">
                                <p>OFFICE</p>
                                <span>JL. TIDUNG MARIOLO V NO.1 MAKASSAR, SULAWESI SELATAN</span>
                                <span>JL. MANGGAR RAYA NO.2A KOJA PRIUK, JAKARTA UTARA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-80">
                            <span>Service</span>
                            <h2>Apa yang bisa kami bantu?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">CARGO DARAT</a></h5>
                                <p>Layanan angkutan laut telah berkembang pesat dalam beberapa tahun terakhir. Kami
                                    menghabiskan waktu untuk mengetahui proses Anda untuk.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">CARGO LAUT</a></h5>
                                <p>Layanan angkutan laut telah berkembang pesat dalam beberapa tahun terakhir. Kami
                                    menghabiskan waktu untuk mengetahui proses Anda untuk.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">CARO UDARA</a></h5>
                                <p>Layanan angkutan laut telah berkembang pesat dalam beberapa tahun terakhir. Kami
                                    menghabiskan waktu untuk mengetahui proses Anda untuk.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!--? About Area Start -->
        <div class="about-low-area padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>TENTANG KAMI</span>
                                <h2>MANDALA CARGO INDONESIA</h2>
                            </div>
                            <p>Mandala Cargo Indonesia adalah perusahaan logistik yang menawarkan layanan pengiriman barang,
                                kendaraan, alat berat, alat kesehatan dan material proyek keseluruh Indonesia melalui darat,
                                laut, dan udara.</p>
                            <p>Kami menyediakan berbagai layanan tambahan seperti packinging, pelacakan, dan asuransi untuk
                                memastikan keamanan dan kenyamanan pelanggan. Dengan jaringan yang luas, teknologi canggih,
                                dan layanan pelanggan yang responsif, Mandala Cargo Indonesia berkomitmen untuk memberikan
                                pengiriman yang cepat dan aman sesuai kebutuhan customer.</p>
                            <a href="about.html" class="btn">More About</a>
                        </div>
                    </div>

                    <!--? contact-form start -->
                    <section class="contact-form-area section-bg  pt-115 pb-120 fix"
                        data-background="{{ asset('user/assets/img/gallery/cargo4.jpg') }}">
                        <div class="container">
                            <div class="row justify-content-end">
                                <!-- Contact wrapper -->
                                <div class="col-xl-8 col-lg-9">
                                    <div class="contact-form-wrapper">
                                        <!-- From tittle -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Section Tittle -->
                                                <div class="section-tittle mb-50">
                                                    <span>Resi akan muncul disini!</span>
                                                    <p>Setiap transaksi memiliki resi pengiriman, pastikan anda memiliki
                                                        resi tersebut.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a class="submit-btn" href="{{ route('resi') }}">Cek Resi Anda</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <div class="team-area section-padding30">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="cl-xl-7 col-lg-8 col-md-10">
                                <!-- Section Tittle -->
                                <div class="section-tittle text-center mb-70">
                                    <span>PORTOFOLIO</span>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto1.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Alat Telekomunikasi</a></h3>
                                            <p>Jakarta-Jayapura</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto3.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Alat Kesehatan</a></h3>
                                            <p>Makassar-Serui</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto2.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Kendaraan</a></h3>
                                            <p>Makassar-Jakarta</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto5.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Kendaraan</a></h3>
                                            <p>Makassar-Jakarta</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto6.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Kendaraan</a></h3>
                                            <p>Makassar-Jakarta</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-team mb-30 text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('user/assets/img/gallery/porto8.jpeg') }}" alt="">
                                        <div class="team-caption">
                                            <h3><a href="#">Pengiriman Kosmetik</a></h3>
                                            <p>Makassar-Ternate</p>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
