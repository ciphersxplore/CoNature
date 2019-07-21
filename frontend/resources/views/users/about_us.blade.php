@extends('layouts.user_layout')

@section('title')
About Us
@endsection

@section('content')
<body background="{{ asset('images/design/leaves-bg1.jpg') }}" class = "background-img">
<div class="container cover">
    <div class="row mission mt-2">
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="{{ asset('images/design/e-commerce-business-concept-back-view-business-owner-checking-ordered-from-client_42193-120.jpg') }}" alt="mission" style="border-radius: 5px; box-shadow: 10px 8px #333 !important;">
        </div>
        <div class="col-lg-7 col-md-6 animated fadeInLeft mt-5">
            <h1 style="font-size:3rem">Mission</h1>
            <hr style="border: 1px solid #000; margin: 5px 0;">
            <p class="text-justify">Our mission is to promote the culture of responsible consumer consumption through sustainable green efforts by collaborating with manufacturers, brands and business owners.</p>
        </div>
    </div>
    <div class="row mission">
        <div class="vision col-lg-7 col-md-6 animated fadeInRight mt-5">
            <h1 style="font-size:3rem">Vision </h1>
            <hr style="border: 1px solid #000; margin: 5px 0;">
            <p class="text-justify">An organization globally renowned for being a reliable partner committed towards sustainable and strategic business management.</p>
        </div>
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="{{ asset('images/design/man-s-hand-holding-recycle-products-cardboard-box_23-2147817171.jpg') }}" alt="vision" style="border-radius: 5px; box-shadow: 10px 8px #333 !important; height: 90%; width: 100%;">
        </div>
    </div>
</div>
</body>
@endsection
