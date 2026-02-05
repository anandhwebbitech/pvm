@extends('layouts.app')
@section('content')
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Mechanical Services</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="service-title">Comprehensive Mechanical Services</h4>
                    <p class="service-text">At Structura Fab, we specialize in delivering state-of-the-art mechanical
                        solutions tailored to meet the
                        high-performance demands of modern systems. Regardless of the brand, our expert teams advise,
                        install, and maintain
                        advanced mechanical systems, ensuring optimal functionality and reliability for our clients.</p>



                    <h4 class="service-subtitle">Expert Problem-Solving and System Enhancements</h4>
                    <p class="service-text">Our nationwide network of qualified technicians excels in identifying and
                        addressing issues related to building
                        automation and system designs. By conducting thorough assessments, we provide clients with
                        recommendations for upgrades
                        that enhance performance and efficiency.
                    </p>

                    <h4 class="service-subtitle">Commissioning and Recommissioning Services</h4>
                    <p class="service-text">Structura Fab offers specialized commissioning and recommissioning services
                        to ensure mechanical systems meet the
                        highest standards. These services include:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Evaluation and Verification:</span> Confirming that systems are constructed and
                            operate in
                            line with client specifications.</li>
                        <li><span>Performance Optimization:</span> Ensuring that systems function at peak efficiency to
                            support
                            long-term reliability.</li>

                    </ul>


                    <h4 class="service-subtitle">Exceptional Customer Service</h4>
                    <p class="service-text">Our commitment to exceeding customer expectations is evident in every aspect
                        of our work. Structura Fab’s team of
                        skilled union workers—specializing in HVAC, plumbing, and sewer cleaning—combines technical
                        expertise with hands-on
                        experience to deliver the most professional and efficient service possible.</p>






                    <p class="service-text">With Structura Fab, you can trust that your mechanical systems are in expert
                        hands, delivering the performance,
                        reliability, and care your business deserves.</p>







                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="small-img-box">
                                        <img src="./assets/images/mechanical-services.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="aside-ad-box mb-5 mb-lg-0">
                                        <div class="aside-box-content">
                                            <div class="logo-img">
                                                <img src="./assets/images/settings.svg" alt="">
                                            </div>
                                            <h5 class="aside-title">Optimising Perfomance with Special Services</h5>
                                            <p class="aside-text">Maximize efficiency and productivity with our tailored
                                                special services, designed to optimize performance and drive
                                                results</p>

                                            <p class="mt-4 d-flex justify-content-center">
                                                <a href="#" class="btn aside-btn">Get in Touch</a>
                                            </p>
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

    <script>
        // Get the button element
        const myButton = document.getElementById("myBtn");

        // Show or hide the button based on scroll position
        window.addEventListener("scroll", () => {
            if (window.scrollY > 20) {
                myButton.style.display = "block";
            } else {
                myButton.style.display = "none";
            }
        });

        // Scroll to the top of the page when the button is clicked
        myButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Smooth scroll effect
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            var scroll_pos = 0;
            $(document).scroll(function () {
                scroll_pos = $(this).scrollTop();
                if (scroll_pos >= 50) {
                    $('.main-header').addClass("fixed");
                } else {
                    $('.main-header').removeClass("fixed");
                }
            });
        });
    </script>

    <script>
        $('.mean-menulist').meanmenu({
            meanMenuContainer: '.mobile-menu',

        });
    </script>


@endsection
