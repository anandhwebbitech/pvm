@extends('layouts.app')
@section('content')

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Maintenance</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="service-title">Comprehensive Maintenance and Adjustment Services</h4>
                    <p class="service-text">At Structura Fab, we take pride in being the preferred service provider for
                        many Original Equipment Manufacturers
                        (OEMs). Our expertise and commitment to excellence enable us to collaborate closely with OEMs to
                        ensure seamless
                        operations during the installation process. Whether it's making critical adjustments or
                        modifications to machinery, we
                        work hand-in-hand with our partners to deliver tailored solutions that meet their specific
                        needs.</p>



                    <h4 class="service-subtitle">Specialized Machinery Maintenance</h4>
                    <p class="service-text">Our specialized machinery maintenance services are designed to ensure
                        optimal performance and longevity of your
                        equipment. We understand the complexities involved in maintaining modern machinery and
                        production lines, which is why
                        our services extend beyond standard maintenance to include:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Machinery Modifications:</span> We provide expert solutions to modify machinery for
                            improved functionality or to adapt to new
                            production requirements.</li>
                        <li><span>Production Line Services:</span> From decommissioning to recommissioning, we handle
                            the
                            entire process with precision to
                            minimize downtime and disruption.</li>
                        <li><span>CNC-Controlled Machinery:</span>
                            Our team has extensive experience in managing CNC machinery,
                            ensuring they operate at peak
                            accuracy and efficiency.</li>
                    </ul>


                    <h4 class="service-subtitle">Advanced Diagnostics and Precision Checks</h4>
                    <p class="service-text">To uphold the highest standards of performance, we offer advanced diagnostic
                        and precision services, including:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Accuracy Checks:</span> Regular accuracy assessments to ensure machinery meets
                            required
                            tolerances and specifications.</li>
                        <li><span>Renishaw and BallBar Testing:</span> Cutting-edge tools like Renishaw probes and
                            BallBar
                            systems are used to analyze and
                            optimize machine precision.</li>
                        <li><span>Fault Finding:</span> Our fault-finding services quickly identify and rectify issues,
                            reducing downtime and preventing costly
                            disruptions.</li>
                    </ul>




                    <p class="service-text">With a commitment to delivering exceptional results, Structura Fab ensures
                        your machinery and production lines remain
                        reliable, efficient, and ready to meet the demands of modern manufacturing.</p>







                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="small-img-box">
                                        <img src="./assets/images/machinary-maintanence.jpg" alt="">
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
