@extends('layouts.user')

@section('title')
    Tentang Mandala Cargo Indonesia
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
                                <h2>Tentang Kami</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Tentang Perusahaan Kami</span>
                                <h2>Solusi Logistik & Transportasi yang Aman Yang Menghemat Waktu Berharga Kita!</h2>
                            </div>
                            <p>Kami menyediakan layanan logistik dan transportasi yang dirancang untuk memastikan keamanan
                                pengiriman barang dan kendaraan Anda. Dengan memanfaatkan teknologi canggih dan tim
                                profesional yang berpengalaman, kami berkomitmen untuk memberikan solusi yang andal dan
                                tepat waktu, membantu Anda mengoptimalkan operasional dan menjaga kelancaran rantai pasokan.
                                Percayakan kebutuhan logistik Anda kepada kami untuk layanan yang cepat, aman, dan hemat
                                waktu.</p>
                            <a href="https://api.whatsapp.com/send/?phone=6285343948113&text&type=phone_number&app_absent=0"
                                class="btn">Info lebih lanjut</a>
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
                                                    <span>Email</span>
                                                    <h2>Kirim melalui Email kami:</h2>
                                                    <p>Anda dapat mengirimkan pesan melalui email hanya dengan mengisi data
                                                        pengiriman dibawah in.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form -->
                                        <form action="#" class="contact-form">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Contact Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="select-items">
                                                        <select name="select" id="select1">
                                                            <option value="">Barang</option>
                                                            <option value="">Motor</option>
                                                            <option value="">Mobil</option>
                                                            <option value="">Alat Kesehatan</option>
                                                            <option value="">Kosmetik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Rute Keberangkatan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Berat">
                                                    </div>
                                                </div>
                                                <!-- Height Width length -->
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Tinggi">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Lebar">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="input-form">
                                                        <input type="text" placeholder="Panjang">
                                                    </div>
                                                </div>
                                                <!-- Radio Button -->
                                                <div class="col-lg-12">
                                                    <div class="radio-wrapper mb-30 mt-15">
                                                        <label>Extra services:</label>
                                                        <div class="select-radio">
                                                            <div class="radio">
                                                                <input id="radio-1" name="radio" type="radio"
                                                                    checked="">
                                                                <label for="radio-1" class="radio-label">Reguler</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input id="radio-2" name="radio" type="radio">
                                                                <label for="radio-2" class="radio-label">Express</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Button -->
                                                    <div class="col-lg-12">
                                                        <button href="cargoindonesiamandala@gmail.com" name="submit"
                                                            class="submit-btn">Kirim Email</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="home-blog-area section-padding30">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-40">
                                    <div class="section-tittle text-center mb-80">
                                        <span>Rute Pengiriman</span>
                                        <p>Kami memiliki rute pengiriman rutin yang luas dan terjangkau.</p>
                                        <h2>Jakarta >> All Nusantara</h2>
                                        <h2>Makassar >> All Jabodetabek</h2>
                                        <h2>Makassar >> All Papua</h2>
                                        <h2>Makassar >> All NTB & NTT</h2>
                                        <h2>Makassar >> All Maluku</h2>
                                        <h2>Makassar >> All Kalimantan</h2>
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
