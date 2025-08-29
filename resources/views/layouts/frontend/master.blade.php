<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('seo')
    {{-- <title>Business advisar Creative HTML5 Template </title> --}}
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}"> --}}
    <link rel="icon" type="image/x-icon"
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : 'Bright Mind Education Hub' }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/mousecursor.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-budle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" type="text/css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack('css')
</head>

<body>
    @if (session('success'))
        <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3"
            style="z-index: 1055; right: 0; top: 1rem;">
            <div class="toast align-items-center text-white bg-success border-0 fade" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')


   

    {{-- Bootstrap Toast Notification --}}


    @push('styles')
        <!-- Bootstrap CSS (only if not included already in your layout) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endpush
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastEl = document.querySelector('.toast');
            if (toastEl) {
                const bsToast = new bootstrap.Toast(toastEl, {
                    delay: 2000 // 3 seconds
                });
                bsToast.show();
            }
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-universities', {
            slidesPerView: 1, // Default for small screens
            spaceBetween: 10, // Default for small screens
            loop: true,
            autoplay: {
                delay: 2100,
            },
            // Responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // }
        });
    </script>
    {{-- for swiper --}}
    <script src="{{asset('frontend/js/bootstrap.min.css')}}"></script>
    <script src="{{asset('frontend/js/function.js')}}"></script>
    <script src="{{asset('frontend/js/gsap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/magiccursor.js')}}"></script>
    <script src="{{asset('frontend/js/parallaxie.js')}}"></script>

    <script src="{{asset('frontend/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('frontend/js/SmoothScoll.js')}}"></script>
    <script src="{{asset('frontend/js/SplitText.js')}}"></script>
    <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/validator.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>


</html>
