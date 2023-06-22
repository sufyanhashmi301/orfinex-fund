@extends('layouts.master')

@section('title', __('Contact Us'))

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Get in <span>Touch</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area pb-140">
        <div class="container">
            <div class="contact-info-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h2 class="title">Visit Us Daily</h2>
                                <p>1791 Yorkshire Circle KittyNY <br> 10002,USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h2 class="title">Contact Us</h2>
                                <span>+ 1 008-345-6789</span>
                                <span>+1 800-789-4561</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h2 class="title">Email Us</h2>
                                <span>Sotcoxinfo@example.com</span>
                                <span>Webyourinfo@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-wrap">
                        <h2 class="title">Do you have <span>question contact us</span></h2>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="responds-wrap">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="{{ asset('assets/img/images/m_voice_img01.png') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/images/m_voice_img02.png') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/images/m_voice_img03.png') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/images/m_voice_img04.png') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/images/m_voice_img05.png') }}" alt="">
                                        </li>
                                    </ul>
                                    <p>Responds in 4-8 hours</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-form">
                                    <form action="#">
                                        <div class="form-grp">
                                            <input type="text" id="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-grp">
                                            <input type="email" id="email" placeholder="Your email*" required>
                                        </div>
                                        <div class="form-grp">
                                            <input type="text" id="phone" placeholder="Phone" required>
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" id="message" placeholder="Please describe what you need*"></textarea>
                                        </div>
                                        <button class="btn" type="submit">submit here</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="contact-shape">
                            <img src="{{ asset('assets/img/images/contact_shape.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-map -->
    <div class="contact-map">
        <iframe src="https://geo-devrel-javascript-samples.web.app/samples/style-array/app/dist/" allowfullscreen=""
            loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->

@endsection
