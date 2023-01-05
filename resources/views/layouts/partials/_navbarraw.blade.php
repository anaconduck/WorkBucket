<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<nav class="sb-topnav navbar navbar-expand navbar-light bg-light popin">
    <?php
    if (auth()->user()) {
    ?>

        <a href="#" onclick="history.go(-1)" class="position-absolute top-50 end-0 translate-middle-y me-4" style="color:#7f81b0; font-size:large">Back</p> </b></a>

    <?php
    } else {
    ?>
        <a href="#" onclick="history.go(-1)" class="position-absolute top-50 end-0 translate-middle-y me-5 pe-5" style="color:#7f81b0; font-size:large"><b>Back</p> </a>
        <a href="/login" class="position-absolute top-50 end-0 translate-middle-y me-4" style="color:#7f81b0; font-size:large">Sign In</p> </b></a>

    <?php
    }
    ?>
    <!-- <a href="/register" class="position-absolute top-50 end-0 translate-middle-y me-5 pe-5" style="color:#7f81b0; font-size:large"><b>Register</p> </a>
    <a href="/login" class="position-absolute top-50 end-0 translate-middle-y me-4" style="color:#7f81b0; font-size:large">Sign In</p> </b></a> -->

</nav>
<!--Navbar Search
    <a class="navbar-brand" href="index.html"></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
     
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <h7></h7>
        </div>
    </form>
    
    <ul class="navbar-nav ml-auto ml-md-0">
        
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
    </ul>
    -->