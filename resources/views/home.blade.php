@extends('layouts.master')

@section('title', __('Home'))

@section('content')

    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content ta-animated-headline">
                        <h2 class="title ah-headline wow fadeInUp" data-wow-delay=".2s">
                            <span>Pass Challenge & Trade with Our Capital with </span>
                            <span class="ah-words-wrapper">
                                <b class="is-visible">80% Profit Split</b>
                                <b>Fast Withdrawals</b>
                            </span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Unlock your trading potential by successfully passing Challenge or through Direct Funding Program. Gain access to capital, education, and 80% profit split, Our program covers losses, ensuring a risk-free opportunity for all.</p>
                        <div class="banner-btn">
                            <a href="login.html" class="gradient-btn wow fadeInLeft" data-wow-delay=".6s">
                                start a free trial
                            </a>
                            <a href="work.html" class="gradient-btn gradient-btn-two wow fadeInRight" data-wow-delay=".6s">how dex.ai work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- video-area -->
    <div class="video-area">
        <div class="video-shape">
            <svg height="1192" viewBox="0 0 1920 1192" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke="url(#paint0_linear_2840_46)" stroke-width="7" stroke-dasharray="10 10" d="M-40.9996 902C-8.39405 961.001 87.0357 1262.13 234 1171.5C385.21 1078.25 424.961 618.039 479.564 680.288C534.166 742.538 625.164 842.979 735.172 706.451C845.181 569.923 839.697 412.37 1093.03 631.043C1346.36 849.717 1371.47 413.985 1477.97 274.534C1584.48 135.083 1738.61 381.41 1830.32 343.155C1922.04 304.9 1862.93 -74.0337 2236.96 18.2495" />
                <defs>
                    <linearGradient id="paint0_linear_2840_46" x1="2117.79" y1="34.1404" x2="83.2194" y2="768.35"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="rgba(200 189 255)" />
                        <stop offset="0.13824" stop-color="#BAA6FF" />
                        <stop offset="0.337481" stop-color="#6721FF" />
                        <stop offset="0.900573" stop-color="#180048" />
                        <stop offset="1" stop-color="#00CBFF" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-wrap">
                        <video class="live-video" loop autoplay muted>
                            <source src="{{ asset('assets/videos/orfinex.mp4') }}" type="video/mp4">
                            {{-- <source src="{{ asset('assets/videos/video_01.html') }}" type="video/ogg"> --}}
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video-area-end -->

    <!-- writing-area -->
    <section class="writing-area pt-150 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-80">
                        <h2 class="title title-animation">Unlock the <span>Secret</span> of Success</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="far fa-brain"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Market Based Execution</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try Gpt-3.5 language<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="far fa-chart-line"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Easy Scaling to 700K USD</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try use of AI<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="fal fa-lightbulb-on"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Low Spread & Commision</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try conversions<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="fal fa-globe"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Trusted & Regulated Broker</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try supports languages<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="fal fa-user-friends"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Instant Account Access</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try streamline<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                    <div class="writing-item">
                        <div class="writing-shape">
                            <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" preserveAspectRatio="none">
                                <g opacity="0.1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z" fill="currentcolor" />
                                    <path d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z" fill="currentcolor" />
                                </g>
                            </svg>
                        </div>
                        <div class="writing-icon">
                            <i class="far fa-cog"></i>
                        </div>
                        <div class="writing-content">
                            <h4 class="title">Tailored for all Styles</h4>
                            <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                            <a href="work.html" class="link-btn">Try powerful settings<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- writing-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50">
                        <h2 class="title title-animation">Money well <span>invested</span></h2>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="pricing-billing-duration text-center">
                    <div class="pricing-tab">
                        <ul class="nav nav-tabs border-0" id="plans-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link border-0 bg-transparent p-0 active" id="website-tab" data-bs-toggle="tab" href="#website-tab-pane" role="tab" aria-controls="website-tab-pane" aria-selected="true">
                                    <span class="tab-btn">Challange Funding</span>
                                </a>
                            </li>
                            <span class="pricing-tab-switcher"></span>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link border-0 bg-transparent p-0" id="social-tab" data-bs-toggle="tab" href="#social-tab-pane" role="tab" aria-controls="social-tab-pane" aria-selected="false">
                                    <span class="tab-btn">Direct Funding</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('pricing.pricing-table')
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->

    <!-- tools-area -->
    <section class="tools-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-80">
                        <h2 class="title title-animation">60+ Powerful <span>Copywriting</span> Tools</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-cols-1 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2">
                <div class="col">
                    <div class="tools-item">
                        <div class="tools-shape">
                            <svg viewBox="0 0 242 142" fill="none" x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <mask id="tools_1" fill="currentcolor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" fill="currentcolor" />
                                    <path d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z" fill="currentcolor" mask="url(#tools_1)" />
                                </g>
                            </svg>
                        </div>
                        <div class="tools-icon">
                            <i class="far fa-thumbs-up"></i>
                        </div>
                        <div class="tools-content">
                            <h4 class="title"><a href="login.html">Social media</a></h4>
                            <a href="login.html" class="link-btn">Select & Try<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tools-item">
                        <div class="tools-shape">
                            <svg viewBox="0 0 242 142" fill="none"  x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <mask id="tools_2" fill="currentcolor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" fill="currentcolor" />
                                    <path d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z" fill="currentcolor" mask="url(#tools_2)" />
                                </g>
                            </svg>
                        </div>
                        <div class="tools-icon">
                            <i class="fal fa-swatchbook"></i>
                        </div>
                        <div class="tools-content">
                            <h4 class="title"><a href="login.html">Design</a></h4>
                            <a href="login.html" class="link-btn">Select & Try<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tools-item">
                        <div class="tools-shape">
                            <svg viewBox="0 0 242 142" fill="none"  x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <mask id="tools_3" fill="currentcolor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" fill="currentcolor" />
                                    <path d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z" fill="currentcolor" mask="url(#tools_3)" />
                                </g>
                            </svg>
                        </div>
                        <div class="tools-icon">
                            <i class="fal fa-code"></i>
                        </div>
                        <div class="tools-content">
                            <h4 class="title"><a href="login.html">Coding</a></h4>
                            <a href="login.html" class="link-btn">Select & Try<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tools-item">
                        <div class="tools-shape">
                            <svg viewBox="0 0 242 142" fill="none"  x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <mask id="tools_4" fill="currentcolor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" fill="currentcolor" />
                                    <path d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z" fill="currentcolor" mask="url(#tools_4)" />
                                </g>
                            </svg>
                        </div>
                        <div class="tools-icon">
                            <i class="fal fa-bullhorn"></i>
                        </div>
                        <div class="tools-content">
                            <h4 class="title"><a href="login.html">Marketing</a></h4>
                            <a href="login.html" class="link-btn">Select & Try<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tools-item">
                        <div class="tools-shape">
                            <svg viewBox="0 0 242 142" fill="none"  x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <mask id="tools_5" fill="currentcolor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000152349 96C0.000152323 82 7.50015 73 26.223 76.38C43.8227 79.5573 73.5001 62.5 65.0001 34C58.0933 10.8417 68.4855 0.0152226 90.4537 0H212C228.569 0 242 13.4315 242 30V112C242 128.569 228.569 142 212 142H30C13.4315 142 0 128.569 0 112V30C0 29.9678 5.07887e-05 29.9356 0.00015229 29.9034L0.000152349 96Z" fill="currentcolor" />
                                    <path d="M26.223 76.38L26.0454 77.3641L26.223 76.38ZM65.0001 34L64.0419 34.2858L65.0001 34ZM90.4537 0V-1L90.453 -1L90.4537 0ZM0.00015229 29.9034H1.00015L-0.999843 29.9002L0.00015229 29.9034ZM26.4007 75.3959C16.885 73.6781 9.97666 75.0628 5.44345 78.9101C0.915774 82.7526 -0.999848 88.8465 -0.999848 96H1.00015C1.00015 89.1535 2.83453 83.7474 6.73758 80.4349C10.6351 77.1272 16.8382 75.7019 26.0454 77.3641L26.4007 75.3959ZM64.0419 34.2858C68.1619 48.1001 63.0535 59.0984 54.7433 66.3139C46.3759 73.5791 34.8547 76.9221 26.4007 75.3959L26.0454 77.3641C35.191 79.0152 47.3083 75.4182 56.0546 67.8241C64.8581 60.1802 70.3384 48.3998 65.9584 33.7142L64.0419 34.2858ZM90.453 -1C79.3518 -0.992307 70.8801 1.74143 66.1178 7.69682C61.3389 13.673 60.5477 22.57 64.0419 34.2858L65.9584 33.7142C62.5458 22.2717 63.4972 14.1764 67.6798 8.94589C71.879 3.69466 79.5874 1.00753 90.4544 1L90.453 -1ZM90.4537 1H212V-1H90.4537V1ZM212 1C228.016 1 241 13.9837 241 30H243C243 12.8792 229.121 -1 212 -1V1ZM241 30V112H243V30H241ZM241 112C241 128.016 228.016 141 212 141V143C229.121 143 243 129.121 243 112H241ZM212 141H30V143H212V141ZM30 141C13.9837 141 1 128.016 1 112H-1C-1 129.121 12.8792 143 30 143V141ZM1 112V30H-1V112H1ZM1 30C1 29.9688 1.00005 29.9377 1.00015 29.9065L-0.999843 29.9002C-0.999948 29.9335 -1 29.9667 -1 30H1ZM1.00015 96V29.9034H-0.999848L-0.999848 96H1.00015Z" fill="currentcolor" mask="url(#tools_5)" />
                                </g>
                            </svg>
                        </div>
                        <div class="tools-icon">
                            <i class="fal fa-search-plus"></i>
                        </div>
                        <div class="tools-content">
                            <h4 class="title"><a href="login.html">SEO</a></h4>
                            <a href="login.html" class="link-btn">Select & Try<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn text-center mt-30">
                <a href="login.html" class="gradient-btn gradient-btn-two btn-two">more tools & try for free</a>
            </div>
        </div>
    </section>
    <!-- tools-area-end -->

    <section class="blog-details-area pb-150">
        <div class="container">
            <div class="blog-avatar-wrap w-100">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="section-title mb-25">
                            <h2 class="title title-animation">
                                Check Our 
                                <span>Competitive Spreads</span>
                            </h2>
                        </div>
                        <p>Login to MT5 with these credentials to check out our raw spreads across different instruments. Guaranteed best prop trading conditions with raw spreads and minimal slippage on execution.</p>
                        <div class="d-inline-flex rounded-pill border py-3 px-4 mt-4">
                            <h6 class="mb-0">Trading Platform 5</h6>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card check-spread__card overflow-hidden border-0">
                            <div class="card-head text-center p-3">
                                <h5 class="mb-0">Check Spread - MT5</h5>
                            </div>
                            <div class="card-body p-4">
                                <label class="form-label text-dark">Login ID</label>
                                <div class="form-control-wrap mb-3">
                                    <input type="text" class="form-control form-control-sm" value="12345" readonly>
                                    <a href="javascript:;" class="form-icon form-icon-right copy-button">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                                <label class="form-label text-dark">Investor Password</label>
                                <div class="form-control-wrap mb-3">
                                    <input type="text" class="form-control form-control-sm" value="FN2022" readonly>
                                    <a href="javascript:;" class="form-icon form-icon-right copy-button">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                                <label class="form-label text-dark">Server Name</label>
                                <div class="form-control-wrap mb-3">
                                    <input type="text" class="form-control form-control-sm" value="Growthnext-Server" readonly>
                                    <a href="javascript:;" class="form-icon form-icon-right copy-button">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial-area -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="section-title text-center mb-70">
                        <h2 class="title title-animation"><span>6,000,000+</span> <br> Professionals & teams choose us</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-wrap">
                <div class="row testimonial-active">
                    <div class="col">
                        <div class="testimonial-item">
                            <div class="testimonial-shape">
                                <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/img/images/testi_avatar01.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>"As a content writer, I was initially skeptical about using an AI tool. But after trying it out, I have to say that I'm blown away by the results.</p>
                                <div class="testimonial-bottom">
                                    <h5 class="title">Emily Johnson</h5>
                                    <span>Podcast Host</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-item">
                            <div class="testimonial-shape">
                                <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/img/images/testi_avatar02.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“I cant imagine my life without Goco.It has changed the game for me. I can put in a sentence or two of a generic idea and Goco. takes it in and in 30 seconds.</p>
                                <div class="testimonial-bottom">
                                    <h5 class="title">les alexander</h5>
                                    <span>Entrepreneur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-item">
                            <div class="testimonial-shape">
                                <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/img/images/testi_avatar03.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>"I've been using the AI writing tool for a few months now, and it's completely transformed my workflow. Not only has it saved me time and energy."</p>
                                <div class="testimonial-bottom">
                                    <h5 class="title">Michael Davis</h5>
                                    <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-item">
                            <div class="testimonial-shape">
                                <svg viewBox="0 0 561 274" fill="none" x="0px" y="0px" preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M97.8407 0H531C547.569 0 561 13.4315 561 30V244C561 260.569 547.569 274 531 274H127.841C111.272 274 97.8407 260.569 97.8407 244V78.4298C97.8407 66.4626 90.7283 55.6401 79.7433 50.8921L6.37287 19.1792C-3.59343 14.8715 -0.516972 0 10.3404 0H97.8407Z" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/img/images/testi_avatar04.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>"I was hesitant to invest in an AI writing tool, but after seeing the results it produced, I have no regrets. The tool has helped</p>
                                <div class="testimonial-bottom">
                                    <h5 class="title">Jennifer Taylor</h5>
                                    <span>Blogger</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
@endsection

@push('scripts')
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

        $(document).ready(function () {

            updateRefundableFees('swap');
            $('.account-btn').on('click', function () {
                var accountType = $(this).data('account-type');
                updateRefundableFees(accountType);
                $(this).addClass('active').siblings().removeClass('active');
            });

            function updateRefundableFees(accountType) {
                $('.refundable-fee').each(function () {
                    var fee = $(this).data('fee');
                    var displayText = '$' + fee;

                    if ($(this).data('account-type') === accountType) {
                        $(this).text(displayText);
                    } else {
                        $(this).empty();
                    }
                });
            }

            $('#step-challange__1').on('click', function() {
                $('#phaseButtons').show();
            });

            $('#step-challange__2').on('click', function() {
                $('#phaseButtons').hide();
            });

            // Initialize the challange data based on the default selected challange
            updateChallangeData(2);

            $('.challange-btn').on('click', function () {
                var challange = $(this).data('challange');
                updateChallangeData(challange);

                $(this).addClass('active').siblings().removeClass('active');
            });

            function updateChallangeData(challange) {
                $('.challange-data').each(function () {
                    var dataChallange = $(this).data('challange');

                    if (dataChallange === challange) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Initialize the phase data based on the default selected phase
            updatePhaseData(1);

            $('.phase-btn').on('click', function () {
                var phase = $(this).data('phase');
                updatePhaseData(phase);
                
                $(this).addClass('active').siblings().removeClass('active');
            });

            function updatePhaseData(phase) {
                $('.phase-data').each(function () {
                    var dataPhase = $(this).data('phase');

                    if (dataPhase === phase) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Initialize the leverage data based on the default selected leverage
            updateLeverageData('1:5');

            $('.leverage-btn').on('click', function () {
                var leverage = $(this).data('leverage');
                updateLeverageData(leverage);

                $(this).addClass('active').siblings().removeClass('active');
            });

            function updateLeverageData(leverage) {
                $('.leverage-data').each(function () {
                    var dataLeverage = $(this).data('leverage');

                    if (dataLeverage === leverage) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Get all copy buttons
            const copyButtons = document.querySelectorAll('.copy-button');
            copyButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const input = button.previousElementSibling;
                    input.select();
                    input.setSelectionRange(0, 99999);
                    document.execCommand('copy');
                    input.blur();
                    button.innerHTML = '<i class="far fa-check-circle text-success"></i>';
                    setTimeout(() => {
                    button.innerHTML = '<i class="fas fa-copy"></i>';
                    }, 2000);
                });
            });

        });

    </script>
@endpush
