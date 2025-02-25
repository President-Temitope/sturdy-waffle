@section('content')
<!-- Banners Start -->
<div class="banner" id="home" style="background-image: url('assets/img/banner-bg.png')">
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h3 class="subtitle wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Welcome to
                            {{config('app.name')}}</h3>
                        <h1 class="head wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">The simplest
                            way to invest in crypto</h1>
                        <p class="text wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            We've helped over 10,000 people start Bitcoin
                            investing. Build your future.
                        </p>
                        <a href="{{route('register')}}" class="button button-1 wow fadeInUp" data-wow-duration="0.3s"
                           data-wow-delay="0.3s">Start Now !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Compare Start -->
<div class="compare" id="currency">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coin-box owl-carousel owl-theme">
                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="single">
                            <div class="icon">
                                <img src="{{asset('assets/img/coin-icon-1.png')}}" alt="" class="coin-icon">
                                <p class="text">Bitcoin <span>BTC</span></p>
                            </div>
                            <h4 class="lasthead">$10,260.74 <span>+2.01%</span></h4>
                            <p class="text">Price (24 hours)</p>
                        </div>
                    </div>
                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                        <div class="single">
                            <div class="icon">
                                <img src="{{asset('assets/img/coin-icon-2.png')}}" alt="" class="coin-icon">
                                <p class="text">Ethereum <span>ETH</span></p>
                            </div>
                            <h4 class="lasthead">$352.72 <span>+7.34%</span></h4>
                            <p class="text">Price (24 hours)</p>
                        </div>
                    </div>
                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                        <div class="single">
                            <div class="icon">
                                <img src="{{asset('assets/img/coin-icon-3.png')}}" alt="" class="coin-icon">
                                <p class="text">Litecoin <span>LTC</span></p>
                            </div>
                            <h4 class="lasthead">$48.24 <span>+2.59%</span></h4>
                            <p class="text">Price (24 hours)</p>
                        </div>
                    </div>
                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <div class="single">
                            <div class="icon">
                                <img src="{{asset('assets/img/coin-icon-4.png')}}" alt="" class="coin-icon">
                                <p class="text">Dash <span>DASH</span></p>
                            </div>
                            <h4 class="lasthead">$68.64 <span>+1.23%</span></h4>
                            <p class="text">Price (24 hours)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature Start -->
<div class="feature" id="feature">
    <div class="shap">
        <img src="{{asset('assets/img/feature-shap.png')}}" alt="" class="fshap">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="upper-content">
                    <h4 class="lasthead wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Why choose
                        {{config('app.name')}}</h4>
                    <h2 class="title wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Effortless crypto
                        investing</h2>
                    <p class="text wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        The simple way to grow your money like the world’s most sophisticated investors.
                    </p>
                    <a href="{{route('register')}}" class="button button-1 wow fadeInUp" data-wow-duration="0.3s"
                       data-wow-delay="0.3s">Sign up for free </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="feature-box one">
                            <div class="tumb">
                                <img src="{{asset('assets/img/feature-icon-1.png')}}" alt="">
                            </div>
                            <p class="text">
                                The fast & simpleway to Invest crypto
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                        <div class="feature-box two">
                            <div class="tumb">
                                <img src="{{asset('assets/img/feature-icon-2.png')}}" alt="">
                            </div>
                            <p class="text">
                                Professional, Safe & Secure
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <div class="feature-box three">
                            <div class="tumb">
                                <img src="{{asset('assets/img/feature-icon-3.png')}}" alt="">
                            </div>
                            <p class="text">
                                Multi-Currency Support
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div class="feature-box four">
                            <div class="tumb">
                                <img src="{{asset('assets/img/feature-icon-4.png')}}" alt="">
                            </div>
                            <p class="text">
                                Our people are available for you 24/7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deposit Start -->
