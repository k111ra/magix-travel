@extends('layouts.layout')
@section('content')
    

<!-- Banner Section -->
<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{ asset('frontend/assets/images/resources/featured/banner-5.jpg') }});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>dernières Nouvelles</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{route('home')}}">Accueil</a></li>
							<li class="current">Dernières Nouvelles</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Sidebar Container-->
		<div class="sidebar-container blog-page">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="content-side col-xl-8 col-lg-7 col-md-12 col-sm-12">
						<div class="content-inner">

							<div class="news">
								<!--Block-->
								<div class="news-block-three wow fadeInUp" data-wow-duration="1500ms"
									data-wow-delay="0ms">
									<div class="inner-box">
										<div class="image-box"><a href="blog-single.html"><img
													src="{{ asset('frontend/assets/images/resources/posts/featured-image-3.jpg') }}"
													alt="Balloons"></a></div>
										<div class="lower-box">
											<ul class="info clearfix">
												<li><a href="#"><i class="fa-solid fa-folder"></i> Aventure</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Casey Writer</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> 17 juillet 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Voler en montgolfière en Turquie</a>
											</h3>
											<div class="travilo-text">Découvrez la magie de la Cappadoce, en Turquie
												vue plongeante.
												Découvrez les paysages à couper le souffle et les formations rocheuses anciennes comme
												vous flottez doucement au-dessus de
												une montgolfière. Notre guide partage des conseils pour le meilleur moment pour voler et
												à quoi s’attendre pendant cette
												aventure inoubliable ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>En savoir plus</span></a></div>
												<div class="social"><strong>Partager</strong> <a href="#"
														class="facebook"><i class="fab fa-facebook-f"></i></a> <a
														href="#" class="twitter"><i class="fab fa-twitter"></i></a> <a
														href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--Block-->
								<div class="news-block-three wow fadeInUp" data-wow-duration="1500ms"
									data-wow-delay="0ms">
									<div class="inner-box">
										<div class="image-box"><a href="blog-single.html"><img
													src="{{ asset('frontend/assets/images/resources/posts/featured-image-4.jpg') }}"
													alt="Kayaking"></a></div>
										<div class="lower-box">
											<ul class="info clearfix">
												<li><a href="#"><i class="fa-solid fa-folder"></i> Romance</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Liam Nilson</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> 17 mai 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Aventure au lac au Canada, Explorer les Grands
												À l’extérieur</a>
											</h3>
											<div class="travilo-text">Plongez dans la tranquillité des
												lacs vierges et
												sauvage. Du kayak sur les eaux émeraude à la pêche pour les indigènes
												Cette espèce, cet article de blog est
												un guide pour vivre l’aventure ultime du lac. Déterrer le caché
												gemmes et sérénité qui
												vous attendent dans le vaste terrain de jeu naturel du Canada ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>En savoir plus</span></a></div>
												<div class="social"><strong>Partager</strong> <a href="#"
														class="facebook"><i class="fab fa-facebook-f"></i></a> <a
														href="#" class="twitter"><i class="fab fa-twitter"></i></a> <a
														href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--Block-->
								<div class="news-block-three wow fadeInUp" data-wow-duration="1500ms"
									data-wow-delay="0ms">
									<div class="inner-box">
										<div class="image-box"><a href="blog-single.html"><img
													src="{{ asset('frontend/assets/images/resources/posts/featured-image-5.jpg') }}"
													alt="Thailand Beaches"></a></div>
										<div class="lower-box">
											<ul class="info clearfix">
												<li><a href="#"><i class="fa-solid fa-folder"></i> Relaxation</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Stacey Lang</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> 1er mai 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Beachfront Bliss, découverte de la Thaïlande
												Joyaux côtiers</a>
											</h3>
											<div class="travilo-text">La beauté côtière de la Thaïlande attire avec son idyllique
												plages et
												Des eaux cristallines. Cet article explore le front de mer
												Les destinations, au départ du
												Patong Beach à la sereine Railay Beach. Obtenez des conseils d’initiés sur l’eau
												sports, cuisine locale et
												la culture dynamique de la plage qui vous laissera languir pour plus ...
											</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>En savoir plus</span></a></div>
												<div class="social"><strong>Partager</strong> <a href="#"
														class="facebook"><i class="fab fa-facebook-f"></i></a> <a
														href="#" class="twitter"><i class="fab fa-twitter"></i></a> <a
														href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--Block-->
								<div class="news-block-three wow fadeInUp" data-wow-duration="1500ms"
									data-wow-delay="0ms">
									<div class="inner-box">
										<div class="image-box"><a href="blog-single.html"><img
													src="{{ asset('frontend/assets/images/resources/posts/featured-image-2.jpg') }}"
													alt="Hiking"></a></div>
										<div class="lower-box">
											<ul class="info clearfix">
												<li><a href="#"><i class="fa-solid fa-folder"></i> Randonnée</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Rick Stanford</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> 17 juin 2022</a></li>
											</ul>
											<h3><a href="blog-single.html">Randonnée aux États-Unis, Exploration de la nature
												Sentiers spectaculaires</a>
											</h3>
											<div class="travilo-text"> Lacez vos bottes de randonnée et partez à la conquête
												certains des plus
												Des sentiers à couper le souffle aux Etats-Unis. Depuis les hauts sommets du Rocky
												Montagnes à la dramatique
												Dans les canyons du Grand Canyon, cet article de blog est un guide de randonnée pour
												aventures inoubliables.
												Découvrez les meilleurs sentiers, des conseils de préparation et l’impressionnant
												paysages qui vous attendent
												...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>En savoir plus</span></a></div>
												<div class="social"><strong>Partager</strong> <a href="#"
														class="facebook"><i class="fab fa-facebook-f"></i></a> <a
														href="#" class="twitter"><i class="fab fa-twitter"></i></a> <a
														href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--Block-->
								<div class="news-block-three wow fadeInUp" data-wow-duration="1500ms"
									data-wow-delay="0ms">
									<div class="inner-box">
										<div class="image-box"><a href="blog-single.html"><img
													src="{{ asset('frontend/assets/images/resources/posts/featured-image-1.jpg') }}"
													alt="Phillipines Beaches"></a></div>
										<div class="lower-box">
											<ul class="info clearfix">
												<li><a href="#"><i class="fa-solid fa-folder"></i> Aventure</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Stacey Writer</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> 25 avril 2023</a>
												</li>
											</ul>
											<h3><a href="blog-single.html">Paradis de plage aux Philippines,
												Aventure insulaire</a>
											</h3>
											<div class="travilo-text">Embarquez pour un voyage tropical à travers le
												Paradisiaque des Philippines
												îles. Des rives vierges de Boracay à la beauté isolée de
												Les lagunes de Palawan, cette
												Le post dévoile les meilleures destinations de plage aux Philippines. Préparez-vous à
												être enchanté par le
												la diversité de la vie marine, les paysages luxuriants et l’hospitalité chaleureuse des
												Philippine ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>En savoir plus</span></a></div>
												<div class="social"><strong>Partager</strong> <a href="#"
														class="facebook"><i class="fab fa-facebook-f"></i></a> <a
														href="#" class="twitter"><i class="fab fa-twitter"></i></a> <a
														href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
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

					<!--Sidebar Side-->
					<div class="sidebar-side col-xl-4 col-lg-5 col-md-12 col-sm-12">
						<div class="sidebar-inner">
							<!--Widget-->
							<div class="sb-widget search-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Recherche</h4>
									</div>
									<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value=""
												placeholder="Type your keyword" required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget posts-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Posts Récents</h4>
									</div>
									<div class="posts">
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/oman-12-thumb.jpg') }}"
														alt="Salalah"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Salalah, un tropical
												Paradis à Oman</a>
											</div>
											<div class="post-info">3 août 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-1.jpg') }}"
														alt="New York"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Explorer le New York
												Architectural
												Merveilles</a></div>
											<div class="post-info">28 juillet 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-2.jpg') }}"
														alt="Sydney"></a></div>
											<div class="travilo-text"><a href="blog-single.html">La vibrante ville portuaire
												Moins de</a></div>
											<div class="post-info">24 juillet 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-3.jpg') }}"
														alt="India"></a></div>
											<div class="travilo-text"><a href="blog-single.html">India Majestic
												Monument de l’amour</a></div>
											<div class="post-info">24 juillet 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-4.jpg') }}"
														alt="Morocco"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Morocco Beach Sun,
												Sable et sérénité</a>
											</div>
											<div class="post-info">22 juillet 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-5.jpg') }}"
														alt="Italy"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Lakeside Tranquility
												et charme italien</a>
											</div>
											<div class="post-info">12 juillet 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-6.jpg') }}"
														alt="India"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Une fusion des cultures
												et des merveilles vous attendent!</a>
											</div>
											<div class="post-info">30 juin 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-7.jpg') }}"
														alt="London"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Découverte historique
												Points de repère au Royaume-Uni</a>
											</div>
											<div class="post-info">29 juin 2023</div>
										</div>
									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget links-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Categories</h4>
									</div>
									<ul>
										<li><a href="#">Aventure</a></li>
										<li><a href="#">Randonnée</a></li>
										<li><a href="#">Romance</a></li>
										<li><a href="#">Culture</a></li>
										<li><a href="#">Visite de la ville</a></li>
										<li><a href="#">Histoire</a></li>
										<li><a href="#">Beach Tour</a></li>
										<li><a href="#">Sports Tour</a></li>
										<li><a href="#">Relaxation</a></li>
									</ul>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget tags-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Tags</h4>
									</div>
									<ul>
										<li><a href="#">Pêche</a></li>
										<li><a href="#">Gastronomie</a></li>
										<li><a href="#">Art</a></li>
										<li><a href="#">Montagne</a></li>
										<li><a href="#">Famille</a></li>
										<li><a href="#">Vélo</a></li>
										<li><a href="#">Prestige</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Cyclisme</a></li>
									</ul>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget gallery-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Gallery</h4>
									</div>
									<ul class="clearfix">
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-1.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-1-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-2.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-2-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-3.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-3-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-4.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-4-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-5.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-5-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-6.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-6-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-7.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-7-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-8.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-8-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-9.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-9-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-10.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-10-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-11.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-11-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-12.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-12-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-13.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-13-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-14.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-14-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-15.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-15-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a href="{{ asset('frontend/assets/images/resources/gallery/gallery-16.jpg') }}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-16-thumb.jpg') }}"
														alt=""></a>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget social-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Suivez-nous</h4>
									</div>
									<ul class="social-links clearfix">
										<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
@endsection