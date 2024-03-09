@extends('layouts.layout')
@section('content')

<!--about-us start -->
    <section id="home" class="apropos-us">
			<div class="container">
				<div class="apropos-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-apropos-us">
								<div class="apropos-us-txt">
								<div class="cards">
										<!-- <div class="logo-card">
										<img src="{{ asset('frontend/assets/logo/logo.png') }}" alt="package-place" width="100px">
                        				</div> -->
									<div class="apropos-card1">
										
											
									 <h3>Nos services </h3>

									 
									</div>
									{{-- <div class="about-btn">
										<button  class="about-view">
											explore now
										</button> --}}
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-apropos-us">

							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

	</section>
		<!--/.about-us-->
		<!--about-us end -->
			
		
	<!--packages start-->
	<section id="pack" class="packages">
            <div class="container">
                <div class="gallary-header text-center">
                    <h2>les Hotels</h2>
                    <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
                </div><!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row">

                        @foreach ($hotels as $hotel)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
								 <div class="single-package-item-txt">
                                    <h3>{{ $hotel->name }} <span class="pull-right">{{ number_format($hotel->prix, 0, ',', ' ') }} CFA</span></h3>
                                    <div class="packages-para">
                                        <p><span><i class="fa fa-angle-right"></i> {{ $hotel->description }}</span>
                                            <i class="fa fa-angle-right"></i> {{ $hotel->etoiles}} star accommodation 
                                        </p>
                                        <p><span><i class="fa fa-angle-right"></i> Localisation: {{ $hotel->localisation }}</span>
                                            {{-- <i class="fa fa-angle-right"></i> Food facilities </p> --}}
                                    </div>
                                    <!--/.packages-para-->
                                     <div class="packages-review">
                                        <p>
                                            @for ($i = 0; $i < 4; $i++)
                                                <i class="fa fa-star{{ $i < $hotel->rating ? ' filled' : '' }}"></i>
                                            @endfor
                                            <span>{{ $hotel->description }}</span>
                                        </p>
                                    </div> 
                                    <!--/.packages-review-->
                                    <div class="about-btn">
                                        <button class="about-view packages-btn">
                                            Reserve maintenant
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->
                        </div><!--/.col-->
                        @endforeach

                    </div><!--/.row-->
                </div><!--/.packages-content-->
            </div><!--/.container-->
    </section>
 <!--/.packages-->


		<!--packages start-->
		<section id="pack" class="packages">
            <div class="container">
                <div class="gallary-header text-center">
                    <h2>les diferentes Tours</h2>
                    <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
                </div><!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row">

                        @foreach ($tours as $tour)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ asset('storage/' . $tour->images[0]) }}" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>{{ $tour->nom }} <span class="pull-right">{{ number_format($tour->prix, 0, ',', ' ') }} CFA</span></h3>
                                    <div class="packages-para">
                                        <p><span><i class="fa fa-angle-right"></i> {{ $tour->duree }} Jours {{ $tour->duree > 1 ? 'nights' : 'night' }}</span>
                                            {{-- <i class="fa fa-angle-right"></i> 5 star accommodation --}}
                                        </p>
                                        <p><span><i class="fa fa-angle-right"></i> Moyen de transport: {{ $tour->moyen_transport }}</span>
                                            {{-- <i class="fa fa-angle-right"></i> Food facilities </p> --}}
                                    </div>
                                    <!--/.packages-para-->
                                    {{-- <div class="packages-review">
                                        <p>
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star{{ $i < $tour->rating ? ' filled' : '' }}"></i>
                                            @endfor
                                            <span>{{ $tour->reviews }} reviews</span>
                                        </p>
                                    </div> --}}
                                    <!--/.packages-review-->
                                    <div class="about-btn">
                                        <button class="about-view packages-btn">
                                            Reserve maintenant
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->
                        </div><!--/.col-->
                        @endforeach

                    </div><!--/.row-->
                </div><!--/.packages-content-->
            </div><!--/.container-->
    </section>
 <!--/.packages-->

@endsection
