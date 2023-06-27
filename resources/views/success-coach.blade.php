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
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <h5 class="fw-normal text-danger">Get to know our Performance Coach</h5>
                    <h3 class="title title-animation my-4">Nelly N.</h3>
                    <p>Nelly is a Performance Coach helping traders unleash their highest potential and perform consistently when it matters. She graduated from Coventry University Faculty of Health and Life Sciences with a Master of Science in Psychology. During her studies, she became interested in sport psychology and motivation and decided to complete a Life-coaching course focused on performance coaching.</p>
                    <p>Let’s explore more about your personality. What kind of trader are you? Rediscover your strengths and weaknesses and together, we’ll arrange a plan tailored specifically for you.</p>
                    <p>Let me help you develop the tools, insights, and psychological strategies that you need to ensure you are well-positioned for moving forward towards your goals. As the famous author and trader Mark Douglas once said: “Great traders are not born, they are made.”</p>
                </div>
                <div class="col-lg-5">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/img/team/team_img01.jpg') }}" alt="">
                            <div class="team-hidden-content">
                                <h4 class="title">Jack O'Halloran</h4>
                                <p>A Co-Founder is someone who helps establish a company from the ground up, often sharing the vision and responsibilities of the business with one or more other individuals. Co-Founders bring unique skills and expertise to the table, which can complement each other and drive the company forward.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area pb-100">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-7">
                    <div class="blog-grid-item">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/hefJkW1x5vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area pb-100">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-5">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/img/team/team_img01.jpg') }}" alt="">
                            <div class="team-hidden-content">
                                <h4 class="title">Jack O'Halloran</h4>
                                <p>A Co-Founder is someone who helps establish a company from the ground up, often sharing the vision and responsibilities of the business with one or more other individuals. Co-Founders bring unique skills and expertise to the table, which can complement each other and drive the company forward.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="fw-normal text-danger">Get to know our Performance Coach</h5>
                    <h3 class="title title-animation my-4">Nelly N.</h3>
                    <p>Nelly is a Performance Coach helping traders unleash their highest potential and perform consistently when it matters. She graduated from Coventry University Faculty of Health and Life Sciences with a Master of Science in Psychology. During her studies, she became interested in sport psychology and motivation and decided to complete a Life-coaching course focused on performance coaching.</p>
                    <p>Let’s explore more about your personality. What kind of trader are you? Rediscover your strengths and weaknesses and together, we’ll arrange a plan tailored specifically for you.</p>
                    <p>Let me help you develop the tools, insights, and psychological strategies that you need to ensure you are well-positioned for moving forward towards your goals. As the famous author and trader Mark Douglas once said: “Great traders are not born, they are made.”</p>
                </div>
            </div>
        </div>
    </section>

    <!-- faq-area -->
    <section class="faq-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
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
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        How much does AI content writing cost?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>AI content writing works by using machine learning algorithms to analyze vast amounts of data, including text, images, and videos, to generate unique and engaging content. The software learns from previous content and can mimic the style and tone of human writers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        How accurate is the content generated by AI software?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
    <!-- faq-area-end -->

@endsection
