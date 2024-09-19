@extends('layouts.layout')
    @section('content')
        <section>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                    </div>
                </div>
            @endif

            <!-- Affichage du message de succès Toastr -->
            @if (session('success'))
                <script>
                    toastr.success('{{ session('success') }}');
                </script>
            @endif
           	<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-4.jpg')}});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Reservation de votre vol</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="index-2.html">Accueil</a></li>
							<li class="current">Reservation</li>
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
                            
							<h3>Veillez saisir vos information ici </h3>
							<div class="form-box site-form">
								{{-- /Formulaire de contact/ --}}
								<form method="post" action="{{route('step2.reservation.store')}}" id="">
									@csrf
									<div class="row clearfix">
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="nom" value="" placeholder="Votre nom"
													>
											</div>
										</div>
                                        
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="prenoms" value="" placeholder="Votre Prenom"
													>
											</div>
										</div>

										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="contact" value="" placeholder="Votre numero de telephone"
													>
											</div>
										</div>
                                        
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="numero_whatsapp" value="" placeholder="Votre numro whatsapp"
													>
											</div>
										</div>

										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Votre adresse e-mail"
													>
											</div>
										</div>
										<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="field-inner">
												<input type="text" name="adresse" value="" placeholder="Votre Adresse"
													>
											</div>
										</div>
										<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-one"><span>Reserver</span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        </section>
    @endsection