@extends('layouts.app')
@section('content')
    <section class="home-banner">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active banner-slide"
                    style="background-image:url('./assets/images/banner-2.jpg');">

                    <div class="overlay"></div>

                    <div class="banner-content-wrap">
                        <h1 class="banner-title">Smarter Automation Starts Here</h1>
                    </div>

                    <span class="diagonal-shape"></span>
                </div>

                <div class="carousel-item banner-slide"
                    style="background-image:url('./assets/images/banner-2.webp');">

                    <div class="overlay"></div>

                    <div class="banner-content-wrap">
                        <h1 class="banner-title">Smarter Automation Starts Here</h1>
                    </div>

                    <span class="diagonal-shape"></span>
                </div>

                <div class="carousel-item banner-slide"
                    style="background-image:url('./assets/images/banner-3.webp');">

                    <div class="overlay"></div>

                    <div class="banner-content-wrap">
                        <h1 class="banner-title">Smarter Automation Starts Here</h1>
                    </div>

                    <span class="diagonal-shape"></span>
                </div>

            </div>
        </div>
    </section>

    <section class="about-detail">
        <div class="container">
            <div class="row gy-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 ">
                    <h5 class="main-subtitle">About Our Company</h5>
                    <h5 class="main-title">Welcome to <br class="d-none d-md-block"> <span class="common">PVM Automation & Robotics </span></h5>
                    <p class="about-text">PVM Automation & Robotics is specialized in Design, Manufacture and Constructing an Automation and Robotics for Manufacturing Industry. We are also experts in Developing and Integrating an Assembly Automation for Various Process like Welding, Press Line Feeder Automation and Glue Dispensing Automation.
                        Our experience in the field of the building an Automation has made to a level of integrating the values of our customer needs and understanding them to give the best in terms of quality and cost.</p>
                    <div class="mt-3">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="icon">
                                    <img src="./assets/images/professional-workers.svg" class="img-icon" alt="">
                                </div>
                                <h5 class="about-title"> 100% Satisfaction Work</h5>
                                <p class="about-text">Our dedicated team delivers innovative solutions with precision
                                    and reliability.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="icon">
                                    <img src="./assets/images/24-hours.svg" class="img-icon" alt="">
                                </div>
                                <h5 class="about-title">120+ Satisfied Client</h5>
                                <p class="about-text">Our dedicated team is always available to provide swift and
                                    effective assistance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"><a href="{{ route('companey-profile') }}" class="read-more"><i class="bi bi-arrow-right-circle-fill"></i>Read
                            More</a></div>
                </div>
                <div class=" col-lg-6 col-md-8 ">
                    <div class="ms-lg-5">
                        <div class="img-box">
                            <img src="./assets/images/new-images/about-home.webp" alt="">
                            <img src="./assets/images/new-images/about-home-2.webp" class="small-img" alt="">
                            <div class="about-coun-box">
                                <span class="coun-number">25</span>
                                <h3 class="coun-title">YEARS <br>OF EXPERIENCE</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row gy-4 mt-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="mission-box">
                            <div class="icon">
                                <img src="./assets/images/award-symbol.svg" class="icon-img" alt="">
                            </div>
                            <h5 class="title">Awarded Company</h5>
                            <p class="text">
                                " Recognized for excellence, our company leads in innovation and quality, consistently delivering exceptional results."
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mission-box">
                            <div class="icon">
                                <img src="./assets/images/low-cost.svg" class="icon-img" alt="">
                            </div>
                            <h5 class="title">Flexible & Low Cost</h5>
                            <p class="text">
                               " We offer flexible, cost-effective solutions tailored to your needs without compromising quality or performance. "
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mission-box">
                            <div class="icon">
                                <img src="./assets/images/experince-engineers.svg" class="icon-img" alt="">
                            </div>
                            <h5 class="title">Experienced Engineers</h5>
                            <p class="text">
                                " Backed by skilled engineers, we deliver innovative solutions with precision, expertise, and proven industry knowledge. "
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mission-box">
                            <div class="icon">
                                <img src="./assets/images/dedicated-team.svg" class="icon-img" alt="">
                            </div>
                            <h5 class="title">Dedicated Team</h5>
                            <p class="text">
                               " Driven by passion and commitment, our dedicated team consistently delivers exceptional results focused on your success. "
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dotted-line">
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h6 class="main-subtitle">Products</h6>
                    <h5 class="main-title">Our <span class="common">high-quality Products</span>:</h5>
                </div>
                <div class="col-lg-6">
                    <p class="service-text">Our high-quality Products are designed to exceed expectations, delivering
                        excellence and reliability in every project we
                        undertake.</p>
                    <p class="mt-4 ">
                        <a href="{{ route('assembly-&-automation') }}">
                            <button class="cssbuttons-io-button-blue">
                                All Products
                                <div class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </button>
                        </a>
                    </p>

                </div>
            </div>
            <div class="mt-5">
                <div class="owl-carousel service-slider">
                    <div class="item">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="./assets/images/new-images/home-products-1.webp" alt="">
                                <div class="content-wrapper">
                                    <div class="content-detail">
                                        <h5 class="content-title mb-4">ASSEMBLY AUTOMATION</h5>
                                        <p class="content-text">Products</p>
                                        <div class="read-link">
                                            <a href="{{ route('product-management') }}" class="read-more-link">Read
                                                More<i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="./assets/images/new-images/home-products-2.webp" alt="">
                                <div class="content-wrapper">
                                    <div class="content-detail">
                                        <h5 class="content-title">MACHINE VISION & LASER INSPECTION</h5>
                                        <p class="content-text">Products</p>
                                        <div class="read-link">
                                            <a href="{{ route('maintenance') }}" class="read-more-link">Read
                                                More<i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="./assets/images/new-images/home-products-3.webp" alt="">
                                <div class="content-wrapper">
                                    <div class="content-detail">
                                        <h5 class="content-title">RELIABILITY TESTING AUTOMATION</h5>
                                        <p class="content-text">Products</p>
                                        <div class="read-link">
                                            <a href="{{ route('factory') }}"class="read-more-link">Read
                                                More<i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="./assets/images/new-images/home-products-4.webp" alt="">
                                <div class="content-wrapper">
                                    <div class="content-detail">
                                        <h5 class="content-title mb-4">ROBOTIC AUTOMATION</h5>
                                        <p class="content-text">Products</p>
                                        <div class="read-link">
                                            <a href="{{ route('machinery-move') }}"  class="read-more-link">Read
                                                More<i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dotted-line">
            </div>
        </div>
    </section>


    <section class="why-choose">
        <div class="why-choose-content">
            <div class="row gy-4 gy-lg-0 gx-0">
                <div class="col-lg-6 col-md-9">
                    <div class="p-lg-5">
                        <h6 class="main-subtitle">Why Us</h6>
                        <h5 class="main-title-white">Why Choose <br> <span class="common">PVM automation and robotics ?</span></h5>
                        <p class="why-choose-text">In choosing PVM Automation and Robotics, you select a trusted partner
                            dedicated to elevating your projects. Join us in shaping the future of industries through
                            precision, innovation, and reliable service.</p>
                        <p class="why-choose-text">Clients trust us for our unwavering commitment to delivering
                            reliable solutions and consistently exceeding expectations.</p>
                        <div class="my-4 creative-wrapper">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <div class="icon">
                                        <img src="./assets/images/creativity.svg" alt="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <h5 class="title">Seamless Automation, <br>
                                        and Innovative Robotics Solutions.</h5>
                                </div>
                            </div>
                        </div>
                        <p class="why-choose-text">We approach every project with meticulous attention to detail, ensuring precision
                            is embedded in every aspect of our work.</p>
                        <p class="why-choose-text">Embracing advanced technologies and creative solutions,
                            we bring innovation to the forefront of every service we deliver.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="bg-color">
                        <a id="play-video" class="video-play-button" href="{{ route('video-gallery') }}" >
                            <span></span>
                        </a>
                        <div class="text">We're doing the right thing.
                            The right way.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-box">
                        <img src="./assets/images/new-images/about-img2.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="achivement-detail" id="counter">
        <div class="container">

            <div class="row gy-4 justify-content-evenly">
                <div class="col-lg-2 col-6 col-md-4">
                    <div class="box-wrapper">
                        <p class="box-text">Completed <br>Project</p>
                        <h5 class="box-title count" data-count="450">450 <span> +</span></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-md-4">
                    <div class="box-wrapper">
                        <p class="box-text">Active <br>Clients</p>
                        <h5 class="box-title count" data-count="250">250 <span> +</span></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-md-4">
                    <div class="box-wrapper">
                        <p class="box-text">Experienced <br>Team</p>
                        <h5 class="box-title count" data-count="2.5">2.5 <span>+</span></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-md-4">
                    <div class="box-wrapper">
                        <p class="box-text">Years Of <br>Experience</p>
                        <h5 class="box-title count" data-count="25">25 <span>+</span></h5>
                    </div>
                </div>
            </div>

            <div class="dotted-line">
            </div>
        </div>
    </section>


    <section class="client-service">
        <div class="container">
            <h6 class="main-subtitle">Our Valuable Clients</h6>
            <h5 class="main-title">Our <span class="common">Clients</span></h5>
            <div class="vertical-space-30"></div>
            <div class="owl-carousel client-slider">
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-7.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-8.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-9.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-10.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-11.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="item">
                    <div class="client-box">
                        <div class="icon">
                            <div class="icon-img">
                                <img src="./assets/images/new-images/client-12.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h6 class="main-subtitle-white text-center">Testimonials</h6>
                        <h5 class="main-title-white text-center">What our clients are saying about our company projects
                            and
                            products
                        </h5>
                    </div>
                </div>
            </div>
            <div class="testimonial-box-list">
                <div class="owl-carousel testimonial-slider">
                    <div class="item">
                        <div class="p-1">
                            <div class="testimonial-box">
                                <div class="icon">
                                    <img src="./assets/images/user-1.svg" alt="">
                                </div>
                                <h5 class="title">Anas chulliyil</h5>
                                <p class="sub-text">Maintenance and Adjustment</p>
                                <p class="text">Excellent service! The team quickly adjusted and fine-tuned everything to perfection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="p-1">
                            <div class="testimonial-box">
                                <div class="icon">
                                    <img src="./assets/images/user-3.svg" alt="">
                                </div>
                                <h5 class="title">Noushad</h5>
                                <p class="sub-text">Factory Relocation</p>
                                <p class="text">Seamless factory relocation! The team handled everything efficiently with minimal downtime.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="p-1">
                            <div class="testimonial-box">
                                <div class="icon">
                                    <img src="./assets/images/user-2.svg" alt="">
                                </div>
                                <h5 class="title">Gopika Krishna</h5>
                                <p class="sub-text">Project management</p>
                                <p class="text"> Greatly streamlined our processes, ensuring timely delivery and clear communication. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="p-1">
                            <div class="testimonial-box">
                                <div class="icon">
                                    <img src="./assets/images/user-5.svg" alt="">
                                </div>
                                <h5 class="title">Latheef</h5>
                                <p class="sub-text">Machinery Move</p>
                                <p class="text">Smooth and safe machinery move—handled with precision and care!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="p-1">
                            <div class="testimonial-box">
                                <div class="icon">
                                    <img src="./assets/images/user-6.svg" alt="">
                                </div>
                                <h5 class="title">Krishnadas</h5>
                                <p class="sub-text">Structural Fabrication</p>
                                <p class="text">Precision craftsmanship and excellent service—exceeded our expectations!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
