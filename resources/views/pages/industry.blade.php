@extends('layouts.app')
@section('content')
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>




    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Industry</h5>
            </div>
        </div>
    </section>



    <section class="industry-detail">
        <div class="container">
            <div class="text-center">
                <h5 class="main-subtitle">Industry</h5>
                <h5 class="main-title">Our <span class="common">Industries</span></h5>
            </div>
            
             <div class="py-5 mt-lg-5" id="building-products">
                <div class="row gy-4 align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="content-box left-content">
                            <h5 class="content-title">Building products</h5>
                            <p class="content-text">The building products industry manufactures materials and goods used
                                in the construction of residential, commercial, and
                                industrial buildings. It includes both traditional and innovative materials.</p>
                            <h6 class="content-subtitle">Common Building Products:</h6>
                            <ul class="content-list">
                                <li><span>Concrete & Cement:</span> Essential for constructing foundations and
                                    structures.
                                </li>
                                <li><span>Insulation:</span> Materials for improving energy efficiency and
                                    soundproofing.

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="right-img">
                            <img src="./assets/images/industry/building-products.webp" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="py-5 mt-lg-5" id="industrial-products">
                <div class="row gy-4 align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-6 order-1 order-md-0">
                        <div class="left-img">
                            <img src="./assets/images/industry/other-industries.webp" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 order-0 order-md-1">
                        <div class="content-box right-content">
                            <h5 class="content-title">Industrial products</h5>
                            <p class="content-text">Industrial products encompass a wide range of materials and
                                equipment essential for the operation, maintenance, and
                                safety of industrial systems. These products include everything from raw materials and
                                machinery components to safety
                                gear and protective equipment used to ensure the smooth functioning of industrial
                                facilities.
                            </p>
                            <h6 class="content-subtitle">Popular Industrial Products:</h6>
                            <ul class="content-list">
                                <li><span>Pollution Control Systems:</span> minimize emissions and waste.
                                </li>
                                <li><span>Pipelines:</span>
                                    transport fluids and gases over long distances.
                                </li>
                                <li><span>Conveyors:</span>
                                    transport materials efficiently.

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


       <script>
    $(document).ready(function () {
      // Close the offcanvas when a menu link is clicked
      $("#offcanvasExample .menu-link").click(function () {
        $('.offcanvas').offcanvas('hide');
      });
    });
  </script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  // Define the offset for the fixed header (adjust based on your header's height)
  const offset = 100; // You can change this value to match your header height

  // Scroll if the URL contains a hash (on page load)
  const hash = window.location.hash;
  if (hash) {
    const targetSection = document.querySelector(hash);
    if (targetSection) {
      window.scrollTo({
        top: targetSection.offsetTop - offset,
        behavior: 'smooth'
      });
    }
  }

  // Add event listener for all menu link clicks to scroll with offset
  document.querySelectorAll('.menu-link').forEach(item => {
    item.addEventListener('click', function (e) {
      e.preventDefault();

      // Get the target section from the href (remove the # part)
      const targetId = this.getAttribute('href').split('#')[1];

      // Find the target section element
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        // Scroll to the section with an offset
        window.scrollTo({
          top: targetSection.offsetTop - offset,
          behavior: 'smooth'
        });
      }
    });
  });
});



</script>

@endsection
