<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="{{config('app.name')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=== Reset Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!--=== Bootstrap ===-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--=== Fontawesome icon ===-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-5.10.2.min.css')}}">
    <!--=== Owl-Carousel ===-->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/owl.carousel.min.css')}}">
    <!--=== Magnific Popup===-->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/magnific-popup.css')}}">
    <!--=== Nice select Popup===-->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/nice-select.css')}}">
    <!--=== Animation Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/animate.css')}}">
    <!--=== Main Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--=== Responsive Css ===-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
<!-- ==========Preloader========== -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->

<!-- Main-menu Strat -->
<div class="mein-menu">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/logo.svg')}}" class="logo" alt="{{config('app.name')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                {{--    <li class="nav-item">
                        <div class="language-select">
                            <select class="select-bar">
                                <option value="">EN</option>
                                <option value="">IN</option>
                                <option value="">BN</option>
                            </select>
                        </div>
                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('affiliate')}}">Affiliate</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                           aria-expanded="false">{{Auth::user()->fullName()}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Features</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                                                                                       style="display: none;">@csrf</form></li>
{{--
                            <li><a class="dropdown-item" href="registration.html">Registration</a></li>
--}}
                        </ul>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link button-1" href="{{route('register')}}">Start Now !</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Main-menu End -->
@yield('content')
<!-- Footer Start -->
<div class="footer" style="background-image: url('assets/img/footer-bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                <div class="footer-box">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/img/logo.svg')}}" alt="">
                    </a>
                    <p class="text">
                        crypto investment platform where you can earn on the currency of the future
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="footer-box">
                    <h4 class="lasthead">Company</h4>
                    <ul class="footer-link">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('affiliate')}}">Affiliate</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="footer-box">
                    <h4 class="lasthead">Support</h4>
                    <ul class="footer-link">
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="footer-box">
                    <h4 class="lasthead">Policy</h4>
                    <ul class="footer-link">
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="footer-box">
                    <h4 class="lasthead">Contacts</h4>
                    <ul class="footer-link">
                        <li>support@{{config('app.name')}} </li>
                        <li>+372 624 6211 </li>
                        <li>+372 624 600</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                <div class="raka"></div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="footer-bottom">
                    <p class="text">Copyright @php echo date('Y'); @endphp.All Rights Reserved By <a href="#">{{config('app.name')}}</a> </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="footer-bottom">
                    <div class="social-style">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Scroll To Top Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top End ======-->

<!--==================================================================-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/proper-min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--=== All Plugin ===-->
<script src="{{asset('assets/js/plugin/waypoint.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery.rcounter.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/wow.min.js')}}"></script>

<!--=== All Active ===-->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
