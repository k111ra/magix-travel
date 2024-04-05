@extends('layouts.layout')
@section('content')
<div class="tour-single-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/featured-4.jpg')}})">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <div class="content clearfix">
                <div class="t-type">
                    <div class="icon"><img src="{{asset('frontend/assets/images/icons/t-icon-1.png')}}" alt=""></div>
                    Tour Type <br><strong>Adventure</strong>
                </div>
                <div class="links">
                    <ul class="clearfix">
                        <li><a href="#">Gallery <i class="far fa-images"></i></a></li>
                        <li><a href="#">Video <i class="far fa-video-camera"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
		<!--Default Single Container-->
		<div class="dsp-container tour-single">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="content-side col-xl-8 col-lg-12 col-md-12 col-sm-12">
						<div class="content-inner">

							<div class="sp-header">
								<div class="loc-rat clearfix">
									<div class="location">{{$tour->destination->name}}</div>
									<div class="rating"><a href="#" class="theme-btn"><i class="fa-solid fa-star"></i>
											<strong>4.8</strong>   <span class="count">4233 Reviews</span></a></div>
									<div class="add-fav"><a href="{{route('Reservation.tour',$tour->id)}}"><i class="far fa-heart"></i> Add to Wishlist</a>
									</div>
								</div>
								<h1>{{$tour->nom}}</h1>
								<div class="info clearfix">
									<div class="duration"><i class="fa-solid fa-clock"></i> {{$tour->duree}} jour(s)</div>
									<div class="persons"><i class="fa-solid fa-user"></i>{{$tour->place}} personnes</div>
								</div>
							</div>

							<div class="upper-content">
								<div class="text-content">
									<h3>Details Tour </h3>
									<p>{{$tour->description}}</p>
									
									<br>
									<h5>Highlights</h5>
									<ul class="styled-list-one">
										<li>Explore the best beaches of Phuket, from lively Patong to serene Kata and
											Karon.
											Discover the exotic underwater world through snorkeling or scuba diving at
											Phi Phi Islands.</li>
										<li>Cruise through Phang Nga Bay to see the famous James Bond Island and
											stunning limestone
											formations.</li>
										<li>Visit iconic temples, such as the Big Buddha and Wat Chalong, to experience
											Thai spiritual
											traditions.</li>
										<li>Delight your taste buds with authentic Thai cuisine at local restaurants and
											street food
											vendors.</li>
										<li>Enjoy free time for leisure, relaxation, and optional activities to tailor
											the tour to your
											preferences.</li>
										<li>Experience the vibrant nightlife in Patong with a mix of bars, restaurants,
											and entertainment
											venues.</li>
									</ul>
								</div>
								<div class="basic-info">
									<div class="i-block clearfix">
										<h5>Basic Information</h5>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Destination</div>
										<div class="i-content">Phuket</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Departure</div>
										<div class="i-content">Muscat International Airport, Muscat</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Departure Time</div>
										<div class="i-content">03.00 Pm GMT</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Return Time</div>
										<div class="i-content">8.00 AM GMT</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Language</div>
										<div class="i-content">English, Thai</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Included</div>
										<div class="i-content">
											<ul class="styled-list-two">
												<li>Accommodation: Luxurious beachfront resort accommodation during the
													entire tour, providing
													comfort and relaxation.</li>
												<li>Transportation: Airport transfers and all transportation within
													Phuket, ensuring a
													hassle-free journey.</li>
												<li>Island-Hopping Excursions: Guided tours to explore the beautiful
													beaches of Patong, Kata,
													Karon, and the enchanting Phi Phi Islands.</li>
												<li>Phang Nga Bay Cruise: A scenic boat trip to marvel at the iconic
													James Bond Island and
													unique limestone formations.</li>
												<li>Cultural Experiences: Visits to significant temples like the Big
													Buddha and Wat Chalong,
													offering insights into Thai spiritual traditions.</li>
												<li>Authentic Thai Cuisine: Enjoy mouthwatering Thai dishes at local
													restaurants and street food
													vendors, providing a delightful culinary experience.</li>
												<li>English-Speaking Guide: Knowledgeable guides to accompany you
													throughout the tour, providing
													valuable insights and assistance.</li>
												<li>All Entrance Fees: Admission fees to various attractions and
													landmarks, making the journey
													hassle-free.</li>
												<li>Free Time: Ample leisure time to relax, explore independently, or
													participate in optional
													activities as per personal preferences.</li>
												<li>Support: 24/7 customer support, ensuring you have a smooth and
													enjoyable travel experience.
												</li>
											</ul>
										</div>
									</div>
									<div class="i-block clearfix">
										<div class="i-title">Not Included</div>
										<div class="i-content">
											<ul class="styled-list-three">
												<li>International Flights: Airfare to and from Phuket is not included,
													giving you the
													flexibility to book flights according to your convenience.</li>
												<li>Travel Insurance: Participants are encouraged to arrange their
													travel insurance to cover
													unforeseen events and emergencies.</li>
												<li>Meals and Beverages: Meals and beverages not specified in the
													itinerary are not included in
													the tour package.</li>
												<li>Personal Expenses: Expenses such as souvenirs, laundry, telephone
													calls, and additional
													activities beyond the itinerary are not covered.</li>
												<li>Gratuities: Tipping for guides, drivers, and hotel staff is not
													included and is at the
													discretion of the traveler.</li>
												<li>Optional Activities: Costs associated with optional activities and
													excursions not mentioned
													in the itinerary are the responsibility of the traveler.</li>
												<li>Visa Fees: Any fees related to visa processing or entry permits are
													not included in the tour
													package.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="t-plans">
								<h3>Tour Plans</h3>
								<ul class="accordion-box tp-accordion clearfix">
									<!--Block-->
									<li class="accordion block active-block">
										<div class="acc-btn active"><span class="d-count">Day 1</span> Arrival in Phuket
											and Patong Beach
											Exploration<span class="arrow fa fa-angle-down"></span></div>
										<div class="acc-content current">
											<div class="content">
												<div class="travilo-text">
													<p>Upon your arrival at Phuket International Airport, our friendly
														guide will greet you and
														transfer you to your luxurious beachfront resort in Patong.
														After check-in and some
														relaxation, embark on an exciting exploration of Patong Beach,
														one of the liveliest beaches
														in Phuket. Stroll along the vibrant promenade, indulge in beach
														activities, and admire the
														beautiful sunset. In the evening, experience Patong's vibrant
														nightlife with a mix of bars,
														restaurants, and entertainment venues.</p>
													<ul>
														<li>Arrival at Phuket International Airport and transfer to the
															beachfront resort in Patong.
														</li>
														<li>Explore Patong Beach, enjoy beach activities, and witness a
															stunning sunset.</li>
														<li>Experience the lively nightlife of Patong with a variety of
															entertainment options.</li>
													</ul>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn"><span class="d-count">Day 2</span> Phi Phi Islands
											Snorkeling Adventure<span class="arrow fa fa-angle-down"></span>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Today, set sail for a thrilling adventure to the famous Phi Phi
														Islands. Dive into the
														crystal-clear waters to snorkel or scuba dive, exploring the
														exotic marine life and vibrant
														coral reefs. Enjoy a delicious beachside lunch on Phi Phi Don,
														the main island, and relax on
														the pristine beaches. Marvel at the breathtaking landscapes and
														limestone cliffs that make
														Phi Phi Islands a tropical paradise. After a day of exploration,
														return to the resort in
														Patong and unwind.</p>
													<ul>
														<li>Full-day excursion to the Phi Phi Islands for snorkeling and
															beach exploration.</li>
														<li>Witness diverse marine life and stunning coral reefs during
															snorkeling or scuba diving.
														</li>
														<li>Enjoy a delectable beachside lunch on Phi Phi Don Island.
														</li>
														<li>Relax and soak in the natural beauty of the Phi Phi Islands
															before returning to Patong.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn"><span class="d-count">Day 3</span> Phang Nga Bay Cruise and
											Cultural
											Immersion<span class="arrow fa fa-angle-down"></span>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Embark on a memorable cruise to Phang Nga Bay, renowned for its
														picturesque landscapes and
														unique limestone formations. Explore James Bond Island, featured
														in the movie "The Man with
														the Golden Gun," and be captivated by its stunning beauty. Visit
														Koh Panyee, a floating
														fishing village, and immerse yourself in the local culture.
														After the cruise, visit the
														iconic Big Buddha and Wat Chalong to experience the spiritual
														side of Phuket. Delight your
														taste buds with authentic Thai cuisine at a local restaurant
														before returning to the resort.
													</p>
													<ul>
														<li>Cruise to Phang Nga Bay to admire its stunning limestone
															formations and James Bond
															Island.</li>
														<li>Visit Koh Panyee, a floating fishing village, and experience
															the local culture.</li>
														<li>Explore the spiritual side of Phuket with visits to the Big
															Buddha and Wat Chalong.</li>
														<li>Relish in authentic Thai cuisine at a local restaurant for a
															delightful culinary
															experience.</li>
													</ul>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn"><span class="d-count">Day 4</span> Leisure Day and
											Departure<span class="arrow fa fa-angle-down"></span>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Enjoy a leisurely morning with breakfast at the resort. The day
														is at your leisure, giving
														you the freedom to relax on the beach, explore nearby
														attractions, or indulge in optional
														activities of your choice. In the afternoon, check out from the
														resort and transfer to
														Phuket International Airport for your departure, bringing an end
														to this unforgettable
														island paradise experience.</p>
													<ul>
														<li>Leisure morning with breakfast at the resort, allowing for
															relaxation or optional
															activities.</li>
														<li>Check-out from the resort and transfer to Phuket
															International Airport for departure.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>

								</ul>
							</div>

							<div class="location">
								<h3>Map</h3>
								<div class="map-box">
									<iframe
										{{-- src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63230.7149410174!2d98.29248065!3d7.903459599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503a96a80e1833%3A0x40223bc2c382480!2sPa%20Tong%2C%20Kathu%20District%2C%20Phuket%2C%20Thailand!5e0!3m2!1sen!2som!4v1690982895480!5m2!1sen!2som" --}}
										allowfullscreen="" loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"></iframe>

									<div class="map-icon"><img src="{{asset('frontend/assets/images/icons/map-marker-2.png')}}" alt=""></div>
								</div>
							</div>

							<div class="t-faqs">
								<h3>Frequently Asked Questions</h3>
								<ul class="accordion-box faqs-accordion clearfix">
									<!--Block-->
									<li class="accordion block active-block">
										<div class="acc-btn active">What is the best time to visit Phuket for this
											tour?<span class="arrow fa fa-plus"></span></div>
										<div class="acc-content current">
											<div class="content">
												<div class="travilo-text">
													<p>The best time to visit Phuket for this tour is during the dry
														season, which typically lasts
														from November to April. During these months, the weather is
														generally sunny with lower
														chances of rain, providing ideal conditions for island-hopping
														and outdoor activities.</p>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Are the snorkeling and scuba diving activities suitable for
											beginners?<span class="arrow fa fa-plus"></span></div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Yes, both snorkeling and scuba diving activities are suitable for
														beginners. Our
														experienced guides will provide comprehensive instructions and
														ensure your safety throughout
														the excursion. Life jackets and necessary equipment will be
														provided, making the experience
														enjoyable for participants of all skill levels.</p>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">What should I wear when visiting temples in Phuket?<span
												class="arrow fa fa-plus"></span></div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>When visiting temples, it is essential to dress modestly and
														respectfully. Both men and
														women should cover their shoulders and knees. Loose-fitting,
														comfortable clothing is
														recommended, and it's a good idea to carry a sarong or scarf to
														cover up when needed. Please
														remove your shoes before entering temple buildings as a sign of
														respect.</p>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Can I extend my stay in Phuket after the tour ends?<span
												class="arrow fa fa-plus"></span></div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Absolutely! If you wish to extend your stay in Phuket after the
														tour concludes, we can
														assist you with making the necessary arrangements. Whether you
														want to continue relaxing on
														the beautiful beaches or explore more of Phuket's attractions,
														our team will be happy to
														customize your itinerary according to your preferences.</p>
												</div>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Are meals included in the tour package?<span
												class="arrow fa fa-plus"></span>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="travilo-text">
													<p>Yes, some meals are included in the tour package. Daily breakfast
														at the resort and a
														beachside lunch during the Phi Phi Islands excursion are
														provided. However, lunches and
														dinners on other days, as well as any additional snacks or
														beverages, are not included. This
														allows you to have the flexibility to explore local restaurants
														and taste various Thai
														delicacies during your free time.</p>
												</div>
											</div>
										</div>
									</li>

								</ul>
							</div>

							<div class="t-gallery">
								<h3>Media Gallery</h3>
								<div class="images">
									<ul class="clearfix">
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-1.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-1-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-2.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-2-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="
													{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-3.jpg')}}"										class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-3-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-4.jpg')}}"					class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-4-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-5.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-5-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-6.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-6-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-7.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-7-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
										<li>
											<div class="image"><a
													href="{{asset('frontend/assets/images/resources/destinations/hotels/hotel-room-8.jpg')}}"
													class="lightbox-image" data-fancybox="SbGallery"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/hotel-room-8-thumb.jpg')}}"
														alt=""></a>
											</div>
										</li>
									</ul>
								</div>
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
													<div class="c-per"><span class="count-box"><span class="count-text"
																data-stop="90" data-speed="2000">0</span>%</span></div>
												</div>
												<div class="cat">
													<div class="c-title">Accomodation</div>
													<div class="p-bar">
														<div class="p-fill p-fill-bar" data-percent="80%"></div>
													</div>
													<div class="c-per"><span class="count-box"><span class="count-text"
																data-stop="80" data-speed="2000">0</span>%</span></div>
												</div>
												<div class="cat">
													<div class="c-title">Location</div>
													<div class="p-bar">
														<div class="p-fill p-fill-bar" data-percent="98%"></div>
													</div>
													<div class="c-per"><span class="count-box"><span class="count-text"
																data-stop="98" data-speed="2000">0</span>%</span></div>
												</div>
												<div class="cat">
													<div class="c-title">Price</div>
													<div class="p-bar">
														<div class="p-fill p-fill-bar" data-percent="70%"></div>
													</div>
													<div class="c-per"><span class="count-box"><span class="count-text"
																data-stop="70" data-speed="2000">0</span>%</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="reviews">

									<div class="rev-box">
										<div class="inner">
											<div class="rev-header clearfix">
												<h4>Enchanting Island Escape</h4>
												<div class="rating">
													<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i>
												</div>
											</div>
											<p class="travilo-text">I cannot begin to express how incredible my
												experience was on the Island
												Paradise tour in Phuket! From the moment I arrived, I was greeted with
												warm smiles and
												impeccable hospitality. The tour was perfectly balanced, offering a mix
												of adventure and
												relaxation. Snorkeling at Phi Phi Islands was a dream come true - the
												vibrant underwater world
												left me in awe.</p>
											<div class="lower clearfix">
												<div class="author-info">
													<div class="image"><img
															src="{{asset('frontend/assets/images/resources/thumbnails/reviewer-1.jpg')}}"
															alt="Review 1"></div>
													<div class="author-name">David Hustler</div>
													<div class="designation">Photographer</div>
												</div>
												<div class="ld-link">
													<span class="txt">Was this review helpful?</span>
													<a href="#" class="l-btn active"><i
															class="fa-solid fa-thumbs-up"></i><span
															class="l-count">12</span></a> <a href="#" class="d-btn"><i
															class="fa-solid fa-thumbs-up"></i><span
															class="d-count">8</span></a>
												</div>
											</div>
										</div>
									</div>

									<div class="rev-box">
										<div class="inner">
											<div class="rev-header clearfix">
												<h4>Unforgettable Tropical Getaway</h4>
												<div class="rating">
													<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i>
												</div>
											</div>
											<p class="travilo-text">My trip to Phuket for the Island Paradise tour was
												an absolute delight!
												The tour provided everything I could have hoped for and more. The
												beaches were pristine, and the
												crystal-clear waters were perfect for swimming and snorkeling. Exploring
												the limestone
												formations at Phang Nga Bay was truly breathtaking, and the visit to the
												Big Buddha and Wat
												Chalong gave me a profound sense of spirituality.</p>
											<div class="lower clearfix">
												<div class="author-info">
													<div class="image"><img
															src="{{asset('frontend/assets/images/resources/thumbnails/reviewer-2.jpg')}}"
															alt="Review 2"></div>
													<div class="author-name">Peter Hazard</div>
													<div class="designation">Self Employed</div>
												</div>
												<div class="ld-link">
													<span class="txt">Was this review helpful?</span>
													<a href="#" class="l-btn"><i class="fa-solid fa-thumbs-up"></i><span
															class="l-count">12</span></a> <a href="#"
														class="d-btn active"><i class="fa-solid fa-thumbs-up"></i><span
															class="d-count">6</span></a>
												</div>
											</div>
										</div>
									</div>

									<div class="rev-box">
										<div class="inner">
											<div class="rev-header clearfix">
												<h4>Tropical Adventure of a Lifetime</h4>
												<div class="rating">
													<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
														class="fa-solid fa-star"></i>
												</div>
											</div>
											<p class="travilo-text">What an amazing journey I had on the Island Paradise
												tour in Phuket! I've
												traveled to many places, but this tour stands out as one of my
												favorites. The tour itinerary was
												thoughtfully crafted, offering a perfect blend of relaxation and
												exploration. Snorkeling at the
												Phi Phi Islands felt like swimming in an underwater paradise, and the
												cruise through Phang Nga
												Bay was like being in a real-life movie set.</p>
											<div class="lower clearfix">
												<div class="author-info">
													<div class="image"><img
															src="{{asset('frontend/assets/images/resources/thumbnails/reviewer-3.jpg')}}"
															alt="Review 3"></div>
													<div class="author-name">Pablo Benjamin</div>
													<div class="designation">Sr. Engineer</div>
												</div>
												<div class="ld-link">
													<span class="txt">Was this review helpful?</span>
													<a href="#" class="l-btn active"><i
															class="fa-solid fa-thumbs-up"></i><span
															class="l-count">12</span></a> <a href="#" class="d-btn"><i
															class="fa-solid fa-thumbs-up"></i><span
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
													<button type="submit" class="theme-btn btn-style-one"><span>Submit
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
							{{-- <div class="dsp-widget t-book-widget alt-margin">
								<div class="inner-box">
									<div class="t-book-header">
										<span class="st-txt">Start <br>From</span>
										<span class="amount">$120</span>
										<span class="qty">/ Per Person</span>
									</div>
									<div class="lower-box">
										<div class="form-box site-form">
											<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/tour-single.html">
												<div class="fields">
													<div class="form-group">
														<div class="field-label">Date</div>
														<div class="field-inner">
															<input class="datepicker" type="text" name="field-name"
																value="" placeholder="Select a date" required>
															<i class="alt-icon fa fa-calendar-alt"></i>
														</div>
													</div>
													<div class="form-group">
														<div class="field-label">Time</div>
														<div class="field-inner">
															<select name="field-name" class="custom-select">
																<option>Select a time</option>
																<option>0000 Hrs</option>
																<option>0200 Hrs</option>
																<option>0400 Hrs</option>
																<option>0600 Hrs</option>
																<option>0800 Hrs</option>
																<option>1000 Hrs</option>
																<option>1200 Hrs</option>
																<option>1400 Hrs</option>
																<option>1600 Hrs</option>
																<option>1800 Hrs</option>
																<option>2000 Hrs</option>
																<option>2200 Hrs</option>
															</select>
														</div>
													</div>
												</div>
												<h6>Tickets</h6>
												<div class="tickets">
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
													<div class="ticket-block clearfix">
														<div class="tick-ttl">Children (3+ years)</div>
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
												<h6>Additional Service</h6>
												<div class="add-ser">
													<ul>
														<li>
															<div class="cb-block"><input type="checkbox" id="cb-1">
																<label class="clearfix" for="cb-1"><span
																		class="txt">Additional Guide</span><span
																		class="amount">$50</span></label></div>
														</li>
														<li>
															<div class="cb-block"><input type="checkbox" id="cb-2">
																<label class="clearfix" for="cb-2"><span
																		class="txt">Internet</span><span
																		class="amount">$30</span></label>
															</div>
														</li>
														<li>
															<div class="cb-block"><input type="checkbox" id="cb-3">
																<label class="clearfix" for="cb-3"><span
																		class="txt">Photography</span><span
																		class="amount">$90</span></label>
															</div>
														</li>
													</ul>
												</div>
												<div class="total clearfix">
													<div class="t-ttl">Total</div>
													<div class="ttl-amt">$450</div>
												</div>
												<div class="proceed-link"><button type="button"
														class="theme-btn btn-style-two"><span>Proceed to
															Book</span></button></div>
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
									<p class="travilo-text">Our dedicated team of travel experts is here to assist you
										every step of the
										way, ensuring a seamless and unforgettable journey.</p>
									<div class="call-to">
										<a href="tel:+9689999000"><i class="icon fa-solid fa-phone"></i> Call Us <span
												class="nmbr">+968
												9999 9000</span></a>
									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="dsp-widget similar-widget">
								<div class="inner">
									<h3>You might also like</h3>
									<!--Logo-->
									<div class="posts">
										<div class="post">
											<div class="image"><a href="#"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/uk-thumb.jpg')}}"
														alt="London Bridge"></a>
											</div>
											<h6><a href="#">Iconic Landmark Connecting History and Modernity</a></h6>
											<div class="price">Starts from <span class="amount">$399</span></div>
										</div>
										<div class="post">
											<div class="image"><a href="#"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/maldives-thumb.jpg')}}"
														alt="Maldives"></a></div>
											<h6><a href="#">Unveiling the Serenity of Maldivian Islands</a></h6>
											<div class="price">Starts from <span class="amount">$595</span></div>
										</div>
										<div class="post">
											<div class="image"><a href="#"><img
														src="{{asset('frontend/assets/images/resources/thumbnails/finland-thumb.jpg')}}"
														alt="Helsinki"></a></div>
											<h6><a href="#">Vibrant Helsinki, A Fusion of Culture and Cuisine</a></h6>
											<div class="price">Starts from <span class="amount">$565</span></div>
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