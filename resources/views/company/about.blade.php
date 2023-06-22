@extends('layouts.master')

@section('title', __('About Us'))

@section('content')

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-area -->
    <section class="inner-about-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-about-img">
                        <img src="{{ asset('assets/img/images/inner_about_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="inner-about-content">
                        <h2 class="title">Content Creation with AI</h2>
                        <div class="content-bottom">
                            <p>At Dex.ai , we use artificial intelligence to generate high-quality content at scale. Our
                                platform analyzes vast amounts of data using natural language processing and machine
                                learning algorithms to create accurate, compelling content. Whether you need product
                                descriptions, social media posts, or blog articles, our AI-powered solutions save time,
                                reduce costs, and deliver measurable results. Let us show you how our technology can
                                transform your content strategy and help you achieve your business goals.</p>
                            <ul class="list-wrap">
                                <li><i class="far fa-check"></i>Automated Content Creation</li>
                                <li><i class="far fa-check"></i>We Focus on Quantity & Well Organised Content.</li>
                                <li><i class="far fa-check"></i>Multilingual Support</li>
                                <li><i class="far fa-check"></i>Professional Team with 10+ Experience.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- counter-area -->
    <section class="counter-area-three pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="counter-content">
                        <div class="section-title-four mb-40">
                            <h2 class="title">AI can write content just like humans can</h2>
                        </div>
                        <p>By using Natural Language Processing (NLP) techniques, AI can understand the context, tone, and
                            intent of a given piece of content, and produce written output that's relevant and engaging.
                            This technology is especially useful for generating large volumes of content quickly and
                            accurately, which can save businesses a significant amount of time and resources.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="counter-item-wrap-three">
                        <ul class="list-wrap">
                            <li>
                                <div class="counter-item-three">
                                    <h2 class="count"><span class="odometer" data-count="1"></span>M</h2>
                                    <p>Our Top Clients</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item-three">
                                    <h2 class="count"><span class="odometer" data-count="50"></span>K</h2>
                                    <p>Social Media Platforms</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item-three">
                                    <h2 class="count"><span class="odometer" data-count="4"></span>K</h2>
                                    <p>Powerful AI Tools</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item-three">
                                    <h2 class="count"><span class="odometer" data-count="10"></span>M</h2>
                                    <p>Our Readers</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->

@endsection
