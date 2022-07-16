

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecommerce Website</title>
    <link rel="icon" type="image/png" href="{{asset('storage/images/mylogo.png')}}"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="{{asset('css/assets/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/mobile-menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/amimate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/chosen.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/magnific-popup.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/jquery.scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/owl.carousel.min.css')}}" rel="stylesheet">




    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

  <!-- Navbar  -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid custom-nav">
   <a class="navbar-brand" href="#"><img src="{{asset('storage/images/mylogo.png')}}" width="60px" height="60px" style="border-radius:20% ;" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
        <li class="nav-item">
          {{-- @if (Route::has('login'))
          @auth
          <a href="{{ url('/admin/show_products_info') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
          @else --}}
          <a href="{{route('login')}}" class="nav-link">Login</a>
          {{-- @endif --}}
        </li>
      </ul>
    </div>
  </div>
   </div>
</nav>
  <!-- End Navbar  -->


<div class="container">

 <div  class="para">
 <p >🔰শৈশবের ডায়েরী / আমার স্মৃতিময় শৈশব। 😊 অনেকেই ডায়েরী ২ টার খোঁজ করেছেন কিন্তু পাননি। 🧐🧐 তাইতো ডায়েরী নিজেই আপনাদের খোঁজ করার জন্য তাইতাই ডটকমের কাছে হাজির হয়েছে। 😎😎
খুঁজে না পাওয়া এমন অনেক বাচ্চাদের পণ্য পেতে আমাদের সাথেই থাকুন।🥰
বিস্তারিত জানতে নিচের ভিডিও টি সম্পূর্ণ দেখুন।</p>
 </div>

<div class="video">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/JnX7Oc8LqD8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
<br>
<hr>
  <!-- slide  -->
  <h4 class="product-h">শৈশবের ডায়েরি</h4>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 h-240px slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 h-240px slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>



    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

   <div class="carousel-item" >
      <img src="http://jerryjenkins.com/wp-content/uploads/2020/03/The-Writer%E2%80%99s-Guide-to-Worldbuilding.jpg" class="d-block w-100 slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- End Slide  -->

    <div class="row justify-content-center">
      <div class="col-md-4 col-xs-6">
        <div class="product-details">
          <p> পৃষ্ঠা সংখ্যাঃ ৫২ টি</p>
          <p style="line-height: 1rem;"> Price Only = 280 tk + Shipping </p>
          <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#product1" aria-expanded="false" aria-controls="product1">Buy Now</button>
        </div>
        <!-- End slide  -->
        <div class="collapse" id="product1">
          <div class="card card-body">
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-4">
                <label for="name" class="form-label">Name <span style="color: red;">*</span></label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
                <div class="valid-feedback">
                Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="address" class="form-label" placeholder="Enter your Address">Address <span style="color: red;">*</span></label>
                <textarea name="address" id="address" class="form-control" aria-label="With textarea"></textarea>
                <div class="valid-feedback">
                Looks good!
                </div>
              </div>

              <div class="col-md-4">
                <label for="phone" class="form-label">Phone Number
                  <span style="color: red;">*</span>
                </label>
                <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="inputGroupPrepend" required placeholder="Enter your phone number">
              </div>

              <div class="col-md-4">
                <label for="address" class="form-label">Email(optional)</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your address">
                <div class="valid-feedback">
                Looks good!
                </div>
              </div>

              <div class="col-12">
                <button class="btn btn-primary" type="button">Checkout</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


<br>
<hr >
<br>
  <!-- Product two through slide -->
  {{-- <h4 class="product-h">
  আমার স্মৃতিময় শৈশব
  </h4>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 h-240px slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 h-240px slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>



    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978__340.jpg" class="d-block w-100 slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

   <div class="carousel-item" >
      <img src="http://jerryjenkins.com/wp-content/uploads/2020/03/The-Writer%E2%80%99s-Guide-to-Worldbuilding.jpg" class="d-block w-100 slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="row justify-content-center">
  <div class="col-md-4 col-xs-6">
    <div class="product-details">
      <p> পৃষ্ঠা সংখ্যাঃ ৫২ টি</p>
      <p style="line-height: 1rem;"> Price Only = 280 tk + Shipping </p>
      <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#product2" aria-expanded="false" aria-controls="product2">Buy Now</button>
    </div>

  </div>
</div> --}}
<!-- End product two  -->


