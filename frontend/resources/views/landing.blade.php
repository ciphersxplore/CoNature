<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        CoNature
    </title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Kodchasan|Paytone+One|Raleway&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('images/videos/plant.mp4') }}" type="video/mp4">
            </video>
            <div class="container-fluid">

                {{-- nav bar --}}
                <nav class="navbar navbar-expand-md text-white bg-transparent">
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/landscape.png') }}" alt="" width="200px" height="auto"></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" id="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-link" href="#">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                @if(session()->has('error'))
                <div class="alert alert-danger mb-0">
                    {{ session()->get('error') }}
                </div>
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->pull('success') }}
                </div>
                @endif
                <div class="row">

                    {{-- message --}}
                    <div class="col-md-6">
                        <img src="{{ asset('images/logo/message.png') }}" class="img-fluid m-5 mt-3" alt="" width="80%" height="auto">

                        <div id="carouselId" class="carousel slide ml-5" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <p class="home_com">Instilling sustainable and responsible consumerism.</p>
                                </div>
                                <div class="carousel-item">
                                    <p class="home_com">Crafting strategic marketing and accountable production.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Login / Register --}}

                    <div class="col-md-4 offset-md-1">
                        <div class="card-landing card-signin mt-3" >
                            <div class="card-body">


                                <ul id="clothingnav1" class="nav nav-tabs nav-fill " role="tablist">
                                    <li class="nav-item"> <a class="nav-link active  btn_outline__purple btn_purple btn-block" href="#home1" id="hometab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Sign in</a> </li>
                                    <li class="nav-item"> <a class="nav-link btn_purple btn_outline__purple btn-block"  href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Register</a> </li>
                                </ul>

                                <!-- Login-->
                                <div id="clothingnavcontent1" class="tab-content ">
                                    <div role="tabpanel" class="tab-pane fade show active " id="home1" aria-labelledby="hometab1">

                                        <h1 class="login-heading mt-3 text-center">Welcome HERO!</h1>
                                        <form class="form-signin" action="user/login" method="Post">
                                            @csrf
                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                                                <label for="inputEmail">Email address</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <button class="btn btn-primary btn-block text-uppercase" type="submit" style="border: 2px white inset">Submit</button>
                                        </form>
                                    </div>

                                    {{-- Register --}}
                                    <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
                                        <form class="form-signin" action="{{ route('registration') }}" method="Post">
                                            @csrf

                                            <h1 class="login-heading mt-3 text-center">Be ONE of US!</h1>

                                            <div class="row">
                                                <div class="col-md-6">

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputFirstname" class="form-control" placeholder="First Name" name="first_name" required autofocus>
                                                        <label for="inputFirstname" class="ml-2">First Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputLastname" class="form-control" placeholder="Last Name" name="last_name" required autofocus>
                                                        <label for="inputLastname" class="ml-2">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="email" id="input_r_Email" class="form-control" placeholder="Email address" name="email_address" required>
                                                <label for="input_r_Email">Email address</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="number" id="input_r_Contact" class="form-control" placeholder="Contact Number" name="contact_number" required>
                                                <label for="input_r_Contact">Contact Number</label>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" id="input_r_Password" class="form-control" placeholder="Password" name="password" required>
                                                <label for="input_r_Password">Password</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="password" id="input_r_ConfirmPassword" class="form-control" placeholder="Confirm Password" name="Confirm_password"  required>
                                                <label for="input_r_ConfirmPassword">Confirm password</label>
                                                <span class="ml-3" id="message"></span>
                                            </div>
                                            <button class="btn btn-primary btn-block text-uppercase" style="border: 2px white inset">Submit</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


</body>
</html>
