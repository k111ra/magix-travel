@extends('layouts.layout')
@section('content')
    		<!-- Banner Section -->
		<div class="hotel-single-banner">

			<div class="outer-container">
				<div class="row clearfix">
					<div class="image-col">
						<div class="image-block">
							<div class="inner">
								<div class="image"><img src="{{ asset('storage/' . json_decode($hotel->images)[0]) }}"
										alt=""></div>
								<div class="image-layer"
									style="background-image: url({{ asset('storage/' . json_decode($hotel->images)[0]) }});">
								</div>
								<a href="{{ asset('storage/' . json_decode($hotel->images)[0]) }}"
									class="over-link lightbox-image" data-fancybox="HotelGallery"></a>
							</div>
						</div>
					</div>
					@for($i = 1; $i < count(json_decode($hotel->images)); $i++)
					
					<div class="image-col sm-col" style="display: flexbox">

						
						
						<div class="image-block sm-block">
							
							<div class="inner">
								<div class="image"><img src="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}}"
										alt=""></div>
								<div class="image-layer"
									style="background-image: url({{ asset('storage/' . json_decode($hotel->images)[$i]) }});">
								</div>
								<a href="{{ asset('storage/' . json_decode($hotel->images)[$i]) }}"
									class="over-link lightbox-image" data-fancybox="HotelGallery"></a>
							</div>
						
						    
							{{-- <div class="img-link"><a href="#" class="theme-btn"><span>+ 160 Photos</span></a></div> --}}
						</div>
						
					</div>@endfor

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
										<div class="location">London</div>
										<div class="rating"><a href="#" class="theme-btn"><i
													class="fa-solid fa-star"></i>
												<strong>4.8</strong><span class="count">8345 Reviews</span></a></div>
										<div class="add-fav"><a href="#"><i class="far fa-heart"></i> Save</a></div>
									</div>
									<h1>The Ritz London</h1>
									<div class="info clearfix">
										<div class="duration"><i class="fa-solid fa-map-marker-alt"></i> 150 Piccadilly,
											London W1J 9BR, United Kingdom</div>
									</div>
								</div>

								<div class="upper-content">
									<div class="text-content">
										<h3>About this Hotel</h3>
										<p>The Ritz London is an iconic luxury hotel located in the heart of Piccadilly,
											one of London's most prestigious neighborhoods.</p>
										<p>Established in 1906, The Ritz exudes timeless elegance and refined opulence,
											making it a favorite destination for discerning travelers from around the
											world. The hotel's stunning Edwardian architecture and lavish interiors,
											adorned with chandeliers, marble columns, and antique furnishings, transport
											guests to a bygone era of sophistication and grandeur.</p>
										<p>With 136 luxurious guest rooms and suites, each meticulously decorated to
											evoke classic glamour and modern comfort, The Ritz London promises an
											unforgettable stay. Guests are treated to impeccable service from the
											hotel's dedicated staff, ensuring every need is met with grace and attention
											to detail. The hotel's restaurants, including the renowned Michelin-starred
											Ritz Restaurant, offer exquisite dining experiences, serving a mix of
											British and French culinary delights.</p>
										<br>
										<h3>Facilities</h3>
										<div class="facilities">
											<div class="row clearfix">
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-air-conditioner"></i></div>
														<h5>Full Air Conditioned</h5>
														<div class="travilo-text">The Ritz London provides
															air-conditioned rooms and public areas to ensure a
															comfortable stay, especially during warm London summers.
														</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-wifi-1"></i></div>
														<h5>Free Wifi Zone</h5>
														<div class="travilo-text">Complimentary high-speed Wi-Fi is
															available throughout the hotel, allowing guests to stay
															connected during their visit.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-park"></i></div>
														<h5>Out Door Area</h5>
														<div class="travilo-text">The hotel boasts a picturesque outdoor
															terrace where guests can relax and enjoy the fresh air in a
															tranquil setting.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-restaurant"></i></div>
														<h5>Food & Drinks</h5>
														<div class="travilo-text">The Ritz offers a range of dining
															options, from the opulent Ritz Restaurant to the elegant
															Palm Court, famous for its afternoon tea service, making
															every meal a memorable experience.</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-swimming-pool-1"></i></div>
														<h5>Swimming Pool</h5>
														<div class="travilo-text">The Ritz London features a beautiful
															indoor swimming pool where guests can unwind and rejuvenate.
														</div>
													</div>
												</div>
												<div class="fac-block col-lg-6 col-md-6 col-sm-12">
													<div class="inner">
														<div class="icon"><i class="flaticon-heart-1"></i></div>
														<h5>Spa and Gym</h5>
														<div class="travilo-text">The hotel's luxurious spa and fitness
															center provide guests with the opportunity to indulge in
															relaxation and maintain their fitness routines during their
															stay.</div>
													</div>
												</div>
											</div>
										</div>
										<h3>Policies</h3>
										<div class="policies">
											<div class="text u-text">Please note that hotel policies and facilities may
												be subject to change, so it's recommended to confirm the most up-to-date
												information directly with the hotel when making a reservation.</div>
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
														<div class="travilo-text">The Ritz London welcomes children of
															all ages. Extra beds and cribs may be provided upon request,
															subject to availability.</div>
													</div>
												</div>
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-calendar-3"></i></div>
														<h5>Cancellation</h5>
														<div class="travilo-text">The hotel's cancellation policy may
															vary depending on the type of reservation and rate selected.
															Guests are advised to review the specific terms and
															conditions at the time of booking.</div>
													</div>
												</div>
												<div class="pol-block">
													<div class="inner">
														<div class="icon"><i class="flaticon-parking-lot"></i></div>
														<h5>Parking</h5>
														<div class="travilo-text">The Ritz London offers valet parking
															services for guests with private vehicles. Charges may
															apply.</div>
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
								</div> --}}

								<!--Widget-->
								<div class="dsp-widget get-help-widget">
									<div class="inner">
										<h6>Get Help</h6>
										<h3>Need Help to Book?</h3>
										<div class="travilo-text">If you're eager to experience the epitome of luxury at
											The Ritz London, our dedicated team of travel experts is here to assist you
											in making your reservation. Whether you're planning a romantic getaway, a
											family vacation, or a business trip, we can tailor your stay to meet your
											specific preferences and needs.</div>
										<div class="call-to">
											<a href="tel:+96899999000"><i class="icon fa-solid fa-phone"></i> Call Us
												<span class="nmbr">+968 99999000</span></a>
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
												<div class="travilo-text">The Super King Deluxe Rooms at The Ritz London
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
											<div class="acc-btn active">Is The Ritz London a pet-friendly hotel? <span
													class="arrow fa fa-plus"></span></div>
											<div class="acc-content current">
												<div class="content">
													<div class="travilo-text">
														<p>Unfortunately, The Ritz London does not allow pets on the
															premises, except for registered guide dogs or service
															animals, in compliance with hotel regulations and guest
															comfort.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Does The Ritz London offer airport transfer services?
												<span class="arrow fa fa-plus"></span>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>Yes, The Ritz London can arrange airport transfer services
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
														<p>Yes, The Ritz London is committed to providing a smoke-free
															environment for all guests. All rooms and public areas are
															designated as non-smoking areas, in accordance with the
															hotel policy.</p>
													</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">What dining options are available at The Ritz London?
												<span class="arrow fa fa-plus"></span>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>The Ritz London offers an exceptional dining experience at
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
												The Ritz London? <span class="arrow fa fa-plus"></span></div>
											<div class="acc-content">
												<div class="content">
													<div class="travilo-text">
														<p>Yes, The Ritz London maintains a formal dress code in the
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
												<div class="travilo-text">Staying at The Ritz London was an
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
													many luxury hotels, but The Ritz London stands out as a true gem.
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
												<div class="travilo-text">From the moment I stepped into The Ritz
													London, I felt like I had entered a fairytale. The lavish decor,
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
															and Luxury:</strong> Choosing The Ritz London means
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
															Heart of London:</strong> The Ritz London boasts a prime
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
															Tea:</strong> One of the many highlights of The Ritz London
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
															Personalized Attention:</strong> The Ritz London is renowned
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
														offerings, The Ritz London provides a
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

@endsection
