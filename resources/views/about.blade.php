<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>PERFINAD</title>


    <!-- Bootstrap core CSS -->
    <link href="js-files/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/random.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
<div class="page-heading normal-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Committed to Excellence in Financial Advisory</h6>
                <h2>View more About Us</h2>
                <span>Home > <a href="#"> Details</a></span>
                <div class="buttons">
                    <div class="main-button">
                        <a href="explore.html">Youtube channel</a>
                    </div>
                    <div class="border-button">
                        <a href="create.html">Facebook Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Building a <em>Secure </em>  Financial Tomorrow</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="left-image">
                    <img src="assets/images/team2.jpeg" alt="" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <h4>About Us</h4>
                <span class="author">
            <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Perfinad<br><a href="#">@lperfinad.com</a></h6>
          </span>
                <p>Founded in 2023, Perfinad is dedicated to transforming financial advisory services. Our team of expert advisors and dedicated employees work tirelessly to provide personalized financial solutions, helping our clients achieve their financial goals. We specialize in offering tailored advice, financial planning, and wealth management. As we look to the future, we aim to enhance our services with advanced technologies and innovative strategies to better serve our clients and lead the industry in financial advisory excellence.</p>
{{--                <div class="row">--}}
{{--                    <div class="col-3">--}}
{{--              <span class="bid">--}}
{{--                Current Bid<br><strong>6.06 ETH</strong><br><em>($8,025.50)</em>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--              <span class="owner">--}}
{{--                Owner<br><strong>David Walker</strong><br><em>(@davidwalker)</em>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-5">--}}
{{--              <span class="ends">--}}
{{--                Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(January 22nd, 2021)</em>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <form action="submit">--}}
{{--                    <label for="quantity-text">Place Bid:</label>--}}
{{--                    <input placeholder="1 ETH" class="quantity-text">--}}
{{--                    <button type="submit" id="form-submit" class="main-button">Submit Now</button>--}}
                </form>
            </div>
            <div class="col-lg-12">
                <div class="current-bid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mini-heading"><h4>Meet our expert teams</h4></div>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                                    <option selected>Sort By: Latest</option>
                                    <option type="checkbox" name="option1" value="old">Sort By: Oldest</option>
                                    <option value="low">Sort By: Lowest</option>
                                    <option value="high">Sort By: Highest</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/mgt.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>Management <br> </br>Team</h4>
                                    <a href="#">management<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2023.12.03</em></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/legal2.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>Legal <br> </br>Team</h4>
                                    <a href="#">legal<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2023.12.25</em></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/hr.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>HR <br> </br>Team</h4>
                                    <a href="#">hr<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2024.05.03</em></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/fin.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>Financial <br> </br>Team</h4>
                                    <a href="#">financial<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2023.12.31</em></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/audit.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>Audit <br> </br>Team</h4>
                                    <a href="#">audit<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2024.06.07</em></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="left-img">
                                    <img src="assets/images/tax.jpg" alt="" >
                                </div>
                                <div class="right-content">
                                    <h4>TAX <br> </br>Team</h4>
                                    <a href="#">tax<br>@perfinad.com</a>
                                    <div class="line-dec"></div>
                                    <h6>Est :<em>2024.06.07</em></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="create-nft">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Join Perfinad and Simplify Your Financial Journey!</h2>
                </div>
            </div>
            <div class="col-lg-4">
{{--                <div class="main-button">--}}
{{--                    <a href="create.html">Create Your NFT Now</a>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-4">
                <div class="item first-item">
                    <div class="number">
                        <h6>1</h6>
                    </div>
                    <div class="icon">
                        <img src="assets/images/icon-02.png" alt="">
                    </div>
                    <h4>Why Should You Choose Us?</h4>
                    <p>Perfinad offers personalized financial advice tailored to your unique needs. Our expert advisors use data-driven strategies to ensure optimal financial health and growth, providing you with peace of mind and a clear path to achieving your financial goals.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item second-item">
                    <div class="number">
                        <h6>2</h6>
                    </div>
                    <div class="icon">
                        <img src="assets/images/icon-04.png" alt="">
                    </div>
                    <h4>Our Mision</h4>
                    <p>Our mission is to empower individuals and businesses with the knowledge and tools needed to achieve financial stability and prosperity. We strive to provide expert guidance, education, and support, helping our clients make informed decisions and secure their financial future.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon">
                        <img src="assets/images/icon-06.png" alt="">
                    </div>
                    <h4>Our Vision</h4>
                    <p>We envision a world where everyone has access to expert financial guidance, leading to a more financially secure future for all. By leveraging technology and human expertise, Perfinad aims to bridge the gap between financial challenges and solutions, promoting financial well-being globally.</p>
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
<script src="assets/js/app1.js"></script>

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
