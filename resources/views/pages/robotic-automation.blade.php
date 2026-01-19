@extends('layouts.app')
@section('content')

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Robotics and Automation</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Products</li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Robotics and automation</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="product-section container">
        <div class="product-grid row">
            <div class=" col-12 col-md-6  p-3">
                <div class="product-card" style="background-image:url('./assets/images/new-images/product-page-img-1.webp')">
                    <a href="{{ route('product-details') }}" class="product-link">
                        Robo Weld 3.0
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

            <div class=" col-12 col-md-6  p-3">
                <div class="product-card  " style="background-image:url('./assets/images/new-images/product-page-img-1.webp')">
                    <a href="{{ route('product-details') }}" class="product-link">
                        Dispensing Robot
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

            <div class=" col-12 col-md-6  p-3">
                <div class="product-card  " style="background-image:url('./assets/images/new-images/product-page-img-1.webp')">
                    <a href="{{ route('product-details') }}" class="product-link">
                        Robo Weld 4.0
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>

            <div class=" col-12 col-md-6  p-3">
                <div class="product-card  " style="background-image:url('./assets/images/new-images/product-page-img-1.webp')">
                    <a href="{{ route('product-details') }}" class="product-link">
                        Industrial RO Plants
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
