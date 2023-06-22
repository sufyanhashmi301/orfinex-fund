@extends('layouts.master')

@section('title', __('Help Center'))

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">👋 Hello, How can <span>we help?</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- faq-area -->
    <section class="faq-area-two pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="problem-search-wrap text-center">
                        <form action="#">
                            <div class="form-grp">
                                <label for="search">
                                    <i class="far fa-search"></i>
                                </label>
                                <input type="text" id="search" placeholder="Write a question or problem">
                                <button type="submit" class="gradient-btn">search</button>
                            </div>
                            <span>Or choose a category to quickly find the help you need</span>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="getting-tab" data-bs-toggle="tab" data-bs-target="#getting-tab-pane" type="button" role="tab" aria-controls="getting-tab-pane" aria-selected="true">
                                    <img src="{{ asset ('assets/img/icon/faq_icon01.svg') }}" alt="">
                                    New to Orfinex Fund
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" data-bs-target="#pricing-tab-pane" type="button" role="tab" aria-controls="pricing-tab-pane" aria-selected="false">
                                    <img src="{{ asset('assets/img/icon/faq_icon02.svg') }}" alt="">
                                    Challenge & Plans
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="usage-tab" data-bs-toggle="tab" data-bs-target="#usage-tab-pane" type="button" role="tab" aria-controls="usage-tab-pane" aria-selected="false">
                                    <img src="{{ asset('assets/img/icon/faq_icon03.svg') }}" alt="">
                                    Terms & Rules
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                                    <img src="{{ asset('assets/img/icon/faq_icon04.svg') }}" alt="">
                                    Orders & Billing
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="getting-tab-pane" role="tabpanel"
                                aria-labelledby="getting-tab" tabindex="0">
                                <div class="faq-wrap">
                                    <div class="accordion" id="accordionExampleOne">
                                        <div class="accordion-item active">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Can AI content writing replace human writers?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleOne">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    How does AI content writing work?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleOne">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    What is AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleOne">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    What are the benefits of using AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleOne">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Is AI content writing ethical?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleOne">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pricing-tab-pane" role="tabpanel"
                                aria-labelledby="pricing-tab" tabindex="0">
                                <div class="faq-wrap">
                                    <div class="accordion" id="accordionExampleTwo">
                                        <div class="accordion-item active">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne_01" aria-expanded="true"
                                                    aria-controls="collapseOne_01">
                                                    Can AI content writing replace human writers?
                                                </button>
                                            </h2>
                                            <div id="collapseOne_01" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo_01"
                                                    aria-expanded="false" aria-controls="collapseTwo_01">
                                                    How does AI content writing work?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo_01" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree_01"
                                                    aria-expanded="false" aria-controls="collapseThree_01">
                                                    What is AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseThree_01" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour_01"
                                                    aria-expanded="false" aria-controls="collapseFour_01">
                                                    What are the benefits of using AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseFour_01" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive_01"
                                                    aria-expanded="false" aria-controls="collapseFive_01">
                                                    Is AI content writing ethical?
                                                </button>
                                            </h2>
                                            <div id="collapseFive_01" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="usage-tab-pane" role="tabpanel" aria-labelledby="usage-tab"
                                tabindex="0">
                                <div class="faq-wrap">
                                    <div class="accordion" id="accordionExampleThree">
                                        <div class="accordion-item active">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOneTwo" aria-expanded="true"
                                                    aria-controls="collapseOneTwo">
                                                    Can AI content writing replace human writers?
                                                </button>
                                            </h2>
                                            <div id="collapseOneTwo" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleThree">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwoTwo"
                                                    aria-expanded="false" aria-controls="collapseTwoTwo">
                                                    How does AI content writing work?
                                                </button>
                                            </h2>
                                            <div id="collapseTwoTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleThree">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThreeTwo"
                                                    aria-expanded="false" aria-controls="collapseThreeTwo">
                                                    What is AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseThreeTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleThree">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFourTwo"
                                                    aria-expanded="false" aria-controls="collapseFourTwo">
                                                    What are the benefits of using AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseFourTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleThree">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFiveTwo"
                                                    aria-expanded="false" aria-controls="collapseFiveTwo">
                                                    Is AI content writing ethical?
                                                </button>
                                            </h2>
                                            <div id="collapseFiveTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleThree">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab"
                                tabindex="0">
                                <div class="faq-wrap">
                                    <div class="accordion" id="accordionExampleFour">
                                        <div class="accordion-item active">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOneThree" aria-expanded="true"
                                                    aria-controls="collapseOneThree">
                                                    Can AI content writing replace human writers?
                                                </button>
                                            </h2>
                                            <div id="collapseOneThree" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleFour">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwoThree"
                                                    aria-expanded="false" aria-controls="collapseTwoThree">
                                                    How does AI content writing work?
                                                </button>
                                            </h2>
                                            <div id="collapseTwoThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleFour">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThreeThree"
                                                    aria-expanded="false" aria-controls="collapseThreeThree">
                                                    What is AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseThreeThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleFour">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFourThree"
                                                    aria-expanded="false" aria-controls="collapseFourThree">
                                                    What are the benefits of using AI content writing?
                                                </button>
                                            </h2>
                                            <div id="collapseFourThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleFour">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFiveThree"
                                                    aria-expanded="false" aria-controls="collapseFiveThree">
                                                    Is AI content writing ethical?
                                                </button>
                                            </h2>
                                            <div id="collapseFiveThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleFour">
                                                <div class="accordion-body">
                                                    <p>AI content writing works by using machine learning algorithms to
                                                        analyze vast amounts of data, including text, images, and videos, to
                                                        generate unique and engaging content. The software learns from
                                                        previous content and can mimic the style and tone of human writers.
                                                    </p>
                                                </div>
                                            </div>
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
    <!-- faq-area-end -->

    <!-- help-area -->
    <section class="help-area pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="help-title text-center mb-70">
                        <h2 class="title">You still have a <span>question?</span></h2>
                        <p>If you cannot find the answer to your question in our FAQ, you can always contact us. We will
                            answer you shortly!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="help-center-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="help-center-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/help_icon01.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="tel:+1(833)530-0055">+1 (833) 530-0055</a>
                                        <p>We are always happy to help.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-center-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/help_icon02.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="mailto:support@orfinexfund.com">support@orfinexfund.com</a>
                                        <p>The best way to get answer faster.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- help-area-end -->

@endsection
