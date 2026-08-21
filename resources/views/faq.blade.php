@extends('layouts.app')
@section('content')

    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Questions & Answer</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start FAQ 
    ============================================= -->
    <div class="faq-area default-padding">
        <div class="container">
            <div class="faqs">
                <div class="row">
                    <!-- Start Faq -->
                    <div class="col-lg-7 faq-area">
                    <!-- Start Accordion -->
                    <div class="faq-style-one-items">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01</span> What is the Decent Work Check Survey?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                              General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>02</span> What are the Factory Pages?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>03</span> Can I participate in the Survey?
                                    </button>
                                </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                    </div>
                    <!-- End Faq -->
                    <div class="col-lg-5">
                        <img src="assets/img/illustration/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Start Footer 
    ============================================= -->
    
@endsection
