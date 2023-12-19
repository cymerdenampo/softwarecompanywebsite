@extends('layouts.app')

@section('content')
    <div class="hero_area">
        @include('layouts.header')
        <section class=" slider_section position-relative">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>



                                            <h2>
                                                welcome to

                                            </h2>
                                            <h1>
                                                Software Company Website
                                            </h1>
                                            <p>
                                                Welcome to our software company, where innovation meets expertise. We're
                                                dedicated to revolutionizing technology, creating bespoke solutions that
                                                drive success. Our passion lies in empowering businesses through
                                                cutting-edge software. Join us on this journey of innovation and
                                                transformation.
                                            </p>
                                            <div class="">
                                                <a href="contact">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h2>
                                                welcome to

                                            </h2>
                                            <h1>
                                                Software Company Website
                                            </h1>
                                            <p>
                                                Step into a realm of limitless possibilities with our software company.
                                                We're dedicated to pioneering innovation, delivering tailor-made solutions
                                                that redefine industry standards. At the intersection of technology and
                                                creativity, we're here to elevate your business to new heights. Join us in
                                                shaping a future powered by innovation and excellence.
                                            </p>
                                            <div class="">
                                                <a href="contact">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h2>
                                                welcome to

                                            </h2>
                                            <h1>
                                                Software Company Website
                                            </h1>
                                            <p>
                                                Explore the forefront of innovation with our software company. We specialize
                                                in crafting bespoke solutions that redefine what's possible. Our team merges
                                                expertise with creativity to propel businesses forward. Join us as we pave
                                                the way for a future driven by groundbreaking technology.
                                            </p>
                                            <div class="">
                                                <a href="contact">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="who_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{{ asset('cymer/images/who-img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Services Information
                            </h2>
                        </div>
                        <p>
                            Software Company Website Service Integration Platform: A Comprehensive Resource Hub for Software
                            Engineers
                            and Web Developers, Offering Seamless Integration, Information Consolidation, and Streamlined
                            Service Management with Advanced Analytics and Reporting Capabilities
                        </p>
                        <div>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="do_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Services Offer Information
                </h2>
                <h2>
                    We Do
                </h2>
                <p>
                    Services Offered: Web Development, Mobile Development, Project Management.
                </p>
            </div>
            <div class="do_container">
                <div class="box arrow-start arrow_bg">
                    <div class="img-box">
                        <img src="{{ asset('cymer/images/d-2.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Web <br>
                            Development
                        </h6>
                    </div>
                </div>
                <div class="box arrow-middle arrow_bg">
                    <div class="img-box">
                        <img src="{{ asset('cymer/images/mobile.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            mobile <br>
                            Development
                        </h6>
                    </div>
                </div>
                <div class="box arrow_bg">
                    <div class="img-box">
                        <img src="{{ asset('cymer/images/project.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Project <br>
                            Management
                        </h6>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="client_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    WHAT CUSTOMERS SAY
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('cymer/images/c-1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Tempor incididunt <br>
                                    <span>
                                        Dipiscing elit
                                    </span>
                                </h5>
                                <img src="{{ asset('cymer/images/quote.png') }}" alt="">
                                <p>
                                    Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('cymer/images/c-2.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Tempor incididunt <br>
                                    <span>
                                        Dipiscing elit
                                    </span>
                                </h5>
                                <img src="{{ asset('cymer/images/quote.png') }}" alt="">
                                <p>
                                    Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('cymer/images/c-3.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Tempor incididunt <br>
                                    <span>
                                        Dipiscing elit
                                    </span>
                                </h5>
                                <img src="{{ asset('cymer/images/quote.png') }}" alt="">
                                <p>
                                    Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @include('layouts.footer') --}}
@endsection

@push('css')
    <style>
        .logo img {
            border-radius: 100px !important;
        }
    </style>
@endpush
