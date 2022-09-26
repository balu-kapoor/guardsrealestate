@extends('layout')

@section('page-head')
    @include('includes.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!-- Latest compiled and minified CSS -->        
@endsection

@section('page-css')
    {{--    load page css here--}}
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')
    <main>
        <div class="repair-success">
            <img class="sent-header" src="{{ asset('/images/sent-header.png') }}" alt="">
            <h4>Sent!</h4>
            <hr>
            <p>Your issue has been submitted. Your reference number is IS7781783</p>
            <p>You will receive a copy of your issue by email shortly. (Don't forget to check your spam folder)</p>
            <p>Things to do next:</p>
            <ul>
                <li><a href="{{ url('/repair-maintenance') }}">Report another issue</a></li>
                <li><a href="#">Help us improve our repair reporting service for you. It takes less than a minute!</a></li>
            </ul>
            <a class="home-button" href="{{ url('/') }}">Home</a>
        </div>
    </main>
    @endsection

@section('page-js')
@endsection

@section('footer')
<style>
    .sent-header {
        background: #9ec128;
    }
</style>
@endsection
