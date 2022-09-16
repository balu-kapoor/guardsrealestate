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

@section('page-body')<main class="privacy">
    <div class="main-heading-row">
        <img src="{{asset('images/IMG_8627_valuations.jpg')}}" class="responsive-img ">
        <div class="header-row-heading">
            <div class="header-row">
                <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Valuations</h1>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="container">
            <div class="row first-row-block">
                    <p>Sell or Let your Property with Guards Real Estate today – Call <a href="tel:+442036331271">020 3633 1271</a>.</p>
                    <p>&nbsp;</p>
                    <p><strong>HOW MUCH IS YOUR PROPERTY WORTH?</strong></p>
                    <p class="textbox" dir="ltr">Guards Real Estate Valuers have gained their industry standard exams meaning you will be advised by accredited and experienced advisors to ensure you gain the best price available in the present market. If you decide to list your property or are simply looking for a comparison quote we ensure you will receive professional service with a <em>complimentary and no obligation valuation.&nbsp;</em></p>
                    <p dir="ltr"><strong>NO LET, NO FEE</strong></p>
                    <p class="textbox" dir="ltr">You don’t pay anything until we let your property.</p>
                    <p class="textbox" dir="ltr"><strong>ADVERTISE LOCALLY &amp; GLOBALLY</strong></p>
                    <p class="textbox" dir="ltr">We will ensure that your property will reach the most appropriate audience with opportunity for the highest possible market price. Guards Real Estate operates globally using different styles of marketing unique to Guards Real Estate, benefiting you!</p>
                    <p class="textbox" dir="ltr"><strong>Contact us <a href="/contact-us"><span style="text-decoration: underline;">here</span></a>.&nbsp;</strong></p>

            </div>
            <div class="col s12 button-area">
                <a class="btn-guards modal-trigger" data-target="modal1" href="#modal1" >Book valuation</a>
            </div>
    </div>
    </div>
</main>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('page-js')

@endsection
