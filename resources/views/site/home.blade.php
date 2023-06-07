<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metro Veggies</title>

    <!-- {{-- fontawesome ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- {{-- bootstrap ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    <!-- {{-- style.css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>

<body>

    <!-- {{-- top-header section starts here --}} -->
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
    <!-- {{-- top-header section ends here --}}

    {{-- navbar section starts here --}} -->
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
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#section-service-container">Services</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/category">
          Category
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
      <img src="{{ asset('site/image/bot.png')}}"  alt="...">
      </div>
        <div class="organic">
        Fresh <br>
        & <br>
        ORGANIC
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
                <p>Our delivery service ensures that your veegies reaches its destination on time. We offer efficient delivery options.  </p>
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
     <!-- top-sale product starts here -->
     <section>
        <div class="top-sale">
          <div class="top-sale-title">
             <h2>Our Top-Sale</h2>
          </div>
          <div class="top-sale-all-product">
              <div class="product">
              <div class="image">
                <div class="product-title">
                  Apple
                </div>
                  <img src="{{ asset ('site/image/app.webp')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.240</span>|<del>Rs.300</del>|</h1>
                  <h3>Category:Fruit</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
            <div class="product">
              <div class="image">
                <div class="product-title">
                  Cucumber
                </div>
                  <img src="{{ asset ('site/image/cucumber.jpg')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.80</span>|<del>Rs.100</del>|</h1>
                  <h3>Category:vegetable</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
            <div class="product">
              <div class="image">
                <div class="product-title">
                  Orange
                </div>
                  <img src="{{ asset ('site/image/orange.jpg')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.120</span>|<del>RS.150</del>|</h1>
                  <h3>Category:Fruit</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
            <div class="product">
              <div class="image">
                <div class="product-title">
                  Potato
                </div>
                  <img src="{{ asset ('site/image/potato.avif')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.50</span>|<del>Rs.80</del>|</h1>
                  <h3>Category:Vegetable</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
            <div class="product">
              <div class="image">
                <div class="product-title">
                  Onion
                </div>
                  <img src="{{ asset ('site/image/onion.jpg')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.60</span>|<del>Rs.90</del>|</h1>
                  <h3>Category:vegetable</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
            <div class="product">
              <div class="image">
                <div class="product-title">
                  Guava
                </div>
                  <img src="{{ asset ('site/image/guava.jpg')}}" alt="">
              </div>
              <div class="content">
                  <div class="product-top">
                     <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
                  </div>
                  <h1><span>Rs.80</span>|<del>Rs.80</del>|</h1>
                  <h3>Category:Fruit</h3>

                  <div class="button">
                    <button>View Detail</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
   </section>
   <!-- top-sale product ends here -->
    <!-- category starts here  -->
    <section>
    <div class="category-title">
      <h2>Category</h2>
    </div>
     <div class="category">
        <div class="category-item">
          <div class="image">
              <img src="{{ asset('site/image/vegetable.jpg')}}" alt="">
          </div>
          <div class="image-title">
            <h2><a href="">Vegetable</a></h2>
          </div>
        </div>
        <div class="category-item">
            <div class="image">
                <img src="{{ asset('site/image/fruit.jpg')}}" alt=""> 
            </div>
            <div class="image-title">
              <h2><a href="">Fruit</a></h2>
            </div>
        </div>
        <div class="category-item">
            <div class="image">
                <img src="{{ asset('site/image/spices.jpg')}}" alt=""> 
            </div>
            <div class="image-title">
              <h2><a href="">Spices</a></h2>
            </div>
        </div>
        <div class="category-item">
            <div class="image">
                <img src="{{ asset('site/image/other.jpg')}}" alt="">
            </div>
            <div class="image-title">
              <h2><a href="">Other items</a></h2>
            </div>
        </div>
     </div>
     
   </section>
  
   <!-- category ends here  -->

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
    <!-- {{-- jquery link gareko --}} -->
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    <!-- {{-- proper js ko javascript link gareko --}} -->
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    <!-- {{-- bootstrap ko javascript lai link gareko --}} -->
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    <!-- {{-- fontawesome ko js link gareko --}} -->
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    <!-- {{-- script.js link gareko --}} -->
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>