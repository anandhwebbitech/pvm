@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>




    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Factory Relocation</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="service-title">Factory Relocation: A Complex Yet Manageable Challenge</h4>
                    <p class="service-text">Factory relocation is one of the most challenging projects a machinery
                        company can undertake. It requires meticulous
                        planning to meet budget and schedule constraints, minimize disruptions and downtime, and ensure
                        a successful transition.
                        These intricate operations demand specialized expertise, often necessitating the involvement of
                        an experienced external
                        partner.</p>



                    <h4 class="service-subtitle">Structura Fab: 15+ Years of Expertise</h4>
                    <p class="service-text">With over 15 years of experience, Structura Fab has successfully completed a
                        wide range of turnkey factory relocations.
                        Our expertise covers every aspect of the process, including:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Plant Dismantling and Disconnecting:</span> Safely deconstructing and preparing the
                            factory for relocation.</li>
                        <li><span>Transporting and Reassembling:</span> Moving machinery, equipment, and other assets to
                            new locations, whether local or
                            international.</li>
                        <li><span>Installation at the New Site:</span> Expertly reassembling and installing equipment,
                            ensuring operational readiness.</li>
                    </ul>

                    <p class="service-text">From handling local moves to overseeing complex international relocations,
                        we have the knowledge and resources to make
                        even the most demanding projects seamless.</p>


                    <h4 class="service-subtitle">Beyond “Lift and Shift” – Our Tailored Approach</h4>
                    <p class="service-text">Unlike many competitors who simply adopt a "lift and shift" method,
                        Structura Fab takes a tailored and collaborative
                        approach. We work closely with you to:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Minimize Disruptions:</span>
                            Ensure minimal impact on your business operations during the relocation.</li>
                        <li><span>Optimize the New Setup:</span> Provide technical advice to maximize the efficiency of
                            your new facility.</li>
                    </ul>




                    <p class="service-text">Our services also include manufacturing and installing floor plates,
                        walkways, access platforms, and conducting
                        comprehensive mechanical installations such as equipment rebuilding, guard installations, and
                        ancillary equipment
                        integration.</p>


                    <h4 class="service-subtitle">Safety First, Always</h4>
                    <p class="service-text">Safety is at the core of every project we undertake. Our standardized
                        procedures and extensive experience significantly
                        reduce the risks associated with large equipment relocations. Our rigorous health and safety
                        protocols include:</p>

                    <ul class="service-list-wrapper">
                        <li><span>Risk Assessments and Method Statements:</span>
                            Identifying and mitigating potential hazards.</li>
                        <li><span>Comprehensive Safety Audits:</span>
                            Conducting pre-task analyses, process validations, and regular reporting.</li>
                        <li><span>Training and Awareness Programs:</span>
                            Offering daily safety talks, internal audits, and
                            safety awareness training.</li>
                    </ul>

                    <p class="service-text">These measures are implemented at every stage of the project, ensuring a
                        secure and efficient process from start to
                        finish.</p>
                    <h4 class="service-subtitle">Customized Solutions for Unique Projects</h4>
                    <p class="service-text">Every factory relocation project is unique, and we provide a scope of
                        services tailored to your specific requirements.
                        From initial consultation to project completion, we deliver support that meets your needs and
                        exceeds expectations.</p>

                    <p class="service-text">For more information and assistance with your factory relocation or plant
                        removal, please contact your local Structura
                        Fab office. Let us make your next project a success!</p>
                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="">
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="small-img-box">
                                        <img src="./assets/images/factoty-relocation.jpg" alt="">
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
