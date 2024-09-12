@extends('layouts.layout')
@section('content')
		<div class="hotel-single-banner">
			<div class="outer-container">
				<div class="row clearfix">
					<div class="image-col">
						<div class="image-block">
							<div class="inner">
								<div class="image">
									<img src="{{ asset('storage/' . json_decode($hotel->images)[0]) }}"
										alt=""></div>
								<div class="image-layer"
									style="background-image: url({{ asset('storage/' . json_decode($hotel->images)[0]) }});">
								</div>
								<a href="{{ asset('storage/' . json_decode($hotel->images)[0]) }}"
									class="over-link lightbox-image" data-fancybox="HotelGallery"></a>
							</div>
						</div>
					</div>
					<div class="image-col sm-col">
					@for ($i = 1; $i < min(count(json_decode($hotel->images)), 3); $i++)
							<div class="image-block sm-block">
								<div class="inner">
									<div class="image">
										<img src="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}" alt="">
									</div>
									<div class="image-layer" style="background-image: url({{ asset('storage/' . json_decode($hotel->images)[$i]) }});"></div>
									<a href="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}" class="over-link lightbox-image" data-fancybox="HotelGallery"></a>
								</div>
							</div>
					@endfor
					</div>

					<div class="image-col sm-col">
						@for ($i = 3; $i < min(count(json_decode($hotel->images)), 5); $i++)
								<div class="image-block sm-block">
									<div class="inner">
										<div class="image">
											<img src="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}" alt="">
										</div>
										<div class="image-layer" style="background-image: url({{ asset('storage/' . json_decode($hotel->images)[$i]) }});"></div>
										<a href="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}" class="over-link lightbox-image" data-fancybox="HotelGallery"></a>
									</div>
								</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
		<!--End Banner Section -->
	<!--Default Single Container-->
		<div class="dsp-container hot-single">
			<div class="auto-container">
				<!--Part One-->
				<div class="part-one">
					<div class="row clearfix">

						<!--Content Side-->
						<div class="content-side col-xl-8 col-lg-12 col-md-12 col-sm-12">
							<div class="content-inner">

								<div class="sp-header">
									<div class="loc-rat clearfix">
										<div class="location">{{$hotel->destinations->name}}</div>
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>{{$hotel->etoiles}}</strong><span class="count">8345 Reviews</span></a></div>
										<div class="add-fav"><a href="{{route('single-reservation',$hotel->id) }}"><i class="far fa-heart"></i> Save</a></div>
									</div>
									<h1>{{$hotel->name}}</h1>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-map-marker-alt"></i>{{$hotel->localisation}}</div>
									</div>
								</div>

								<div class="upper-content">
									<div class="text-content">
										<h3>À propos de cet hôtel</h3>
										{{$hotel->description}}
										<br>
										<h3>Équipement</h3>
										<div class="facilities">
											<div class="row clearfix">
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-air-conditioner"></i></div>
														<h5>Entièrement climatisé</h5>
														<div class="travilo-text">{{$hotel->name}} propose : des chambres climatisées et des espaces publics pour assurer une séjour confortable, surtout pendant les étés chauds de Londres.
														</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-wifi-1"></i></div>
														<h5>Zone Wifi gratuite</h5>
														<div class="travilo-text">Une connexion Wi-Fi haut débit gratuite est disponible disponibles dans tout l’hôtel, permettant aux clients de rester connectés lors de leur visite.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-park"></i></div>
														<h5>Zone de porte extérieure</h5>
														<div class="travilo-text">L’hôtel dispose d’un cadre extérieur pittoresque terrasse où vous pourrez vous détendre et profiter de l’air frais dans un Cadre tranquille.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-restaurant"></i></div>
														<h5>Nourriture et boissons</h5>
														<div class="travilo-text">Le Ritz propose une gamme de restaurants de l’opulent restaurant Ritz à l’élégant Palm Court, célèbre pour son service de thé de l’après-midi, Chaque repas est une expérience mémorable.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-swimming-pool-1"></i></div>
														<h5>Piscine</h5>
														<div class="travilo-text">{{$hotel->name}} dispose d’un magnifique Piscine intérieure où vous pourrez vous détendre et vous ressourcer.
														</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-heart-1"></i></div>
														<h5>Spa et salle de sport</h5>
														<div class="travilo-text">Le luxueux spa et la salle de fitness de l’hôtel offrir aux clients la possibilité de s’adonner à se détendre et maintenir leurs routines de remise en forme pendant leur rester.</div>
													</div>
												</div>
											</div>
										</div>
										<h3>Manifeste</h3>
										<div class="policies">
											<div class="text u-text">Veuillez noter que les conditions et les installations de l’hôtel peuvent être sujettes à changement, il est donc recommandé de confirmer les informations directement auprès de l’hôtel lors de la réservation.</div>
											<div class="pols">
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-check-point"></i></div>
														<h5>Check in & Check out</h5>
														<div class="travilo-text">Check-in time is typically after 3:00
															PM, and check-out time is before 12:00 PM.</div>
													</div>
												</div>
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-little-boy"></i></div>
														<h5>Children & Infants</h5>
														<div class="travilo-text">{{$hotel->name}} welcomes children of
															all ages. Extra beds and cribs may be provided upon request,
															subject to availability.</div>
													</div>
												</div>
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-calendar-3"></i></div>
														<h5>Annulation</h5>
														<div class="travilo-text">Les conditions d’annulation de l’hôtel peuvent varient en fonction du type de réservation et du tarif choisi. Il est conseillé aux clients de consulter les conditions spécifiques et conditions au moment de la réservation.</div>
													</div>
												</div>
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-parking-lot"></i></div>
														<h5>Parking</h5>
														<div class="travilo-text">{{$hotel->name}} propose un service de voiturier Services pour les clients avec des véhicules privés. Des accusations peuvent être portées contre appliquer.</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>

						<!--Sidebar Side-->
						<div class="sidebar-side col-xl-4 col-lg-8 col-md-12 col-sm-12">
							<div class="sidebar-inner">
								<!--Widget-->
								 {{-- <div class="dsp-widget t-book-widget">
									<div class="inner-box">
										<div class="t-book-header">
											<span class="st-txt">Start <br>From</span>
											<span class="amount">$250</span>
											<span class="qty">/ Per Person</span>
										</div>
										<div class="lower-box">
											<div class="form-box site-form">
												<form method="post" action="#">
													<div class="fields">
														<div class="form-group">
															<div class="field-label">Check in</div>
															<div class="field-inner">
																<input class="datepicker" type="text" name="field-name"
																	value="" placeholder="Select a date" required>
																<i class="alt-icon fa fa-calendar-alt"></i>
															</div>
														</div>
														<div class="form-group">
															<div class="field-label">Check out</div>
															<div class="field-inner">
																<input class="datepicker" type="text" name="field-name"
																	value="" placeholder="Select a date" required>
																<i class="alt-icon fa fa-calendar-alt"></i>
															</div>
														</div>
													</div>
													<h6>Guests</h6>
													<div class="tickets">
														<div class="ticket-block clearfix">
															<div class="tick-ttl">Room</div>
															<div class="tick-sel">
																<div class="quantity-box">
																	<div class="item-quantity">
																		<input class="qty-spinner" type="text" value="1"
																			name="quantity">
																	</div>
																</div>
															</div>
														</div>
														<div class="ticket-block clearfix">
															<div class="tick-ttl">Adults (18+ years)</div>
															<div class="tick-sel">
																<div class="quantity-box">
																	<div class="item-quantity">
																		<input class="qty-spinner" type="text" value="1"
																			name="quantity">
																	</div>
																</div>
															</div>
														</div>
														<div class="ticket-block clearfix">
															<div class="tick-ttl">Kids (12+ years)</div>
															<div class="tick-sel">
																<div class="quantity-box">
																	<div class="item-quantity">
																		<input class="qty-spinner" type="text" value="1"
																			name="quantity">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="proceed-link"><button type="button"
															class="theme-btn btn-style-two"><span>Check
																Availability</span></button></div>
												</form>
											</div>
										</div>
									</div>
								</div>  --}}

								<!--Widget-->
								<div class="dsp-widget get-help-widget">
									<div class="inner">
										<h6>Obtenir De L’aide</h6>
										<h3>Besoin D’aide Pour Réserver ?</h3>
										<div class="travilo-text">Si vous êtes impatient de découvrir la quintessence du luxe chez {{$hotel->name}}, notre équipe dédiée d’experts en voyages est là pour vous aider lors de votre réservation. Que vous planifiiez une escapade romantique, un vacances en famille, ou un voyage d’affaires, nous pouvons adapter votre séjour pour répondre à vos besoins préférences et besoins spécifiques.</div>
										<div class="call-to">
											<a href="tel:+96899999000"><i class="icon fa-solid fa-phone"></i> Appelez-nous
												<span class="nmbr">+225 27 21 37 70 38</span></a>
										</div>
									</div>
								</div>

								<!--Widget-->
								<div class="dsp-widget dsp-stat-widget">
									<div class="inner">
										<h3>Property Highlights</h3>
										<!--Logo-->
										<div class="stats">
											<ul>
												<li class="clearfix"><span class="ttl">Established</span><span
														class="dtl">1970</span></li>
												<li class="clearfix"><span class="ttl">Renovation</span><span
														class="dtl">2020</span></li>
												<li class="clearfix"><span class="ttl">Total Floor</span><span
														class="dtl">50</span></li>
												<li class="clearfix"><span class="ttl">Total Rooms</span><span
														class="dtl">240</span></li>
												<li class="clearfix"><span class="ttl">Total Restaurants</span><span
														class="dtl">5</span></li>
												<li class="clearfix"><span class="ttl">Total Bars</span><span
														class="dtl">3</span></li>
												<li class="clearfix"><span class="ttl">Total Stuff</span><span
														class="dtl">5200</span></li>
												<li class="clearfix"><span class="ttl">Total Branch</span><span
														class="dtl">3</span></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="dsp-widget dsp-stat-widget">
									<div class="inner">
										<div class="book-link"><a href="{{route('single-reservation',$hotel->id) }}"
											class="theme-btn btn-style-two"><span>Reserver maintenant</span></a></div>
								
									</div>
								</div>
								

							</div>
						</div>

					</div>
				</div>

				<div class="rooms-avail-box">
					<h3>Available Rooms</h3>
					<div class="art-outer">
						<div class="ar-table">
							<table class="table">
								<thead>
									<tr>
										<th scope="col" class="rt">Room Type</th>
										<th scope="col" class="ro">Room Option</th>
										<th scope="col" class="fac">Facilites</th>
										<th scope="col" class="price">Pricing</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="rt" rowspan="3">
											<div class="type-block">
												<div class="image"><img
														src="{{ asset('frontend/assets/images/resources/destinations/hotels/hotel-room-1.jpg')}}"
														alt="">
												</div>
												<h5>Super King Delux</h5>
												<div class="travilo-text">The Super King Deluxe Rooms at {{$hotel->name}}
													exude timeless elegance, offering a blend of classic charm and
													modern comfort. Adorned with luxurious fabrics, plush furnishings,
													and exquisite artwork, these rooms create a welcoming ambiance for
													guests to unwind. With modern amenities and spacious en-suite
													bathrooms, Deluxe Rooms provide a serene retreat in the heart of the
													bustling city.</div>
												<ul class="room-specs">
													<li><i class="icon flaticon-expand-1"></i> Room Size: 40
														m<sup>2</sup></li>
													<li><i class="icon flaticon-adventure-1"></i> River View</li>
													<li><i class="icon far fa-bed-alt"></i> 1 King Bed</li>
												</ul>
											</div>
										</td>
										<td class="ro">
											<h6>Delux General</h6>
											<ul class="un-styled-list">
												<li>Free cancellation</li>
												<li>Pets Allowed</li>
												<li>Car parking</li>
											</ul>
										</td>
										<td class="fac">
											<ul class="styled-list-two">
												<li>Free Wifi </li>
												<li>Exercise in gym </li>
												<li>Easy car parking </li>
												<li>Free transportaion from airport </li>
												<li>Special guide instruction </li>
												<li>Pay at the hotel </li>
												<li>Paid Restaurant Access </li>
											</ul>
										</td>
										<td class="price">
											<div class="rate"><span class="amount">$1299</span> <span class="duration">/
													Per Night</span></div>
											<div class="p-for">Price for 1 room</div>
											<div class="book-link"><a href="#"
													class="theme-btn btn-style-two"><span>Book Now</span></a></div>
										</td>
									</tr>
									<tr>
										<td class="ro">
											<h6>Delux Special</h6>
											<ul class="un-styled-list">
												<li>Free cancellation</li>
												<li>Pets Allowed</li>
												<li>Car parking</li>
											</ul>
										</td>
										<td class="fac">
											<ul class="styled-list-two">
												<li>Free Wifi </li>
												<li>Exercise in gym </li>
												<li>Easy car parking </li>
												<li>Free transportaion from airport </li>
												<li>Special guide instruction </li>
												<li>Pay at the hotel </li>
												<li>Paid Restaurant Access </li>
											</ul>
										</td>
										<td class="price">
											<div class="rate"><span class="amount">$1399</span> <span class="duration">/
													Per Night</span></div>
											<div class="p-for">Price for 1 room</div>
											<div class="book-link"><a href="#"
													class="theme-btn btn-style-two"><span>Book Now</span></a></div>
										</td>
									</tr>
									<tr>
										<td class="ro">
											<h6>Delux Mego</h6>
											<ul class="un-styled-list">
												<li>Free cancellation</li>
												<li>Pets Allowed</li>
												<li>Car parking</li>
											</ul>
										</td>
										<td class="fac">
											<ul class="styled-list-two">
												<li>Free Wifi </li>
												<li>Exercise in gym </li>
												<li>Easy car parking </li>
												<li>Free transportaion from airport </li>
												<li>Special guide instruction </li>
												<li>Pay at the hotel </li>
												<li>Paid Restaurant Access </li>
											</ul>
										</td>
										<td class="price">
											<div class="rate"><span class="amount">$1499</span> <span class="duration">/
													Per Night</span></div>
											<div class="p-for">Price for 1 room</div>
											<div class="book-link"><a href="#"
													class="theme-btn btn-style-two"><span>Book Now</span></a></div>
										</td>
									</tr>
									<tr>
										<td class="rt" rowspan="2">
											<div class="type-block">
												<div class="image"><img
														src="{{ asset('frontend/assets/images/resources/destinations/hotels/hotel-room-5.jpg')}}"
														alt="">
												</div>
												<h5>Executive Suites</h5>
												<div class="travilo-text">Step into a world of refined opulence in the
													Executive Suites. These stunning suites offer a luxurious living
													space complete with a separate bedroom, elegant sitting area, and
													expansive marble bathrooms. Designed for discerning guests seeking
													the highest level of comfort, the Executive Suites provide an
													extraordinary stay in a truly magnificent setting.</div>
												<ul class="room-specs">
													<li><i class="icon flaticon-expand-1"></i> Room Size: 40
														m<sup>2</sup></li>
													<li><i class="icon flaticon-adventure-1"></i> River View</li>
													<li><i class="icon far fa-bed-alt"></i> 2 King Bed</li>
												</ul>
											</div>
										</td>
										<td class="ro">
											<h6>Executive General</h6>
											<ul class="un-styled-list">
												<li>Free cancellation</li>
												<li>Pets Allowed</li>
												<li>Car parking</li>
											</ul>
										</td>
										<td class="fac">
											<ul class="styled-list-two">
												<li>Free Wifi </li>
												<li>Exercise in gym </li>
												<li>Easy car parking </li>
												<li>Special guide instruction </li>
												<li>Pay at the hotel </li>
												<li>Paid Restaurant Access </li>
											</ul>
										</td>
										<td class="price">
											<div class="rate"><span class="amount">$2199</span> <span class="duration">/
													Per Night</span></div>
											<div class="p-for">Price for 1 room</div>
											<div class="book-link"><a href="#"
													class="theme-btn btn-style-two"><span>Book Now</span></a></div>
										</td>
									</tr>
									<tr>
										<td class="ro">
											<h6>Executive Special</h6>
											<ul class="un-styled-list">
												<li>Free cancellation</li>
												<li>Pets Allowed</li>
												<li>Car parking</li>
											</ul>
										</td>
										<td class="fac">
											<ul class="styled-list-two">
												<li>Free Wifi </li>
												<li>Exercise in gym </li>
												<li>Easy car parking </li>
												<li>Special guide instruction </li>
												<li>Pay at the hotel </li>
												<li>Paid Restaurant Access </li>
											</ul>
										</td>
										<td class="price">
											<div class="rate"><span class="amount">$2399</span> <span class="duration">/
													Per Night</span></div>
											<div class="p-for">Price for 1 room</div>
											<div class="book-link"><a href="#"
													class="theme-btn btn-style-two"><span>Book Now</span></a></div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!--Part Two-->
				<div class="part-two">
					<div class="row clearfix">

						<!--Content Side-->
						<div class="content-side col-xl-8 col-lg-12 col-md-12 col-sm-12">
							<div class="content-inner">

								<div class="location">
									<h3>Map</h3>
									<div class="map-box">
										<iframe
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5222.559276807464!2d-0.14652169835693887!3d51.50644437092068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760529d30fc857%3A0x596135811e044014!2sThe%20Ritz%20London!5e0!3m2!1sen!2som!4v1691071567666!5m2!1sen!2som"
											allowfullscreen="" loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"></iframe>

										<div class="map-icon"><img src="{{ asset('frontend/assets/images/icons/map-marker-2.png')}}" alt="">
										</div>
									</div>
								</div>

								<div class="t-faqs">
									<h3>Frequently Asked Questions</h3>
									<ul class="accordion-box faqs-accordion clearfix">
										<!--Block-->
										<li class="accordion block active-block">
											<div class="acc-btn active">Is {{$hotel->name}} a pet-friendly hotel? <span
													class="arrow fa fa-plus"></span></div>
											<div class="acc-content current">
												<div class="content">
													<div class="travilo-text">
														<p>Unfortunately, {{$hotel->name}} does not allow pets on the
															premises, except for registered guide dogs or service
															animals, in compliance with hotel regulations and guest
															comfort.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Does {{$hotel->name}} offer airport transfer services?
												<span class="arrow fa fa-plus"></span>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>Yes, {{$hotel->name}} can arrange airport transfer services
															for guests upon request. Whether you require a private car,
															limousine, or chauffeur-driven vehicle, our concierge team
															will be delighted to assist you in making the necessary
															arrangements.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Are there non-smoking rooms available at The Ritz
												London? <span class="arrow fa fa-plus"></span></div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>Yes, {{$hotel->name}} is committed to providing a smoke-free
															environment for all guests. All rooms and public areas are
															designated as non-smoking areas, in accordance with the
															hotel policy.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">What dining options are available at {{$hotel->name}}?
												<span class="arrow fa fa-plus"></span>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>{{$hotel->name}} offers an exceptional dining experience at
															several renowned restaurants. Guests can savor traditional
															afternoon tea in the elegant Palm Court, indulge in gourmet
															cuisine at the Michelin-starred Ritz Restaurant, and enjoy
															delectable light bites at The Rivoli Bar, known for its
															exquisite cocktails.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Is there a dress code for dining and afternoon tea at
												{{$hotel->name}}? <span class="arrow fa fa-plus"></span></div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>Yes, {{$hotel->name}} maintains a formal dress code in the
															public areas and restaurants to maintain the elegant
															ambiance. For gentlemen, a jacket and tie are required for
															dining in The Ritz Restaurant and The Palm Court. During
															afternoon tea, smart casual attire is recommended for both
															ladies and gentlemen. We kindly ask all guests to adhere to
															the dress code to ensure an enjoyable and sophisticated
															dining experience.</p>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</div>

								<div class="t-reviews">
									<h3>Reviews</h3>
									<div class="rev-info">
										<div class="inner clearfix">
											<div class="row clearfix">
												<div class="rev-left col-lg-4 col-md-4 col-sm-12">
													<div class="count">4.9</div>
													<div class="level"><i class="far fa-face-smile"></i> Excellent</div>
													<div class="b-on">Based on 2100 Reviews</div>
												</div>
												<div class="rev-right col-lg-8 col-md-8 col-sm-12">
													<div class="cat">
														<div class="c-title">Service</div>
														<div class="p-bar">
															<div class="p-fill p-fill-bar" data-percent="82%"></div>
														</div>
														<div class="c-per"><span class="count-box"><span
																	class="count-text" data-stop="90"
																	data-speed="2000">0</span>%</span></div>
													</div>
													<div class="cat">
														<div class="c-title">Accomodation</div>
														<div class="p-bar">
															<div class="p-fill p-fill-bar" data-percent="80%"></div>
														</div>
														<div class="c-per"><span class="count-box"><span
																	class="count-text" data-stop="80"
																	data-speed="2000">0</span>%</span></div>
													</div>
													<div class="cat">
														<div class="c-title">Location</div>
														<div class="p-bar">
															<div class="p-fill p-fill-bar" data-percent="98%"></div>
														</div>
														<div class="c-per"><span class="count-box"><span
																	class="count-text" data-stop="98"
																	data-speed="2000">0</span>%</span></div>
													</div>
													<div class="cat">
														<div class="c-title">Price</div>
														<div class="p-bar">
															<div class="p-fill p-fill-bar" data-percent="70%"></div>
														</div>
														<div class="c-per"><span class="count-box"><span
																	class="count-text" data-stop="70"
																	data-speed="2000">0</span>%</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="reviews">

										<div class="rev-box">
											<div class="inner">
												<div class="rev-header clearfix">
													<h4>A True Icon of Luxury</h4>
													<div class="rating">
														<i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i>
													</div>
												</div>
												<div class="travilo-text">Staying at {{$hotel->name}} was an
													unforgettable experience! From the moment we arrived, we were
													treated like royalty. The hotel's grandeur and classic decor took us
													back to a bygone era of elegance. Our Deluxe Room was beautifully
													appointed, offering all the modern comforts we could ask for.</div>
												<div class="lower clearfix">
													<div class="author-info">
														<div class="image"><img
																src="{{ asset('frontend/assets/images/resources/thumbnails/reviewer-1.jpg')}}"
																alt=""></div>
														<div class="author-name">John Cluster</div>
														<div class="designation">Real Estate Agent</div>
													</div>
													<div class="ld-link">
														<span class="txt">Was this review helpful?</span>
														<a href="#" class="l-btn active"><i
																class="fa-solid fa-thumbs-up"></i><span
																class="l-count">20</span></a> <a href="#"
															class="d-btn"><i class="fa-solid fa-thumbs-up"></i><span
																class="d-count">3</span></a>
													</div>
												</div>
											</div>
										</div>

										<div class="rev-box">
											<div class="inner">
												<div class="rev-header clearfix">
													<h4>The Epitome of Sophistication</h4>
													<div class="rating">
														<i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i>
													</div>
												</div>
												<div class="travilo-text">As a frequent traveler, I have experienced
													many luxury hotels, but {{$hotel->name}} stands out as a true gem.
													The Executive Suite was tastefully decorated, offering breathtaking
													views of the city. The attention to detail throughout the hotel was
													exceptional, from the fragrant flowers to the immaculate service.
												</div>
												<div class="lower clearfix">
													<div class="author-info">
														<div class="image"><img
																src="{{ asset('frontend/assets/images/resources/thumbnails/reviewer-2.jpg')}}"
																alt=""></div>
														<div class="author-name">Armstrong Free</div>
														<div class="designation">ABC Inc.</div>
													</div>
													<div class="ld-link">
														<span class="txt">Was this review helpful?</span>
														<a href="#" class="l-btn"><i
																class="fa-solid fa-thumbs-up"></i><span
																class="l-count">23</span></a> <a href="#"
															class="d-btn active"><i
																class="fa-solid fa-thumbs-up"></i><span
																class="d-count">2</span></a>
													</div>
												</div>
											</div>
										</div>

										<div class="rev-box">
											<div class="inner">
												<div class="rev-header clearfix">
													<h4>A Fairytale Stay</h4>
													<div class="rating">
														<i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i>
													</div>
												</div>
												<div class="travilo-text">From the moment I stepped into The Ritz London, I felt like I had entered a fairytale. The lavish decor,
													chandeliers, and marble floors took my breath away. The Junior Suite
													was elegant and comfortable, and the turn-down service with
													chocolates was a delightful touch. Afternoon tea in the Palm Court
													was an enchanting experience, and the scones were simply divine.
												</div>
												<div class="lower clearfix">
													<div class="author-info">
														<div class="image"><img
																src="{{ asset('frontend/assets/images/resources/thumbnails/reviewer-3.jpg')}}"
																alt=""></div>
														<div class="author-name">Clark Kent</div>
														<div class="designation">News Reporter</div>
													</div>
													<div class="ld-link">
														<span class="txt">Was this review helpful?</span>
														<a href="#" class="l-btn"><i
																class="fa-solid fa-thumbs-up"></i><span
																class="l-count">32</span></a> <a href="#"
															class="d-btn"><i class="fa-solid fa-thumbs-up"></i><span
																class="d-count">6</span></a>
													</div>
												</div>
											</div>
										</div>

										<div class="see-all"><a href="#" class="theme-btn">View All <i
													class="fa-solid fa-external-link"></i></a></div>

									</div>

									<h3>Add A Review</h3>
									<div class="add-review">
										<div class="form-box site-form">
											<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
												<div class="row clearfix">
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="s-rev-option">
															<span class="ser-ttl">Service</span>
															<a href="#" class="rat"><i class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i></a>
														</div>
													</div>
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="s-rev-option">
															<span class="ser-ttl">Location</span>
															<a href="#" class="rat"><i class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i></a>
														</div>
													</div>
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="s-rev-option">
															<span class="ser-ttl">Accomodation</span>
															<a href="#" class="rat"><i class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i></a>
														</div>
													</div>
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="s-rev-option">
															<span class="ser-ttl">Price</span>
															<a href="#" class="rat"><i class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i><i
																	class="fa-solid fa-star"></i></a>
														</div>
													</div>
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="field-inner">
															<input type="text" name="field-name" value=""
																placeholder="Your name" required>
														</div>
													</div>
													<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
														<div class="field-inner">
															<input type="email" name="field-name" value=""
																placeholder="Your email" required>
														</div>
													</div>
													<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
														<div class="field-inner">
															<input type="text" name="field-name" value=""
																placeholder="Review title" required>
														</div>
													</div>
													<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
														<div class="field-inner">
															<textarea name="field-name"
																placeholder="Start writing your review here"
																required></textarea>
														</div>
													</div>
													<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
														<button type="submit"
															class="theme-btn btn-style-one"><span>Submit
																Review</span></button>
													</div>
												</div>
											</form>

										</div>
									</div>
								</div>

							</div>
						</div>

						<!--Sidebar Side-->
						<div class="sidebar-side col-xl-4 col-lg-8 col-md-12 col-sm-12">
							<div class="sidebar-inner">

								<!--Widget-->
								<div class="dsp-widget dsp-stat-widget">
									<div class="inner">
										<h3>What’s Nearby</h3>
										<!--Logo-->
										<div class="stats">
											<ul>
												<li class="clearfix"><span class="ttl">Buckingham Palace</span><span
														class="dtl">0.97Km</span>
												</li>
												<li class="clearfix"><span class="ttl">Piccadilly Circus</span><span
														class="dtl">0.48Km</span>
												</li>
												<li class="clearfix"><span class="ttl">Green Park</span><span
														class="dtl">0.32Km</span></li>
												<li class="clearfix"><span class="ttl">West End Theatres</span><span
														class="dtl">0.64Km</span>
												</li>
												<li class="clearfix"><span class="ttl">The National Gallery</span><span
														class="dtl">1.29Km</span></li>
												<li class="clearfix"><span class="ttl">Covent Garden</span><span
														class="dtl">1.29Km</span></li>
												<li class="clearfix"><span class="ttl">The British Museum</span><span
														class="dtl">1.77Km</span>
												</li>
												<li class="clearfix"><span class="ttl">The London Eye</span><span
														class="dtl">2.41Km</span></li>
											</ul>
										</div>
									</div>
								</div>

								<!--Widget-->
								<div class="dsp-widget dsp-stat-widget">
									<div class="inner">
										<h3>Top Attraction</h3>
										<!--Logo-->
										<div class="stats">
											<ul>
												<li class="clearfix"><span class="ttl">Buckingham Palace</span><span
														class="dtl">0.97Km</span>
												</li>
												<li class="clearfix"><span class="ttl">Piccadilly Circus</span><span
														class="dtl">0.48Km</span>
												</li>
												<li class="clearfix"><span class="ttl">Trafalgar Square</span><span
														class="dtl">1.3Km</span>
												</li>
												<li class="clearfix"><span class="ttl">The British Museum</span><span
														class="dtl">1.77Km</span>
												</li>
												<li class="clearfix"><span class="ttl">Covent Garden</span><span
														class="dtl">1.29Km</span></li>
												<li class="clearfix"><span class="ttl">Westminster Abbey</span><span
														class="dtl">2.1Km</span>
												</li>
												<li class="clearfix"><span class="ttl">The Houses of Parliament and Big
														Ben</span><span class="dtl">2.1Km</span></li>
												<li class="clearfix"><span class="ttl">The London Eye</span><span
														class="dtl">2.41Km</span></li>
											</ul>

										</div>
									</div>
								</div>

								<!--Widget-->
								<div class="dsp-widget why-us-widget">
									<div class="inner">
										<h3>Top Reason to Choose</h3>
										<!--Logo-->
										<div class="info">
											<ul>
												<li><span class="icon flaticon-price-tag-1"></span><span
														class="txt"><strong>Timeless Elegance
															and Luxury:</strong> Choosing {{$hotel->name}} means
														immersing yourself in the timeless
														elegance and luxury of a truly iconic hotel. From the moment you
														step into the grand lobby
														adorned with chandeliers and marble columns, you'll be
														transported to a world of refined
														opulence. The hotel's classic decor, impeccable service, and
														attention to detail create an
														atmosphere of indulgence and sophistication that is
														unrivaled.</span>
												</li>
												<li><span class="icon flaticon-shield"></span><span
														class="txt"><strong>Prime Location in the
															Heart of London:</strong> {{$hotel->name}} boasts a prime
														location in the heart of London's
														prestigious Piccadilly neighborhood. Many of the city's top
														attractions, such as Buckingham
														Palace, Piccadilly Circus, and Green Park, are just a short walk
														away. Whether you're a
														first-time visitor or a seasoned traveler, staying at The Ritz
														provides convenient access to
														London's cultural, historical, and entertainment
														highlights.</span></li>
												<li><span class="icon flaticon-location-2"></span><span
														class="txt"><strong>Dining and Afternoon
															Tea:</strong> One of the many highlights of {{$hotel->name}}
														is its exceptional dining
														experience. Indulge in the world-famous afternoon tea served in
														the elegant Palm Court,
														where you'll be treated to an array of delectable treats and a
														selection of fine teas. For
														dinner, savor the Michelin-starred cuisine at The Ritz
														Restaurant, renowned for its gourmet
														creations and elegant ambiance. The hotel's dining venues
														promise unforgettable culinary
														delights.</span></li>
												<li><span class="icon flaticon-calendar"></span><span
														class="txt"><strong>Impeccable Service and
															Personalized Attention:</strong> {{$hotel->name}} is renowned
														for its exceptional level of
														service and personalized attention to guests. From the warm
														welcome upon arrival to the
														attentive staff catering to your every need, you'll experience
														the highest standard of
														hospitality throughout your stay. The hotel's dedicated
														concierge team is always on hand to
														assist with any requests, ensuring that your time at The Ritz is
														nothing short of
														extraordinary.</span></li>
												<li><span class="icon flaticon-heart-1"></span><span
														class="txt"><strong>Spa and Wellness
															Retreat:</strong> In addition to its other luxurious
														offerings, {{$hotel->name}} provides a
														rejuvenating haven at its five-star spa and wellness
														facilities.</span></li>
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

		<!--Similar Section-->
		<div class="similar-section">
			<div class="auto-container">
				<div class="title-box">
					<h2><span>Similar Hotels Like This</span></h2>
				</div>
				<div class="carousel-box">
					<div class="packages-carousel">
						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/punta-cana-hotel.jpg"
												alt="Punta Cana"></a>
									</div>
									<div class="b-title top-rated"><span>Top Rated</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Punta Cana</div>
									<h5><a href="hotel-single.html">Punta Cana Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong> &ensp; <span class="count">4900 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$459</span></div>
									</div>
								</div>
							</div>
						</div>

						{{-- <!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/the-bellagio-hotel.jpg"
												alt="The Bellagio"></a></div>
								</div>
								<div class="lower-box">
									<div class="location">Las Vegas</div>
									<h5><a href="hotel-single.html">The Bellagio</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.6</strong> &ensp; <span class="count">3210 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$480</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/avista-hideway-hotel.jpg"
												alt="Avista Hideway"></a>
									</div>
									<div class="b-title featured"><span>Featured</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Phuket</div>
									<h5><a href="hotel-single.html">Avista Hideway Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.6</strong> &ensp; <span class="count">8711 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$439</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/palawan-hotel.jpg"
												alt="Palawan Hotel"></a>
									</div>
									<div class="b-title top-rated"><span>Top Rated</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Palawan</div>
									<h5><a href="hotel-single.html">Palawan Beach Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.9</strong> &ensp; <span class="count">7900 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$650</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/one-eighty-bali-hotel.jpg"
												alt="One Eighty"></a></div>
								</div>
								<div class="lower-box">
									<div class="location">Bali</div>
									<h5><a href="hotel-single.html">One Eighty Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.7</strong> &ensp; <span class="count">4780 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$345</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/the-anam-vietnam-hotel.jpg"
												alt="The Anam"></a></div>
									<div class="b-title featured"><span>Featured</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Vietnam</div>
									<h5><a href="hotel-single.html">The Anam</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong> &ensp; <span class="count">2389 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$530</span></div>
									</div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/istanbul-beach-hotel.jpg"
												alt="Istanbul Beach Hotel"></a>
									</div>
									<div class="b-title top-rated"><span>Top Rated</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Istanbul</div>
									<h5><a href="hotel-single.html">Istanbul Beach Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.4</strong> &ensp; <span class="count">4094 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$615</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/maldives-hotel.jpg"
												alt="Maldives Hotel"></a>
									</div>
								</div>
								<div class="lower-box">
									<div class="location">Maldives</div>
									<h5><a href="hotel-single.html">Maldives Beach Hotel</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.6</strong> &ensp; <span class="count">4912 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$565</span></div>
									</div>
								</div>
							</div>
						</div>

						<!--Block-->
						<div class="package-block alt">
							<div class="inner-box">
								<div class="image-box">
									<div class="image"><a href="hotel-single.html"><img
												src="assets/images/resources/destinations/istanbul-little-sofia-hotel.jpg"
												alt="Little Sofia"></a></div>
									<div class="b-title featured"><span>Featured</span></div>
								</div>
								<div class="lower-box">
									<div class="location">Istanbul</div>
									<h5><a href="hotel-single.html">Istanbul Little Sofia</a></h5>
									<div class="bottom-box clearfix">
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.7</strong> &ensp; <span class="count">2450 Reviews</span></a>
										</div>
										<div class="price">Start from &ensp;<span class="amount">$677</span></div>
									</div>
								</div>
							</div>
						</div> --}}

					</div>
				</div>
			</div>
		</div>

@endsection
