@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Privacy Policy</h5>
            </div>
        </div>
    </section>


    <section class="service-detail">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-12">
                    <h6 class="main-subtitle">Privacy Policy</h6>
                    <h5 class="main-title">Sustainability <span class="common">Policy</span>:</h5>
                    <p class="service-text">At Structurafab, we are committed to promoting sustainability in all aspects of our operations. We recognize the importance of protecting the environment, supporting our workforce and communities, and maintaining long-term business growth. Our sustainability approach is based on the following principles:</p>
                </div>
            </div>
            <div class="mt-4">
               <h5 class="main-desctitle">1. Environmental Responsibility</h5>
               <p class="main-text">Efficient Resource Use: Minimize energy, water, and material consumption during mechanical erection projects.</p>
                <p class="main-text">Waste Management: Promote recycling, reduce waste generation, and ensure the proper disposal of construction materials.</p>
                 <p class="main-text">Emission Reduction: Use energy-efficient equipment and processes to lower greenhouse gas emissions.</p>
                  <p class="main-text">Biodiversity Conservation: Plan and execute projects in a way that minimizes environmental disturbances and protects ecosystems.</p>
                  
            </div>
            <div class="mt-4">
                 <h5 class="main-desctitle">2. Social Responsibility</h5>
               <p class="main-text">Workforce Well-being: Ensure safe, healthy, and fair working conditions for all employees.</p>
                <p class="main-text">Community Engagement: Actively engage with local communities to understand their concerns and contribute positively to their development.</p>
                 <p class="main-text">Training and Education: Provide continuous training on sustainability practices and technologies to employees.</p>
                  
                
            </div>
            <div class="mt-4">
                 <h5 class="main-desctitle">3. Economic Responsibility</h5>
               <p class="main-text">Innovative Solutions: Invest in advanced technologies that enhance efficiency and reduce environmental impact.</p>
                <p class="main-text">Ethical Practices: Uphold ethical business practices in procurement, subcontracting, and client relationships.</p>
                 <p class="main-text">Cost-effectiveness: Deliver high-quality services while maintaining affordability and resource optimization.</p>

                 
            </div>
            <div class="mt-4">
                 <h5 class="main-desctitle">4. Compliance and Continuous Improvement</h5>
               <p class="main-text">Regulatory Compliance: Adhere to all relevant environmental, health, and safety regulations and standards.</p>
                <p class="main-text">Sustainability Goals: Set measurable sustainability objectives and monitor progress regularly.</p>
                 <p class="main-text">Continuous Improvement: Foster a culture of innovation and continuous improvement in sustainability practices.</p>
            </div>
            <div class="mt-4">
                                  <p class="main-text">This policy applies to all employees, contractors, and partners. By embedding sustainability into our operations, we aim to create long-term value for our stakeholders and contribute to a sustainable future.</p>
            </div>
            <div class="dotted-line">
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
