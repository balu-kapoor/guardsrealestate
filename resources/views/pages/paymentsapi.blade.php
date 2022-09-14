@extends('layout')

@section('page-head')
    @include('includes.head')
@endsection

@section('page-css')
    {{--    load page css here--}}
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')


    {{--<form id="sage_pay" action="https://live.sagepay.com/gateway/service/vspform-register.vsp" method="post">--}}
    <main>
        <div class="main-heading-row">
            <img src="{{ asset('images/privacy.png')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border ">
                        payments</h1>
                </div>
            </div>
        </div>
        <div class="text-box-container">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="guards-heading-box">
                            <h4 class=" payment-h4 heading-guards guards-border guards-bottom-border">make a
                                payment</h4>
                        </div>
                        <div class=" payment-container">
                            <p class="p-l-text">
                                Please use this feature to make a payment to Guards Real Estate. Once you have completed
                                the form you will be redirected to the secure payment platform to enter & submit your
                                payment details. If you have any questions please speak to one of our advisors.
                            </p>
                            <div class="form-block">
                                <div class="row">
                                    <form method="post">
                                        @csrf
                                        <div class="row">

                                            <div class="input-field col s12 m6">
                                                <input name="add1" id="add1" type="text" placeholder="Address Line One">
                                                <label for="add1"></label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="add2" id="add2" type="text" placeholder="Address Line Two">

                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="city" id="city" type="text" placeholder="City">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="pincode" id="pincode" type="text" placeholder="Postcode">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="phone" id="phone" type="text" placeholder="Phone Number">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="email" id="email" type="email" placeholder="Email">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="property" id="property" type="text" placeholder="Property Reference">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="amount" id="amount" type="number" placeholder="Amount To Pay">
                                            </div>
                                        </div>
                                        <div id="sp-container"></div>
                                        <div id="submit-container">
                                            <button class="btn-guards" type="submit">Make Payment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

@section('page-js')
    <script src="https://pi-live.sagepay.com/api/v1/js/sagepay.js"></script>
    <script src="https://pi-live.sagepay.com/api/v1/js/sagepay-dropin.js"></script>
    <script>
        sagepayCheckout({ merchantSessionKey: '{{$merchantSessionKey}}' }).form();
    </script>
@endsection
