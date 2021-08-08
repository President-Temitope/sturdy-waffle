@extends('site::layouts.master')
@section('content')
    <!-- Banners Start -->
    <div class="banner about" id="home" style="background-image: url('assets/img/bg-2.html')">
        <!-- hero-area Start -->
        <div class="hero-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="banner-content">
                            <h2 class="title">About Us</h2>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index-2.html">Home</a> <i class="flaticon-airplane49"></i>
                                </li>
                                <li>
                                    About Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="about-thumb wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="assets/img/about.html" alt="about" class="about-img">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-content">
                        <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <h4 class="lasthead">A Few Words About Us</h4>
                            <h2 class="title">We’re empowering teams to achieve greatness together.</h2>
                            <p class="text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, consectetur harum.
                                Dolor aut, modi nulla harum eius dolorum accusantium, autem saepe eum optio, quibusdam
                                vero quis sequi ut qui laudantium.
                            </p>
                        </div>
                        <div class="counter-area-5">
                            <div class="page-counter wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="counter-thumb">
                                    <img src="assets/img/counter1.png" alt="counter">
                                </div>
                                <div class="counter-item">
                                    <h2 class="title"><span class="count-num">45</span>k</h2>
                                    <p class="text">Total User</p>
                                </div>
                            </div>
                            <div class="page-counter wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                                <div class="counter-thumb">
                                    <img src="assets/img/counter2.png" alt="counter">
                                </div>
                                <div class="counter-item">
                                    <h2 class="title"><span class="count-num">90</span>+</h2>
                                    <p class="text">Countries</p>
                                </div>
                            </div>
                            <div class="page-counter wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <div class="counter-thumb">
                                    <img src="assets/img/counter3.png" alt="counter">
                                </div>
                                <div class="counter-item">
                                    <h2 class="title"><span class="count-num">95</span>%</h2>
                                    <p class="text">Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chart Section Start -->
    <section class="chart-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="title">Investing by Millions of People</h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, consectetur harum.
                            Dolor aut, modi nulla harum eius dolorum accusantium, autem saepe eum optio, quibusdam
                            vero quis sequi ut qui laudantium.
                        </p>
                    </div>
                    <div class="page-counter wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="counter-item">
                            <p class="text">Total Investor</p>
                            <h2 class="title"><span class="count-num">7,240,019</span></h2>
                        </div>
                    </div>
                    <div class="page-counter wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="counter-item">
                            <p class="text">Profit Every Week</p>
                            <h2 class="title"><span class="count-num">300</span>k</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div id="chart">
                        <div id="timeline-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  History-section Start -->
    <section class="history-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h4 class="lasthead">Our history</h4>
                        <h2 class="title">How We Became Successful</h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, consectetur harum.
                            Dolor aut, modi nulla harum eius dolorum accusantium, autem saepe eum optio, quibusdam
                            vero quis sequi ut qui laudantium.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="history-slider owl-carousel owl-theme">
                        <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="history-content">
                                <div class="content">
                                    <h6 class="title">We Are Growing</h6>
                                    <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                                </div>
                            </div>
                            <div class="history-thumb">
                                <div class="anime-item-2"></div>
                                <span>2014</span>
                            </div>
                        </div>
                        <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="history-content">
                                <div class="content">
                                    <h6 class="title">We Are Growing</h6>
                                    <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                                </div>
                            </div>
                            <div class="history-thumb">
                                <div class="anime-item-2"></div>
                                <span>2015</span>
                            </div>
                        </div>
                        <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="history-content">
                                <div class="content">
                                    <h6 class="title">We Are Growing</h6>
                                    <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                                </div>
                            </div>
                            <div class="history-thumb">
                                <div class="anime-item-2"></div>
                                <span>2016</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <div class="team-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h4 class="lasthead">Meet our most valued</h4>
                        <h2 class="title">Expert Team Members</h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, consectetur harum.
                            Dolor aut, modi nulla harum eius dolorum accusantium, autem saepe eum optio, quibusdam vero
                            quis sequi ut qui laudantium.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team  owl-carousel owl-theme">
                        <div class="team-single item wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                            <div class="thumb">
                                <img src="assets/img/avatar-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text"><a href="#">Alex Love</a></h5>
                                <p class="text">Manager</p>
                            </div>
                        </div>
                        <div class="team-single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="thumb">
                                <img src="assets/img/avatar-2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text"><a href="#">Kathy Holt</a></h5>
                                <p class="text">Art Director</p>
                            </div>
                        </div>
                        <div class="team-single item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="thumb">
                                <img src="assets/img/avatar-3.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text"><a href="#">Steven Mann</a></h5>
                                <p class="text">Devoloper</p>
                            </div>
                        </div>
                        <div class="team-single item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="thumb">
                                <img src="assets/img/avatar-4.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text"><a href="#">Cody Wilson</a></h5>
                                <p class="text">CEO </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testomonial Start -->
    <div class="testomonial about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="upper-content">
                        <h4 class="lasthead">Testimonials</h4>
                        <h2 class="title">5000+ happy clients all around the world</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testo-box owl-carousel owl-theme">
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer1.png" alt="">
                                </div>
                                <h2 class="name">Martha Vargas</h2>
                                <h5>Founder of Pinterest</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer-2.png" alt="">
                                </div>
                                <h2 class="name">Chris Bates</h2>
                                <h5>Founder of Facebook</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer-3.png" alt="">
                                </div>
                                <h2 class="name">Alfredo Harrison</h2>
                                <h5>Founder of Tesla</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer-4.png" alt="">
                                </div>
                                <h2 class="name">Ellis Phillips</h2>
                                <h5>Founder of Pinterest</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer-2.png" alt="">
                                </div>
                                <h2 class="name">Andrew Owens</h2>
                                <h5>Founder of Pinterest</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                        <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="person">
                                <div class="tumb">
                                    <img src="assets/img/reviewer-4.png" alt="">
                                </div>
                                <h2 class="name">Myron Castillo</h2>
                                <h5>Founder of Gobuy</h5>
                            </div>
                            <div class="content">
                                <h4 class="lasthead">
                                    “Very helpful excellent service always answering all my questions And the most
                                    important thing was that wat they offer me is wat it was I highly recommended thanks
                                    for all the help keep up the good work”
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
