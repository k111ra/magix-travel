@extends('layouts.layout')
@section('content')
		<!-- Banner Section -->
		<div class="banner-two">
			<div class="banner-container">
				<div class="banner-slider">
					<div class="swiper-wrapper">
						<!--Slide Item-->
						<div class="swiper-slide slide-item">
							<div class="image-layer"
								style="background-image: url({{asset('frontend/assets/images/resources/slider/main-slider-1.jpg')}});"></div>
							<div class="auto-container">
								<div class="content-box">
									<div class="content">
										<div class="clearfix">
											<div class="inner">
												<h1><span>Adventure<i class="s-text">Adventure</i></span></h1>
												<div class="travilo-text">Disover top places and enjoy extreme
													activities around the world with a cheap price.</div>
												<div class="links-box clearfix">
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-two"><span>Explore
																Now</span></a>
													</div>
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-three"><span>About
																Us</span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Slide Item-->
						<div class="swiper-slide slide-item">
							<div class="image-layer"
								style="background-image: url({{asset('frontend/assets/images/resources/slider/main-slider-2.jpg')}});"></div>
							<div class="auto-container">
								<div class="content-box">
									<div class="content">
										<div class="clearfix">
											<div class="inner">
												<h1><span>Festivals<i class="s-text">Festivals</i></span></h1>
												<div class="travilo-text">Experience the vibrancy of local festivities,
													joining in celebrations that showcase the heart and soul of the
													community.</div>
												<div class="links-box clearfix">
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-two"><span>Explore
																Now</span></a>
													</div>
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-three"><span>About
																Us</span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Slide Item-->
						<div class="swiper-slide slide-item">
							<div class="image-layer"
								style="background-image: url({{asset('frontend/assets/images/resources/slider/main-slider-3.jpg')}});"></div>
							<div class="auto-container">
								<div class="content-box">
									<div class="content">
										<div class="clearfix">
											<div class="inner">
												<h1><span>Cuisine<i class="s-text">Cuisine</i></span></h1>
												<div class="travilo-text">Delight in the diverse flavors and culinary
													traditions of the region you're visiting, savoring local delicacies
													and street food.</div>
												<div class="links-box clearfix">
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-two"><span>Explore
																Now</span></a>
													</div>
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-three"><span>About
																Us</span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Slide Item-->
						<div class="swiper-slide slide-item">
							<div class="image-layer"
								style="background-image: url({{asset('frontend/assets/images/resources/slider/main-slider-4.jpg')}});"></div>
							<div class="auto-container">
								<div class="content-box">
									<div class="content">
										<div class="clearfix">
											<div class="inner">
												<h1><span>Nature<i class="s-text">Nature</i></span></h1>
												<div class="travilo-text">Immerse yourself in the natural beauty of the
													landscapes, whether it's lush forests or pristine beaches.</div>
												<div class="links-box clearfix">
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-two"><span>Explore
																Now</span></a>
													</div>
													<div class="link"><a href="about.html"
															class="theme-btn btn-style-three"><span>About
																Us</span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev"><span class="fa-solid fa-angle-left"></span></div>
					<div class="swiper-button-next"><span class="fa-solid fa-angle-right"></span></div>
				</div>
			</div>
		</div>
		<!--End Banner Section -->

		<!--Serach One-->
		<div class="search-one">
			<div class="auto-container">
				<div class="tabs-box search-tabs">
					<ul class="tab-buttons clearfix">
						<li class="tab-btn active-btn" data-tab="#tab-1"><span>Hotel</span></li>
						<li class="tab-btn" data-tab="#tab-2"><span>Tour</span></li>
						<li class="tab-btn" data-tab="#tab-3"><span>Activity</span></li>
						<li class="tab-btn" data-tab="#tab-4"><span>Car</span></li>
						<li class="tab-btn" data-tab="#tab-5"><span>Cruise</span></li>
						<li class="tab-btn" data-tab="#tab-6"><span>Flights</span></li>
					</ul>
					<div class="tabs-content">
						<!--Tab-->
						<div class="tab active-tab" id="tab-1">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
						<!--Tab-->
						<div class="tab" id="tab-2">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
						<!--Tab-->
						<div class="tab" id="tab-3">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
						<!--Tab-->
						<div class="tab" id="tab-4">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
						<!--Tab-->
						<div class="tab" id="tab-5">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
						<!--Tab-->
						<div class="tab" id="tab-6">
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
									<div class="row clearfix">
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Destination</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Where to go?"
													required>
												<i class="alt-icon fa fa-map-marker-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Start</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check in" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">End</div>
											<div class="field-inner">
												<input class="datepicker" type="text" name="field-name" value=""
													placeholder="Check out" required>
												<i class="alt-icon fa fa-calendar-alt"></i>
											</div>
										</div>
										<div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
											<div class="field-label">Guest</div>
											<div class="field-inner">
												<input type="text" name="field-name" value="" placeholder="Guests"
													required>
												<i class="alt-icon fa fa-user"></i>
											</div>
										</div>
									</div>
									<button type="submit" class="theme-btn f-btn"><span>Search <i
												class="fa-solid fa-search"></i></span></button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Popular Section-->
		<div class="popular-section">
			<div class="auto-container">
				<div class="title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="subtitle">Start Travelling Today</div>
					<h2><span>Popular Locations</span></h2>
				</div>
				<div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-15.png')}}" alt="" title="">
					</div>
					<div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-16.png')}}" alt="" title="">
					</div>
					<div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/purple-2.png')}}" alt=""></div>
					<div class="popular-carousel">

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/newyork.jpg')}}"
												alt="New York"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">New York</a></h3>
										<div class="info"><span>20 Hotels</span> <span>30 Tours</span> <span>15
												Cars</span> <span>18 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/rome.jpg')}}" alt="Rome"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Rome</a></h3>
										<div class="info"><span>27 Hotels</span> <span>45 Tours</span> <span>10
												Cars</span> <span>12 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/london.jpg')}}" alt="London"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">London</a></h3>
										<div class="info"><span>50 Hotels</span> <span>60 Tours</span> <span>25
												Cars</span> <span>25 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/paris.jpg')}}" alt="Paris"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Paris</a></h3>
										<div class="info"><span>45 Hotels</span> <span>35 Tours</span> <span>18
												Cars</span> <span>22 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/phuket.jpg')}}" alt="Phuket"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Phuket</a></h3>
										<div class="info"><span>100 Hotels</span> <span>60 Tours</span> <span>30
												Cars</span> <span>70 Flights</span></div>
									</div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/sydney.jpg')}}" alt="Sydney"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Sydney</a></h3>
										<div class="info"><span>55 Hotels</span> <span>35 Tours</span> <span>18
												Cars</span> <span>22 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/dubai.jpg')}}" alt="Dubai"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Dubai</a></h3>
										<div class="info"><span>220 Hotels</span> <span>45 Tours</span> <span>37
												Cars</span> <span>100 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/asikkala.jpg')}}"
												alt="Asikkala"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Asikkala</a></h3>
										<div class="info"><span>54 Hotels</span> <span>48 Tours</span> <span>22
												Cars</span> <span>110 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/muscat.jpg')}}" alt="Muscat"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Muscat</a></h3>
										<div class="info"><span>38 Hotels</span> <span>25 Tours</span> <span>24
												Cars</span> <span>26 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/bangkok.jpg')}}"
												alt="Bangkok"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Bangkok</a></h3>
										<div class="info"><span>30 Hotels</span> <span>27 Tours</span> <span>24
												Cars</span> <span>25 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/beijing.jpg')}}"
												alt="Beijing"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Beijing</a></h3>
										<div class="info"><span>48 Hotels</span> <span>46 Tours</span> <span>15
												Cars</span> <span>29 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block alternate">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/madrid.jpg')}}" alt="Madrid"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Madrid</a></h3>
										<div class="info"><span>80 Hotels</span> <span>34 Tours</span> <span>40
												Cars</span> <span>44 Flights</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Intro Section-->
		<div class="intro-section no-padd-top">
			<div class="auto-container">
				<div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="subtitle">Let’s Travel Now</div>
					<h2><span>Explore the World</span></h2>
				</div>
				<div class="row clearfix justify-content-center">
					<!--Block-->
					<div class="intro-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
						data-wow-duration="1500ms">
						<div class="inner-box">
							<div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-1.png')}}" alt=""></span></div>
							<h4>Most Popular Destinations</h4>
							<p class="travilo-text">Discover the world's most sought-after destinations, from
								breathtaking wonders to
								vibrant cityscapes. Unveil iconic landmarks, immerse in diverse cultures, and create
								cherished memories
								on your journey of a lifetime.</p>
						</div>
					</div>
					<!--Block-->
					<div class="intro-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
						data-wow-duration="1500ms">
						<div class="inner-box">
							<div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-2.png')}}" alt=""></span></div>
							<h4>Budget Friendly Packages</h4>
							<p class="travilo-text">Travel doesn't have to break the bank! Explore our curated selection
								of
								budget-friendly packages, where you can experience incredible adventures without
								compromising on
								quality. Embrace wanderlust without the financial worry.</p>
						</div>
					</div>
					<!--Block-->
					<div class="intro-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
						data-wow-duration="1500ms">
						<div class="inner-box">
							<div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-3.png')}}" alt=""></span></div>
							<h4>Satisfaction Guarranted</h4>
							<p class="travilo-text">Your satisfaction is our top priority. With meticulous planning and
								personalized
								service, we ensure your travel experiences exceed expectations. Book with confidence,
								knowing that your
								journey will be nothing short of exceptional.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Packages Section-->
		<div class="packages-two">
			<div class="bg-layer" style="background-image: url({{asset('frontend/assets/images/background/pattern-3.jpg')}});"></div>
			<div class="auto-container">
				<div class="tabs-box pkg-tabs">
					<div class="title-outer clearfix">
						<div class="title-box">
							<div class="subtitle">Packages</div>
							<h2><span>Top Destinations</span></h2>
						</div>
						<div class="tab-btns">
							<ul class="tab-buttons clearfix">
								<li class="tab-btn active-btn" data-tab="#pkg-tab-1"><span>Hotels</span></li>
								<li class="tab-btn" data-tab="#pkg-tab-2"><span>Tours</span></li>
								<li class="tab-btn" data-tab="#pkg-tab-3"><span>Activities</span></li>
								<li class="tab-btn" data-tab="#pkg-tab-4"><span>Cars</span></li>
								<li class="tab-btn" data-tab="#pkg-tab-5"><span>Cruises</span></li>
								<li class="tab-btn" data-tab="#pkg-tab-6"><span>Flights</span></li>
							</ul>
						</div>
					</div>
					<div class="tabs-content">
						<div class="tab active-tab" id="pkg-tab-1">
							<div class="row clearfix justify-content-center">
								<!--Block-->
								<div class="package-block alt col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/maldives-hotel.jpg')}}"
														alt="Maldives Hotel"></a></div>
											<div class="b-title featured"><span>Featured</span></div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Maldives</div>
											<h5><a href="hotel-single.html">Hotel Maldives Shore</a></h5>
											<div class="bottom-box clearfix">
												<div class="rating"><a href="#" class="theme-btn"><i
															class="fa-solid fa-star"></i>
														<strong>4.8</strong> &ensp;
														<span class="count">1415 Reviews</span></a></div>
												<div class="price">Start from &ensp;<span class="amount">$249</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="package-block alt col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/one-eighty-bali-hotel.jpg')}}"
														alt="One Eighty"></a>
											</div>
											<div class="b-title top-rated"><span>Top Rated</span></div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Bali</div>
											<h5><a href="hotel-single.html">One Eighty</a></h5>
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
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/palawan-hotel.jpg')}}"
														alt="Palawan"></a>
											</div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Palawan</div>
											<h5><a href="hotel-single.html">Hotel Palawan Paramount</a></h5>
											<div class="bottom-box clearfix">
												<div class="rating"><a href="#" class="theme-btn"><i
															class="fa-solid fa-star"></i>
														<strong>4.9</strong> &ensp;
														<span class="count">940 Reviews</span></a></div>
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
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/the-bellagio-hotel.jpg')}}"
														alt="The Bellagio"></a>
											</div>
											<div class="b-title top-rated"><span>Top Rated</span></div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Las Vegas</div>
											<h5><a href="hotel-single.html">The Bellagio</a></h5>
											<div class="bottom-box clearfix">
												<div class="rating"><a href="#" class="theme-btn"><i
															class="fa-solid fa-star"></i>
														<strong>4.6</strong> &ensp;
														<span class="count">1240 Reviews</span></a></div>
												<div class="price">Start from &ensp;<span class="amount">$315</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="package-block alt col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/avista-hideway-hotel.jpg')}}"
														alt="Avista Hideway"></a>
											</div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Phuket</div>
											<h5><a href="hotel-single.html">Avista Hideway</a></h5>
											<div class="bottom-box clearfix">
												<div class="rating"><a href="#" class="theme-btn"><i
															class="fa-solid fa-star"></i>
														<strong>4.8</strong> &ensp;
														<span class="count">3210 Reviews</span></a></div>
												<div class="price">Start from &ensp;<span class="amount">$345</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="package-block alt col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image-box">
											<div class="image"><a href="hotel-single.html"><img
														src="{{asset('frontend/assets/images/resources/destinations/punta-cana-hotel.jpg')}}"
														alt="Punta Cana"></a>
											</div>
											<div class="b-title featured"><span>Featured</span></div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
										</div>
										<div class="lower-box">
											<div class="location">Punta Cana</div>
											<h5><a href="hotel-single.html">Hotel Punta Cana</a></h5>
											<div class="bottom-box clearfix">
												<div class="rating"><a href="#" class="theme-btn"><i
															class="fa-solid fa-star"></i>
														<strong>4.8</strong> &ensp;
														<span class="count">1256 Reviews</span></a></div>
												<div class="price">Start from &ensp;<span class="amount">$475</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab" id="pkg-tab-2">
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
						</div>
					</div>
				</div>
			</div>
			<div class="lower-data">
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
			</div>
		</div>

		<!--About Two Section-->
		<div class="about-two">
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
		</div>

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