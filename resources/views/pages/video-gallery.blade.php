@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Video Gallery</h5>
            </div>
        </div>
    </section>


    <section class="our-gallery">
        <div class="container">
            <h6 class="main-subtitle">Gallery</h6>
            <h5 class="main-title">Video <span class="common">Gallery</span></h5>
            <div class="row g-2 mt-4">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-box">
                        <div class="offline-overlay">
                            <p>You are offline. Video unavailable.</p>
                        </div>
                        <video controls>
                            <source src="./assets/images/video/video-1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-box">
                        <div class="offline-overlay">
                            <p>You are offline. Video unavailable.</p>
                        </div>
                        <video controls>
                            <source src="./assets/images/video/video-2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-box">
                        <div class="offline-overlay">
                            <p>You are offline. Video unavailable.</p>
                        </div>
                        <video controls>
                            <source src="./assets/images/video/video-3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-box">
                        <div class="offline-overlay">
                            <p>You are offline. Video unavailable.</p>
                        </div>
                        <video controls>
                            <source src="./assets/images/video/video-4.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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
