<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="js-files/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/random.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo3.png" alt="" style="width: 190px; height: 70px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active"><b>Home</b></a></li>
                        <li><a href="/about"><b>About Us</b></a></li>
                        <li><a href="/service"><b>Services</b></a></li>
                        {{--                        <li><a href="author.html"><b>Our Team</b></a></li>--}}
                        <li><a href="{{url('shop')}}"><b>Shop</b></a></li>

                        <li><a href="create.html"><b>Contact Us</b></a></li>
                        <li>      @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><p id="qq">Hi, {{Auth::user()->name}}</p></a>
                                    @else
                                        <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a> -->

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><b>Login/Register</b></a>
                                        @endif
                                    @endauth
                                </div>
                            @endif</li>


                        <!-- <li><a href="create.html">Login</a></li> -->
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>PerFinAd Your Financial Advisory</h6>
                <h2>Discover our Top Services</h2>
                <span>Home > <a href="#">Explore</a></span>
            </div>
        </div>
    </div>
    <div class="featured-explore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/acc.jpeg" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Accounting Services</h4>
                                        <span class="author">
                        <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>PerFinAd</h6>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/risk.jpeg" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Risk Management</h4>
                                        <span class="author">
                        <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>PerFinAd</h6>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/debt.jpeg" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Debt Management</h4>
                                        <span class="author">
                        <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>PerFinAd</h6>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/audit.jpeg" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Audit Services</h4>
                                        <span class="author">
                        <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>PerFinAd</h6>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/ret.jpeg" alt="" style="border-radius: 20px;">
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>Retirement Planing </h4>
                                        <span class="author">
                        <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>PerFinAd</h6>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="discover-items">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Discover Some Of Our <em>Items</em>.</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <form id="search-form" name="gs" method="submit" role="search" action="#">
                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset>
                                <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <fieldset>
                                <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                                    <option selected>All Categories</option>
                                    <option type="checkbox" name="option1" value="Music">Music</option>
                                    <option value="Digital">Digital</option>
                                    <option value="Blockchain">Blockchain</option>
                                    <option value="Virtual">Virtual</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <fieldset>
                                <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                                    <option selected>Available</option>
                                    <option value="Ending-Soon">Ending Soon</option>
                                    <option value="Coming-Soon">Coming Soon</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button class="main-button">Search</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="banner">Double Item</span>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-01.jpg" alt="" style="border-radius: 20px;">
                            <h4>Mutant Ape Bored</h4>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-02.jpg" alt="" style="border-radius: 20px;">
                            <h4>His Other Half</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <span>Category: <br> <strong>Digital Art</strong></span>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <span>Collection:: <br> <strong>2/2</strong></span>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                            <h4>Genesis Meta Boom</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>26th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                            <h4>Another Half Ape</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>24th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                            <h4>Pixel Sand Box</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                            <h4>Another Half Ape</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                            <h4>Invisible NFT Land</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                            <h4>Another Half Ape</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="line-dec"></div>
                            <div class="row">
                                <div class="col-6">
                                    <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                                </div>
                                <div class="col-6">
                                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="details.html">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-seller">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Our Top Sellers This Week.</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>1.</h4>
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>NFT Top Artist<br><a href="#">8.6 ETH or $12,000</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>2.</h4>
                            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>George Brandon<br><a href="#">4.8 ETH or $14,000</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>3.</h4>
                            <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Johnny Mayson<br><a href="#">6.2 ETH or $26,000</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>4.</h4>
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">4.5 ETH or $11,600</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>5.</h4>
                            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Ronald Martino<br><a href="#">7.2 ETH or $14,500</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>6.</h4>
                            <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Anthony Brown<br><a href="#">8.6 ETH or $7,400</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>7.</h4>
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">9.8 ETH or $14,200</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>8.</h4>
                            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Ronald Martino<br><a href="#">6.5 ETH or $15,000</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>9.</h4>
                            <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>David Walker<br><a href="#">2.5 ETH or $12,000</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>10.</h4>
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">8.8 ETH or $16,800</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>11.</h4>
                            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Anthony Brown<br><a href="#">7.5 ETH or $15,400</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>12.</h4>
                            <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>David Walker<br><a href="#">5.2 ETH or $12,300</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2022 <a href="#">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>

<script src="assets/js/tabs.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
