<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{-- fontawesome ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    {{-- bootstrap ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    {{-- style.css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/css/category.css') }}">

    {{-- top-header section starts here --}}
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-contact">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-location-dot icon"></i> Pokhara - 8, Sirjana Chowk
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-phone icon"></i> +977 061-538358
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end header-text-sm-hide">
                    <div class="top-header-social-icon">
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- top-header section ends here --}}

    {{-- navbar section starts here --}}
    <section id="top-header-navbar">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
         <a  class="navbar-brand"href="">
          <img src="{{asset('site/image/metrologo.png')}}" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/category">Category
        </a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
   </li>
    </ul>
</div>
</div>
</nav>
</section>
    {{-- navbar section ends here --}}

    <!-- category section starts here -->
    <div class="category-top">
    <div class="category col-2">
    <a class="nav-link dropdown-toggle top" href="/"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Fruits</a></li>
          <li><a class="dropdown-item" href="#">Vegetables</a></li>
          <li><a class="dropdown-item" href="#">Fresh & Organic</a></li>
          <li><a class="dropdown-item" href="#">spices</a></li>
        </ul>
    </div>
    <div class="image col-9">
      <img src="site/image/veg.avif" alt="">
      <h1>Vegetables</h1>
    </div>
    </div>


    <!-- category section ends here -->

     <!-- footer section starts here -->
     <section id="footer-box">
      <div class="footer">
        <h2>Contact Details</h2>
        <h3>Address:</h3>
        Metro Veggies
        <p>Masbar-7, Pokhara, Nepal</p>
        <p>Tel: +977 6183496</p>
<hr>
<div class="foot-last">
  <b>© 2023 Team Motherland. All rights reserved.</b>
</div>
      </div>
      </section>
     <!-- footer section ends here -->
    {{-- jquery link gareko --}}
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    {{-- proper js ko javascript link gareko --}}
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    {{-- bootstrap ko javascript lai link gareko --}}
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    {{-- fontawesome ko js link gareko --}}
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    {{-- script.js link gareko --}}
    <script src="{{ asset('site/js/script.js') }}"></script>

</body>
</html>