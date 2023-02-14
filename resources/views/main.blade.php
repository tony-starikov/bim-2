@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #68d1d3">
        <div class="container px-xxl-5">
            <div class="row w-100 px-5 py-5">
                <div class="col-12 mt-3 order-first">
                    <div class="d-md-none">
                        <h1 class="text-white display-6 fw-bold mt-5">
                            BIMPROVE <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <h6 class="text-white fw-bold pb-2">IMPROVE YOUR FUTURE</h6>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="text-white display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            BIMPROVE <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <h6 class="text-white fw-bold pb-2 display-5">IMPROVE YOUR FUTURE</h6>
                    </div>
                </div>

                <div class="col-12 col-md-7 col-lg-5 col-xl-4 d-flex align-items-center order-md-2">
                    <div class="d-md-none">
                        <h6 class="text-white fw-bold mb-2 mt-lg-5">
                            <i class="las la-1x la-comments p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>
                            <small>FAST FEEDBACK</small>
                        </h6>
                        <h6 class="text-white fw-bold mb-2">
                            <i class="las la-1x la-handshake p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>
                            <small>PROFESSIONAL CONSULTATIONS</small>
                        </h6>
                        <h6 class="text-white fw-bold mb-2">
                            <i class="las la-1x la-edit p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>
                            <small>FREE ADJUSTMENTS</small>
                        </h6>
                        <h6 class="text-white fw-bold mb-2">
                            <i class="las la-1x la-gem p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>
                            <small>HIGH QUALITY BIM MODELS</small>
                        </h6>
                    </div>

                    <div class="d-none d-md-block">

                        <div class="row my-2">
                            <div class="col-2">
                                <i class="las la-2x la-comments p-2 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white fw-bold mb-2 mt-3">
                                    FAST FEEDBACK
                                </h6>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="las la-2x la-handshake p-2 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white fw-bold mb-2 mt-3">
                                    PROFESSIONAL CONSULTATIONS
                                </h6>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2">
                                <i class="las la-2x la-edit p-2 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white fw-bold mb-2 mt-3">
                                    FREE ADJUSTMENTS
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="las la-2x la-gem p-2 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="text-white fw-bold mb-5 mt-3">
                                    HIGH QUALITY BIM MODELS
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 col-xl-8 p-0 order-md-4 order-lg-3">
{{--                    <img class="img-fluid w-100 mt-1" src="images/vid.png" alt="">--}}
                    <iframe class="w-100" width="560" height="420" src="https://www.youtube.com/embed/3nSK-ji2zlI?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <div class="row d-none d-md-flex">
                        <div class="col-6 col-md-12 mt-5 px-md-2 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h4 d-block my-1">SERVICES</span>
                            </button>
                        </div>
                        <div class="col-6 col-md-12 mt-4 px-md-2 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </button>
                        </div>
                    </div>

                    <div class="row d-md-none">
                        <div class="col-6 col-md-12 mt-4 px-md-5 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h6 d-block my-1">SERVICES</span>
                            </button>
                        </div>
                        <div class="col-6 col-md-12 mt-4 px-md-5 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h6 d-block my-1">CONTACT US</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">ACHIEVEMENTS</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">ACHIEVEMENTS</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container px-xxl-5">
            <div class="row px-5">

                <div class="col-12 col-sm-3 col-md-4 text-center p-5">
                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">
                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">
                    <h6 class="fw-bold display-6 m-0">130</h6>
                    <h6 class="card-title text-dark fw-bold small d-md-none">
                        COMPLETED PROJECTS
                    </h6>
                    <h6 class="card-title text-dark fw-bold d-none d-md-block">
                        COMPLETED PROJECTS
                    </h6>
                </div>

                <div class="col-12 col-sm-3 col-md-4 text-center p-5">
                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">
                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">
                    <h6 class="fw-bold display-6 m-0">130</h6>
                    <h6 class="card-title text-dark fw-bold small d-md-none">
                        COMPLETED PROJECTS
                    </h6>
                    <h6 class="card-title text-dark fw-bold d-none d-md-block">
                        COMPLETED PROJECTS
                    </h6>
                </div>

                <div class="col-12 col-sm-3 col-md-4 text-center p-5">
                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">
                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">
                    <h6 class="fw-bold display-6 m-0">130</h6>
                    <h6 class="card-title text-dark fw-bold small d-md-none">
                        COMPLETED PROJECTS
                    </h6>
                    <h6 class="card-title text-dark fw-bold d-none d-md-block">
                        COMPLETED PROJECTS
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">SERVICES</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">SERVICES</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container px-xxl-5">
            <div class="row px-5">

                @for($l = 1; $l < 7; $l++)
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <div class="card h-100 p-2 pb-3 text-center" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="card-body p-0">
                                <img src="images/card.png" class="img-fluid" style="max-width: 100%; max-height: 60%;" >
                                <h6 class="fw-bold h3">BIM management</h6>
                                <h5 class="text-secondary px-lg-2 px-xl-3 px-xl-5">
                                    Project development from scratch using BIM technologies on all stages of production
                                </h5>
                            </div>
                            <div class="card-footer border-0" style="background-color: #ffffff">
                                <button class="btn btn-primary btn-lg border-0 rounded-4 w-75 mx-auto" style="background-color: #6bdcdb"type="button">
                                    <span class="fw-bold h6 d-block my-1">MORE INFO</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>

