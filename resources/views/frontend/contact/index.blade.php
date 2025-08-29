@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
@section('content')
<section class="about-banner">
    @if(!empty($contact_page->banner_image))
        <img src="{{ asset( $contact_page->banner_image) }}" alt="{{ $contact_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $contact_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $contact_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h4 class="mb-4 fw-bold">Get in Touch with Us</h4>
                        <form  action="" method="post">
                            @csrf
                            @method('post')
                            <input type="text" class="form-control" name="name" placeholder="Input your name">
                            <input type="email" class="form-control" name="email" placeholder="Input your email">
                            <input type="text" class="form-control" name="phone" placeholder="Input your phone">
                            <textarea class="form-control" rows="4" name="message" placeholder="Submit your message request"></textarea>
                            <a href="{{ route('frontend.contact.submit') }}"> <button type="submit" class="btn1 mt-2">Send message</button>
                            </a>
                        </form>
                    </div>
                </div>
                <!-- Right: Contact Details -->
                <div class="col-md-6">
                    <div class="contact-details">
                        <h4 class="fw-bold">{{ $settings['contact_section_title'] ?? 'Get In Touch' }}</h4>
                        <p> {{ $settings['contact_description'] ?? 'Get In Touch' }}</p>
                        <div class="contact-item-index">
                            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <strong>Address</strong>
                                <div>{{ $settings['contact_location'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        <div class="contact-item-index">
                            <div class="contact-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                            <div>
                                <strong>Mobile</strong>
                                <div>{{ $settings['contact_phone'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        <div class="contact-item-index">
                            <div class="contact-icon"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <strong>Availability</strong>
                                <div>Daily 09 am – 07 pm</div>
                            </div>
                        </div>
                        <div class="contact-item-index">
                            <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <strong>Email</strong>
                                <div>{{ $settings['contact_email'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        <h6 class="mt-4">Social Media</h6>

                        <div class="social-icons">
                            @foreach ($socials as $item)
                                <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692035.2740613115!2d76.38281235330426!3d25.354446709376614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb006ef18791%3A0x3b29923830265e32!2sIdeal%20Educational%20Hub!5e0!3m2!1sen!2snp!4v1754638616744!5m2!1sen!2snp"
            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top", // top or bottom
                    position: "right", // left, center or right
                    backgroundColor: "#4BB543", // green success color
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif
@endsection
