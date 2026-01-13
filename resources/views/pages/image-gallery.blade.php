@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Image Gallery</h5>
            </div>
        </div>
    </section>


    <section class="our-gallery">
        <div class="container">
            <h6 class="main-subtitle">Gallery</h6>
            <h5 class="main-title">Image <span class="common">Gallery</span></h5>
            <div class="row g-2 mt-4">
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-1.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-1.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-2.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-2.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-3.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-3.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-4.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-4.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-5.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-5.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-6.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-6.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-7.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-7.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-8.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-8.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-9.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-9.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-10.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-10.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-11.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-11.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-12.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-12.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-13.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-13.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-14.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-14.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-15.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-15.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-16.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-16.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-17.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-17.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-18.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-18.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-19.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-19.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-20.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-20.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-21.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-21.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-22.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-22.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-23.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-23.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-24.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-24.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-25.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-25.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-26.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-26.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-27.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-27.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-28.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-28.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-29.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-29.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-30.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-30.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-31.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-31.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-32.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-32.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-33.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-33.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-34.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-34.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="img-box wow zoomIn" data-wow-delay="0.4s">
                        <img src="./assets/images/gallery/img-35.webp" alt="">
                        <div class="overlay-box">
                            <ul class="options-box">
                                <li><a class="lightbox-image" title="Image Title Here" data-fancybox="gallery1"
                                        href="./assets/images/gallery/img-35.webp"><span
                                            class="icon fa-solid fa-magnifying-glass"></span></a>
                                </li>

                            </ul>

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
