<!doctype html>
<html class="w-100" lang="ua">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main</title>
{{--    <title>@yield('title')</title>--}}

{{--    <meta name="keywords" content="Электрика Одесса, Заказать электротехнику и электрику в интернет-магазине Electro-dom, Широкий выбор, Лучшие цены в Одессе, Доставка по Украине" />--}}

{{--    <base href="https://electro-dom.od.ua/" />--}}
{{--    <meta name="description" content="@yield('description')" />--}}

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .cards-wrapper {
            display: flex;
        }
        .small-text {
            font-size: 0.72em;
        }
        .page-link:hover {
            background-color: #ffffff;
        }
        form.footer-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent !important;
        }
        form.footer-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #ffffff !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }
        form.footer-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #ffffff !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }

        form.subscribe-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent !important;
        }
        form.subscribe-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #9a9a9a !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }
        form.subscribe-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #9a9a9a !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }

        form.donate-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff !important;
        }
        form.donate-form select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff !important;
        }
        form.donate-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }
        form.donate-form select {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }
        form.donate-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }

        .portfolio-container {
            position: relative;
            width: 100%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: #6bdddb;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
        }

        .portfolio-container:hover .overlay {
            bottom: 0;
            height: 100%;
        }

        /*input[placeholder]:focus {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: transparent !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/

        /*input:focus::placeholder {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: transparent !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/
    </style>
</head>
<body>


<!-- Modal START -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid h-100">
                    <div class="container">
                        <nav class="navbar navbar-expand my-lg-4" style="background-color: #ffffff;">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <img src="/images/logo.png" class="img" height="60"  alt="">
                                </a>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item d-flex d-lg-none align-items-center">
                                            <a class="ms-4 nav-link text-dark d-flex align-items-center" aria-current="page" href="#">
                                                <p class="h6 fw-bold mt-3 d-block d-lg-none">EN/UA</p>
                                            </a>
                                        </li>
                                        <li class="nav-item  d-flex align-items-center d-lg-none">
                                            <a class="nav-link text-dark px-0" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                <img src="/images/menu-close.png" class="img pt-2" width="60" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="row" style="background-color: #68d1d3">
                        <div class="col-12">
                            <h6 class="text-white text-center display-2 fw-bold my-5 d-md-none">
                                GENERAL MENU
                            </h6>
                            <h6 class="text-white text-center display-4 fw-bold my-5 d-none d-md-block">
                                GENERAL MENU
                            </h6>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">SERVICES</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    SERVICES
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">PORTFOLIO</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    PORTFOLIO
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">ABOUT</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    ABOUT
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">BLOG</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    BLOG
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">CONTACTS</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    CONTACTS
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">PRODUCTS</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    PRODUCTS
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<div class="container px-xxl-5">

    <nav class="navbar fixed-top navbar-expand" style="background-color: #ffffff;">
        <div class="container px-xxl-5">
            <div class="row w-100 px-5">
                <div class="col-1 p-0 d-flex justify-content-start align-items-center">
                    <img src="/images/logo.png" class="img ms-1" height="70"  alt="">
                </div>
                <div class="col-10 p-0 d-flex justify-content-center align-items-center">
                    <ul class="nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">SERVICES</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <p class="h6 fw-bold">PORTFOLIO</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <p class="h6 fw-bold">ABOUT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('blog') }}">
                                <p class="h6 fw-bold">BLOG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <p class="h6 fw-bold">CONTACTS</p>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">PRODUCTS</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-dark" aria-current="page" href="{{ route('products') }}">--}}
{{--                                <p class="h6 fw-bold">PRODUCTS</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <p class="h6 fw-bold">CAREER</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1 p-0 d-flex justify-content-end align-items-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark p-0" aria-current="page" href="#">
                                <p class="h6 fw-bold">EN/UA</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
{{--            <a class="navbar-brand ms-5" href="{{ route('main') }}">--}}
{{--                <img src="/images/logo.png" class="img" height="60"  alt="">--}}
{{--                --}}{{--                <img src="/images/logo.png" class="img-fluid d-none d-xl-block"  alt="">--}}
{{--            </a>--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-none d-lg-flex">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold">SERVICES</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold">PORTFOLIO</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold">ABOUT</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="{{ route('blog') }}">--}}
{{--                            <p class="h6 fw-bold">BLOG</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold">CONTACTS</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark" aria-current="page" href="{{ route('products') }}">--}}
{{--                            <p class="h6 fw-bold">PRODUCTS</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">--}}
{{--                    <li class="nav-item d-none d-lg-block">--}}
{{--                        <a class="nav-link text-dark me-5" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold">EN/UA</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item d-flex d-lg-none align-items-center">--}}
{{--                        <a class="ms-4 nav-link text-dark d-flex align-items-center" aria-current="page" href="#">--}}
{{--                            <p class="h6 fw-bold mt-3 d-block d-lg-none">EN/UA</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item  d-flex align-items-center d-lg-none">--}}
{{--                        <a class="nav-link text-dark px-0" aria-current="page" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                            <img src="/images/menu-open.png" class="img pt-2" width="60" alt="">--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </nav>

</div>


<main role="main">
    @yield('main')

    <div class="container-fluid" style="background-color: #b0c0c3">
        <div class="container px-xxl-5">
            <div class="row pb-5">
                <div class="col-12 col-lg-6">

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">CONTACT US</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">CONTACT US</h2>

                    {{--                    <h2 class="text-white display-6 fw-bold mt-5">CONTACT US</h2>--}}
                    <form class="text-white footer-form" action="post">
                        <div class="row mb-5">
                            <div class="col-6">
                                <input type="text" name="name" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                            <div class="col-6">
                                <input type="text" name="last_name" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput2" placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-5">
                            <input type="email" name="email" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput3" placeholder="Email">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="phone" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput4" placeholder="Phone">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="company" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput5" placeholder="Company">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="message" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput6" placeholder="Message">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #6bdcdb">
                            <span class="fw-bold h6 d-block my-1">SUBMIT</span>
                        </button>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold d-none d-lg-block" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-12 col-md-6 d-none d-lg-block ps-5">

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">SOCIAL MEDIA</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">SOCIAL MEDIA</h2>

                    {{--                    <h2 class="text-white display-6 fw-bold mt-5">SOCIAL MEDIA</h2>--}}
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-linkedin-in"></i></div>
                            <div class="col-10 px-0 pt-3"><h4 class="fw-bold mb-0 me-0 ms-2">BIMprove LLC</h4></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-instagram"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">@bimprove</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="lab la-2x la-facebook-f"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ">@bimproveworld</h5></div>
                        </div>
                    </a>

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">CONTACTS</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">CONTACTS</h2>

                    {{--                    <h2 class="text-white display-6 fw-bold mt-5">CONTACTS</h2>--}}
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="las la-2x la-phone"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">+380668901648</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="las la-2x la-envelope"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ms-md-1">es@bim-prove.com</h5></div>
                        </div>
                    </a>

                </div>

                <div class="col-12 col-md-6 d-lg-none">
                    <h2 class="text-white display-6 fw-bold mt-5">SOCIAL MEDIA</h2>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-linkedin-in"></i></div>
                            <div class="col-10 px-0 pt-3"><h4 class="fw-bold mb-0 me-0 ms-2">BIMprove LLC</h4></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-instagram"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">@bimprove</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="lab la-2x la-facebook-f"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ">@bimproveworld</h5></div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 d-lg-none ps-md-4">
                    <h2 class="text-white display-6 fw-bold mt-5">CONTACTS</h2>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="las la-2x la-phone"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">+380668901648</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="las la-2x la-envelope"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ms-md-1">es@bim-prove.com</h5></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>

    let elms = document.getElementsByClassName( 'splide' );

    let configs = [
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '20%', right: '20%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '15%', right: '25%' },
            arrows: boolean = true,
        }
    ];

    for ( let i = 0; i < elms.length; i++ ) {
        new Splide( elms[ i ], configs[ i ] ).mount();
    }
</script>
</body>
</html>
