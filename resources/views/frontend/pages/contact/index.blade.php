@extends('layouts.layout')
@section('content')

		<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-4.jpg')}});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Contact</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="index-2.html">Home</a></li>
							<li class="current">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Contact Section-->
		<section class="contact-section">
			<div class="auto-container">
				<div class="row clearfix">
					<!--Info Col-->
					<div class="info-col col-lg-4 col-md-12 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
							<div class="info">
								<ul>
									<li class="location">
										<i class="icon fa fa-map-marker-alt"></i>
										<h5>Localisation</h5>
										<div class="travilo-text">Treichville, Abidjan, Côte d'Ivoire
									</li>
									<li class="phone">
										<i class="icon fa-solid fa-phone"></i>
										<h5>Téléhone</h5>
										<div class="travilo-text"><a href="tel:+225 07 99 99 90 00">+225 07 99 99 90 00</a></div>
									</li>
									<li class="email">
										<i class="icon fa fa-envelope"></i>
										<h5>E-mail</h5>
										<div class="travilo-text"><a
												href="mailto:info@magixtravel.com">info@magixtravel.com</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--Form Col-->
					<div class="form-col col-lg-8 col-md-12 col-sm-12">
						<div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
							<h3>Envoyez-nous un Message</h3>
							<div class="form-box site-form">
								{{-- /Formulaire de contact/ --}}
								<form method="post" action="{{route('envoi-message')}}" id="">
									@csrf
									<div class="row clearfix">
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="nom" value="" placeholder="Votre nom"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Votre E-mail"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="phone" value="" placeholder="Votre numero de telephone"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="subject" value="" placeholder="objet de votre message"
													required>
											</div>
										</div>
										<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<textarea name="message" placeholder="Ecrivez votre message ici ..."
													required></textarea>
											</div>
										</div>
										<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-one"><span>Submit
													Query</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				{{-- <div class="map-box"> --}}
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.7615890428924!2d-4.00948032591216!3d5.299852894678455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb01294beb2d%3A0xbeed57f41e6f0d0c!2sMagix%20Travel!5e0!3m2!1sfr!2sci!4v1711447307834!5m2!1sfr!2sci" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					<div class="map-icon"><img src="assets/images/icons/map-marker.png" alt=""></div>
				{{-- </div> --}}

			</div>
		</section>


@endsection