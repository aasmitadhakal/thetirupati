@extends('layouts.frontend.master')
    <!-- Hero Section Start -->
    <div class="hero dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myvideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myvideo"><source src="https://demo.awaikenthemes.com/assets/videos/seabud-video.mp4" type="video/mp4"></video>
            <!-- Selfhosted Video End -->
            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Savor the Best of the Sea</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Fresh seafood crafted with passion, served with elegance</h1>
                        </div>
                        <!-- Section Title End -->
                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="contact.html" class="btn-default btn-highlighted">Get Started</a>
                            <a href="content.html" class="btn-default btn-dark">Explore Our Menu</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
                <div class="col-lg-5">
                    <!-- Working Hours Item Start -->
                    <div class="working-hours-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Working Hours Header Start -->
                        <div class="working-hours-header">
                            <h3>Working Hours</h3>
                    <img src="{{("frontend/images/icon-clock-white.svg")}}" alt="">
                        </div>
                        <!-- Working Hours Header End -->
                        
                        <!-- Working Hours Body Start -->
                        <div class="working-hours-body">
                            <ul>
                                <li>Everyday <span>6:00 AM - 12:00 PM</span></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- About us Section Start -->
    <div class="about-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image Box 1 Start -->
                        <div class="about-image-box-1">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset("frontend/images/about-us-image-1.jpg")}}" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->
                            <!-- Customer Rate Box Start -->
                            <div class="customer-rate-box">
                                <h2><span class="counter">95</span>%</h2>
                                <p>Customer Repeat Rate</p>
                            </div>
                            <!-- Customer Rate Box End -->
                        </div>
                        <!-- About Image Box 1 End -->
                        <!-- About Image Box 3 Start -->
                        <div class="about-image-box-2">
                            <!-- Contact Circle Start -->
                            <div class="contact-us-circle">
                                <a href="contact.html"><img src="{{("frontend/images/contact-us-circle.svg")}}" alt=""></a>
                            </div>
                            <div class="about-image">
                                <figure class="image-anime">
                                    <img src="{{("frontend/images/about-us-image-2.jpg")}}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- About us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our story of freshness flavors and family tradition</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Ocean's Delight began as a small seaside eatery and has grown into a destination for seafood lovers near and far. What hasn't changed is our devotion to honest food.</p>
                        </div>
                        <!-- Section Title End -->
                        <!-- About Body List Start -->
                        <div class="about-body-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Freshly Baked with Care.</li>
                                <li>100% Quality You Can Taste!</li>
                            </ul>
                        </div>
                        <!-- About Body List End -->
                        <!-- About Counter List Start -->
                        <div class="about-counter-list">
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years of Experience</p>
                            </div>
                            <!-- About Counter Item End -->
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">10</span>K+</h2>
                                <p>Happy Customers</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">98</span>%</h2>
                                <p>Satisfaction Rate</p>
                            </div>
                            <!-- About Counter Item End -->
                        </div>
                        <!-- About Counter List End -->
                        
                        <!-- About Button Start -->
                        <div class="about-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="about.html" class="btn-default">More about us</a>
                        </div>
                        <!-- About Button End -->   
                    </div>
                    <!-- About us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->
    <!-- Our History Section Start -->
    <div class="our-history bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our History</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Honoring our deep-rooted passion for seafood since day one</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box">
                        <!-- History Item Start -->
                        <div class="history-item wow fadeInUp">
                            <div class="history-item-content">
                                <h2>1971</h2>
                                <p>A modest seafood shack opened on the coastline, serving daily catches to locals with home-style recipes and heartfelt hospitality.</p>
                            </div>
                            <div class="history-item-image">
                                <figure>
                                    <img src="{{('frontend/images/history-image-1.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- History Item End -->

                        <!-- History Item Start -->
                        <div class="history-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="history-item-content">
                                <h2>1985</h2>
                                <p>With growing popularity, we expanded to a larger space and introduced our first signature dishes, attracting food lovers from nearby towns.</p>
                            </div>
                            <div class="history-item-image">
                                <figure>
                                    <img src="{{('frontend/images/history-image-2.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- History Item End -->

                        <!-- History Item Start -->
                        <div class="history-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="history-item-content">
                                <h2>1998</h2>
                                <p>Recognized in regional food magazines, our restaurant became a go-to destination for seafood lovers, known for fresh flavors and warm ambiance.</p>
                            </div>
                            <div class="history-item-image">
                                <figure>
                                    <img src="{{('images/history-image-3.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- History Item End -->
                    </div>
                    <!-- Our History Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our History Section End -->
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Why choose us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Embark on a flavorful journey through our signature seafood creations, inspired by coastal traditions and today's culinary artistry</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Button Start -->
                    <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="about.html" class="btn-default">Read More</a>
                    </div>
                    <!-- Why Choose Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="why-choose-item-content">
                                <h3>Fresh Ingredients</h3>
                                <img src="{{('frontend/images/why-choose-img-1.png')}}" alt="">
                                <h2><span class="counter">100</span>%</h2>
                            </div>
                            
                            <div class="why-choose-item-bg-image">
                                <img src="{{("frontend/images/why-choose-item-1.jpg")}}" alt="">
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item active">
                            <div class="why-choose-item-content">
                                <h3>Signature Dishes</h3>
                                <img src="{{('frontend/images/why-choose-img-2.png')}}" alt="">
                                <h2><span class="counter">50</span>+</h2>
                            </div>
                            
                            <div class="why-choose-item-bg-image">
                                <img src="{{('frontend/images/why-choose-item-2.jpg')}}" alt="">
                            </div>                            
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="why-choose-item-content">
                                <h3>Customer Rating</h3>
                                <img src="{{("frontend/images/why-choose-img-3.png")}}" alt="">
                                <h2><span class="counter">4.9</span></h2>
                            </div>
                            
                            <div class="why-choose-item-bg-image">
                                <img src="{{('frontend/images/why-choose-item-3.jpg')}}" alt="">
                            </div>                            
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="why-choose-item-content">
                                <h3>Years of Excellence</h3>
                                <img src="{{("frontend/images/why-choose-img-4.png")}}" alt="">
                                <h2><span class="counter">25</span>+</h2>
                            </div>
                            
                            <div class="why-choose-item-bg-image">
                                <img src="{{("frontend/images/why-choose-item-4.jpg")}}" alt="">
                            </div>                             
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose List End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                        <p><span>Free</span>Your Next Favorite Meal Awaits - <a href="menu.html">Dine In or Get It Delivered!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->
    <!-- Our Menu Section Start -->
    <div class="our-menu bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Featured Menu</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Crafted to impress - the ocean's finest on every plate</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Menu Tab Start -->
                    <div class="our-menu-tab wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Sidebar Our Menu Nav start -->
                        <div class="our-menu-tab-nav">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-selected="true"><img src="images/icon-menu-tab-1.svg" alt="">Starters</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-selected="false"><img src="images/icon-menu-tab-2.svg" alt="">Main Courses</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-selected="false"><img src="images/icon-menu-tab-3.svg" alt="">Desserts</button>
                                </li>                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-selected="false"><img src="images/icon-menu-tab-4.svg" alt="">Beverages</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Our Menu Nav End -->

                        <!-- Menu Box Start -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Menu Item Start -->
                            <div class="tab-pane fade show active" id="first" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                        <div class="our-menu-list">
                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{("frontend/images/our-menu-image-1.png")}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crispy Calamari</h3>
                                                    <span>$12.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>From childhood summers by the shore to late-night meals with loved ones, seafood.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{('frontend/images/our-menu-image-2.png')}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Grilled Lobster Tail</h3>
                                                    <span>$29.99</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Succulent lobster tail grilled to perfection, served with garlic butter and lemon wedges.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{('frontend/images/our-menu-image-3.png')}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Scallop Ceviche</h3>
                                                    <span>$14.75</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Fresh scallops marinated in citrus served with garlic & red onion and cilantro.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{("frontend/images/our-menu-image-4.png")}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Seared Scallops</h3>
                                                    <span>$24.99</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Pan-seared scallops with a citrus glaze, served over a bed of creamy risotto.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{("frontend/images/our-menu-image-5.png")}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crab & Avocado Salad</h3>
                                                    <span>$15.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Lump crab meat tossed with avocado, cherry tomatoes, and lime dressing.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->

                                        <!-- Our Menu Item Start -->
                                        <div class="our-menu-item">
                                            <!-- Our Menu Image Start -->
                                            <div class="our-menu-image">
                                                <figure>
                                                    <img src="{{("frontend/images/our-menu-image-6.png")}}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Our Menu Image End -->

                                            <!-- Menu Item Body Start -->
                                            <div class="menu-item-body">
                                                <!-- Menu Item Title Start -->
                                                <div class="menu-item-title">
                                                    <h3>Crab Cakes</h3>
                                                    <span>$18.50</span>
                                                </div>
                                                <!-- Menu Item Title End -->

                                                <!-- Menu Item Content Start -->
                                                <div class="menu-item-content">
                                                    <p>Golden brown crab cakes served with a spicy remoulade sauce and fresh greens.</p>
                                                </div>
                                                <!-- Menu Item Content End -->
                                            </div>
                                            <!-- Menu Item Body End -->
                                        </div>
                                        <!-- Our Menu Item End -->
                                        </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="second" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="{{('frontend/images/our-menu-image-1.png')}}" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Fish fry</h3>
                                                        <hr>
                                                        <span>$26.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="{{("frontend/images/our-menu-image-2.png")}}" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Prawn masala</h3>
                                                        <hr>
                                                        <span>$28.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Pasta alfredo</h3>
                                                        <hr>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Sushi platter</h3>
                                                        <hr>
                                                        <span>$20.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>mutton biryani</h3>
                                                        <hr>
                                                        <span>$29.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Mutton curry</h3>
                                                        <hr>
                                                        <span>$24.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="third" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Fries</h3>
                                                        <hr>
                                                        <span>$6.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>chicken leg piece</h3>
                                                        <hr>
                                                        <span>$8.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Chips</h3>
                                                        <hr>
                                                        <span>$7.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Mash</h3>
                                                        <hr>
                                                        <span>$9.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Salad</h3>
                                                        <hr>
                                                        <span>$4.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Slaw</h3>
                                                        <hr>
                                                        <span>$10.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->

                            <!-- Menu Item Start -->
                            <div class="tab-pane fade" id="fourth" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <!-- Our Menu List Start -->
                                         <div class="our-menu-list">
                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Tang yuan</h3>
                                                        <hr>
                                                        <span>$16.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Egg custard</h3>
                                                        <hr>
                                                        <span>$26.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-3.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Zabaione</h3>
                                                        <hr>
                                                        <span>$21.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-4.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Almond soup</h3>
                                                        <hr>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-5.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Bomboloni</h3>
                                                        <hr>
                                                        <span>$28.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->

                                            <!-- Our Menu Item Start -->
                                            <div class="our-menu-item">
                                                <!-- Our Menu Image Start -->
                                                <div class="our-menu-image">
                                                    <figure>
                                                        <img src="images/our-menu-image-6.png" alt="">
                                                    </figure>
                                                </div>
                                                <!-- Our Menu Image End -->

                                                <!-- Menu Item Body Start -->
                                                <div class="menu-item-body">
                                                    <!-- Menu Item Title Start -->
                                                    <div class="menu-item-title">
                                                        <h3>Tiramisu</h3>
                                                        <hr>
                                                        <span>$22.00</span>
                                                    </div>
                                                    <!-- Menu Item Title End -->

                                                    <!-- Menu Item Content Start -->
                                                    <div class="menu-item-content">
                                                        <p>A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                                                    </div>
                                                    <!-- Menu Item Content End -->
                                                </div>
                                                <!-- Menu Item Body End -->
                                            </div>
                                            <!-- Our Menu Item End -->
                                         </div>
                                        <!-- Our Menu List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Approch Item End -->
                        </div>
                        <!-- Approch Box End -->
                    </div>
                    <!-- Our Approch Tab End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p><span>Free</span>Crafted for Your Cravings: Today's Must- <a href="menu.html">Try Selection</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Menu Section End -->
    <!-- What We Do Section Start -->
    <div class="what-we-do bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Honoring coastal traditions with modern culinary creativity</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Every plate tells a story of dedication — to qualivty, to flavor, and to the ocean's bounty. From hand-selecting the finest local seafood to creating chef-driven menus, we're committed to delivering an unforgettable culinary journey.</p>
                        </div>
                        <!-- Section Title Content End -->
    
                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default">Contact Us Now</a>
                        </div>
                        <!-- Section Button End -->
                    </div>   
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- What We List Start -->
                    <div class="what-we-list">
                        <!-- What We Item Start -->
                        <div class="what-we-item">
                            <!-- What We Content Start -->
                            <div class="whay-we-content">
                                <div class="what-we-header">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-1.svg" alt="">
                                    </div>
                                    <div class="what-we-btn">
                                        <a href="contact.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>

                                <div class="what-we-body">
                                    <h2><span class="counter">98</span>%</h2>
                                    <p>Whether its an intimate dinner, function, or milestone celebration, our stunning venue and expertly crafted seafood menu set</p>
                                </div>
                            </div>
                            <!-- What We Content End -->

                            <!-- What We Image Start -->
                            <div class="what-we-img">
                                <figure class="image-anime reveal">
                                    <img src="images/what-we-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- What We Image End -->
                        </div>
                        <!-- What We Item End -->

                        <!-- What We Item Start -->
                        <div class="what-we-item">
                            <!-- What We Content Start -->
                            <div class="whay-we-content">
                                <div class="what-we-header">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-2.svg" alt="">
                                    </div>
                                    <div class="what-we-btn">
                                        <a href="contact.html"><img src="images/arrow-accent.svg" alt=""></a>
                                    </div>
                                </div>

                                <div class="what-we-body">
                                    <h2><span class="counter">256</span>+</h2>
                                    <p>Whether its an intimate dinner, function, or milestone celebration, our stunning venue and expertly crafted seafood menu set</p>
                                </div>
                            </div>
                            <!-- What We Content End -->

                            <!-- What We Image Start -->
                            <div class="what-we-img">
                                <figure class="image-anime reveal">
                                    <img src="images/what-we-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- What We Image End -->
                        </div>
                        <!-- What We Item End -->

                        <!-- What We Item Start -->
                        <div class="what-we-item">
                            <!-- What We Content Start -->
                            <div class="whay-we-content">
                                <div class="what-we-header">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-3.svg" alt="">
                                    </div>
                                    <div class="what-we-btn">
                                        <a href="contact.html"><img src="images/arrow-accent.svg" alt=""></a>
                                    </div>
                                </div>

                                <div class="what-we-body">
                                    <h2><span class="counter">10</span>k+</h2>
                                    <p>Whether its an intimate dinner, function, or milestone celebration, our stunning venue and expertly crafted seafood menu set</p>
                                </div>
                            </div>
                            <!-- What We Content End -->

                            <!-- What We Image Start -->
                            <div class="what-we-img">
                                <figure class="image-anime reveal">
                                    <img src="images/what-we-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- What We Image End -->
                        </div>
                        <!-- What We Item End -->
                    </div>
                    <!-- What We List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->
    <!-- Call To Action Box Start -->
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">Contact Us today!</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out and let the flavors begin - your next seafood experience</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether it's an intimate dinner, corporate function, or milestone celebration, our stunning venue and expertly crafted seafood menu set the stage.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Cta Button Start -->
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default btn-highlighted">Contact Us Now</a>
                            <a href="reserve-table.html" class="btn-default btn-dark">Reserve A Table</a>
                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Cta Counter List Start -->
                    <div class="cta-counter-list">
                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{asset('frontend/images/icon-cta-counter-1.svg')}}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">85</span>+</h2>
                                <p>Unique Signature Dishes Curated by Our Team</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{asset('frontend/images/icon-cta-counter-2.svg')}}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">4.9</span>+</h2>
                                <p>Customer Ratings Reflecting Consistency</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{asset("frontend/images/icon-cta-counter-3.svg")}}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">35</span>k+</h2>
                                <p>Guests Who've Dined With Us and Shared Moments</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{asset("frontend/images/icon-cta-counter-4.svg")}}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Local Fishermen Suppliers We Partner With</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->
                    </div>
                    <!-- Cta Counter List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Box End -->
    <!-- Our Gallery Section Start -->
    <div class="our-gallery bg-section">
        <div class="container-fluid">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">our gallery</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Savor the view - delicious dishes and unforgettable memories</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Gallery Box Start -->
                    <div class="our-gallery-box">
                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp">
                            <figure>
                                <img src="{{("images/gallery-1.jpg")}}" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="{{("images/arrow-white.svg")}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->

                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp" data-wow-delay="0.2s">
                            <figure>
                                <img src="images/gallery-2.jpg" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="{{("images/arrow-white.svg")}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->

                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp" data-wow-delay="0.4s">
                            <figure>
                                <img src="{{("images/gallery-3.jpg")}}" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="{{("images/arrow-white.svg")}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->

                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp" data-wow-delay="0.6s">
                            <figure>
                                <img src="images/gallery-4.jpg" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->

                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp" data-wow-delay="0.8s">
                            <figure>
                                <img src="images/gallery-5.jpg" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->

                        <!-- Gallery Image Start -->
                        <div class="gallery-image wow fadeInUp" data-wow-delay="1s">
                            <figure>
                                <img src="images/gallery-6.jpg" alt="">
                            </figure>
                            <div class="gallery-btn">
                                <a href="image-gallery.html"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Gallery Image End -->
                    </div>
                    <!-- Our Gallery Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery Section End -->
    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker bg-section">
        <!-- Scrolling Ticker Box Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Grilled prawns</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Grilled prawns</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Grilled prawns</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Grilled prawns</span>
            </div>
        </div>
        <!-- Scrolling Ticker Box End -->

        <!-- Scrolling Ticker Box Start -->
        <div class="scrolling-ticker-box scroll-reverse">
            <div class="scrolling-content">
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Grilled prawns</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Grilled prawns</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Grilled prawns</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Crab cakes</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Seafood paella</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Shrimp skewers</span>
                <span><img src="images/scrolling-ticker-image-1.jpg" alt="">Lobster tail</span>
                <span><img src="images/scrolling-ticker-image-2.jpg" alt="">Grilled prawns</span>
            </div>
        </div>
        <!-- Scrolling Ticker Box End -->
    </div>
    <!-- Scrolling Ticker Section End -->
    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section dark-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Testimonials Image Start -->
                    <div class="testimonials-image">
                        <figure class="image-anime">
                            <img src="images/testimonials-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Testimonials Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Testimonial Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Stories shared by those who dined with us</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote">
                                                <img src="images/testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>From the moment we walked in, we were warmly welcomed and seated by the window with a lovely view. The aroma of fresh seafood filled the air, and every dish we ordered. The crab cakes were crispy and flavorful.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-content">
                                                    <h3>Wade L Warren</h3>
                                                    <p>Happy Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote">
                                                <img src="images/testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>From the moment we walked in, we were warmly welcomed and seated by the window with a lovely view. The aroma of fresh seafood filled the air, and every dish we ordered. The crab cakes were crispy and flavorful.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-content">
                                                    <h3>Wade L Warren</h3>
                                                    <p>Happy Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote">
                                                <img src="images/testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>From the moment we walked in, we were warmly welcomed and seated by the window with a lovely view. The aroma of fresh seafood filled the air, and every dish we ordered. The crab cakes were crispy and flavorful.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-content">
                                                    <h3>Wade L Warren</h3>
                                                    <p>Happy Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote">
                                                <img src="images/testimonial-quote.svg" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>From the moment we walked in, we were warmly welcomed and seated by the window with a lovely view. The aroma of fresh seafood filled the air, and every dish we ordered. The crab cakes were crispy and flavorful.</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-content">
                                                    <h3>Wade L Warren</h3>
                                                    <p>Happy Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                                <div class="testimonial-pagination"></div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonial Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Events Section Start -->
    <div class="our-events bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Events Content Start -->
                    <div class="our-events-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">privant events</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Host unforgettable gatherings with coastal charm</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether it's an intimate dinner, corporate function, or milestone celebration, our stunning venue and expertly crafted seafood menu set the stage for memorable events.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion events-accordion" id="event-accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Corporate Dinners & Business Gatherings
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#event-accordion">
                                    <div class="accordion-body">
                                        <p>Impress clients or reward your team with a tailored dining experience featuring our signature seafood selections.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Birthday Parties & Anniversaries
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#event-accordion">
                                    <div class="accordion-body">
                                        <p>Impress clients or reward your team with a tailored dining experience featuring our signature seafood selections.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Engagements & Rehearsal Dinners
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#event-accordion">
                                    <div class="accordion-body">
                                        <p>Impress clients or reward your team with a tailored dining experience featuring our signature seafood selections.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->

                        <!-- Event Button Start -->
                        <div class="events-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="contact.html" class="btn-default">Book An Event</a>
                        </div>
                        <!-- Event Button End -->
                    </div>
                    <!-- Our Events Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Event Image Box Start -->
                    <div class="events-image-box">
                        <!-- Event Image Start -->
                        <div class="events-image">
                            <figure class="image-anime">
                                <img src="images/events-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Event Image End -->

                        <!-- Event Counter Box Start -->
                        <div class="event-counter-box">
                            <!-- Event Counter Item Start -->
                            <div class="event-counter-item">
                                <h2><span class="counter">98</span>%</h2>
                                <p>Satisfaction Rate</p>
                            </div>
                            <!-- Event Counter Item End -->

                            <!-- Event Counter Item Start -->
                            <div class="event-counter-item">
                                <h2><span class="counter">358</span>+</h2>
                                <p>The Events Is Held</p>
                            </div>
                            <!-- Event Counter Item End -->
                        </div>
                        <!-- Event Counter Box End -->
                    </div>
                    <!-- Event Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Events Section End -->

    <!-- Reserve Table Section Start -->
    <div class="reserve-table bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Reserve A Table</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dine with us - simple, seamless table reservations</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Reserve Table Form Start -->
                    <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                        <form id="reserveForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Your Name*</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ex. John Dev" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">email address*</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">phone number*</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Number of Guests*</label>
                                    <select name="number" class="form-control form-select" id="number" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5_more">5 & More</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Date of Reservation*</label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Time of Reservation*</label>
                                    <input type="time" name="time" class="form-control" id="time" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Special Requests</label>
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Additional Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                        
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default"><span>Book A Table</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Reserve Table Form End -->
                </div>

                <div class="col-lg-5">
                    <!-- Reserve Table Content Start -->
                    <div class="reserve-table-content wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p>Have a question, need a reservation, or want to plan a private event? Reach out - we're here to help!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Reserve Table Info Start -->
                        <div class="reserve-table-info">
                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Our Address</h3>
                                <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Contact Information</h3>
                                <p>Phone: <a href="tel:123456789">+ (123) 456-789</a></p>
                                <p>Email: <a href="mailto:info@domainname.com">info@domainname.com</a></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item reserve-table-time">
                                <h3>Hours Of Operation</h3>
                                <p>Hours Of Operation <span>11:00 AM - 10:00 PM</span></p>
                                <p>Saturday - Sunday <span>09:00 AM - 11:00 PM</span></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Stay Connected</h3>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Reserve Table Info Item End -->
                        </div>
                        <!-- Reserve Table Info End -->
                    </div>
                    <!-- Reserve Table Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Reserve Table Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our blog</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Your monthly dose of flavor, freshness & foodie fun</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">5 Secrets to Cooking the Perfect Grilled Salmon</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">From Ocean to Plate How We Source Our Seafood Sustainably</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Hosting Events at Our Place - A Guide to Private Coastal Dining</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

