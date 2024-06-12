<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                        <li><a href="{{url('shop')}}"><i class="fa fa-shopping-cart"></i> <b>Shop</b></a></li>


                        {{--                        <li><a href="create.html"><b>Contact Us</b></a></li>--}}
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
                    <h2>Discover Some more <em>Services</em>.</h2>
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
                            <span class="banner">Double Service</span>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                <span class="author">
                   <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/estate.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Estate Planning</h4>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                <span class="author">
                   <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/wealth.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Wealth Management</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                  <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/business.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Business Advisory</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                  <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/insuarance.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Insurance Planning</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                  <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/fin2.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Financial Planning</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                 <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/prep.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Tax Preparation</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                   <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/real.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Real Estate Advisory</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                  <img src="assets/images/logo5.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                            <img src="assets/images/forensic.jpeg" alt="" style="border-radius: 20px;">
                            <h4>Forensic Accounting</h4>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="#">View Details</a>
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
                    <h2>Our Valuable Prtnerships</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>1.</h4>
                            <img src="assets/images/sl.jpeg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Sri Lanka Insuarance<br><a href="#">Gold partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>2.</h4>
                            <img src="assets/images/alli.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Allianz Finance<br><a href="#">Gold Partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>3.</h4>
                            <img src="assets/images/aia.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>AIA Insuarance<br><a href="#">Platinum Partner</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>4.</h4>
                            <img src="assets/images/coop.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>CO-OP Finance<br><a href="#">Silver Partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>5.</h4>
                            <img src="assets/images/pan.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Pan-Asia Bank<br><a href="#">Gold partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>6.</h4>
                            <img src="assets/images/cargills.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Cargills Bank<br><a href="#">Silver partner</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>7.</h4>
                            <img src="assets/images/peoples.jpeg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Peoples Bank<br><a href="#">Gold partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>8.</h4>
                            <img src="assets/images/boc.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>BOC Bank<br><a href="#">Silver partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>9.</h4>
                            <img src="assets/images/com.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Commercial Bankr<br><a href="#">Gold partner</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>10.</h4>
                            <img src="assets/images/UB.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>UB Finance<br><a href="#">Gold partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>11.</h4>
                            <img src="assets/images/fintrex.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Fintrex finance<br><a href="#">Silver Partner</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h4>12.</h4>
                            <img src="assets/images/dialog.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Dialog Finance<br><a href="#">Silver partner</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer start -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <a href="index.html" class="logo">
                    <img src="assets/images/logo6.png" alt="" style="width: 220px; height: 80px;">
                </a>
            </div>
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">DVDs</a></li>
                    <li><a href="#">Recordings</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6661f57b9a809f19fb3a513f/1hvnadrmk';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
</body>
</html>
