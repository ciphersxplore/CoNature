@extends('layouts.user_layout')

@section('title')
Account Summary
@endsection

@section('content')
<div class="container mt-3">

    <div class="card">
            <div class="card-header">
                <h3 class="text-center">Account Summary</h3>
            </div>
        <div class="card-body">
            <h4 class="card-title">Current Points:</h4>


            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-recycle" aria-hidden="true"></i> Recycle Items</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" href="#" data-toggle="modal" data-target="#plastic_bottles">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" href="#" data-toggle="modal" data-target="#plastic_bottles">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-exchange-alt    "></i> Exchange points</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" href="#" data-toggle="modal" data-target="#plastic_bottles">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-history" aria-hidden="true"></i> History</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" href="#" data-toggle="modal" data-target="#plastic_bottles">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
