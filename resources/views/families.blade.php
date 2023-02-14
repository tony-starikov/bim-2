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
                            BIMPROVE FAMILIES GALLERY <span class="d-inline-block d-sm-none">M</span>
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
                            BIMPROVE FAMILIES GALLERY <span class="d-inline-block d-sm-none">M</span>
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

                <div class="col-12 col-md-5 col-lg-9 order-md-3 order-lg-4">

                    <div class="row pb-5">
                        <div class="col-6 col-md-4 mt-4 px-md-3 ps-lg-0">
                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" href="#" role="button">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 mt-4 px-md-3 ps-lg-0">
                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" href="{{ route('products') }}" role="button">
                                <span class="fw-bold h4 d-block my-1">REVIT PLUGINS</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 mt-4 px-md-3 ps-lg-0">
                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #34888e" href="{{ route('families') }}" role="button">
                                <span class="fw-bold h4 d-block my-1">REVIT FAMILIES</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 py-5">
        <div class="container py-5">
            @foreach($families as $family)
                <div class="row pb-5 pb-sm-0 py-sm-5 ">
                    <div class="col-sm-6 col-md-5">
                        <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                    </div>
                    <div class="col-sm-6 col-md-7 px-lg-5">
                        <div class="row">
                            <h6 class="d-xl-none display-6 fw-bold">
                                {{ $family->title_en }}
                            </h6>
                            <h6 class="d-none d-xl-block display-3 fw-bold">
                                {{ $family->title_en }}
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary mt-3">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                        </div>
                        <div class="row mb-sm-5">
                            <h6 class="d-md-none text-secondary mt-3">
                                Month, Day, Year - Time
                            </h6>
                            <h4 class="d-none d-md-block text-secondary mt-3">
                                Month, Day, Year - Time
                            </h4>
                        </div>
                        <div class="row mt-sm-5">
                            <div class="col-12 col-lg-7">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="#" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">DOWNLOAD NOW</span>
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
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid" style="background-color: #dafffc">

        <div class="container">
            <div class="row pb-3">
                <div class="col-12">
                    <div class="d-md-none">
                        <h1 class="display-6 fw-bold mt-5">
                            SUPPORT THE DEVELOPMENT OF BIMPROVE
                        </h1>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            SUPPORT THE DEVELOPMENT OF BIMPROVE
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-6">
                    <img class="img-fluid w-100" src="/images/donate_image.png" alt="">
                </div>
                <div class="col-6">
                    <form class="donate-form w-75 mt-5" method="post" action="{{ route('donate') }}">
                        @csrf
                        <div class="mb-5">
                            <input type="text" name="donate" class="form-control fw-bold shadow-none border-3" id="exampleFormControlInput2" placeholder="Select or insert an amount">
                        </div>

                        <div class="row pb-5">
                            <div class="col-3">
                                <input name="donate10" value="0" type="hidden">
                                <input name="donate10" value="1" type="checkbox" class="btn-check" id="btn-check1" autocomplete="off">
                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check1">$10</label>
                            </div>
                            <div class="col-3">
                                <input name="donate20" value="0" type="hidden">
                                <input name="donate20" value="1" type="checkbox" class="btn-check" id="btn-check2" autocomplete="off">
                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check2">$20</label>
                            </div>
                            <div class="col-3">
                                <input name="donate50" value="0" type="hidden">
                                <input name="donate50" value="1" type="checkbox" class="btn-check" id="btn-check3" autocomplete="off">
                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check3">$50</label>
                            </div>
                            <div class="col-3">
                                <input name="donate100" value="0" type="hidden">
                                <input name="donate100" value="1" type="checkbox" class="btn-check" id="btn-check4" autocomplete="off">
                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check4">$100</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-1">DONATE</span>
                                </button>

                                <button type="submit" class="btn btn-primary btn-lg border-0 w-50 mx-auto fw-bold d-none d-lg-block" style="background-color: #43aeb6">
                                    <span class="fw-bold h4 d-block my-1">DONATE</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
