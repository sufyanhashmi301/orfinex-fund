@extends('layouts.master')

@section('title', __('One Phase'))

@section('content')

    <section class="breadcrumb-area pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="work-thumb">
                            <img src="{{ asset('assets/img/banner/one-phase.svg') }}" alt="">
                        </div>
                        <div class="breadcrumb-content text-start me-5">
                            <h2 class="title mb-4"><span>One</span> Phase</h2>
                            <p>Our one phase Evaluation program is built for forex traders that wish to expedite their challenge phase.Traders can go from 0 to funded in 1 simple step.</p>
                            <a href="login.html" class="gradient-btn wow fadeInLeft mt-4" data-wow-delay=".6s">Get Funded</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-110">
        <div class="container">
            <div class="contact-form px-4 py-5 mx-0">
                <h3 class="mb-2">Introduction to</h3>
                <h2 class="title">Our One Phase Program</h2>
                <p>Our One Phase Program is tailored to traders who wish to accelerate access to a funded account. This program comprises a solitary phase evaluation, meaning that traders need to complete only one evaluation phase to qualify for funding. The program has been devised in a manner that optimally suits low-risk trading, increasing the likelihood of traders passing. With this program, traders can compound their account balance to the subsequent level by taking advantage of our scaling plan, and this process can continue up to $4,000,000. Traders can also customise their program so that they can trade according to their strategy. We believe that allowing traders to customise their programs will help in their overall success of passing the evaluation.</p>
            </div>
        </div>
    </section>

    <section class="pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title text-center mb-70">
                        <span class="rounded-pill border py-2 px-3">Choose Your Account</span>
                        <h2 class="title title-animation mt-3">
                            Account 
                            <span>Options</span>
                        </h2>
                        <p class="mt-3">We understand that every trader has a unique style and preferences, which is why we offer a selection of tailored account options to meet your needs.</p>
                        <p>Our account options come with a range of features and benefits including, the best trading dashboard in the industry, customisable account options, and much more.</p>
                    </div>
                </div>
            </div>
            @include('programs.one-phase-table')
        </div>
    </section>

    <section class="pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="work-thumb">
                            <img src="{{ asset('assets/img/banner/tailor.svg') }}" alt="">
                        </div>
                        <div class="breadcrumb-content text-start me-5">
                            <h2 class="title mb-4">Tailor Your <span>Program</span></h2>
                            <p>We appreciate that every trader and trading style is different. With that in mind we offer the opportunity to customise your trading accounts at the checkout.</p>
                            <a href="login.html" class="gradient-btn wow fadeInLeft mt-4" data-wow-delay=".6s">Choose Your Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-info-item justify-content-start h-100">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/leverage.svg') }}" width="70%" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Increase Leverage</h2>
                            <p class="mb-0">With our innovative tech you can trade with confidence and take advantage of increased leverage to enhance your profits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-info-item justify-content-start h-100">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/unlimited.svg') }}" width="70%" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Unlimited Days</h2>
                            <p class="mb-0">Trade at your own pace with complete freedom and flexibility, so that you can focus on your performance and profit target.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-info-item justify-content-start h-100">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/profit.svg') }}" width="70%" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Extra 15% Profit Split</h2>
                            <p class="mb-0">Maximize your earning potential and increase your profit split by 15%. Trades who upgrade their profit split will receive a 90% profit split.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-info-item justify-content-start h-100">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/payouts.svg') }}" width="70%" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Bi-weekly Payouts</h2>
                            <p class="mb-0">Our bi-weekly payout system ensures that you receive your earnings on a regular basis, without having to wait for long periods.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="use-cases-area pb-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title mb-25">
                        <h2 class="title">
                            Our Most Asked 
                            <span>Questions</span>
                        </h2>
                    </div>
                    <p>Check out our most frequently asked questions here or click the link before to see all of our frequently asked questions.</p>
                    <a href="login.html" class="btn btn-two mt-4">
                        See All FAQs
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="faq-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item active">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Can AI content writing replace human writers?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How does AI content writing work?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is AI content writing?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What are the benefits of using AI content writing?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Is AI content writing ethical?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection

@push('css')
    <style>
        .faq-wrap .accordion-button {
            font-size: 24px;
        }
    </style>
@endpush