@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #dafffc">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-9">
                    <div class="d-md-none">
                        <h1 class="text-dark display-6 fw-bold mt-0">
                            REGISTRATION OF PURCHASE
                        </h1>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="text-dark display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            REGISTRATION OF PURCHASE
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-12">
                    <form class="donate-form" method="post" action="{{ route('donate') }}">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <h3 class="fw-bold mb-5">
                                    BILLING DETAILS
                                </h3>


                                <div class="row mb-5">
                                    <div class="col-6">
                                        <input type="text" name="name" class="form-control fw-bold shadow-none border-0" id="exampleFormControlInput1" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="last_name" class="form-control fw-bold shadow-none border-0" id="exampleFormControlInput2" placeholder="Last name">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <input type="text" name="company" class="form-control fw-bold shadow-none border-0" id="exampleFormControlInput3" placeholder="Company name">
                                </div>

                                <div class="mb-5">
                                    <select name="country" class="form-select fw-bold shadow-none border-0" aria-label="Default select example">
                                        <option selected>Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <input type="text" name="phone" class="form-control fw-bold shadow-none border-0" id="exampleFormControlInput3" placeholder="Phone">
                                </div>

                                <div class="mb-5">
                                    <input type="email" name="email" class="form-control fw-bold shadow-none border-0" id="exampleFormControlInput4" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h3 class="fw-bold mb-3">
                                    YOUR ORDER
                                </h3>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-12 mb-3 px-0">

                                <table class="table">
                                    <thead>
                                        <tr class="border-0 border-bottom border-3">
                                            <th scope="col">
                                                <h4 class="fw-bold py-3">
                                                    Product
                                                </h4>
                                            </th>
                                            <th scope="col">
                                                <h4 class="fw-bold py-3">
                                                    Subtotal
                                                </h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-0 border-bottom border-3">
                                            <td>
                                                <h4 class="text-secondary py-3" style="color: #9a9a9a;">
                                                    BIMprove donation
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="text-secondary py-3" style="color: #9a9a9a;">
                                                    $10.00
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr class="border-0 border-bottom border-3">
                                            <td>
                                                <h4 class="fw-bold text-info py-3">
                                                    Total
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="fw-bold text-info py-3">
                                                    $10.00
                                                </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 p-4 border border-3">

                                <div class="row">
                                    <div class="col-1 px-0 text-center">
                                        <input class="form-check-input mt-2" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                                    </div>

                                    <div class="col-6 px-0">
                                        <h4 class="fw-bold ps-2 mb-5" style="color: #9a9a9a;">
                                            Credit card (stripe) <img src="/images/visa.png" class="image-fluid" alt="">
                                        </h4>

                                        <h4 class="fw-bold ps-2 mb-5" style="color: #9a9a9a;">
                                            Pay with your credit card via Stripe
                                        </h4>

                                        <h4 class="fw-bold ps-2 mb-3" style="color: #9a9a9a;">
                                            Card number
                                        </h4>

                                        <input type="text" name="card_number" class="form-control fw-bold shadow-none border-0 mb-3" id="exampleFormControlInput21" placeholder="1234 1234 1234 1234">

                                        <h4 class="fw-bold ps-2 mb-3" style="color: #9a9a9a;">
                                            Expiry date
                                        </h4>

                                        <input type="text" name="expiry_date" class="form-control fw-bold shadow-none border-0 mb-3" id="exampleFormControlInput22" placeholder="Month/Year">

                                        <h4 class="fw-bold ps-2 mb-3" style="color: #9a9a9a;">
                                            Card code (CVC)
                                        </h4>

                                        <input type="text" name="card_code" class="form-control fw-bold shadow-none border-0 mb-3" id="exampleFormControlInput23" placeholder="CVC">
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 p-4 border border-3 border-top-0">

                                <div class="row">
                                    <div class="col-1 px-0 text-center">
                                        <input class="form-check-input mt-2" type="radio" name="radioNoLabel" id="radioNoLabel1111" value="" aria-label="...">
                                    </div>

                                    <div class="col-6 px-0">
                                        <h4 class="fw-bold ps-2" style="color: #9a9a9a;">
                                            PayPal <img src="/images/paypal.png" class="image-fluid" alt="">
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <h4 class="fw-bold" style="color: #9a9a9a;">
                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <span class="text-info">privacy policy.</span>
                                </h4>
                            </div>
                        </div>

                        <div class="row mt-5">

                            <div class="col-12 p-4">

                                <div class="row">
                                    <div class="col-1 px-0 text-center">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                    </div>

                                    <div class="col-11 px-0">
                                        <h4 class="fw-bold" style="color: #9a9a9a;">
                                            I have read and agree to the website <span class="text-info">terms and conditions *</span>
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-5 mb-3">
                            <div class="col-12 px-0">
                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #6bdcdb">
                                    <span class="fw-bold h6 d-block my-1">SUBMIT</span>
                                </button>

                                <button type="submit" class="btn btn-primary btn-lg border-0 w-25 fw-bold d-none d-lg-block" style="background-color: #6bdcdb">
                                    <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
