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
		{{-- <div class="about-two">
			<div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-18.png')}}" alt="" title=""></div>
			<div class="auto-container">
				<div class="outer-box">
					<div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/green-2.png')}}" alt=""></div>
					<div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-17.png')}}" alt="" title="">
					</div>
					<div class="row clearfix">
						<!--Text Col-->
						<div class="text-col col-lg-7 col-md-12 col-sm-12">
							<div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
								<div class="title-box">
									<div class="subtitle">Let’s Explore the World</div>
									<h2><span>We Can Make Your Tour Most Enjoyable Holiday Ever</span></h2>
									<div class="travilo-text">
										<p>At our travel agency, we pride ourselves on our commitment to making your
											tour the most enjoyable
											holiday ever. With meticulous attention to detail and a passion for crafting
											unforgettable
											experiences, we go above and beyond to ensure your journey is nothing short
											of extraordinary.</p>
										<p>From
											personalized itineraries that cater to your unique interests to handpicking
											accommodations that
											provide comfort and luxury, every aspect of your trip is carefully curated
											with your satisfaction
											in mind.</p>
									</div>
								</div>
								<div class="facts-two">
									<div class="row clearfix">
										<div class="fact-block col-lg-4 col-md-4 col-sm-6">
											<div class="inner-box clearfix">
												<div class="fact-count">
													<div class="count-box"><span class="count-text" data-stop="2"
															data-speed="1000">0</span>K
													</div>
												</div>
												<div class="fact-title">Total <br>Location</div>
											</div>
										</div>
										<div class="fact-block col-lg-4 col-md-4 col-sm-6">
											<div class="inner-box clearfix">
												<div class="fact-count">
													<div class="count-box"><span class="count-text" data-stop="5"
															data-speed="1500">0</span>K
													</div>
												</div>
												<div class="fact-title">Travel <br>Activity</div>
											</div>
										</div>
										<div class="fact-block col-lg-4 col-md-4 col-sm-6">
											<div class="inner-box clearfix">
												<div class="fact-count">
													<div class="count-box"><span class="count-text" data-stop="8"
															data-speed="2000">0</span>K
													</div>
												</div>
												<div class="fact-title">Tour <br>Packages</div>
											</div>
										</div>
									</div>
								</div>
								<div class="link-box"><a href="about.html" class="theme-btn btn-style-two"><span>More
											About Us</span></a></div>
							</div>
						</div>
						<!--Image Col-->
						<div class="image-col col-lg-5 col-md-12 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
								<div class="d-elem-2"><img src="{{asset('frontend/assets/images/elements/pink-3.png')}}" alt=""></div>
								<div class="image-box">
									<img src="{{asset('frontend/assets/images/resources/misc/about-2.jpg')}}" alt="" title="">
									<a href="https://www.youtube.com/watch?v=ZETY_l3GVQg&amp;autoplay=1"
										class="lightbox-image vid-btn"><span class="icon fa fa-play"><i
												class="ripple"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<!--Packages Section-->
		<div class="packages-section">
			<div class="bg-layer" style="background-image: url({{asset('frontend/assets/images/background/pattern-1.png')}});"></div>
			<div class="auto-container">
				<div class="title-box">
					<div class="subtitle">Packages</div>
					<h2><span>Travel Packages</span></h2>
				</div>
				<div class="carousel-box">
					<div class="packages-carousel">
						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/morocco.jpg')}}"
												alt="Morocco"></a></div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-1.png')}}" alt=""><span
											class="icon flaticon-family"></span></div>
									<div class="location">Morocco</div>
									<h5><a href="tour-single.html">Enjoy the Colorful Marakish Markets Day Time</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 5 Days 6 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 4</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong> &ensp; <span class="count">2233 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$455</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/egypt.jpg')}}" alt="Egypt"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-2.png')}}" alt=""><span
											class="icon flaticon-hiking"></span></div>
									<div class="location">Egypt</div>
									<h5><a href="tour-single.html">Journey to the Sands, Exploring Egypt's Enigmatic
											Pyramids</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 7 Days 8 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 7</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.7</strong> &ensp; <span class="count">8791 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$595</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/italy.jpg')}}" alt="Italy"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-3.png')}}" alt=""><span
											class="icon flaticon-family"></span></div>
									<div class="location">Venice</div>
									<h5><a href="tour-single.html">A Romantic Venetian Fantasy of Canals and
											Elegance</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 3 Days 4 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 2</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.9</strong> &ensp; <span class="count">4511 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$269</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/turkey.jpg')}}" alt="Turkey"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-1.png')}}" alt=""><span
											class="icon flaticon-family"></span></div>
									<div class="location">Turkey</div>
									<h5><a href="tour-single.html">The Majestic Blue Masjid Early Morning</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 5 Days 6 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 6</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.6</strong> &ensp; <span class="count">999 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$429</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/japan.jpg')}}" alt="Japan"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-2.png')}}" alt=""><span
											class="icon flaticon-chinese-temple-1"></span></div>
									<div class="location">Tokyo</div>
									<h5><a href="tour-single.html">Where Timeless Traditions Meet Futuristic Marvels</a>
									</h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 3 Days 4 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 14</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong> &ensp; <span class="count">7566 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$545</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/australia.jpg')}}"
												alt="Australia"></a></div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-3.png')}}" alt=""><span
											class="icon flaticon-adventure"></span></div>
									<div class="location">Australia</div>
									<h5><a href="tour-single.html">The Land Down Under, Where Adventure Awaits</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 7 Days 8 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 12</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.6</strong> &ensp; <span class="count">8663 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$555</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/maldives.jpg')}}"
												alt="Maldives"></a></div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-1.png')}}" alt=""><span
											class="icon flaticon-family"></span></div>
									<div class="location">Maldives</div>
									<h5><a href="tour-single.html">A Paradise of Tranquil Islands and Azure Waters</a>
									</h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 5 Days 6 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 12</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong> &ensp; <span class="count">7777 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$775</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/uk.jpg')}}"
												alt="United Kingdom"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-2.png')}}" alt=""><span
											class="icon flaticon-chinese-temple-1"></span></div>
									<div class="location">United Kingdom</div>
									<h5><a href="tour-single.html">Embrace the Timeless Charms of the British
											Capital</a></h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 3 Days 4 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 4</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.7</strong> &ensp; <span class="count">3344 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$345</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="tour-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/brazil.jpg')}}" alt="Brazil"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-3.png')}}" alt=""><span
											class="icon flaticon-hiking"></span></div>
									<div class="location">Brazil</div>
									<h5><a href="tour-single.html">Delving into the Amazon, Nature's Untamed Beauty</a>
									</h5>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-clock"></i> 5 Days 6 Nights</div>
										<div class="persons"><i class="fa-solid fa-user"></i> 8</div>
									</div>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.4</strong> &ensp; <span class="count">1122 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$699</span></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!--Why Us Section-->
		<div class="why-us-two">
			<div class="auto-container">
				<div class="outer-box">
					<div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-19.png')}}" alt="" title="">
					</div>
					<div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-20.png')}}" alt="" title="">
					</div>
					<div class="row clearfix">
						<!--Text Col-->
						<div class="text-col col-lg-6 col-md-12 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
								<div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/purple-3.png')}}" alt=""></div>
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
											<div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-7.png')}}" alt=""></div>
											<h4>Amazing Tour Plans</h4>
											<div class="travilo-text">Sectetur adipisicing elised do eiusmod tempor
												incidid unt ut labore et dolore magna aliqua eniet.</div>
										</div>
									</div>
									<div class="f-block-three">
										<div class="inner-box">
											<div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-8.png')}}" alt=""></div>
											<h4>Best Travel Guides</h4>
											<p class="travilo-text">Your ultimate companion to unforgettable adventures
												and seamless travel
												experiences.</p>
										</div>
									</div>
									<div class="f-block-three">
										<div class="inner-box">
											<div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-9.png')}}" alt=""></div>
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
								<div class="d-elem-2"><img src="{{asset('frontend/assets/images/elements/yellow-4.png')}}" alt=""></div>
								<div class="image-box">
									<img src="{{asset('frontend/assets/images/resources/misc/man-in-forest.jpg')}}" alt="" title="">
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
														src="{{asset('frontend/assets/images/elements/white-1.png')}}" alt=""></i></span></h2>
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
														src="{{asset('frontend/assets/images/resources/thumbnails/testi-1.jpg')}}" alt="">
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
														src="{{asset('frontend/assets/images/resources/thumbnails/testi-2.jpg')}}" alt="">
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
														src="{{asset('frontend/assets/images/resources/thumbnails/testi-3.jpg')}}" alt="">
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
							<div class="image-box"><img src="{{asset('frontend/assets/images/resources/misc/man-orange-bag.png')}}" alt=""
									title="">
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
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-1.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-2.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-3.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-4.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-5.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-1.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-2.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-3.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-4.png')}}" alt=""></a>
							</div>
						</div>
						<!--Block-->
						<div class="partner-block">
							<div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-5.png')}}" alt=""></a>
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
					<div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-21.png')}}" alt="" title="">
					</div>
					<div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-22.png')}}" alt="" title="">
					</div>
					<div class="row clearfix">

						<div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
							data-wow-delay="0ms">
							<div class="inner-box">
								<div class="image-box"><a href="blog-single-2.html"><img
											src="{{asset('frontend/assets/images/resources/posts/post-5.jpg')}}" alt=""></a></div>
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
											src="{{asset('frontend/assets/images/resources/posts/post-6.jpg')}}" alt=""></a></div>
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
											src="{{asset('frontend/assets/images/resources/posts/post-7.jpg')}}" alt=""></a></div>
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
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-1.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-1-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-2.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-2-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-3.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-3-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-4.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-4-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-5.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-5-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-6.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-6-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-7.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-7-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-8.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-8-thumb.jpg')}}" alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-9.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-9-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-10.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-10-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-11.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-11-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>
						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-12.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-12-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>

						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-13.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-13-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>

						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-14.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-14-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>

						<!--Block-->
						<div class="insta-block">
							<div class="image">
								<span class="img"><a href="{{asset('frontend/assets/images/resources/instagram/insta-15.jpg')}}"
										class="lightbox-image" data-fancybox="insta-gallery"><img
											src="{{asset('frontend/assets/images/resources/instagram/insta-15-big-thumb.jpg')}}"
											alt=""></a></span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
@endsection