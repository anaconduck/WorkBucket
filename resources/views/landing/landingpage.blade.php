<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Workbucket</title>
    <link href="{{ ('template/assets/img/logo9.png') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/landing_asset/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<nav class="sb-topnav navbar navbar-expand navbar-light bg-light py-4">
<a href="/aboutus" class="position-absolute top-50 end-0 translate-middle-y mt-1 me-5 pe-5" style="color:#7f81b0; font-size:large"><b>About Us</p> </a>
    <a href="/login" class="position-absolute top-50 end-0 translate-middle-y mt-1 me-4" style="color:#7f81b0; font-size:large">Sign In</p> </b></a>

</nav>
<body class="min-h-screen w-100 popin">
<style type="text/css">
        .min-h-screen {
            background-image: url('landing_asset/landing_bg.png');
            background-position: center 60%;
            background-size: cover;
            background-repeat: repeat-y;
        }

        x-auth-card {
            border-radius: 0;
        }
        ul {
  list-style: none; /* Remove default bullets */
}
        ul li::before {
  content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
  color: #C4C4C4; /* Change the color */
  font-weight: bold; /* If you want it to be bold */
  display: inline-block; /* Needed to add space between the bullet and the text */
  width: 1em; /* Also needed for space (tweak if needed) */
  margin-left: -1em; /* Also needed for space (tweak if needed) */
}
    </style>
<div class="row pe-0 me-0">
<div class="col-sm-12 col-md-12 col-lg-5">
<img class="img-fluid m-5 " src="landing_asset/photo.png" alt="">
</div>
<div class="col-sm-12 col-md-12 col-lg-5 ms-5">
<h1 class="popin mt-5 ms-5 me-1 pt-5 pb-2">Explore Your Passion With Us</h1>
<ul class=" ms-5 ps-5 ">
    <h4 class="m-4">
    <li class="m-5">Find Forums</li>
    <li class="m-5">Share Your Talents</li>
    <li class="m-5">Discuss and Recruit</li>
    </h4>
</ul>
</div>
</div>
    <!-- <p class="topmenu1"> <a href="">Join</a></p>
    <p class="topmenu2"> <a href="/aboutus">Discover</a></p>
    <a href="#"><img src="/landing_asset/logo.png" alt="logo" href="" id="logo"></a>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
        <p class="topmenu1"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Join</a></p>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Join</a>
        @endif
        @endauth
    </div>
    @endif -->
</body>

</html>