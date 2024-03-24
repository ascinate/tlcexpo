<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="marhansolutions.com" />
    <title>TLC Expro - Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&family=Kanit:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800;900&family=Racing+Sans+One&family=Roboto+Condensed:wght@300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,700;1,900&display=swap" rel="stylesheet"/>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
  </head>
<body>
@php
    $data = \DB::table('homes')->get();
@endphp
<header class="float-start w-100 haeder02-deign">
  <div class="header-top-sction d-inline-block w-100">
    <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-8 col-lg-8 d-none d-lg-inline-block">
          <ul class="emailtexr d-flex align-items-center">
             <li>
              <p class="mb-0"> <i class="fas fa-map-marker-alt"></i> {{ $data[0]->top_address }} </p>
             </li>
             <li>
              <p class="mb-0"> <i class="fas fa-envelope"></i>
                {{ $data[0]->top_email }} </p>
             </li>
             <li>
              <p class="mb-0"> <i class="fas fa-phone-alt"></i> {{ $data[0]->top_contact }} </p>
             </li>
          </ul>

         </div>
         <div class="col-xl-4 col-lg-4 d-grid justify-content-lg-end">
             <ul class="d-flex align-items-center justify-content-between justify-content-lg-start ">
              <li class="ms-4">
                <a href="{{ URL::to('request-a-quote') }}" class="oquote-btn btn">
                  Request A Quote
                </a>
              </li>
              @php if(!session()->has('user')) { @endphp
              <li>
                <a href="{{ URL::to('login') }}" class="btn login07 ms-1">
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                    Login </a>
              </li>
              @php } @endphp
            </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="main-menusr d-inline-block w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="justify-content-between justify-content-lg-end align-items-center d-flex w-100">
            <a class="navbar-brand" href="{{ URL::to('/') }}">
              <img alt="logo" src="images/tlcexpo-logo-300.png"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 align-items-center mb-lg-0 align-items-center">

                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('request-a-quote') }}"> ASAP Shipping Quote </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('why-tlc-expo') }}"> TLC-Expo </a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#"  role="button">
                    About Us
                  </a>
                  <ul class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ URL::to('value-added-services') }}">Value-Added Service</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('preparing-for-pickup') }}">Preparing for Pickup</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('venue-freight-supervision') }}">Venue Freight Supervision</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('post-event-pickup-prep') }}">Post-Event Pickup Prep</a></li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('events') }}"> Upcoming Events </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('contact') }}"> Contact </a>
                </li>

                @php if(session()->has('user')) { @endphp
                <li class="nav-item dropdown pe-lg-0">
                  <a class="nav-link dropdown-toggle position-relative ship-user" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <div class="piv-user">
                        <img alt="ser" src="images/4202843.png"/>
                     </div>
                  </a>
                  <ul class="dropdown-menu acout dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                      <div class="user-name01">
                          <h5> {{ session('name') }} </h5>
                      </div>
                    </li>
                    <li><a class="dropdown-item" href="{{ URL::to('dashboard') }}">
                     <span class="liou">
                       <i data-feather="user"></i>
                     </span>
                     <span> Dashboard </span> </a> </li>
                   <li><a class="dropdown-item" href="{{ URL::to('logout') }}">
                      <span class="liou">
                        <i data-feather="log-out"></i>
                      </span>
                      <span> Logout </span> </a> </li>
                  </ul>
                </li>
                @php } @endphp
              </ul>
            </div>

          </div>
        </nav>
      </div>
  </div>

</header>
