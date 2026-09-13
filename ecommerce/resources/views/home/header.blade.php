<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LIGOS</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Top bar */
    .top-bar {
      background-color: #003366;
      color: white;
      padding: 5px 20px;
      font-size: 14px;
      display: flex;
      justify-content: flex-end;
      gap: 20px;
    }

    /* Main Navbar */
    .navbar {
      background-color: white;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #ccc;
    }

    .navbar img {
      height: 40px;
    }

    .nav-links {
      display: flex;
      gap: 20px;
      font-weight: bold;
    }

    .nav-links a {
      text-decoration: none;
      color: #003366;
    }

    .hero-section {
      background: linear-gradient(to right, #004080, #0073e6);
      color: white;
      text-align: center;
      padding: 60px 20px;
      position: relative;
    }

    .hero-section img {
      max-width: 100%;
      height: auto;
      margin-top: 20px;
    }

    .hero-text {
      font-size: 32px;
      font-weight: bold;
    }

    .sub-text {
      font-size: 20px;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar">
    <div>Fridge repairs</div>
    <div>Cooling Systems </div>
  </div>

  <!-- Main Navbar -->
  <div class="navbar">
    <img src="images/ligos2.jpeg" alt="LIGOS Logo">
    <!-- header section starts -->
<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container">
         <!-- Phone number displayed in place of the logo -->
         <a class="navbar-brand" href="tel:+263783373596">
            <span class="phone-number">+263 783 373 596</span>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">About</a></li>
                     <li><a href="#">Testimonial</a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('products')}}">Products</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('show_order')}}">Order</a>
               </li>

               <form class="form-inline">
                  <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form>

               @if (Route::has('login'))
               @auth
                  <x-app-layout></x-app-layout>
               @else
                  <li class="nav-item">
                     <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                  </li>
                  <br>
                  <li class="nav-item">
                     <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                  </li>
               @endauth
               @endif
            </ul>
         </div>
      </nav>
   </div>
</header>

  </div>

  <!-- Hero Section -->
 

</body>
</html>
