@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Structural Fabrication</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="service-title">Expert Structural Fabrication Services</h4>
                    <p class="service-text">Structura Fab is a trusted leader in delivering high-quality structural
                        fabrication solutions designed to meet the
                        diverse needs of our clients. With a commitment to precision and innovation, we specialize in
                        crafting robust and
                        durable structures that exceed industry standards. Our expertise spans a wide range of
                        industries, ensuring tailored
                        solutions for every project.</p>



                    <h4 class="service-subtitle">Customized Fabrication for Diverse Applications</h4>
                    <p class="service-text">Our team of highly skilled professionals works closely with clients to
                        design, fabricate, and assemble structures that
                        align with their specific requirements. From small-scale projects to large industrial
                        undertakings, we provide:
                    </p>

                    <ul class="service-list-wrapper">
                        <li><span>Structural Steel Fabrication: Precision-crafted steel structures for buildings,
                                bridges, and other infrastructure
                                projects.</li>
                        <li><span>Custom Frameworks:</span> Tailored solutions for specialized applications, including
                            platforms, supports, and industrial
                            frameworks.</li>
                        <li><span>Heavy-Duty Fabrication:</span> Durable components for heavy machinery, construction,
                            and
                            manufacturing sectors.</li>

                    </ul>

                    <h4 class="service-subtitle">Cutting-Edge Technology and Techniques</h4>
                    <p class="service-text">At Structura Fab, we utilize state-of-the-art technology and advanced
                        fabrication techniques to ensure unparalleled
                        accuracy and efficiency. Our facilities are equipped with modern machinery for cutting, welding,
                        and finishing, enabling
                        us to deliver high-performance solutions that stand the test of time.</p>

                    <h4 class="service-subtitle">Quality Assurance and Safety</h4>
                    <p class="service-text">We prioritize quality and safety in every project. Our fabrication processes
                        adhere to strict quality control standards,
                        ensuring that all structures meet or exceed client expectations. Additionally, our team follows
                        rigorous safety
                        protocols to ensure a secure working environment and reliable outcomes.</p>

                    <p class="service-text">At Structura Fab, we are dedicated to building structures that combine
                        strength, durability, and precision. Partner with
                        us to bring your vision to life and achieve exceptional results for your structural fabrication
                        needs.</p>

                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="small-img-box">
                                        <img src="./assets/images/structural-fabrication.jpg" alt="">
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

        $(".banner-carousel ").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: false,
            center: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });


        $(".service-slider").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
            },
        });

        $(".client-slider").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 4,
                },
                1000: {
                    items: 6,
                },
            },
        });


        $(".testimonial-slider").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });



        $(".owl-prev").html('<i class="fa-solid fa-angle-left"></i>');
        $(".owl-next").html('<i class="fa-solid fa-angle-right"></i>');

        $(".banner-carousel .owl-prev").html('<i class="bi bi-chevron-left"></i>');
        $(".banner-carousel .owl-next").html('<i class="bi bi-chevron-right"></i>');

    </script>

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
