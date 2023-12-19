@extends('layouts.app')
@section('content')

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                Esigned
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html"> About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="do.html"> What we do </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="portfolio.html"> Portfolio </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                                <div class="user_option">
                                    <a href="">
                                        <img src="images/user.png" alt="">
                                    </a>
                                    <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
        </div>

        <!-- contact section -->

        <section class="contact_section layout_padding">
            <div class="container">

                <div class="heading_container">
                    <h2>
                        Request A Call Back
                    </h2>
                </div>
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-md-9 mx-auto">
                                <div class="contact-form">
                                    <form action="">
                                        <div>
                                            <input type="text" placeholder="Full Name ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Phone Number">
                                        </div>
                                        <div>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Message" class="input_message">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn_on-hover">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map_img-box">
                    <img src="images/map-img.png" alt="">
                </div>
            </div>
        </section>


        <!-- end contact section -->


        <!-- info section -->
        <section class="info_section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info_contact">
                            <h5>
                                About Shop
                            </h5>
                            <div>
                                <div class="img-box">
                                    <img src="images/location-white.png" width="18px" alt="">
                                </div>
                                <p>
                                    Address
                                </p>
                            </div>
                            <div>
                                <div class="img-box">
                                    <img src="images/telephone-white.png" width="12px" alt="">
                                </div>
                                <p>
                                    +01 1234567890
                                </p>
                            </div>
                            <div>
                                <div class="img-box">
                                    <img src="images/envelope-white.png" width="18px" alt="">
                                </div>
                                <p>
                                    demo@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_info">
                            <h5>
                                Informations
                            </h5>
                            <p>
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info_insta">
                            <h5>
                                Instagram
                            </h5>
                            <div class="insta_container">
                                <div>
                                    <a href="">
                                        <div class="insta-box b-1">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="insta-box b-2">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="">
                                        <div class="insta-box b-3">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="insta-box b-4">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <div class="insta-box b-3">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="insta-box b-4">
                                            <img src="images/insta.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_form ">
                            <h5>
                                Newsletter
                            </h5>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                            <div class="social_box">
                                <a href="">
                                    <img src="images/fb.png" alt="">
                                </a>
                                <a href="">
                                    <img src="images/twitter.png" alt="">
                                </a>
                                <a href="">
                                    <img src="images/linkedin.png" alt="">
                                </a>
                                <a href="">
                                    <img src="images/youtube.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info_section -->
    @endsection
