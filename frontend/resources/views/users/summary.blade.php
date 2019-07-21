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



            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-recycle" aria-hidden="true"></i> Recycle Items</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" data-toggle="modal" data-target=".plastic_bottles">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-exchange-alt    "></i> Exchange points</h4>
                        </div>
                        <a class="card-footer text-black-50 clearfix small z-1" href="#" data-toggle="modal" data-target="#rewards">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                    </div>
                </div>
                <div class="col-md-4">
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


<!-- modal for recyclables -->
<div class="modal fade bd-example-modal-lg plastic_bottles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose your recyclables</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">

                        <div class="form-check mt-3 ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Breakable Glasses</label>
                        </div>

                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Plastic Bottles</label>
                        </div>

                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Aluminums</label>
                        </div>

                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Paper</label>
                        </div>



                </div>
                <div class="col-md-6">
                    <p class="form-group">Quantity</p>

                    <div class="form-group">
                        <input type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control">
                    </div>


                </div>
            </div>

        </div>
    </div>
  </div>
</div>

<!-- modal for exchange points -->
<div class="modal fade bd-example-modal-lg plastic_bottles" id="rewards" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose your reward.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="form-group">Which item do you like to claim?</p>

                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Donate 50 </label>
                    </div>

                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Tumbler</label>
                    </div>


                </div>
            </div>

        </div>
    </div>
  </div>
</div>

@endsection