{{--    <div class="container-fluid mt-4">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}
{{--                <h2 class="display-6 fw-bold mt-5 d-lg-none">MODELS</h2>--}}
{{--                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">MODELS</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid px-0 d-lg-none" style="background-color: #acbcbf">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}
{{--                <div class="col-12 px-0">--}}
{{--                    <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">--}}
{{--                        <div class="carousel-indicators mb-0">--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            @for ($i = 1; $i < 6; $i++)--}}
{{--                                <div class="carousel-item @if($i == 1) active @endif">--}}
{{--                                    <div class="cards-wrapper">--}}
{{--                                        <div class="card border-0 rounded-0 w-100">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <img class="img w-100" src="images/mod.png" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row" style="background-color: #acbcbf">--}}
{{--                                                <div class="col-12 text-center" style="background-color: #acbcbf">--}}
{{--                                                    <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 mx-auto my-2" style="background-color: #6bdcdb" type="button">--}}
{{--                                                        <span class="fw-bold d-block m-0 small">--}}
{{--                                                            DOWNLOAD<br>--}}
{{--                                                            MODEL--}}
{{--                                                        </span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row pb-4 pt-2" style="background-color: #acbcbf">--}}
{{--                                                <div class="col-4 text-center px-0">--}}
{{--                                                    <h6 class="text-white text-center fw-bold small-text mt-1">--}}
{{--                                                        ARCHITECTURE--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4 text-center">--}}
{{--                                                    <h6 class="text-white text-center fw-bold">--}}
{{--                                                        STRUCTURE--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4 text-center px-0">--}}
{{--                                                    <h6 class="text-white text-center fw-bold small-text mt-1">--}}
{{--                                                        PLUMBING--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">--}}
{{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid d-none d-lg-block d-xl-none">--}}
{{--        <div class="row px-5 py-5" style="background-color: #b6c7ca">--}}
{{--            <div class="col-12">--}}
{{--                <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        @for ($i = 1; $i < 5; $i++)--}}
{{--                            <div class="carousel-item @if($i == 1) active @endif">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    ARCHITECTURE--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle1.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h1 class="text-white fw-bold mb-0">--}}
{{--                                                    STRUCTURE--}}
{{--                                                </h1>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10">--}}
{{--                                                <p class="text-white fw-bold mt-2 h4">--}}
{{--                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10">--}}
{{--                                                <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 my-2" style="background-color: #6bdcdb"type="button">--}}
{{--                                                    <span class="h5 fw-bold d-block mx-3 my-1">--}}
{{--                                                        DOWNLOAD<br>MODEL--}}
{{--                                                    </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    PLUMBING--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    HEATING--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    ELECTRICAL--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6 d-flex align-items-center">--}}
{{--                                        <img class="img-fluid" src="images/model_lg.png" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endfor--}}
{{--                    </div>--}}
{{--                    <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid d-none d-xl-block" style="background-color: #b6c7ca">--}}
{{--        <div class="container px-xxl-5" style="background-color: #b6c7ca">--}}
{{--            <div class="row px-5 py-5" style="background-color: #b6c7ca">--}}
{{--                <div class="col-6">--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                ARCHITECTURE--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h1 class="text-white fw-bold mb-0">--}}
{{--                                STRUCTURE--}}
{{--                            </h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <p class="text-white fw-bold mt-2 h4">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 my-2" style="background-color: #6bdcdb"type="button">--}}
{{--                                                    <span class="h5 fw-bold d-block mx-3 my-1">--}}
{{--                                                        DOWNLOAD<br>MODEL--}}
{{--                                                    </span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                PLUMBING--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                HEATING--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                ELECTRICAL--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-6 d-flex align-items-center">--}}
{{--                    <img class="img-fluid" src="images/model_lg.png" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">PARTNERS</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">PARTNERS</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-5" style="background-color: #d4fffb">
            <div class="col-12">
                <div class="container my-5 px-xxl-5">
                    <div class="row px-5">
                        <div class="col-12">
                            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @for ($i = 1; $i < 5; $i++)
                                        <div class="carousel-item @if($i == 1) active @endif">
                                            <div class="cards-wrapper">

                                                <div class="row d-flex d-lg-none">
                                                    <div class="col-12">
                                                        <div class="card p-2 rounded-5 d-block d-lg-none" @if($i%2 == 0) style="background-color: #6bdcdb" @else style="background-color: #c4c4c4" @endif >
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        @if($i%2 == 0)
                                                                            <img class="img w-100" src="images/partner.png" alt="">
                                                                        @else
                                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                                        @endif
                                                                    </div>

                                                                    <div class="col-8 d-flex align-items-center">

                                                                        <div class="w-100 align-self-center">
                                                                            <h5 class="text-white fw-bold h3 w-100">Organization</h5>
                                                                            <h5 class="text-white fw-bold h3 w-100">Country</h5>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p class="card-text text-white h4 mt-2">
                                                                            Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                                                                        </p>
                                                                        <h5 class="card-title text-white fw-bold h5">Name Surname</h5>
                                                                        <h5 class="card-title text-white h5">CEO of Organization</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row d-none d-lg-flex px-5">
                                                    <div class="col-6 px-3">
                                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <img class="img w-100" src="images/partner2.png" alt="">
                                                                    </div>

                                                                    <div class="col-8 d-flex align-items-center">

                                                                        <div class="w-100 align-self-center">
                                                                            <h5 class="text-white fw-bold h3 w-100">Organization</h5>
                                                                            <h5 class="text-white fw-bold h3 w-100">Country</h5>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p class="card-text text-white fw-bold h4 mt-2">
                                                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                                                        </p>
{{--                                                                        <h5 class="card-title text-white fw-bold h5">Name Surname</h5>--}}
{{--                                                                        <h5 class="card-title text-white h5">CEO of Organization</h5>--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 px-3">
                                                        <div class="card p-3 rounded-5 border-0" style="background-color: #6bdcdb">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <img class="img w-100" src="images/partner.png" alt="">
                                                                    </div>

                                                                    <div class="col-8 d-flex align-items-center">

                                                                        <div class="w-100 align-self-center">
                                                                            <h5 class="text-white fw-bold h3 w-100">Organization</h5>
                                                                            <h5 class="text-white fw-bold h3 w-100">Country</h5>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p class="card-text text-white fw-bold h4 mt-2">
                                                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                                                        </p>
{{--                                                                        <h5 class="card-title text-white fw-bold h5">Name Surname</h5>--}}
{{--                                                                        <h5 class="card-title text-white h5">CEO of Organization</h5>--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">PORTFOLIO</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">PORTFOLIO</h2>
            </div>
        </div>
    </div>

{{--    <div class="container-fluid d-lg-none">--}}
{{--        <div class="container">--}}
{{--            <div class="row pb-5">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 p-0">--}}
{{--                                <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        @for ($i = 1; $i < 5; $i++)--}}
{{--                                            <div class="carousel-item @if($i == 1) active @endif">--}}
{{--                                                <div class="cards-wrapper">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <img src="images/building.png" class="img w-100" alt="...">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 text-white mt-2" style="background-color: #6bdddb">--}}
{{--                                                            <img src="images/port_2.png" class="img w-100" alt="...">--}}
{{--                                                            <div class="row px-2 pt-2">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="fw-bold">Residential</h6>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="fw-bold">--}}
{{--                                                                        <small>--}}
{{--                                                                            LOD: 300--}}
{{--                                                                        </small>--}}
{{--                                                                    </h6>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row px-2">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="fw-bold">Building</h6>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="fw-bold">--}}
{{--                                                                        <small>--}}
{{--                                                                            Time: 40 h--}}
{{--                                                                        </small>--}}
{{--                                                                    </h6>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row px-2">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="h6">Scan to bim</h6>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h6 class="fw-bold">--}}
{{--                                                                        <small>--}}
{{--                                                                            Presicion: 15 mm--}}
{{--                                                                        </small>--}}
{{--                                                                    </h6>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row px-2">--}}
{{--                                                                <div class="col-12">--}}
{{--                                                                    <hr class="text-white m-0 mb-1 mx-auto rounded-5" style="background-color: rgba(255, 255, 255, 1); height: 1px; opacity: 1;">--}}
{{--                                                                    <h6 class="fw-bold small">--}}
{{--                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, perferendis.--}}
{{--                                                                    </h6>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endfor--}}
{{--                                    </div>--}}
{{--                                    <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev">--}}
{{--                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                        <span class="visually-hidden">Previous</span>--}}
{{--                                    </button>--}}
{{--                                    <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next">--}}
{{--                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                        <span class="visually-hidden">Next</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <section id="splide1" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="images/port_2.png" class="img w-100 p-3" alt="...">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="images/building.png" class="img w-100 p-3" alt="...">
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">
                <section id="splide2" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="images/port_2.png" class="img w-100 p-3" alt="...">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <img src="images/building.png" class="img w-100 p-3" alt="...">
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
{{--        <div class="glide2 px-0 mx-0 mb-5">--}}
{{--            <div class="glide__track" data-glide-el="track">--}}
{{--                <ul class="glide__slides">--}}
{{--                    <li class="glide__slide">--}}
{{--                        <img src="images/port_2.png" class="img w-100" alt="...">--}}
{{--                    </li>--}}
{{--                    <li class="glide__slide">--}}
{{--                        <img src="images/building.png" class="img w-100" alt="...">--}}
{{--                    </li>--}}
{{--                    <li class="glide__slide">--}}
{{--                        <img src="images/port_2.png" class="img w-100" alt="...">--}}
{{--                    </li>--}}
{{--                    <li class="glide__slide">--}}
{{--                        <img src="images/building.png" class="img w-100" alt="...">--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="glide__arrows" data-glide-el="controls">--}}
{{--                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>--}}
{{--                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row p-4"></div>
    </div>

    <div class="container-fluid">
        <div class="container px-xxl-5">
            @for($i = 1; $i < 4; $i++)
                <div class="row px-5 py-3">
                    <div class="col-6">
                        <div class="portfolio-container">
                            <div class="card border-0 text-bg-dark">
                                <img src="/images/building.png" class="card-img" alt="...">
                                <div class="card-img-overlay p-5 d-flex align-items-end">
                                    <div>
                                        <h5 class="card-title h2 fw-bold">Residential Building</h5>
                                        <p class="card-text h5 fw-bold">Scan to bim</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="row p-5 py-4 text-white">
                                    <div class="col-12">
                                        <div class="row border-bottom border-3 border-white justify-content-between">
                                            <div class="col-6">
                                                <h4>LOD: 300</h4>
                                                <h4>Time: 40h</h4>
                                            </div>
                                            <div class="col-6">
                                                <h4>Precision: 15mm</h4>
                                                <h4>Success: 100%</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 d-flex justify-content-center align-items-center">
                                                <img src="/images/proj.png" class="img w-75 image mt-3 mx-auto" alt="...">
                                            </div>
                                            <div class="col-7">
                                                <h5 class="mt-3">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero obcaecati quidem vitae voluptatem. Aperiam asperiores dignissimos eius repellat? Alias, quo!
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="portfolio-container">
                            <div class="card border-0 text-bg-dark">
                                <img src="/images/building.png" class="card-img" alt="...">
                                <div class="card-img-overlay p-5 d-flex align-items-end">
                                    <div>
                                        <h5 class="card-title h2 fw-bold">Residential Building</h5>
                                        <p class="card-text h5 fw-bold">Scan to bim</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="row p-5 py-4 text-white">
                                    <div class="col-12">
                                        <div class="row border-bottom border-3 border-white justify-content-between">
                                            <div class="col-6">
                                                <h4>LOD: 300</h4>
                                                <h4>Time: 40h</h4>
                                            </div>
                                            <div class="col-6">
                                                <h4>Precision: 15mm</h4>
                                                <h4>Success: 100%</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 d-flex justify-content-center align-items-center">
                                                <img src="/images/proj.png" class="img w-75 image mt-3 mx-auto" alt="...">
                                            </div>
                                            <div class="col-7">
                                                <h5 class="mt-3">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero obcaecati quidem vitae voluptatem. Aperiam asperiores dignissimos eius repellat? Alias, quo!
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="container-fluid mt-5" style="background-color: #d4fffb">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">TEAM</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">TEAM</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-5" style="background-color: #d4fffb">
            <div class="col-12">
                <div id="carouselExampleControls33" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="carousel-item @if($i == 1) active @endif">
                                <div class="row px-5">
                                    <div class="col-3 px-2">
                                        <div class="card border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center mt-3 p-1 ">
                                                <img src="images/team.png" class="img-fluid w-75">
                                            </div>
                                            <div class="card-body pb-0 px-1 mx-auto">
                                                <h2 class="fw-bold">Vitaly</h2>
                                                <h2 class="fw-bold">Vinogradov</h2>
                                                <h5 class="card-title text-dark">
                                                    Appintment, status
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 px-2">
                                        <div class="card border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center mt-3 p-1 ">
                                                <img src="images/team.png" class="img-fluid w-75">
                                            </div>
                                            <div class="card-body pb-0 px-1 mx-auto">
                                                <h2 class="fw-bold">Vitaly</h2>
                                                <h2 class="fw-bold">Vinogradov</h2>
                                                <h5 class="card-title text-dark">
                                                    Appintment, status
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 px-2">
                                        <div class="card border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center mt-3 p-1 ">
                                                <img src="images/team.png" class="img-fluid w-75">
                                            </div>
                                            <div class="card-body pb-0 px-1 mx-auto">
                                                <h2 class="fw-bold">Vitaly</h2>
                                                <h2 class="fw-bold">Vinogradov</h2>
                                                <h5 class="card-title text-dark">
                                                    Appintment, status
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 px-2">
                                        <div class="card border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center mt-3 p-1 ">
                                                <img src="images/team.png" class="img-fluid w-75">
                                            </div>
                                            <div class="card-body pb-0 px-1 mx-auto">
                                                <h2 class="fw-bold">Vitaly</h2>
                                                <h2 class="fw-bold">Vinogradov</h2>
                                                <h5 class="card-title text-dark">
                                                    Appintment, status
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls33" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-white" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls33" data-bs-slide="next">
                        <span class="carousel-control-next-icon text-white" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection
