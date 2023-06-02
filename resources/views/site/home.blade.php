<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKIRTAM | ELECTRONIC | ECOM</title>

    {{-- fontawesome ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    {{-- bootstrap ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    {{-- style.css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>

<body>

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
      <li class="nav-item active ">
        <a class="nav-link" href="#">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Fruits</a></li>
          <li><a class="dropdown-item" href="#">Vegetables</a></li>
          <li><a class="dropdown-item" href="#">Fresh & Organic</a></li>
        </ul>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
</div>
</div>
</nav>
</section>
    {{-- navbar section ends here --}}

    <!-- slider section starts here -->
<section id="slider">
   <div class="container">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="content">
        <h2>
          We support our farmers
        </h2>
        <h1>Fresh Veggies</h1>
        <p>with fresh fruit and vegetables straight from their market gardens <br> to our shelves, delivering fresh to you everyday.</p>
        <div class="button">
          <a href="" class="btn">
            Shop now
          </a>
        </div>
      </div>
      <div class="image">
      <img src="{{ asset('site/image/slider1.png')}}"  alt="...">
      </div>
    </div>
  </div>
</div>
    </div>
</section>
    <!-- slider section ends here -->
    <!-- service section starts here -->
    <div id="section-service-container">
    <div class="haed-text"><h1>Services</h1></div>
      <div class="box">  
        <div  class="container">
            <div class="icon" style="background-color: #4eb7ff;"><div class="icon-only"><i class="fa-solid fa-leaf"></i></div></div>
            <div class="content">
                <h2>100% Fresh</h2>
                <p>We deliver fresh items only. All the vegetables, fruits, and groceries we sell are 100% fresh. Taste once, start loving us.</p>
            </div>
        </div>
        <div class="container">
            <div class="icon" style="background-color: #ff9500"><div class="icon-only"><i class="fa-solid fa-bus"></i></div></div>
            <div class="content">
                <h2>Delivery</h2>
                <p>Our delivery service ensures that your package reaches its destination safely and on time. We offer reliable and efficient delivery options.  </p>
            </div>
        </div>
        <div class="container">
            <div class="icon" style="background-color:  rgb(0, 109, 0);"><div class="icon-only"><i class="fa-brands fa-paypal"></i></div>
            </div>
            <div class="content">

                <h2>Payment</h2>
                <p>We accept all kinds of payments, such as Esewa, Khalti, Prabhu Pay, IME Pay, Bank Transfer, and cash on delivery.</p> 
            </div>
        </div>
   </div>
     <!-- service section ends here -->

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