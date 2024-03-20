@extends('layouts.layout')
@section('content')
 
		<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-6.jpg')}});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Destinations</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="index-2.html">Home</a></li>
							<li class="current">Destinations</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Destinations Section-->
		<section class="destinations-two">
			<div class="auto-container">
				<div class="packages">
					<div class="row clearfix">
						<!--Block-->
                        @foreach ($destinations as $destination)
                            
                        
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{ asset('storage/' . $destination->images[0]) }}" alt="Giza"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">{{$destination->name}}</a></h3>
										{{-- <div class="info"><span>20 Hotel</span> <span>30 Tours</span> <span>10
												Cars</span> <span>18 Flights</span></div> --}}
									</div>
								</div>
							</div>
						</div>
                        @endforeach
{{-- 
						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/muttrah.jpg')}}"
												alt="Muttrah"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Muttrah</a></h3>
										<div class="info"><span>55 Hotel</span> <span>48 Tours</span> <span>7
												Cars</span> <span>70 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/miami.jpg')}}" alt="Miami"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Maiami</a></h3>
										<div class="info"><span>48 Hotel</span> <span>14 Tours</span> <span>8
												Cars</span> <span>30 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/beijing.jpg')}}"
												alt="Beijing"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Beijing</a></h3>
										<div class="info"><span>70 Hotel</span> <span>90 Tours</span> <span>25
												Cars</span> <span>35 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/agra.jpg')}}" alt="Agra"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Agra</a></h3>
										<div class="info"><span>15 Hotel</span> <span>38 Tours</span> <span>7
												Cars</span> <span>22 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/dubai.jpg')}}" alt="Dubai"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Dubai</a></h3>
										<div class="info"><span>90 Hotel</span> <span>100 Tours</span> <span>30
												Cars</span> <span>35 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/taghazout.jpg')}}"
												alt="Taghazout"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Taghazout</a></h3>
										<div class="info"><span>12 Hotel</span> <span>25 Tours</span> <span>8
												Cars</span> <span>27 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/london.jpg')}}" alt="London"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">London</a></h3>
										<div class="info"><span>78 Hotel</span> <span>45 Tours</span> <span>32
												Cars</span> <span>40 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/singapore.jpg')}}"
												alt="Singapore"></a></div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Singapore</a></h3>
										<div class="info"><span>100 Hotel</span> <span>70 Tours</span> <span>80
												Cars</span> <span>45 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/berlin.jpg')}}" alt="Berlin"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Berlin</a></h3>
										<div class="info"><span>66 Hotel</span> <span>77 Tours</span> <span>33
												Cars</span> <span>44 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/ghorem.jpg')}}" alt="Ghorem"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Ghorem</a></h3>
										<div class="info"><span>76 Hotel</span> <span>120 Tours</span> <span>50
												Cars</span> <span>35 Flights</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="popular-block col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="destination-single.html"><img
												src="{{asset('frontend/assets/images/resources/destinations/bali.jpg')}}" alt="Bali"></a>
									</div>
								</div>
								<div class="hvr-box">
									<div class="hvr-inner">
										<h3><a href="destination-single.html">Bali</a></h3>
										<div class="info"><span>45 Hotel</span> <span>57 Tours</span> <span>29
												Cars</span> <span>26 Flights</span></div>
									</div>
								</div>
							</div>
						</div> --}}

					</div>

					<div class="styled-pagination centered">
						<ul class="clearfix">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
   
@endsection