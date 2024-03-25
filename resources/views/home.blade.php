@extends('layouts.layout')
@section('content')
    <!-- Banner Section -->
    @include('frontend.home.slider')
    <!--End Banner Section -->

    <!--Serach One-->
    @include('frontend.home.research')

    <!--Popular Section-->
    @include('frontend.home.destination')

    <!--Intro Section-->
    @include('frontend.home.service')

    <!--Packages Section-->
    @include('frontend.home.hotel')

    <!--About Two Section-->


    <!--Packages Section-->
    @include('frontend.home.tour')

    <!--Why Us Section-->
    <div class="why-us-two">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg-grad-left"><img src="{{ asset('frontend/assets/images/background/bg-gradient-19.png') }}"
                        alt="" title="">
                </div>
                <div class="bg-grad-right"><img src="{{ asset('frontend/assets/images/background/bg-gradient-20.png') }}"
                        alt="" title="">
                </div>
                <div class="row clearfix">
                    <!--Text Col-->
                    <div class="text-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="d-elem-1"><img src="{{ asset('frontend/assets/images/elements/purple-3.png') }}"
                                    alt=""></div>
                            <div class="title-box">
                                <div class="subtitle">Why Choose Us</div>
                                <h2><span>We Arrange the Best Tour Ever Possible</span></h2>
                                <p class="travilo-text">Our expert team meticulously crafts every detail to ensure
                                    you embark on a
                                    journey filled with extraordinary experiences.</p>
                            </div>
                            <div class="features">
                                <div class="f-block-three">
                                    <div class="inner-box">
                                        <div class="icon"><img
                                                src="{{ asset('frontend/assets/images/icons/f-icon-7.png') }}"
                                                alt=""></div>
                                        <h4>Amazing Tour Plans</h4>
                                        <div class="travilo-text">Sectetur adipisicing elised do eiusmod tempor
                                            incidid unt ut labore et dolore magna aliqua eniet.</div>
                                    </div>
                                </div>
                                <div class="f-block-three">
                                    <div class="inner-box">
                                        <div class="icon"><img
                                                src="{{ asset('frontend/assets/images/icons/f-icon-8.png') }}"
                                                alt=""></div>
                                        <h4>Best Travel Guides</h4>
                                        <p class="travilo-text">Your ultimate companion to unforgettable adventures
                                            and seamless travel
                                            experiences.</p>
                                    </div>
                                </div>
                                <div class="f-block-three">
                                    <div class="inner-box">
                                        <div class="icon"><img
                                                src="{{ asset('frontend/assets/images/icons/f-icon-9.png') }}"
                                                alt=""></div>
                                        <h4>Affordable Pricing Plans</h4>
                                        <p class="travilo-text">Discover budget-friendly pricing plans without
                                            compromising on quality and
                                            enjoyment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Image Col-->
                    <div class="image-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="d-elem-2"><img src="{{ asset('frontend/assets/images/elements/yellow-4.png') }}"
                                    alt=""></div>
                            <div class="image-box">
                                <img src="{{ asset('frontend/assets/images/resources/misc/man-in-forest.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="rating"><span class="icon fa fa-star"></span><span class="count">5,0</span>
                            </div>
                            <div class="fact-block f-1">
                                <div class="inner-box clearfix">
                                    <div class="fact-count">
                                        <div class="count-box"><span class="count-text" data-stop="5"
                                                data-speed="2000">0</span>K</div>
                                    </div>
                                    <div class="fact-title">Total <br>Travellers</div>
                                </div>
                            </div>
                            <div class="fact-block f-2">
                                <div class="inner-box clearfix">
                                    <div class="fact-count">
                                        <div class="count-box"><span class="count-text" data-stop="20"
                                                data-speed="2000">0</span>K</div>
                                    </div>
                                    <div class="fact-title">Tour <br>Organized</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="get-help wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="auto-container">
                <div class="content-box">
                    <div class="row clearfix">
                        <div class="text-col col-lg-9 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="title-box">
                                    <div class="subtitle">Confused? Get Help</div>
                                    <h2><span>Get Help from Our Travel Agent <i><img
                                                    src="{{ asset('frontend/assets/images/elements/white-1.png') }}"
                                                    alt=""></i></span></h2>
                                    <p class="travilo-text">Let our dedicated travel agent assist you in crafting
                                        the perfect itinerary
                                        tailored to your preferences and interests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="link-col col-lg-3 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="link-box"><a href="destination-single.html"
                                        class="theme-btn btn-style-two"><span>Explore
                                            Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Testimonials Section-->
    <div class="testimonials-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <div class="subtitle">Testimonials</div>
                            <h2><span>What People Say</span></h2>
                        </div>
                        <div class="carousel-box">
                            <div class="testi-slider-two">
                                <!--Block-->
                                <div class="testi-block-two">
                                    <div class="inner-box">
                                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                                        <div class="rating">
                                            <div class="stars"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="travilo-text">Absolutely incredible! Our trip to Japan was
                                            flawlessly planned by the
                                            travel agent, ensuring we got to experience the best of both modern
                                            cityscapes and traditional
                                            culture. The attention to detail and personalized recommendations made
                                            it a trip of a lifetime.
                                        </p>
                                        <div class="info">
                                            <div class="image"><img
                                                    src="{{ asset('frontend/assets/images/resources/thumbnails/testi-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="name">Farooq Diyaz</div>
                                            <div class="designation">Web Developer</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="testi-block-two">
                                    <div class="inner-box">
                                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                                        <div class="rating">
                                            <div class="stars"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="travilo-text">Thank you for making our dream vacation a reality!
                                            The travel agent's
                                            expertise in curating an unforgettable journey through Europe was beyond
                                            our expectations. From
                                            iconic landmarks to hidden gems, every moment was a delight.
                                        </p>
                                        <div class="info">
                                            <div class="image"><img
                                                    src="{{ asset('frontend/assets/images/resources/thumbnails/testi-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="name">Karim Sonya</div>
                                            <div class="designation">Graphic Designer</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="testi-block-two">
                                    <div class="inner-box">
                                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                                        <div class="rating">
                                            <div class="stars"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="travilo-text">Such a fantastic experience! The travel agent took
                                            care of everything,
                                            from arranging our safari adventure in Africa to organizing cultural
                                            encounters with local
                                            tribes. We felt safe, well-informed, and deeply immersed in the beauty
                                            of the continent.</p>
                                        <div class="info">
                                            <div class="image"><img
                                                    src="{{ asset('frontend/assets/images/resources/thumbnails/testi-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="name">James Fernandez</div>
                                            <div class="designation">Photographer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box"><img
                                src="{{ asset('frontend/assets/images/resources/misc/man-orange-bag.png') }}"
                                alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Partners Section-->
    <div class="partners-two alternate">
        <div class="auto-container">
            <div class="carousel-box">
                <div class="partners-carousel">
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-1.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-2.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-3.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-4.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-5.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-1.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-2.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-3.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-4.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="partner-block">
                        <div class="image"><a href="#"><img
                                    src="{{ asset('frontend/assets/images/partners/partner-5.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--News Section-->
    <div class="news-two">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Blog</div>
                <h2><span>Latest Posts</span></h2>
            </div>
            <div class="news-box">
                <div class="bg-grad-left"><img src="{{ asset('frontend/assets/images/background/bg-gradient-21.png') }}"
                        alt="" title="">
                </div>
                <div class="bg-grad-right"><img src="{{ asset('frontend/assets/images/background/bg-gradient-22.png') }}"
                        alt="" title="">
                </div>
                <div class="row clearfix">

                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="0ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-2.html"><img
                                        src="{{ asset('frontend/assets/images/resources/posts/post-5.jpg') }}"
                                        alt=""></a></div>
                            <div class="lower-box">
                                <ul class="info clearfix">
                                    <li><a href="#"><i class="fa-solid fa-folder"></i> Adventure</a></li>
                                    <li><a href="#"><i class="fa-solid fa-clock"></i> June 17, 2022</a></li>
                                    <li><a href="#"><i class="fa-solid fa-comments"></i> 238</a></li>
                                </ul>
                                <h4><a href="blog-single.html">Tales of Adventure and Discovery from Around the
                                        Globe</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-2.html"><img
                                        src="{{ asset('frontend/assets/images/resources/posts/post-6.jpg') }}"
                                        alt=""></a></div>
                            <div class="lower-box">
                                <ul class="info clearfix">
                                    <li><a href="#"><i class="fa-solid fa-folder"></i> Adventure</a></li>
                                    <li><a href="#"><i class="fa-solid fa-clock"></i> August 1, 2021</a></li>
                                    <li><a href="#"><i class="fa-solid fa-comments"></i> 129</a></li>
                                </ul>
                                <h4><a href="blog-single.html">Travel Smart, Travel Safe, Essential Tips for a
                                        Worry-Free Journey</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single-2.html"><img
                                        src="{{ asset('frontend/assets/images/resources/posts/post-7.jpg') }}"
                                        alt=""></a></div>
                            <div class="lower-box">
                                <ul class="info clearfix">
                                    <li><a href="#"><i class="fa-solid fa-folder"></i> Adventure</a></li>
                                    <li><a href="#"><i class="fa-solid fa-clock"></i> May 23, 2021</a></li>
                                    <li><a href="#"><i class="fa-solid fa-comments"></i> 566</a></li>
                                </ul>
                                <h4><a href="blog-single.html">Uncovering Hidden Gems in Popular Destinations</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Insta Feed Section-->
    <div class="insta-section-two">
        <!--Feed Row-->
        <div class="insta-feed">
            <div class="carousel-box">
                <div class="insta-title">
                    <h5>Follow Us <br>on Instagram</h5>
                    <div class="insta-user"><a href="#">@Travilo</a></div>
                </div>
                <div class="insta-carousel-two">
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-1.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-1-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-2.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-2-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-3.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-3-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-4.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-4-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-5.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-5-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-6.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-6-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-7.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-7-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-8.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-8-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-9.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-9-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-10.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-10-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-11.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-11-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-12.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-12-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-13.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-13-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-14.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-14-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="insta-block">
                        <div class="image">
                            <span class="img"><a
                                    href="{{ asset('frontend/assets/images/resources/instagram/insta-15.jpg') }}"
                                    class="lightbox-image" data-fancybox="insta-gallery"><img
                                        src="{{ asset('frontend/assets/images/resources/instagram/insta-15-big-thumb.jpg') }}"
                                        alt=""></a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