<div class="deposit" id="deposit" style="background-image: url('assets/img/deposit-bg.png')">
    <div class="sape">
        <img src="{{asset('assets/img/rdot-1.html')}}" alt="" class="rdot-1">
        <img src="{{asset('assets/img/rdot-2.png')}}" alt="" class="rdot-2">
        <img src="{{asset('assets/img/rdot-3.png')}}" alt="" class="rdot-3">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 m-auto">
                <div class="upper-content text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">Our investment offer</h4>
                    <h2 class="title">Deposit Portfolio</h2>
                    <p class="text">
                        Your total income directly depends on the amount you invest,
                        so the more you contribute, the more you can earn.
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="offer">
                    <h3 class="subtitle">We are Offering</h3>
                    <div class="offer-box" style="background-image: url('assets/img/offer-box-bg.png')">
                        <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="{{asset('assets/img/offer-icon-1.png')}}" alt="" class="offer-icon">
                            </div>
                            <div class="content">
                                <h2 class="pursent">2.00%</h2>
                                <p class="text">Daily Profit</p>
                            </div>
                        </div>
                        <div class="arrow wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <img src="{{asset('assets/img/arrow-right.png')}}" alt="" class="arrow-pic">
                        </div>
                        <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="{{asset('assets/img/offer-icon-2.png')}}" alt="" class="offer-icon">
                            </div>
                            <div class="content">
                                <h2 class="pursent">3.00%</h2>
                                <p class="text">Daily Profit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earningpartners Start -->
<div class="earningpartners">
    <div class="bg">
        <img src="{{asset('assets/img/profit-bg.png')}}" alt="" class="dp-bg">
    </div>
    <div class="deposit-amounts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="subtitle wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Minimum Deposit
                        Amounts</h3>
                    <div class="coin-box">
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-1.png')}}" alt="">
                            </div>
                            <p class="text">0.00100036 BTC</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-2.png')}}" alt="">
                            </div>
                            <p class="text">0.21220267 LTC</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-3.png')}}" alt="">
                            </div>
                            <p class="text">0.02980346 ETH</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-4.png')}}" alt="">
                            </div>
                            <p class="text">0.02980346 DASH</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-5.png')}}" alt="">
                            </div>
                            <p class="text">0.00100036 ETC</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-6.png')}}" alt="">
                            </div>
                            <p class="text">0.21220267 TRX</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-7.png')}}" alt="">
                            </div>
                            <p class="text">0.02980346 BCH</p>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="tumb">
                                <img src="{{asset('assets/img/coin-icon-8.png')}}" alt="">
                            </div>
                            <p class="text">1.21220267 USD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="earning">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center">
                        <div class="content">
                            <h2 class="title wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">How much
                                you will earn?</h2>
                            <div class="compare-box">
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <div class="country">
                                        <img src="{{asset('assets/img/coin-icon-1.png')}}" alt="">
                                        <div class="language-select">
                                            <select class="select-bar">
                                                <option value="">BTC</option>
                                                <option value="">LTC</option>
                                                <option value="">ETH</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <form class="account-form">
                                        <div class="form-group">
                                            <input class="lasthead" type="text" placeholder="02 BTC" id="#"
                                                   name="#">
                                        </div>
                                    </form>
                                </div>
                                <div class="item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                    <a href="#" class="button button-1">Deposit now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Hourly Profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Daily profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Weekly profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="profit-box">
                        <p class="text">Monthly profit</p>
                        <h4 class="rate">0.00256250 <span>BTC</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transaction Start -->
