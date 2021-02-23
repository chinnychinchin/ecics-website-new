<?php
?>
<title>ECICS - Your Friendly Neighborhood Insurer</title>
<meta name="application-name" content="ECICS - Your Friendly Neighborhood Insurer"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="https://www.ecics.com.sg/wp-content/uploads/2019/05/ecics_favicon.png">

<!-- icons for footer, right arrow icons -->
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/497cae3575.js" crossorigin="anonymous"></script>

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="vendor/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/owlcarousel/assets/owl.theme.default.min.css">

<!-- for owl carousel -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<style>

    body {
        font-family: 'Open Sans';
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .navbar {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color: #363537 !important;
    }

    .nav-link:hover {
        color: #30a64a !important;
    }

    .orange-btn-outline{
        border: 1px solid #00adef;
        color: #00adef;
        background: white;
    }

    .orange-btn-outline:hover{
        border: 1px solid #00adef;
        color: #00adef;
        background: white;
    }

    .orange-title{
        color: #FF6633;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /* Without this, clicking will make it sticky */
        pointer-events: none;
      
    }


</style>

<!-- ======= Header ======= -->

<!--            <img src="images/assets/ccb-logo.png" alt="" class="img-fluid col-lg-8">-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light mb-5">
    <a class="navbar-brand mr-auto" href="home.php">
        <img src="images\assets\Logo-HD-Transparent.png" width="92" height="39" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" ml-auto collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2"
                   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="#">Car Insurance</a>
                    <a class="dropdown-item" href="#">Home Insurance</a>
                    <a class="dropdown-item" href="./maid_benefits.html" target="_blank">Maid Insurance</a>
                    <a class="dropdown-item" href="#">Personal Accident</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink0"
                   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Support
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink0">
                    <a class="dropdown-item" href="#">Call Me</a>
                    
                    <a class="dropdown-item" href="#">Make A Request</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Promotions</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1"
                   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                    <a class="dropdown-item" href="#">Our Company</a>
                    <a class="dropdown-item" href="#">Financial Information</a>
                    <a class="dropdown-item" href="#">Corporate Policies</a>
                    <a class="dropdown-item" href="#">Privacy Policy</a>
                    <a class="dropdown-item" href="#">Locate Us</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="btn orange-btn-outline" href="#" role="button">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!-- End Header -->