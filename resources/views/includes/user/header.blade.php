<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>0853 4394 8113</li>
                                    <li>Email: cargoindonesiamandala@gmail.com</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('user/assets/img/logo/logo_mandala.png') }}" alt=""
                                        width="110" height="100" class="d-inline-block align-text-top"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="{{ request()->is('/*') ? ' text-primary' : '' }}" href="{{ route('home') }}">Home</a></li>
                                            <li><a class="{{ request()->is('about*') ? ' text-primary' : '' }}" href="{{ route('about') }}">Tentang</a></li>
                                            <li><a class="{{ request()->is('service*') ? ' text-primary' : '' }}" href="{{ route('service') }}">Service</a></li>
                                            <li><a class="{{ request()->is('contact*') ? ' text-primary' : '' }}" href="{{ route('contact') }}">Kontak</a></li>
                                            <li><a class="{{ request()->is('resi*') ? ' text-primary' : '' }}" href="{{ route('resi') }}">Cek Resi</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="https://api.whatsapp.com/send/?phone=6285343948113&text&type=phone_number&app_absent=0"
                                        class="btn header-btn">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
