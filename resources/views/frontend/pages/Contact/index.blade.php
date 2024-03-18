@extends('layouts.layout')
<!-- 
@section('content') -->
   

		<!--Menu Backdrop-->
		
		<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url(assets/images/resources/featured/banner-4.jpg);">
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
										<h5>Location</h5>
										<div class="travilo-text">20, Love Street, Muscat, Oman</div>
									</li>
									<li class="phone">
										<i class="icon fa-solid fa-phone"></i>
										<h5>Phone</h5>
										<div class="travilo-text"><a href="tel:+96899999000">+968 99999000</a></div>
									</li>
									<li class="email">
										<i class="icon fa fa-envelope"></i>
										<h5>Email</h5>
										<div class="travilo-text"><a
												href="mailto:hello@travilo.com">hello@travilo.com</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--Form Col-->
					<div class="form-col col-lg-8 col-md-12 col-sm-12">
						<div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
							<h3>Send Us A Message</h3>
							<div class="form-box site-form">
								<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/sendemail.php" id="contact-form">
									<div class="row clearfix">
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="username" value="" placeholder="Your name"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Your email"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="phone" value="" placeholder="Your Phone"
													required>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="subject" value="" placeholder="Subject"
													required>
											</div>
										</div>
										<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<textarea name="message" placeholder="Start writing your message here"
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

<!-- @endsection -->
