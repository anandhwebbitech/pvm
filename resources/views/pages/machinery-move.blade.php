@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Machinery Move</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="service-title">Machinery Move: Expert Solutions for Heavy Machinery Transportation</h4>
                    <p class="service-text">Structura Fab stands as a leader in the transportation and relocation of
                        heavy machinery. Our team of highly qualified
                        experts ensures that your machinery and equipment are moved efficiently and with minimal
                        disruption to your business
                        operations. By working collaboratively with client teams, we provide a seamless experience,
                        prioritizing the continuity
                        of your workflows.</p>



                    <h4 class="service-subtitle">Tailored Support for Changing Machinery Needs</h4>
                    <p class="service-text">As businesses grow and evolve, their machinery requirements often shift. At
                        Structura Fab, we offer robust support to
                        clients needing modifications or reassembly of their existing equipment. Our deep industry
                        experience allows us to
                        understand the unique needs of every project, enabling us to customize our services for each
                        company we work with. This
                        personalized approach ensures that we consistently deliver the best solutions for our clients.
                    </p>

                    <h4 class="service-subtitle">Over 15 Years of Industry Expertise</h4>
                    <p class="service-text">With more than 15 years of experience, Structura Fab has honed its craft and
                        built an unmatched understanding of heavy
                        machinery relocation needs. Our proven track record includes handling projects of all sizes,
                        from in-facility equipment
                        moves to cross-border production facility relocations. Our services include:</p>

                    <ul class="service-list-wrapper">
                        <li><span>In-Facility Machinery Relocation:</span> Efficiently moving machinery within a factory
                            to
                            optimize space or operations.</li>
                        <li><span>Machinery Transportation:</span> Securely transporting heavy equipment to local or
                            distant
                            locations.</li>
                        <li><span>Complete Production Facility Relocation:</span> Managing end-to-end logistics for
                            relocating
                            production lines across borders or
                            regions.</li>
                    </ul>


                    <h4 class="service-subtitle">Safety and Precision You Can Rely On</h4>
                    <p class="service-text">At Structura Fab, safety is at the heart of our operations. Our team is
                        equipped with the necessary tools, expertise,
                        and strict safety measures to handle even the most complex machinery moves. From detailed
                        planning to precise execution,
                        we ensure every project is completed successfully and without compromise.</p>






                    <p class="service-text">Choosing Structura Fab means partnering with a team that values your
                        business operations and ensures the safe, efficient
                        relocation of your machinery. Whether you are moving equipment within your facility or
                        relocating a production line
                        across borders, you can trust us to deliver excellence every step of the way.</p>







                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="small-img-box">
                                        <img src="./assets/images/machinary-move.jpg" alt="">
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
