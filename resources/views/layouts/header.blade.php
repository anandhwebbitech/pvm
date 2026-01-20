<div class="sticky-top bg-white ">
    <div class="mobile-header mobile-view">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-10 col-md-10">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="./assets/images/new-images/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-2 col-md-2">
                    <p class="text-end">
                        <a class="btn toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <i class="bi bi-filter-right"></i>
                        </a>
                    </p>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                <a href="{{ route('home') }}" class="logo"><img src="assets/images/new-images/logo.png" /></a>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>

                        </div>
                        <div class="offcanvas-body mean-container">
                            <div class="main-menu ">
                                <nav class="mean-menulist">
                                    <ul>
                                        <li>
                                            <a class="" aria-current="page" href="{{ route('home') }}">Home</a>
                                        </li>

                                        <li>
                                            <a class="">About Us</a>
                                            <ul>

                                                <li><a href="{{ route('companey-profile') }}">Company Profile</a></li>
                                                <li><a href="{{ route('history-&-milestone') }}">History / Milestones</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="">Products</a>
                                            <ul>
                                                <li><a href="{{ route('assembly-&-automation') }}">ASSEMBLY AUTOMATION</a>
                                                </li>
                                                <li><a href="{{ route('machine-vision') }}">MACHINE VISION & LASER INSPECTION</a>
                                                </li>
                                                <li><a href="{{ route('reliability') }}">RELIABILITY TESTING AUTOMATION</a></li>
                                                <li><a href="{{ route(name: 'roboticautomation') }}">ROBOTIC AUTOMATION</a></li>
                                            </ul>
                                        </li>


                                        <li>
                                            <a class="" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>

                                </nav>


                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header web-view  ">

    <div class="main-header">
        <div class="main-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="site-logo">
                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('assets/images/new-images/logo.png') }}" alt="Logo">
                            </a>
                            <!-- <a href="{{ route('home') }}" class="logo"><img src="./assets/images/new-images/logo.png" alt=""></a> -->
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="main-header-contact">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div class="text">
                                        <p class="contact-text">Phone</p>
                                        <a href="tel:+919789320532" class="phone-number">+919789320532</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="bi bi-envelope-paper"></i>
                                    </div>
                                    <div class="text">
                                        <p class="contact-text">Email</p>
                                        <a href="mailto:pvmautomation@gmail.com" class="phone-number">pvmautomation@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-bottom">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container mt-1 mb-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">About us</a>
                                <ul class="dropdown-menu">

                                    <li><a href="{{ route('companey-profile') }}" class="dropdown-item">Company Profile</a></li>
                                    <li><a href="{{ route('history-&-milestone') }}" class="dropdown-item">History / Milestones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                                    href="#">Products</a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="{{ route('assembly-&-automation') }}" class="dropdown-item">ASSEMBLY AUTOMATION</a>
                                        </li>
                                        <li><a href="{{ route('machine-vision') }}" class="dropdown-item">MACHINE VISION & LASER INSPECTION</a>
                                        </li>
                                        <li><a href="{{ route('reliability') }}" class="dropdown-item">RELIABILITY TESTING AUTOMATION</a></li>
                                        <li><a href="{{ route(name: 'roboticautomation') }}" class="dropdown-item">ROBOTIC AUTOMATION</a></li> -->
                                    @php
                                    $routeMap = [
                                    'RELIABILITY TESTING AUTOMATION' => 'reliability-testing-automation',
                                    'MACHINE VISION & LASER INSPECTION' => 'machine-vision-laser-inspection',
                                    'ASSEMBLY AUTOMATION' => 'assembly-automation',
                                    'ROBOTIC AUTOMATION' => 'robotic-automation',
                                    ];
                                    @endphp

                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('category.show', ['slug' => $routeMap[$category->name]]) }}" class="dropdown-item">
                                            {{ strtoupper($category->name) }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('contact') }}">Contact Us</a>
                            </li>

                        </ul>
                        <div class="ms-auto">
                            <div><a class="btn header-btn" href="{{ route('contact') }}">Get a Quote</a></div>
                        </div>

                    </div>
                </div>
            </nav>

        </div>
    </div>
</header>



<script>
    $(document).ready(function() {
        // Close the offcanvas when a menu link is clicked
        $("#offcanvasExample .menu-link").click(function() {
            $('.offcanvas').offcanvas('hide');
        });
    });
</script>