<div class="transaction" id="transaction">
    <div class="bg">
        <img src="{{asset('assets/img/table-bg.png')}}" alt="" class="secton-bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content text-center">
                    <h4 class="lasthead">User Statistics</h4>
                    <h2 class="title">Latest Transaction</h2>
                    <p class="text">
                        Our goal is to simplify investing so that anyone can be an investor.Withthis in mind,
                        we hand-pick the investments we offer on our platform.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="transaction-box">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                <img src="{{asset('assets/img/icon-1.png')}}" alt=""> Last <br> Deposits
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                <img src="{{asset('assets/img/icon-2.png')}}" alt=""> Last <br> withdrawals
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">
                                <img src="{{asset('assets/img/icon-3.png')}}" alt=""> Top <br> investors
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">Daily Dividend</th>
                                        <th scope="col">AMOUNTS</th>
                                        <th scope="col">Deposit by</th>
                                        <th scope="col">Currency</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{asset('assets/img/man-1.png')}}" alt="">
                                            <span> Jim Adams</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-1.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-2.png" alt="">
                                            <span> Willie Barton </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-2.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-3.png" alt="">
                                            <span>Kim Mccoy </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-3.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-4.png" alt="">
                                            <span>Sheryl Tran</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-4.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-5.png" alt="">
                                            <span>Toby Davis</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-5.png" alt="">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">Daily Dividend</th>
                                        <th scope="col">AMOUNTS</th>
                                        <th scope="col">Deposit by</th>
                                        <th scope="col">Currency</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-1.png" alt="">
                                            <span> Jim Adams</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-1.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-2.png" alt="">
                                            <span> Willie Barton </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-2.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-3.png" alt="">
                                            <span>Kim Mccoy </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-3.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-4.png" alt="">
                                            <span>Sheryl Tran</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-4.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-5.png" alt="">
                                            <span>Toby Davis</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-5.png" alt="">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">Daily Dividend</th>
                                        <th scope="col">AMOUNTS</th>
                                        <th scope="col">Deposit by</th>
                                        <th scope="col">Currency</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-1.png" alt="">
                                            <span> Jim Adams</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-1.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-2.png" alt="">
                                            <span> Willie Barton </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-2.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-3.png" alt="">
                                            <span>Kim Mccoy </span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-3.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-4.png" alt="">
                                            <span>Sheryl Tran</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-4.png" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/img/man-5.png" alt="">
                                            <span>Toby Davis</span>
                                        </td>
                                        <td>
                                            $10.50
                                        </td>
                                        <td>
                                            $0.09
                                        </td>
                                        <td>
                                            $718
                                        </td>
                                        <td>21 DAYS</td>
                                        <td>
                                            <img src="assets/img/coin-icon-5.png" alt="">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <a href="{{route('plans')}}" class="button button-1">browse more</a>
            </div>
        </div>
    </div>
</div>

<!-- Counter Start -->
<div class="counter" style="background-image: url('assets/img/counter-bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                <div class="page-counter">
                    <div class="counter-item">
                        <h2 class="title"><span class="count-num">36</span>M</h2>
                        <p class="text">Registered users</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="page-counter">
                    <div class="counter-item">
                        <h2 class="title"><span class="count-num">178</span></h2>
                        <p class="text">Countries supported</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="page-counter">
                    <div class="counter-item">
                        <h2 class="title">$<span class="count-num">10</span>M</h2>
                        <p class="text">Withdrawn each month</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="page-counter four">
                    <div class="counter-item">
                        <h2 class="title"><span class="count-num">18</span>k</h2>
                        <p class="text">Active investors daily</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process Start -->
<div class="process">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 m-auto wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content text-center">
                    <h4 class="lasthead">Watch this video presentation to know more</h4>
                    <h2 class="title">Simple Process to Start</h2>
                    <p class="text">Let's See how it work </p>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="videoo">
                    <img src="{{asset('assets/img/video-bg.png')}}" alt="" class="video-bg">
                    <div class="video-box">
                        <div class="video-img">
                            <a class="youtube-video mfp-iframe video-play-btn video-icon"
                               href="https://www.youtube.com/watch?v=4DCTTrGjGU4">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-text">
                            <p class="text">Watch Video Now</p>
                            <span><i class="far fa-clock"></i> 2:32 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- testomonial Start -->
<div class="testomonial wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"  id="testimonial" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testo-box owl-carousel owl-theme">
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer1.png')}}" alt="">
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
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer-2.png')}}" alt="">
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
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer-3.png')}}" alt="">
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
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer-4.png')}}" alt="">
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
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer-2.png')}}" alt="">
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
                    <div class="single item">
                        <div class="person">
                            <div class="tumb">
                                <img src="{{asset('assets/img/reviewer-4.png')}}" alt="">
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
