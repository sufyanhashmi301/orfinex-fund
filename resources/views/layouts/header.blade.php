<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    {{-- <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"> --}}
                                    <lottie-player
                                        autoplay
                                        loop
                                        mode="normal"
                                        background="transparent"
                                        src="{{ asset('/assets/js/logo-data.json') }}"
                                        class="logo-img"
                                        style="width: 180px;max-height: unset;transform: scale(1.5);line-height: 1px;transform-origin: bottom;"
                                    ></lottie-player>
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li>
                                        <a href="{{ route('home') }}">
                                            {{ __('Home') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('how-it-works') }}">
                                            {{ __('How it Works') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('help-center') }}">
                                            {{ __('Help Center') }}
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:;">{{ __('Trading') }}</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('trading.blog') }}">
                                                    {{ __('Blog') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('trading.videos') }}">
                                                    {{ __('Videos') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('trading.affiliate') }}">
                                                    {{ __('Affiliate') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('trading.calendar') }}">
                                                    {{ __('Calendar') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">
                                            {{ __('FAQ') }}
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:;">{{ __('Company') }}</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('company.about') }}">
                                                    {{ __('About Us') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('company.contact') }}">
                                                    {{ __('Contact Us') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('company.careers') }}">
                                                    {{ __('Careers') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul class="list-wrap">
                                    <li class="header-btn">
                                        <a href="" class="btn">Client Area</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="nav-logo">
                                <a href="{{ route('home') }}">
                                    {{-- <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"> --}}
                                    <lottie-player
                                        autoplay
                                        loop
                                        mode="normal"
                                        background="transparent"
                                        src="{{ asset('/assets/js/logo-data.json') }}"
                                        class="logo-img"
                                        style="width: 160px;max-height: unset;transform: scale(1.5);line-height: 1px;transform-origin: bottom;"
                                    ></lottie-player>
                                </a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
</header>
