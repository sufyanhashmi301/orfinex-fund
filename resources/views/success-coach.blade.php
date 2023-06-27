@extends('layouts.master')

@section('title', __('Success Coach'))

@section('content')

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Success <span>Coach</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/img/team/team_img01.jpg') }}" alt="">
                            <div class="team-hidden-content">
                                <h4 class="title">Jack O'Halloran</h4>
                                <p>A Co-Founder is someone who helps establish a company from the ground up, often sharing the vision and responsibilities of the business with one or more other individuals. Co-Founders bring unique skills and expertise to the table, which can complement each other and drive the company forward.</p>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h4 class="title">Jack O'Halloran</h4>
                                <span>Co-Founder / CEO</span>
                            </div>
                            <div class="team-social">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
