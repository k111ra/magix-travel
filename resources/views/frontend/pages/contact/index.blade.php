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
								<form method="post" action="" id="">
									<div class="row clearfix">
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="username" value="" placeholder="Votre nom"
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

				<div class="map-box">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29242.499927623165!2d58.47333640472832!3d23.628977463737897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2som!4v1691096678627!5m2!1sen!2som"
						allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					<div class="map-icon"><img src="assets/images/icons/map-marker.png" alt=""></div>
				</div>

			</div>
		</section>


@endsection