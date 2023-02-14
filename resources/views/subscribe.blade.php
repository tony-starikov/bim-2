@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #68d1d3">

        <div class="container">
            <div class="row pb-5">
                <div class="col-12 order-first">
                    <div class="d-md-none">
                        <h1 class="text-white display-6 fw-bold mt-5">
                            BIMPROVE BLOG <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <p class="text-white fw-bold pb-2">
                            We are a team of specialists with experience in implementing BIM-technologies. We believe that BIM is not a future - BIM is today, BIM is right now. Our main goal is the most effective application of BIM technologies at all stages of project development. We always look at the project tasks through the lenses of engineering perception, which allows us to be one step ahead.
                        </p>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="text-white display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            BIMPROVE BLOG <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <h4 class="text-white fw-bold pb-2 w-75">
                            We are a team of specialists with experience in implementing BIM-technologies. We believe that BIM is not a future - BIM is today, BIM is right now. Our main goal is the most effective application of BIM technologies at all stages of project development. We always look at the project tasks through the lenses of engineering perception, which allows us to be one step ahead.
                        </h4>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <div class="row d-none d-md-flex pb-5">
                        <div class="col-6 col-md-12 mt-4 px-md-2 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </button>
                        </div>
                    </div>

                    <div class="row d-md-none">
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

    <div class="container-fluid">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-9">
                    <div class="d-md-none">
                        <h1 class="text-dark display-6 fw-bold mt-0">
                            SUBSCRIBE AND BECOME A PART OF THE BIG BIMPROVE FAMILY
                        </h1>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="text-dark display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            SUBSCRIBE AND BECOME A PART OF THE BIG BIMPROVE FAMILY
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-lg-6">
                    <form class="text-white subscribe-form" action="post">
                        <div class="row mb-5">
                            <div class="col-6">
                                <input type="text" name="name" class="form-control fw-bold shadow-none border-0 border-bottom border-3 rounded-0" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                            <div class="col-6">
                                <input type="text" name="last_name" class="form-control fw-bold shadow-none border-0 border-bottom border-3 rounded-0" id="exampleFormControlInput1" placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-5">
                            <input type="email" name="email" class="form-control fw-bold shadow-none border-0 border-bottom border-3 rounded-0" id="exampleFormControlInput2" placeholder="Email">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #6bdcdb">
                            <span class="fw-bold h6 d-block my-1">SUBMIT</span>
                        </button>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold d-none d-lg-block" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
