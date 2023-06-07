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

    <div class="top-of-category">
   <div class="left">
        <p><h2>"The greatest wealth is health."</h2></p>
        <p><h4>Welcome to category page ! Here you can find wide range of our product</h4></p>
        <h3>Your One-Stop Destination for All Things Vegetables: Elevate Your Cooking and Embrace the Art of Healthy Eating</h3>
        <button><a href="">Shop Now</a></button>
   </div>
   <div class="image">
    <img src="{{asset ('site/image/top.png')}}" alt="vegetable image">
  </div>
</div>
<section class="main-category">
  <div class="category-title">
    <h2>Category</h2>
  </div>

  <div class="category">
    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/vegetable.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="#vegetable">Vegetable</a></h2>
      </div>
    </div>
    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/fruit.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="#fruit">Fruit</a></h2>
      </div>
    </div>

    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/spices.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="#spices">Spices</a></h2>
      </div>
    </div>

    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/other.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="#other-items">Other items</a></h2>
      </div>
    </div>
  </div>
</section>


 <section>
  <div class="product-section" id="vegetable">
    <div class="title" style="text-align:center;">
      <h2><span>Vege</span>table</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Cucumber
          </div>
          <img src="{{ asset('site/image/cucumber.jpg')}}" alt="cucumber">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.150</del>|</h1>
          <h3>Category: Vegetable</h3>
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
          <img src="{{ asset('site/image/potato.avif')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.50</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
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
          <img src="{{ asset('site/image/onion.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.90</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
          Capsicum
          </div>
          <img src="{{ asset('site/image/	Capcicum.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
             Tomato
          </div>
          <img src="{{ asset('site/image/tomato.png')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.75</span>|<del>Rs.100</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
             Broccuoli
          </div>
          <img src="{{ asset('site/image/broccoli.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>Rs.120</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
        Cauliflower
          </div>
          <img src="{{ asset('site/image/cauliflower.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
         Turnip
          </div>
          <img src="{{ asset('site/image/turnip.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
         Raddish
          </div>
          <img src="{{ asset('site/image/mula.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
        Pea
          </div>
          <img src="{{ asset('site/image/Peas-Image.png')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Cabbage
          </div>
          <img src="{{ asset('site/image/cabbage.jpg ')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>Rs.110</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Carrot
          </div>
          <img src="{{ asset('site/image/carrot.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.120</span>|<del>Rs.150</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section" id="fruit">
    <div class="title" style="text-align:center;">
      <h2><span>Fru</span>it</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Apple
          </div>
          <img src="{{ asset('site/image/app.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.240</span>|<del>Rs.300</del>|</h1>
          <h3>Category: Fruit</h3>
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
          <img src="{{ asset('site/image/orange.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.120</span>|<del>RS.150</del>|</h1>
          <h3>Category: Fruit</h3>
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
          <img src="{{ asset('site/image/guava.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Grape
          </div>
          <img src="{{ asset('site/image/grapes.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.150</span>|<del>RS.180</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
          Banana
          </div>
          <img src="{{ asset('site/image/Banana.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.170</span>|<del>RS.200</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
          Pineapple
          </div>
          <img src="{{ asset('site/image/Pineapple.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.150</span>|<del>RS.170</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
          Avacoda
          </div>
          <img src="{{ asset('site/image/avacoda.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
         Chhery
          </div>
          <img src="{{ asset('site/image/cheery.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.180</span>|<del>RS.190</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
        Litchi
          </div>
          <img src="{{ asset('site/image/litchi.avif')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.250</span>|<del>RS.230</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
         Papaya
          </div>
          <img src="{{ asset('site/image/papaya.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.130</span>|<del>RS.140</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Mango
          </div>
          <img src="{{ asset('site/image/Mango.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.180</span>|<del>RS.200</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Watermelon
          </div>
          <img src="{{ asset('site/image/Watermelon.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.150</span>|<del>RS.180</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section" id="spices">
    <div class="title" style="text-align:center;">
      <h2><span>Spi</span>ces</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Turmeric
          </div>
          <img src="{{ asset('site/image/turmeric.jpg')}}" alt="turmeric image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.150</span>|<del>RS.180</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Cumin
          </div>
          <img src="{{ asset('site/image/cumin.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.150</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Ginger
          </div>
          <img src="{{ asset('site/image/ginger.webp')}}" alt="Ginger image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.3<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>RS.100</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Coriander
          </div>
          <img src="{{ asset('site/image/Coriander.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.50</span>|<del>RS.70</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Garlic
          </div>
          <img src="{{ asset('site/image/garlic.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>RS.80</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Methi
          </div>
          <img src="{{ asset('site/image/Methi.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.3<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>RS.100</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Dalachini
          </div>
          <img src="{{ asset('site/image/Dalachini.png')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Mustard-Seed
          </div>
          <img src="{{ asset('site/image/mustard-seed.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
           Coriander-Seed
          </div>
          <img src="{{ asset('site/image/coriander-seed.png')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
          Black Peeper
          </div>
          <img src="{{ asset('site/image/blackppeper.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
           Black-Salt
          </div>
          <img src="{{ asset('site/image/black-salt.webp')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.120</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Jaiphal
          </div>
          <img src="{{ asset('site/image/Jaiphal.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.2<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>RS.100</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section" id="other-items">
    <div class="title" style="text-align:center;">
      <h2><span>Other</span>-items</h2>
    </div>
    <div class="product-detail">
      <div class="product">
          <div class="image">
            <div class="product-title">
              Cashew
            </div>
            <img src="{{ asset('site/image/Kaju.jpg')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.200</span>|<del>RS.220</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
              Almond
            </div>
            <img src="{{ asset('site/image/Almond.webp')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.180</span>|<del>RS.200</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
              Peanut
            </div>
            <img src="{{ asset('site/image/Peanut.png')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.150</span>|<del>RS.180</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
              Walnut
            </div>
            <img src="{{ asset('site/image/Walnut.jpg')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.160</span>|<del>RS.180</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
              Coconut
            </div>
            <img src="{{ asset('site/image/Coconut.jpg')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.210</span>|<del>RS.250</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
             Pistachio
            </div>
            <img src="{{ asset('site/image/pistachios.jpg')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.140</span>|<del>RS.160</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
               Apricots
            </div>
            <img src="{{ asset('site/image/Apricots.jpg')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.250</span>|<del>RS.300</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="image">
            <div class="product-title">
             Raisins
            </div>
            <img src="{{ asset('site/image/raisins.webp')}}" alt="Cumin image">
          </div>
          <div class="content">
            <div class="product-top">
              <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
            </div>
            <h1><span>Rs.300</span>|<del>RS.350</del>|</h1>
            <h3>Category: Other-items</h3>
            <div class="button">
              <button>View Detail</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>


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