@extends('layouts.app')
@section('content')


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Machine Vision & Laser Inspection</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Products</li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Machine vision & laser inspection</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>

<section class="product-section container">
    <div class="product-grid row">
       

        @forelse($products as $product)
        @if(!empty($product->id))
        <div class="col-12 col-md-6 p-3">
            <div class="product-card"
                style="background-image:url('{{ asset($product->image ?? 'assets/images/new-images/product-page-img-1.webp') }}')">

                <a href="{{ route('product-details', ['id' => $product->id]) }}" class="product-link">
                    {{ $product->name }}
                    <span class="arrow">→</span>
                </a>
            </div>
        </div>
        @endif
        @empty
        <div class="col-12 text-center p-5">
            <p>No products available.</p>
        </div>
        @endforelse

    </div>
</section>
@endsection
