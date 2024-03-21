<div class="packages-two">
    <div class="bg-layer" style="background-image: url({{asset('frontend/assets/images/background/pattern-3.jpg')}});"></div>
    <div class="auto-container">
        <div class="tabs-box pkg-tabs">
            <div class="title-outer clearfix">
                <div class="title-box">
                    <h2><span>Top Hotels</span></h2>
                </div>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="pkg-tab-1">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        @foreach ($hotels as $hotel)
                            <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="hotel-single.html">
                                                <img src="{{ asset('storage/' . json_decode($hotel->images)[0]) }}" alt="Maldives Hotel">
                                            </a>
                                        </div>
                                        <div class="b-title featured"><span>Featured</span></div>
                                        <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="location">{{$hotel->localisation}}</div>
                                        <h5><a href="hotel-single.html">{{$hotel->name}}</a></h5>
                                        <div class="bottom-box clearfix">
                                            <div class="rating"><a href="#" class="theme-btn"><i
                                                        class="fa-solid fa-star"></i>
                                                    <strong>{{$hotel->etoiles}}  étoiles</strong> &ensp;
                                                    {{-- <span class="count">1415 Reviews</span> --}}
                                                </a></div>
                                            <div class="price">Prix &ensp;<span class="amount"> {{ number_format($hotel->prix, 0, ',', ' ') }} FCFA </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="tab" id="pkg-tab-2">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/long-walk-marrakech.jpg')}}"
                                                alt="A Long Walk in Old Medina"></a></div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Marrakech</div>
                                    <h5><a href="tour-single.html">A Long Walk in Old Medina</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">5235 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/pyramids-tour.jpg')}}"
                                                alt="Egyptian Pyramids"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Cairo</div>
                                    <h5><a href="tour-single.html">Pharaohs and Pyramids Tour</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">509 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$199</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/rainy-chefchaouen-morocco.jpg')}}"
                                                alt="Chefchaouen"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Chefchaouen</div>
                                    <h5><a href="tour-single.html">Experience Beautiful Chefchaouen</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">3210 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/surin-beach-phuket.jpg')}}"
                                                alt="Surin Beach"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Phuket</div>
                                    <h5><a href="tour-single.html">A Day in Surin Beach</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.6</strong> &ensp;
                                                <span class="count">3210 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/colosseum-glory-rome.jpg')}}"
                                                alt="Colosseum Glory"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Rome</div>
                                    <h5><a href="tour-single.html">Experience Rome History</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.4</strong> &ensp;
                                                <span class="count">3600 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$239</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="tour-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/roma-pizza-rome.jpg')}}"
                                                alt="Roma Pizza"></a>
                                    </div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Rome</div>
                                    <h5><a href="tour-single.html">Experience Authentic Pizza</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">3210 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="pkg-tab-3">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/austria-skiing.jpg')}}"
                                                alt="Austria Skiing"></a></div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Austria</div>
                                    <h5><a href="activity-single.html">Skiing in Austria</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">590 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$425</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/moose-camping-usa.jpg')}}"
                                                alt="Moose Camping"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Moose</div>
                                    <h5><a href="activity-single.html">Camping in Moose</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">7340 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$245</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/borga-mountain-bike.jpg')}}"
                                                alt="Mountain Bike"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Borgå</div>
                                    <h5><a href="activity-single.html">Downhill into the forest</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">462 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$235</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/gudvangen-paddle-norway.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Gudvangen</div>
                                    <h5><a href="activity-single.html">Paddle Under the Clouds</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.7</strong> &ensp;
                                                <span class="count">8233 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$459</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/hiking-usa.jpg')}}"
                                                alt="USA Hiking"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Minnewaska</div>
                                    <h5><a href="activity-single.html">Leave the City Behind</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">3210 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="activity-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/venice-romance-italy.jpg')}}"
                                                alt="Romance in Venice"></a>
                                    </div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Venice</div>
                                    <h5><a href="activity-single.html">Live the Romance of Your Life</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">4559 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$265</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="pkg-tab-4">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/dubai-desert.jpg')}}"
                                                alt=""></a></div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Dubai</div>
                                    <h5><a href="destination-single.html">Adventure in the Arabian Sahara</a>
                                    </h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">1234 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$435</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/jeep-adventure.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Utah</div>
                                    <h5><a href="destination-single.html">Drive with Power in Mind</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.6</strong> &ensp;
                                                <span class="count">3520 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$545</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/emmagen-creek-australia.jpg')}}"
                                                alt="Emmagen Creek"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Emmagen Creek</div>
                                    <h5><a href="destination-single.html">Drive Through the Creek</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.9</strong> &ensp;
                                                <span class="count">7823 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$415</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/bently-feel-like-king.jpg')}}"
                                                alt="Bently"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Dubai</div>
                                    <h5><a href="destination-single.html">Feel Like a King</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.7</strong> &ensp;
                                                <span class="count">6452 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$999</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/ferrari-richmond-uk.jpg')}}"
                                                alt="Ferrari"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Richmond</div>
                                    <h5><a href="destination-single.html">Need for Speed</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.3</strong> &ensp;
                                                <span class="count">1225 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$699</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/night-drive-dubai.jpg')}}"
                                                alt="Night Drive"></a>
                                    </div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Dubai</div>
                                    <h5><a href="destination-single.html">The Night Drive</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.7</strong> &ensp;
                                                <span class="count">6288 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$245</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="pkg-tab-5">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/mexico-cruise.jpg')}}"
                                                alt="Mexico Cruise"></a></div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Mexico</div>
                                    <h5><a href="destination-single.html">Crusing Your Way to New Life</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">3678 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$569</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/turkey-cruise.jpg')}}"
                                                alt="Turkey Cruise"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Turkey</div>
                                    <h5><a href="destination-single.html">Mediterranean Family Cruise</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.7</strong> &ensp;
                                                <span class="count">2339 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$459</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/haiti-cruise.jpg')}}"
                                                alt="Haiti Cruise"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Haiti</div>
                                    <h5><a href="destination-single.html">Tropical Life on Ship</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">4665 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$565</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/copenghagen-cruise.jpg')}}"
                                                alt="Copenhgen Cruise"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Copenhagen</div>
                                    <h5><a href="destination-single.html">Experience Romance on Ship</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.9</strong> &ensp;
                                                <span class="count">5611 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$685</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/venice-cruise.jpg')}}"
                                                alt="Venice Cruise"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Venice</div>
                                    <h5><a href="destination-single.html">Experience Love and Romance</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.6</strong> &ensp;
                                                <span class="count">290 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$785</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/newyork-cruise.jpg')}}"
                                                alt="New Cruise"></a>
                                    </div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">New York</div>
                                    <h5><a href="destination-single.html">Cruise with an Attitude</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.7</strong> &ensp;
                                                <span class="count">9233 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$770</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="pkg-tab-6">
                    <div class="row clearfix justify-content-center">
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/germany-flight.jpg')}}"
                                                alt="Germany Flight"></a></div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Berlin</div>
                                    <h5><a href="destination-single.html">Cheap Flights at Your Fingertips</a>
                                    </h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.9</strong> &ensp;
                                                <span class="count">5128 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$245</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/doha-flights.jpg')}}"
                                                alt="Qatar Flights"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Doha</div>
                                    <h5><a href="destination-single.html">Fly from the Gulf</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.8</strong> &ensp;
                                                <span class="count">2561 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$275</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/australia-flights.jpg')}}"
                                                alt="Australian Flights"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Sydney</div>
                                    <h5><a href="destination-single.html">Fly Far Down and Under</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.6</strong> &ensp;
                                                <span class="count">4544 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/toronto-flights.jpg')}}"
                                                alt="Toronto Flights"></a>
                                    </div>
                                    <div class="b-title top-rated"><span>Top Rated</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Toronto</div>
                                    <h5><a href="destination-single.html">Flights for Everyone</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.5</strong> &ensp;
                                                <span class="count">1288 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/mississauga-canada-flights.jpg')}}"
                                                alt="Canada Flights"></a>
                                    </div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Mississauga</div>
                                    <h5><a href="destination-single.html">Fly in Style</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.6</strong> &ensp;
                                                <span class="count">6231 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$499</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="destination-single.html"><img
                                                src="{{asset('frontend/assets/images/resources/destinations/american-eagle-flights.jpg')}}"
                                                alt="American Eagle"></a>
                                    </div>
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">Morrisville</div>
                                    <h5><a href="destination-single.html">Fly and Get Miles</a></h5>
                                    <div class="bottom-box clearfix">
                                        <div class="rating"><a href="#" class="theme-btn"><i
                                                    class="fa-solid fa-star"></i>
                                                <strong>4.9</strong> &ensp;
                                                <span class="count">7901 Reviews</span></a></div>
                                        <div class="price">Start from &ensp;<span class="amount">$299</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- <div class="lower-data">
        <div class="auto-container">
            <div class="content-box">
                <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/yellow-5.png')}}" alt=""></div>
                <div class="row clearfix">
                    <div class="data-col col-xl-6 col-lg-4 col-md-12 col-sm-12 wow fadeInUp"
                        data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Block-->
                        <div class="featured-block-one">
                            <div class="inner-box">
                                <div class="image-layer"
                                    style="background-image: url({{asset('frontend/assets/images/resources/featured/featured-1.jpg')}});">
                                </div>
                                <div class="over-box">
                                    <div class="b-title featured"><span>Featured</span></div>
                                    <h3><a href="destination-single.html">Pleasure Tour <br>in London Hives
                                            <br>Hotel</a></h3>
                                    <div class="duration">5 Days 4 Nights</div>
                                    <div class="price"><span class="amount">$299</span> <sub>/ Per Person</sub>
                                    </div>
                                    <div class="link-box"><a href="destination-single.html"
                                            class="theme-btn btn-style-two"><span>Book
                                                Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-col col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <!--Block-->
                        <div class="featured-block-one alt">
                            <div class="inner-box">
                                <div class="image-layer"
                                    style="background-image: url({{asset('frontend/assets/images/resources/featured/featured-2.jpg')}});">
                                </div>
                                <div class="over-box">
                                    <h6>Tips & Tricks</h6>
                                    <h3><a href="blog-single.html">Amazing Trip Ideas</a></h3>
                                    <div class="link-box"><a href="blog-single.html"
                                            class="theme-btn btn-style-three"><span>Read
                                                More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-col col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                        data-wow-delay="600ms" data-wow-duration="1500ms">
                        <!--Block-->
                        <div class="featured-block-one alt">
                            <div class="inner-box">
                                <div class="image-layer"
                                    style="background-image: url({{asset('frontend/assets/images/resources/featured/featured-3.jpg')}});">
                                </div>
                                <div class="over-box">
                                    <h6>Special Deal</h6>
                                    <h3><a href="blog-single.html">Get 30% Off <br>in Beach <br>Tour</a></h3>
                                    <div class="link-box"><a href="destination-single.html"
                                            class="theme-btn btn-style-two"><span>Explore Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
</div>