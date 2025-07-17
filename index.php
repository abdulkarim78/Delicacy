<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="index.css">
    <!-- Boxicons CSS for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper CSS for carousel -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Easy To Buy</title>
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Logo with Boxicon basket icon -->
        <a href="#" class="logo"><i class='bx bxs-basket'></i>Delicacy</a>
        <!-- Menu Icon for mobile navigation -->
        <div class="bx bx-menu" id="menu-icon"></div>
        <!-- Navigation List -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#products">Product</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>
        <!-- Profile Section -->
        <div class="profile">
            <!-- Placeholder image for profile -->
            <img src="./assets/profile.png" alt="User Profile Picture"> <!-- Restored original path -->
            <span>Abdul Karim</span>
            <i class='bx bx-caret-down'></i>
        </div>
    </header>
    <!-- End Of Header Section -->

    <!-- Home Section - Swiper Carousel -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are Delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class="bx bx-right-arrow-alt"></i></a>
                </div>
                <!-- Image for Slide 1 -->
                <img src="./assets/home1.png" alt="Chicken Salad 1"> <!-- Restored original path -->
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are Delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class="bx bx-right-arrow-alt"></i></a>
                </div>
                <!-- Image for Slide 2 -->
                <img src="./assets/home2.png" alt="Chicken Salad 2"> <!-- Restored original path -->
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are Delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br>chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
                </div>
                <!-- Image for Slide 3 -->
                <img src="./assets/home3.png" alt="Chicken Salad 3"> <!-- Restored original path -->
            </div>
        </div>
        <!-- Swiper Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- Home Section Ended -->

    <!-- Categories Section -->
    <section class="categories" id="categories">
        <div class="heading">
            <h1>Browse Our Hottest <br><span>Categories</span></h1>
            <a href="#" class="btn">See All<i class="bx bx-right-arrow-alt"></i></a>
        </div>
        <div class="categories-container">
            <!-- Category Box 1: Fruits -->
            <div class="box box1">
                <img src="./assets/cate1.png" alt="Fruits Category"> <!-- Restored original path -->
                <h2>Fruits</h2>
                <span>10 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            <!-- Category Box 2: Vegetables -->
            <div class="box box2">
                <img src="./assets/cate2.png" alt="Vegetables Category"> <!-- Restored original path -->
                <h2>Vegetables</h2>
                <span>20 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            <!-- Category Box 3: Drinks -->
            <div class="box box3">
                <img src="./assets/cate3.png" alt="Drinks Category"> <!-- Restored original path -->
                <h2>Drinks</h2>
                <span>5 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            <!-- Category Box 4: Fresh Nuts -->
            <div class="box box4">
                <img src="./assets/cate4.png" alt="Fresh Nuts Category"> <!-- Restored original path -->
                <h2>Fresh Nuts</h2>
                <span>06 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="heading">
            <h1>Our Popular <br><span>Products</span></h1>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="product-container">
            <!-- Product Box 1 -->
            <div class="box">
                <img src="./assets/p1.png" alt="Product 1" /> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
            <!-- Product Box 2 -->
            <div class="box">
                <img src="./assets/p2.png" alt="Product 2"> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
            <!-- Product Box 3 -->
            <div class="box">
                <img src="./assets/p3.png" alt="Product 3"> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
            <!-- Product Box 4 -->
            <div class="box">
                <img src="./assets/p4.png" alt="Product 4"> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
            <!-- Product Box 5 -->
            <div class="box">
                <img src="./assets/p5.png" alt="Product 5"> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
            <!-- Product Box 6 -->
            <div class="box">
                <img src="./assets/p6.png" alt="Product 6"> <!-- Restored original path -->
                <span>Fresh Items</span>
                <h2>Farm fresh organic <br>fruits 250gm</h2>
                <h3 class="price">200 <span>/kg</span></h3>
                <i class="bx bx-cart-alt"></i>
                <i class="bx bx-heart"></i>
                <span class="discount">-25%</span>
            </div>
        </div>
    </section>
    <!-- Products Section End -->

    <!-- About Section -->
    <section class="about" id="about">
        <!-- About Us Image -->
        <img src="./assets/about.png" alt="About Us Image"> <!-- Restored original path -->
        <div class="about-text">
            <span>About us</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus hic, ipsum odit optio ipsa illo id
                quibusdam ab. Numquam dolores atque quam rerum architecto incidunt minus a hic temporibus eos!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, laborum ea?</p>
            <a href="#" class="btn">Learn More<i class="bx bx-right-arrow-alt"></i></a>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Customers Section (Testimonials) -->
    <section class="customers" id="customers">
        <h2>Why Customer's Love us?</h2>
        <!-- Customer Reviews Container -->
        <div class="customers-container">
            <!-- Review 1 -->
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam odit inventore sequi
                    delectus esse ut, exercitationem, sed vero illum veniam quibusdam nisi aut culpa! Minima vel
                    explicabo numquam ipsa!</p>
                <div class="review-profile">
                    <img src="./assets/c1.jpg" alt="Millie Bobby Profile"> <!-- Restored original path -->
                    <h3>Millie Bobby</h3>
                </div>
            </div>
            <!-- Review 2 -->
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, doloremque! Quod recusandae dolorum
                    necessitatibus saepe aut odio adipisci officiis libero, sapiente nemo vitae vel, alias doloribus
                    illo doloremque perferendis eligendi!</p>
                <div class="review-profile">
                    <img src="./assets/c2.jpg" alt="Steve Smith Profile"> <!-- Restored original path -->
                    <h3>Steve Smith</h3>
                </div>
            </div>
            <!-- Review 3 -->
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, doloremque! Quod recusandae dolorum
                    necessitatibus saepe aut odio adipisci officiis libero, sapiente nemo vitae vel, alias doloribus
                    illo doloremque perferendis eligendi!</p>
                <div class="review-profile">
                    <img src="./assets/c3.jpg" alt="Michael Brown Profile"> <!-- Restored original path -->
                    <h3>Michael brown</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Customers Section End -->

    <!-- Footer Section -->
    <section class="footer" id="footer">
        <div class="footer-box">
            <!-- Footer Logo -->
            <a href="#" class="logo"><i class='bx bxs-basket'></i>Delicacy</a>
            <p>GymVast, ABC Street,4th<br>Floor, NYC 140002</p>
            <!-- Social Media Icons -->
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h2>Categories</h2>
            <a href="#"> Fruits & vegetables</a>
            <a href="#">Dairy Products</a>
            <a href="#">Package Food</a>
            <a href="#">Beverages</a>
        </div>
        <div class="footer-box">
            <h2>Useful links</h2>
            <a href="#">Payment & Tax</a>
            <a href="#">Terms of Us</a>
            <a href="#">My Blog</a>
            <a href="#">Return Policy</a>
        </div>
        <div class="footer-box">
            <h2>Newsletter</h2>
            <p>Get 10% Discount with <br>Email Newsletter</p>
            <form action="">
                <i class="bx bxs-envelope"></i>
                <input type="email" name="" id="" placeholder="Enter your email">
                <i class="bx bx-arrow-back bx-rotate-180"></i>
            </form>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Copyright Section -->
    <div class="copyright">
        <p>&#169; Delicacy Copyright All Right Reserved</p>
    </div>

    <!-- Swiper JS for carousel functionality -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Custom JavaScript file -->
    <script src="./index.js"></script>
</body>
</html>
