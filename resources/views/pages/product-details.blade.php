@extends('layouts.app')
@section('content')

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Product Details</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Products</li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Product details</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="product-section mt-0 mt-md-5">
        <div class="container">
            <div class="row ">
                <div class="col-12  col-md-6 mb-5  mb-md-0">
                    <div class="container-custom">


                        <!-- Bootstrap Carousel -->
                        <div id="featuredCarousel" class="carousel slide featured-carousel" data-bs-ride="carousel" data-bs-interval="2500">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="./assets/images/new-images/product-3.webp" class="d-block w-100" alt="Product 1">
                                </div>

                                <div class="carousel-item">
                                    <img src="./assets/images/new-images/product-2.webp" class="d-block w-100" alt="Product 2">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 ">
                    <h3 class="fw-bold pb-3">Product Name</h3>
                    <div class="poduct-details px-3">
                        <div class="">
                              <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque exercitationem qui,
                            obcaecati voluptas officiis maiores minus vero ipsum doloribus sequi. Numquam eos
                            exercitationem mollitia eius at et, aspernatur similique, animi incidunt, facilis
                            beatae rerum debitis. Eligendi tempore rerum consequatur sit architecto, veritatis
                            quas eveniet, quos error eaque vel. Odit, cumque.
                        </p>
                        </div>
                      
                        <div class="py-5 pt-3">
                            <h3>features</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque exercitationem qui,
                                obcaecati voluptas officiis maiores minus vero ipsum doloribus sequi. Numquam eos
                                exercitationem mollitia eius at et, aspernatur similique, animi incidunt, facilis
                                beatae rerum debitis. Eligendi tempore rerum consequatur sit architecto, veritatis
                                quas eveniet, quos error eaque vel. Odit, cumque.
                            </p>
                        </div>
                         <div class=" ">
                            <h3>Product overview</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque exercitationem qui,
                                obcaecati voluptas officiis maiores minus vero ipsum doloribus sequi. Numquam eos
                                exercitationem mollitia eius at et, aspernatur similique, animi incidunt, facilis
                                beatae rerum debitis. Eligendi tempore rerum consequatur sit architecto, veritatis
                                quas eveniet, quos error eaque vel. Odit, cumque.
                            </p>
                        </div>
                        <div class="my-3">
                               <a href="contact.php">
                            <button class="cssbuttons-io-button-blue">
                               Order Now
                                <div class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="tech-specs mb-5">
        <div class="container">
            <h2 class="spec-title">
                Technical Specifications
                <span></span>
            </h2>

            <div class="spec-grid">
                <div class="spec-item">
                    <span class="label">Work Table Size</span>
                    <span class="value">1200 x 800 mm</span>
                </div>
                <div class="spec-item">
                    <span class="label">X-Axis Travel</span>
                    <span class="value">1100 mm</span>
                </div>

                <div class="spec-item">
                    <span class="label">Y-Axis Travel</span>
                    <span class="value">750 mm</span>
                </div>
                <div class="spec-item">
                    <span class="label">Z-Axis Travel</span>
                    <span class="value">650 mm</span>
                </div>

                <div class="spec-item">
                    <span class="label">Spindle Speed</span>
                    <span class="value">24,000 RPM</span>
                </div>
                <div class="spec-item">
                    <span class="label">Spindle Power</span>
                    <span class="value">18.5 kW</span>
                </div>

                <div class="spec-item">
                    <span class="label">Tool Capacity</span>
                    <span class="value">40 Tools</span>
                </div>
                <div class="spec-item">
                    <span class="label">Positioning Accuracy</span>
                    <span class="value">±0.003 mm</span>
                </div>

                <div class="spec-item">
                    <span class="label">Repeatability</span>
                    <span class="value">±0.002 mm</span>
                </div>
                <div class="spec-item">
                    <span class="label">Max Load Capacity</span>
                    <span class="value">800 kg</span>
                </div>

                <div class="spec-item">
                    <span class="label">Rapid Traverse</span>
                    <span class="value">48 m/min</span>
                </div>
                <div class="spec-item">
                    <span class="label">Machine Weight</span>
                    <span class="value">9,500 kg</span>
                </div>
            </div>
        </div>
    </section>

@endsection