{{-- Main Product  --}}
<div class="container">
    <div class="row">
        <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="site-main">
                <h3 class="custom_blog_title">
                  Our  Products
                </h3>
                <ul class="row list-products auto-clear equal-container product-grid" style="display: flex;
                justify-content: center;">
                    <li class="product-item  col-lg-2 col-md-4 col-sm-6 col-xs-6 col-ts-6 style-1">
                        <div class="product-inner equal-element" style="height: 301px;">
                            <div class="product-top">
                                <div class="flash">
                                    <span class="onnew">
                                        <span class="text">
                                            Discount 50 %
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{asset('storage/images/products/62bed5c573144.jpg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Baseus CCFS-M02  High Speed Mini Dual 2 USB Travel Charger</a>
                                </h5>
                                <div class="group-info">
                                    <div class="price">
                                        <div class="product-price">
                                            <span class="price" id="productPrice"> ৳  499 </span>
                                                <del class="price-before-discount">৳ 1,000</del>
                                        </div>
                                    </div>
                                    <div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" onclick="buyNow(344)">অর্ডার করুন</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{--End Main Product  --}}



<!-- checkout  -->

<div class="collapse" id="product2">
  <div class="card card-body">

  <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="name" class="form-label">Name <span style="color: red;">*</span></label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
  <label for="address" class="form-label" placeholder="Enter your Address">Address <span style="color: red;">*</span></label>
  <textarea name="address" id="address" class="form-control" aria-label="With textarea"></textarea>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="phone" class="form-label">Phone Number <span style="color: red;">*</span></label>
      <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="inputGroupPrepend" required placeholder="Enter your phone number">
    </div>

   <div class="col-md-4">
  <label for="address" class="form-label">Email(optional)</label>
  <input type="email" name="email" id="email" class="form-control" placeholder="Enter your address">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="button">Checkout</button>
  </div>
</form>

  </div>
</div>

<!-- End Checkout  -->
<div>

</div>

<div class="info-details">
<div class="custom-info">
<p style="text-align: center;">
<strong>ডেলিভারি চার্জ</strong> <br>
ঢাকার ভিতরঃ ৬০ টাকা<br>
ঢাকার বাহিরেঃ ১০০ টাকা
</p>

</div>

<div>
  <p style="text-align: justify;">
  উভয় ডায়েরীতে সন্তানের জন্ম থেকে শুরু করে একটা নির্দিষ্ট বয়স পর্যন্ত প্রতিটা ধাপে ধাপে তার বেড়ে ওঠা,যেকোনো মুহূর্তের স্মৃতিময় ছবি,পরিবারের পরিচিতি সবকিছুই একই ডাইরিতে সংরক্ষণ করতে পারবেন। আজকাল মোবাইল ফোনের কারণে আমাদের কোনো কিছুই আর আলাদাভাবে সংরক্ষণ করা হয় না । তবে এই ডায়েরিটি আপনার সন্তানের সকল সুখ স্মৃতি গুলোকে খুব সুন্দর এবং সাবলীলভাবে সংরক্ষিত অবস্থায় রাখবে।
  </p>
</div>
</div>

<div>
<div class="row justify-content-center social-icon">

<div class="col-md-4">
<a href="www.facebook.com"><i class="bi bi-telephone-outbound-fill"></i></a><p><a href="tel:01988406007">01988406007</a></p>
 </div>
 <div class="col-md-4">
<a href="www.facebook.com"><i class="bi bi-facebook"></i> <p>তাই তাই ডট কম</p></a>
 </div>
 <div class="col-md-4">
<a href="www.facebook.com"><i class="bi bi-youtube"></i> <p>তাই তাই ডট কম</p></a>
 </div>


</div>
</div>

<div class="footer-top">
  <p>আপনাকে অনেক ধন্যবাদ আমদের ওয়েবসাইট টি ভিজিট করার জন্য</p>
</div>
<footer class="footer">
  <p> All Right Reserved by <a href="TaiTaikids.com">TaiTaikids.com</a> Copyright © 2022 | Website Design and Develop by MDNH</p>
</footer>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
