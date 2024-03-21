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
												src="{{ asset('storage/' . $destination->images[0]) }}" alt="Giza" style="height: 369.52px;"></a>
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