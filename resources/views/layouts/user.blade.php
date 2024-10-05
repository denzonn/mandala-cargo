<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="logotemanku.png">

    <title>
        @yield('title')
    </title>

    @include('includes.user.style')
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('user/assets/img/logo/logo_mandala.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('includes.user.header')

    @yield('content')

    @include('includes.user.footer')
    @include('includes.user.script')

    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
</body>

</html>
