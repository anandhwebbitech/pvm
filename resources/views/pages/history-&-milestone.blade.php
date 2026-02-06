@extends('layouts.app')
@section('content')

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">History / Milestones</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">About us</li>
                        <li class="breadcrumb-item active text-light" aria-current="page"> History / Milestones</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="timeline-section mb-5">
    <div class="container">
        <h3 class="text-center pb-0 pb-md-5 fs-1 fw-bold text-danger">
            Milestones
        </h3>

        <div class="timeline">
            @foreach($milestones as $index => $item)
                @php
                    $position = $index % 2 === 0 ? 'left' : 'right';
                @endphp

                <div class="timeline-item {{ $position }}">
                    <div class="timeline-card">

                        @if($position === 'left')
                            <span class="year">
                                <img src="{{ asset('assets/images/new-images/milestone-img.png') }}"
                                     alt=""
                                     class="milestone-img me-3">
                                {{ $item->year }}
                            </span>
                        @else
                            <span class="year">
                                {{ $item->year }}
                                <img src="{{ asset('assets/images/new-images/milestone-img.png') }}"
                                     alt=""
                                     class="milestone-img ms-3">
                            </span>
                        @endif

                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
