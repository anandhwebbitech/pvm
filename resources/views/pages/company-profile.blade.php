@extends('layouts.app')
@section('content')
    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Company Profile</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">About us</li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Company profile</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>



    <section class="about-detail">
        <div class="container">
            <div class="row gy-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 ">
                    <h5 class="main-subtitle">About Us</h5>
                    <h5 class="main-title">Your Trusted Partner in <span class="common">Precision Automation</span></h5>
                    <p class="about-text">PVM Automation & Robotics specializes in the design, manufacturing, and construction of advanced automation and robotic systems for the manufacturing industry. We are experts in developing and integrating assembly automation solutions for various processes, including welding, press line feeder automation, glue dispensing, machine tending, and motion control systems.</p>
                    <p class="about-text">Established with strong expertise in industrial automation, PVM Automation & Robotics delivers intelligent solutions tailored to meet modern manufacturing challenges. Our in-house engineering, manufacturing, and assembly capabilities allow us to provide reliable, high-precision automation systems that enhance productivity, consistency, and operational efficiency.</p>
                    <p class="about-text">Driven by a deep understanding of customer requirements, we focus on integrating value into every solution we deliver. Our experience in automation enables us to balance quality, performance, and cost, helping clients achieve superior manufacturing outcomes while reducing operational expenses.</p>

                </div>
                <div class=" col-lg-6 col-md-8 ">
                    <div class="ms-lg-5">
                        <img src="./assets/images/new-images/about-home.webp" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row gy-5 justify-content-center mt-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="visionBox">
                            <div class="vision-icon">
                                <span><img src="./assets/images/our-team.svg" alt="" /></span>
                            </div>

                            <h3 class="title">Our Team</h3>

                            <p class="description"> We are proud to have a dedicated team of professionals passionate
                                about delivering exceptional results. Our diverse skills, experience, and collaborative
                                approach enable us to provide innovative solutions for our clients.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="visionBox gray">
                            <div class="vision-icon">
                                <span><img src="./assets/images/mission.svg" alt="" /></span>
                            </div>

                            <h3 class="title">Mission</h3>

                            <p class="description">Providing world-class automation systems for industries of all scales, with a focus on quality, efficiency, and cost-effective solutions.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="visionBox gray">
                            <div class="vision-icon">
                                <span><img src="./assets/images/vision.svg" alt="" /></span>
                            </div>

                            <h3 class="title">Vision</h3>

                            <p class="description">To establish ourselves as a cost-effective and reliable automation solutions provider for critical industrial applications, including welding, handling, and operations in highly hazardous environments.</p>
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
                        <h5 class="main-title-white">Why Choose <span class="common">Structura Fab?</span></h5>
                        <p class="why-choose-text">In choosing Structura Fab, you are selecting a partner
                            dedicated to elevating your projects to new heights. Join us
                            in shaping the future of industries through precision,
                            innovation, and unparalleled service.</p>
                        <p class="why-choose-text">Clients trust us for our unwavering commitment to
                            delivering on promises and exceeding expectations.</p>
                        <div class="my-4 creative-wrapper">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <div class="icon">
                                        <img src="./assets/images/creativity.svg" alt="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <h5 class="title">Seamless Relocations, <br>
                                        and Innovative Solutions.</h5>
                                </div>
                            </div>
                        </div>
                        <p class="why-choose-text">We approach every project with meticulous attention
                            to detail, ensuring that precision is ingrained in every
                            aspect of our work.</p>
                        <p class="why-choose-text">Embracing technological advancements and
                            creative solutions, we strive to bring innovation to the forefront of every
                            service we provide</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="bg-color">
                        <a id="play-video" class="video-play-button" href="video-gallery.php">
                            <span></span>
                        </a>
                        <div class="text">We’re doing the right thing.
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
                        <h5 class="box-title count" data-count="2.5">2.5<span>+</span></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-md-4">
                    <div class="box-wrapper">
                        <p class="box-text">Years Of <br>Experience</p>
                        <h5 class="box-title count" data-count="25">25<span>+</span></h5>
                    </div>
                </div>
            </div>

            <div class="dotted-line">
            </div>
        </div>
    </section>


    <section class="client-service  mb-lg-5 mb-4">
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


@endsection
