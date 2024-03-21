@extends('layouts.layout')
@section('content')
		<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-2.jpg')}});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>{{$destination->name}}</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('destination')}}">Destinations</a></li>
							<li class="current">{{$destination->name}}</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Destination Single-->
		<div class="destination-single">
			<div class="auto-container">
				<div class="upper-images">
					<div class="row clearfix">
						<!--Image Block-->
						<div class="image-col col-lg-8 col-md-12 col-sm-12">
							<!--Image Block-->
							<div class="image-block">
								<div class="image"><a href="{{ asset('storage/' . json_decode($destination->images)[0]) }}"
										class="lightbox-image" data-fancybox="D-Gallery"><img
											src="{{ asset('storage/' . json_decode($destination->images)[0]) }}"
											alt="Istanbul Masjid"></a>
								</div>
							</div>
						</div>

						<!--Image Block-->
						<div class="image-col col-lg-4 col-md-12 col-sm-12">
							<!--Image Block-->
							@for($i = 1; $i < count(json_decode($destination->images)); $i++)
								<div class="image-block">
									<div class="image"><a href="{{ asset('storage/' . json_decode($destination->images)[$i]) }}"
										class="lightbox-image" data-fancybox="D-Gallery">
										<img src="{{ asset('storage/' . json_decode($destination->images)[$i]) }}" alt="Image de destination"></a>
									</div>
								</div>
							@endfor
						</div>
					</div>
				</div>
				<div class="lower-content">
					<div class="row clearfix">
						<div class="content-col col-lg-8 col-md-12 col-sm-12">
							<div class="inner">
								<h3>A propos  {{$destination->name}}</h3>
								<div class="travilo-text">
									<p>{{$destination->description}} </p>
								</div>

								<div class="basic-info">
									<div class="i-block clearfix">
										<h5>Basic Information</h5>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Country</div>
										<div class="i-content">Turkey</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Language</div>
										<div class="i-content">Turkish, Kurdish, Arabic, Zaza, Circassian</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Currency</div>
										<div class="i-content">Turkish Lira</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Area</div>
										<div class="i-content">2,063 Square Miles</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Population</div>
										<div class="i-content">15M</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Time Zone</div>
										<div class="i-content">UTC+2</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Time to Travel</div>
										<div class="i-content">May, June, July, August</div>
									</div>
								</div>
							</div>
						</div>
						<div class="info-col col-lg-4 col-md-12 col-sm-12">
							<div class="inner">
								<!--Block-->
								<div class="info-block loc-map">
									<div class="inner-box">
										<h3>City Map</h3>
										<div class="map-box">
											<iframe
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3211045611!2d28.68252620266689!3d41.005370208664374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVsLCBUw7xya2l5ZQ!5e0!3m2!1sen!2som!4v1691060523160!5m2!1sen!2som"
												allowfullscreen="" loading="lazy"
												referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="info-block weather-info">
									<div class="inner-box">
										<h3>Weather</h3>
										<div class="weather">
											<ul>
												<li class="clearfix"><span class="ttl">Jan - Feb</span><span
														class="dtl">12o C - 18o C</span>
												</li>
												<li class="clearfix"><span class="ttl">Mar - Apr</span><span
														class="dtl">8o C - 12o C</span>
												</li>
												<li class="clearfix"><span class="ttl">May - Jun</span><span
														class="dtl">4o C - 8o C</span></li>
												<li class="clearfix"><span class="ttl">Jul - Aug</span><span
														class="dtl">12o C - 16o C</span>
												</li>
												<li class="clearfix"><span class="ttl">Sep - Oct</span><span
														class="dtl">15o C - 18o C</span>
												</li>
												<li class="clearfix"><span class="ttl">Nov - Dec</span><span
														class="dtl">22o C - 30o C</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection