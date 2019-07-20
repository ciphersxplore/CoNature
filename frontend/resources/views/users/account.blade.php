@extends('layouts.user_layout')

@section('title')
User Account
@endsection

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/profile/baby.jpg') }}" alt="" style="border-radius: 50%" height="auto" width="70%" class="text-center">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
