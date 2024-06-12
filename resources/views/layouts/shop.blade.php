<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Online store Perfinad</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('sh/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('sh/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('sh/assets/css/owl.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>PERFINAD ONLINE STORE<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/shop">Products
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/cart">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="checkout.html">Checkout</a>
                    </li>

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>--}}

{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="about.html">About Us</a>--}}
{{--                            <a class="dropdown-item" href="blog.html">Blog</a>--}}
{{--                            <a class="dropdown-item" href="testimonials.html">Testimonials</a>--}}
{{--                            <a class="dropdown-item" href="terms.html">Terms</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="contact.html">Contact Us</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>
</header>

{{$slot}}


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

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Additional Scripts -->
<script src="{{ asset('sh/assets/js/custom.js') }}"></script>
<script src="{{ asset('sh/assets/js/owl.js') }}"></script>
<script src="{{ asset('sh/assets/js/slick.js') }}"></script>
<script src="{{ asset('sh/assets/js/isotope.js') }}"></script>
<script src="{{ asset('sh/assets/js/accordions.js') }}"></script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; // set a cleared flag for each field
    function clearField(t){                   // declaring the array outside of the
        if(!cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
//     comment
</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const paragraphs = document.querySelectorAll('.blog-posts .down-content p');
        paragraphs.forEach(paragraph => {
            let text = paragraph.innerText;
            if (text.length > 50) {
                paragraph.innerText = text.substring(0, 50) + '...see more';
            }
        });
    });
</script>
<style>
    .footer {
        background-color: #333;
        color: #fff;
        padding: 50px 0;
    }

    .footer .container {
        display: flex;
        justify-content: space-between;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer h4 {
        font-size: 20px;
        margin-bottom: 15px;
    }

    .footer ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .footer ul li {
        margin-bottom: 10px;
    }

    .footer ul li a {
        color: #fff;
        text-decoration: none;
    }

    .footer .social-links a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: #fff;
        color: #333;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .footer .social-links a:hover {
        background-color: #007bff;
        color: #fff;
    }
</style>
</body>
</html>
