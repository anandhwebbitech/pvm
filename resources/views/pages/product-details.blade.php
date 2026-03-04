@extends('layouts.app')
@section('content')

<section class="page-banner">
    <div class="banner-content">
        <div class="container">
            <h5 class="banner-title">Product Details</h5>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" class="text-light">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light">Products</li>
                    <li class="breadcrumb-item active text-light">Product details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="product-section ">
    <div class="container">
        <div class="row">

            {{-- LEFT SIDE - IMAGES --}}
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="container-custom">

                    <div id="featuredCarousel"
                         class="carousel slide featured-carousel"
                         data-bs-ride="carousel">

                        <div class="carousel-inner">

                            @php
                                $gallery = $product->gallery ?? [];
                                $videoUrl = $product->video_url;

                                // Convert YouTube watch URL to embed
                                if ($videoUrl && str_contains($videoUrl, 'watch?v=')) {
                                    $videoUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                                }
                            @endphp

                            {{-- Main Image --}}
                            <div class="carousel-item active">
                                <img src="{{ $product->image 
                                    ? asset('public/uploads/products/' . $product->image) 
                                    : asset('assets/images/new-images/product-page-img-1.webp') }}"
                                    class="d-block w-100"
                                    alt="{{ $product->name }}">
                            </div>

                            {{-- Gallery Images --}}
                            @php
                                $gallery = is_string($product->gallery)
                                    ? json_decode($product->gallery, true)
                                    : $product->gallery;
                            @endphp

                            @if(!empty($gallery))
                                @foreach($gallery as $img)
                                    <div class="carousel-item">
                                        <img src="{{ asset('public/uploads/products/' . $img) }}"
                                            class="d-block w-100"
                                            alt="{{ $product->name }}">
                                    </div>
                                @endforeach
                            @endif

                        </div>

                        {{-- Controls --}}
                        @if(!empty($gallery))
                            <button class="carousel-control-prev"
                                    type="button"
                                    data-bs-target="#featuredCarousel"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next"
                                    type="button"
                                    data-bs-target="#featuredCarousel"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        @endif

                    </div>
                </div>
            </div>

            {{-- RIGHT SIDE - DETAILS --}}
            <div class="col-12 col-md-6">
                <h3 class="fw-bold pb-3">{{ $product->name }}</h3>

                <div class="product-details px-3">

                    <p>
                        {{ $product->description }}
                    </p>

                    {{-- PRODUCT VIDEO --}}
                    @if($videoUrl)
                        <div class="py-4">
                            <h4 class="mb-3">Product Video</h4>

                            <iframe width="100%"
                                    height="315"
                                    src="{{ $videoUrl }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>


{{-- TECHNICAL SPECIFICATIONS --}}
<section class="tech-specs mb-5">
    <div class="container">
        <h2 class="spec-title">
            Technical Specifications
            <span></span>
        </h2>

        <div class="spec-grid">

            @php
                $specifications = $product->specifications ?? [];
            @endphp

            @forelse($specifications as $spec)
                <div class="spec-item">
                    <span class="label">
                        {{ $spec['label'] ?? '-' }}
                    </span>
                    <span class="value">
                        {{ $spec['value'] ?? '-' }}
                        {{ $spec['unit'] ?? '' }}
                    </span>
                </div>
            @empty
                <p class="text-muted">No specifications available.</p>
            @endforelse

        </div>
    </div>
</section>

@endsection