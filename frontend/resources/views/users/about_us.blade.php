@extends('layouts.user_layout')

@section('title')
About Us
@endsection

@section('content')
<div class="container">
    <div class="row mission">
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="" alt="mission">
        </div>
        <div class="col-lg-7 col-md-6 animated fadeInLeft">
            <h1 style="font-size:3rem">Mission</h1>
            <p class="">Atlas was officially launched in spring of 2002. The main focus was to market and offer online bus ticketing services for bus companies running inter-city bus services.</p>
            <p>Atlas focused all its technology efforts on a previously untouched niche of the online ticketing services for bus companies. We offered customers the possibility to search multiple schedules from multiple carriers in one place so they can easily compare and decide what works best for them.</p>
        </div>
    </div>
    <div class="row mission">
        <div class="vision col-lg-7 col-md-6 animated fadeInRight">
            <h1 style="font-size:3rem">Vision</h1>
            <p>To become the leading Bus transport and operator in Southern Luzon and Eastern Visayas. We also envision a world where youth are active leaders, diverse communities feel connected to the land and each other, and everyone has access to online ticketing services.</p>
        </div>
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="" alt="vision">
        </div>
    </div>
</div>
@endsection
