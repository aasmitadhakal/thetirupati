

@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($about_us->banner_image))
        <img src="{{ asset( $about_us->banner_image) }}" alt="{{ $about_us->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $about_us->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $about_us->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

    {{-- about us section --}}
    <section class="about-us-section py-5">
        <div class="container">
            <div class="row">
                {{-- Image --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative">
                    <div class="about-us-img">
                        <img src="{{ asset($about_us->image_1) }}" alt="{{ $about_us->title }}">
                    </div>
                    <div class="about-background"> </div>
                </div>
                {{-- Content --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="about-content-container">
                        <h3 class="my-2">{{ $about_us->title ?? 'About us' }}</h3>
                        <div class="text-css-counter line-clamp-14 pt-4">
                            {!! $about_us->description !!}
                        </div>
                        <a class="d-flex align-items-center justify-content-md-start justify-content-center "
                            href="{{ route('frontend.about') }}">
                            <button class="btn1">
                                <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section-about container d-none d-md-block my-5">
        <div class=" counter-section-inner">
            <div class="row  justify-content-center align-items-center">
                <div class="col-md-4 col-6">
                    <div class="homebanner-card p-3 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('frontend/assets/image/hand.png') }}" src='' alt="">
                        </div>
                        <div class="homecard-text-num">
                            <p>{{ $settings['home_counter_scholarship'] ?? '' }}</p>
                        </div>
                        <p class="text-css-counter d-flex align-items-center justify-content-center">
                            {{ $settings['home_counter_scholarship_title'] ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="homebanner-card p-3 text-center">
                        <div class=" d-flex align-items-center justify-content-center">
                            <img src="{{ asset('frontend/assets/image/hand.png') }}" src='' alt="">
                        </div>
                        <div class="homecard-text-num">
                            <p>{{ $settings['home_counter_students'] ?? '' }}</p>
                        </div>
                        <p class="text-css-counter d-flex align-items-center justify-content-center">
                            {{ $settings['home_counter_students_title'] ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="homebanner-card p-3 text-center">
                        <div class=" d-flex align-items-center justify-content-center">
                            <img src="{{ asset('frontend/assets/image/hand.png') }}" src='' alt="">
                        </div>
                        <div class="homecard-text-num">
                            <p>{{ $settings['home_counter_enrolled'] ?? '' }} </p>
                        </div>
                        <p class="text-css-counter d-flex align-items-center justify-content-center">
                            {{ $settings['home_counter_enrolled_title'] ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- our mission and vision --}}
    <section class="py-5 page-bg-color"
        style="background-image: url({{ asset('frontend/assets/image/
        missionbg.png') }});
              background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <!-- Mission Card -->
                <div class="col-md-6 py-3">
                    <div class="mission-vision-card text-center">
                        <img src="{{ asset('frontend/assets/image/mission.png') }}" alt="Mission">
                            <div class="mission-vision-content ">
                                <div class="inner-content-mission">
                                    <h3>Our Mision</h3>
                                    <p>To be the most trusted consultancy, empowering students worldwide to achieve success.To be the most trusted consultancy, empowering students worldwide to achieve success.To be the most trusted consultancy, empowering students worldwide to achieve success.</p>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="col-md-6 py-3">
                    <div class="mission-vision-card text-center">
                        <img src="{{ asset('frontend/assets/image/vision.jpg') }}" alt="Vision">
                        <div class="mission-vision-content">
                            <div class="inner-content-mission">
                                <h3>Our Vision</h3>
                                <p>To be the most trusted consultancy, empowering students worldwide to achieve success.To be the most trusted consultancy, empowering students worldwide to achieve success.To be the most trusted consultancy, empowering students worldwide to achieve success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
