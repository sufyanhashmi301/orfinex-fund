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

@endsection
