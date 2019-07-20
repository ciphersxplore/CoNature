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
                                <a class="nav-link" id="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" id="nav-link" href="#">Action 1</a>
                                    <a class="dropdown-item" id="nav-link" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                {{-- side panel --}}
                <div class="login">
                    <div class="row">
                        <p class="hl"></p>
                        <a href="#" class="register">  Login / Register</a>
                        <p class="hl"></p>
                        <a href="#"><img src="{{ asset('images/logo/arrow.png') }}" alt="" height="80px" width="auto"> </a>
                    </div>
                </div>

                {{-- arrow --}}


            </div>
        </header>


    </body>
    </html>
