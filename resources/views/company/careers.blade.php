@extends('layouts.master')

@section('title', __('Careers'))

@section('content')

    
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Featured <span>Jobs</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- job-area -->
    <section class="job-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="job-tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">View all</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="development-tab" data-bs-toggle="tab" data-bs-target="#development-tab-pane" type="button" role="tab" aria-controls="development-tab-pane" aria-selected="false">Development</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="false">Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="customer-tab" data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button" role="tab" aria-controls="customer-tab-pane" aria-selected="false">Customer services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="management-tab" data-bs-toggle="tab" data-bs-target="#management-tab-pane" type="button" role="tab" aria-controls="management-tab-pane" aria-selected="false">Management</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel"
                                aria-labelledby="all-tab" tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Senior Software Engineer</a></h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li>
                                                    <a href="job-details.html">
                                                        <i class="far fa-map-marker-alt"></i>
                                                        Remote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="job-details.html">
                                                        <i class="far fa-clock"></i>
                                                        Full-time
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title">
                                                <a href="job-details.html">Customer Success Manager</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li>
                                                    <a href="job-details.html">
                                                        <i class="far fa-map-marker-alt"></i>
                                                        Remote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="job-details.html">
                                                        <i class="far fa-clock"></i>
                                                        Full-time
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Backend Developer</a></h2>
                                            <p>We're looking for an experienced backend developer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Engineering Manager</a></h2>
                                            <p>We're looking for a engineering manager to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="development-tab-pane" role="tabpanel"
                                aria-labelledby="development-tab" tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Backend Developer</a></h2>
                                            <p>We're looking for an experienced backend developer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Engineering Manager</a></h2>
                                            <p>We're looking for a engineering manager to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab"
                                tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Customer Success Manager</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Engineering Manager</a></h2>
                                            <p>We're looking for a engineering manager to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Senior Software Engineer</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Backend Developer</a></h2>
                                            <p>We're looking for an experienced backend developer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Engineering Manager</a></h2>
                                            <p>We're looking for a engineering manager to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="customer-tab-pane" role="tabpanel"
                                aria-labelledby="customer-tab" tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Senior Software Engineer</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Customer Success Manager</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="management-tab-pane" role="tabpanel"
                                aria-labelledby="management-tab" tabindex="0">
                                <div class="job-item-wrap">
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Product Designer</a></h2>
                                            <p>We're looking for a mid-level product designer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Senior Software Engineer</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Customer Success Manager</a>
                                            </h2>
                                            <p>We're looking for an experienced senior softwar engineer to join our team.
                                            </p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Backend Developer</a></h2>
                                            <p>We're looking for an experienced backend developer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Engineering Manager</a></h2>
                                            <p>We're looking for a engineering manager to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="job-content">
                                            <h2 class="title"><a href="job-details.html">Content Writer</a></h2>
                                            <p>We're looking for a content writer to join our team.</p>
                                            <ul class="list-wrap">
                                                <li><a href="job-details.html"><i
                                                            class="far fa-map-marker-alt"></i>Remote</a></li>
                                                <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-detail-btn">
                                            <a href="job-details-2.html">View job<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- job-area-end -->

@endsection
