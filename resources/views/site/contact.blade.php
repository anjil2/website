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
    <link rel="stylesheet" href="{{ asset('site/css/contact.css') }}">

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
        <a class="nav-link" href="/">Home</a>
      </licl>
      
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
        <a class="nav-link" href="/contact">Contact Us</a>
   </li>
    </ul>
</div>
</div>
</nav>
</section>

{{-- navbar section ends here --}}

<!-- contact section starts here -->

 <section id="contact-section">
    <div class="form-box">
      <h1>Contact Information</h1>
      <h3>"Metro Veggies"</h3>
      <div class="info-contact">
         <p> <i class="fa-solid fa-location-dot icon"></i>Masbar-7, Pokhara, Nepal</p>
        <p> <i class="fa-solid fa-phone icon"></i> 977+ 06183496 </p>
        <p> <i class="fa-solid fa-envelope icon"></i>metroveegies123@gmail.com
        </p>
    
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.8180116890453!2d83.97286377536525!3d28.21284127589654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595cdb84d7e3b%3A0xda60f09f785e25dc!2sZero%20Km%20pokhara!5e0!3m2!1sen!2snp!4v1685111628400!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
     </div>
    
</section>
<!-- contact section ends here -->

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