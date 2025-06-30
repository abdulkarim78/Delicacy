<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
  <title>Easy To Buy</title>
</head>
<body>
  <!-- Header -->
  <header>
    <a href="" class="logo"><i class='bx bxs-basket'></i>Delicacy</a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="#home" class="home-active">Home</a><li>
      <li><a href="#categories">Categories</a><li>
      <li><a href="#products">Product</a><li>
      <li><a href="#about">About</a><li>
      <li><a href="#customer">Customers</a><li>
    </ul>
    <div class="profile">
      <img src="" alt="">
      <span>Abdul Karim</span>
      <i class='bx caret-down'></i>
    </div>
  </header>
  <!-- End Of Header -->

  <!-- Home -->
  <section class="home swiper" id="home">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide container">
        <div class="home-text">
          <span>We are Delicacy</span>
          <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide container">
        <div class="home-text">
          <span>We are Delicacy</span>
          <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>
      <!-- Slide 3 -->
       <div class="swiper-slide container">
        <div class="home-text">
          <span>We are Delicacy</span>
          <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </section>
<!-- Home Ended -->

<!-- Categories -->
<section class="categories" id="categories">
  <div class="heading">
    <h1>Browse Our Hottest <br><span>Categories</h1>
      <a href="#" class="btn">See All</a>
  </div>
  <div class="categories-container">
    <!-- Box 1 -->
    <div class="box box1">
      <img src="" alt="">
      <h2>Fruits</h2>
      <span>10 Items</span>
      <i class='bx bx-right-arrow-alt' ></i>
    </div>

    <!-- Box 2 -->
    <div class="box box2">
      <img src="" alt="">
      <h2>Vegetables</h2>
      <span>20 Items</span>
      <i class='bx bx-right-arrow-alt' ></i>
    </div>

    <!-- Box 3 -->
    <div class="box box3">
      <img src="" alt="">
      <h2>Drinks</h2>
      <span>5 Items</span>
      <i class='bx bx-right-arrow-alt' ></i>
    </div>

    <!-- Box 4 -->
    <div class="box box4">
      <img src="" alt="">
      <h2>Fresh Nuts</h2>
      <span>06 Items</span>
      <i class='bx bx-right-arrow-alt' ></i>
    </div>
  </div>
</section>
<!-- CategorIES End -->

<!-- Products -->
<section class="products" id="products">
  <div class="heading">
    <h1>Our Popular <br><span>Products</h1>
      <a href="#" class="btn">Shop Now</a>
  </div>
  <div class="product-container">
    <!-- Box 1 -->
    <div class="box">
      <img src="./assets/carrots.jpg"/>
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
    <!-- Box 2 -->
    <div class="box">
      <img src="./assets/cherry.jpg">
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
    <!-- Box 3 -->
    <div class="box">
      <img src="./assets/mango.jpg">
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
    <!-- Box 4 -->
    <div class="box">
      <img src="./assets/peach.jpg">
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
    <!-- Box 5 -->
    <div class="box">
      <img src="./assets/potatoes.jpg">
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
    <!-- Box 6 -->
    <div class="box">
      <img src="./assets/tomatoes.jpg">
      <span>Fresh Items</span>
      <h2>Farm fresh organic <br>fruits 250gm</h2>
      <h3 class="price">200 <span>/kg</span></h3>
      <i class="bx bx-cart"></i>
      <i class="bx bx-heart"></i>
      <span class="discount">-25%</span>
    </div>
  </div>
</section>




<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./index.js"></script>
</body>
</html>