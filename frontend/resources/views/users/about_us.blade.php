@extends('layouts.user_layout')

@section('title')
About Us
@endsection

@section('content')
<div class="container">
    <div class="row mission">
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="{{ asset('images/design/e-commerce-business-concept-back-view-business-owner-checking-ordered-from-client_42193-120.jpg') }}" alt="mission">
        </div>
        <div class="col-lg-7 col-md-6 animated fadeInLeft">
            <h1 style="font-size:3rem">Mission</h1>
            <p class="">An organization that collaborates with nature to develop a connection from consumers to retailers up to merchandisers by turning consumed products’ waste into financial gain that would benefit them and the environment.</p>
        </div>
    </div>
    <div class="row mission">
        <div class="vision col-lg-7 col-md-6 animated fadeInRight">
            <h1 style="font-size:3rem">Vision</h1>
            <p>Rationing responsible consumers all around the globe.</p>
        </div>
        <div class="about-photo col-lg-5 col-md-6">
            <img class="img-fluid" src="{{ asset('images/design/man-s-hand-holding-recycle-products-cardboard-box_23-2147817171.jpg') }}" alt="vision">
        </div>
    </div>
</div>
@endsection
