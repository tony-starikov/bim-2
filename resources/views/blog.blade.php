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

    <div class="container-fluid my-5 py-5">
        <div class="container py-5">
            @foreach($posts as $post)
                <div class="row pb-5 pb-sm-0 py-sm-5 ">
                    <div class="col-sm-6 col-md-5">
                        <a href="{{ route('post', $post) }}">
                            <img class="img-fluid w-100" src="/images/600.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-7 px-lg-5">
                        <div class="row">
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post) }}">
                                <h6 class="d-xl-none display-6 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post) }}">
                                <h6 class="d-none d-xl-block display-3 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                        </div>
                        <div class="row mb-sm-5">
                            <h6 class="d-md-none text-secondary">
                                Month, Day, Year - Time
                            </h6>
                            <h4 class="d-none d-md-block text-secondary">
                                Month, Day, Year - Time
                            </h4>
                        </div>
                        <div class="row mt-sm-5">
                            <div class="col-12 col-lg-7">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="{{ route('post', $post) }}" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-5 py-5">
                        {{ $posts->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
