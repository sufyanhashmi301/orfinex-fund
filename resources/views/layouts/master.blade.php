<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Orfinex Funds')</title>
        <meta name="description" content="Dex.AI - AI Writer & Tech Startup Landing Page Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animatedheadline.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        @stack('css')

    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>

        @include('layouts.header')
        
        <main class="main-content fix">
            <div class="noise-bg" data-background="{{ asset('assets/img/bg/noise_bg.png') }}"></div>
            <div class="main-shape" data-background="{{ asset('assets/img/images/main_shape.png') }}"></div>
            
            @yield('content')

        </main>
        
        @include('layouts.footer')
        
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/gsap.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
        <script src="{{ asset('assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/animatedheadline.min.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/lottie-player.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script src="https://cs.orfinexfund.com/staff/js/main.js"></script>

        <script>
            
            $('.payment-plans-row__container').click(function() {
                $(this).children('.plan-details').slideToggle();
            });

            $('.planSlide').hide();
            $('.planSlide.current').show();
            $('.next').click(function () {
                $('.planSlide.current').removeClass('current').hide().next().show().addClass('current');

                if ($('.planSlide.current').hasClass('last')) {
                    $('.next').css('display', 'none');
                }
                $('.prev').css('display', 'flex');
            });

            $('.prev').click(function () {
                $('.planSlide.current').removeClass('current').hide().prev().show().addClass('current');

                if ($('.planSlide.current').hasClass('first')) {
                    $('.prev').css('display', 'none');
                }
                $('.next').css('display', 'flex');
            });

        </script>
        
        @stack('scripts')

    </body>
</html>
