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
    <main>

        <div class="main-heading-row">
            <img src="{{asset('images/IMG_9014_certificates.jpg')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">certificates</h1>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="privacy-container">
                <div class="container">

                    <a class="btn-guards full-width"  href="{{asset('files/Propertymark+CMP+Main+Scheme+Certificate.pdf')}}" title="Guards - Client Money Protection Scheme" target="_blank">CLIENT MONEY PROTECTION SCHEME</a>

                    <a class="btn-guards full-width" href="{{asset('files/Client-Money-Protection-Security-Certificate-Email.pdf')}}" title="Guards - Client Money Protection Scheme" target="_blank">CLIENT MONEY PROTECTION SECURITY CERTIFICATE</a>

                    <a class="btn-guards full-width"  href="{{asset('files/PRS+MemberShip+Certificate.pdf')}}" title="Guards - Property Redress Scheme" target="_blank">PROPERTY REDRESS SCHEME MEMBERSHIP 21/22</a>

                    <a class="btn-guards full-width"   href="{{asset('files/PRS+MemberShip+Certificate.pdf')}}" title="Guards - My Deposits Protection" target="_blank">MY DEPOSITS PROTECTION CERTIFICATE</a>

                </div>
            </div>
        </div>
    </main>
@endsection

@section('page-js')

@endsection


@section('footer')
    @include('includes.footer')
@endsection
