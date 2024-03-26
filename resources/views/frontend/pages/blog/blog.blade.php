@extends('layouts.layout')
@section('content')
    

<!-- Banner Section -->
<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{ asset('frontend/assets/images/resources/featured/banner-5.jpg') }});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Latest News</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{route('home')}}">Home</a></li>
							<li class="current">Latest News</li>
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
												<li><a href="#"><i class="fa-solid fa-folder"></i> Adventure</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Casey Writer</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> July 17, 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Soaring High: Riding Balloons in Turkey</a>
											</h3>
											<div class="travilo-text">Discover the magic of Cappadocia, Turkey, from a
												bird's-eye view.
												Experience the breathtaking landscapes and ancient rock formations as
												you float gently above in
												a hot air balloon. Our guide shares tips for the best time to fly and
												what to expect during this
												unforgettable adventure ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>Read
															More</span></a></div>
												<div class="social"><strong>Share</strong> <a href="#"
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
												<li><a href="#"><i class="fa-solid fa-clock"></i> May 17, 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Lake Adventure in Canada, Exploring the Great
													Outdoors</a>
											</h3>
											<div class="travilo-text">Immerse yourself in the tranquility of Canada's
												pristine lakes and
												wilderness. From kayaking on the emerald waters to fishing for native
												species, this blog post is
												a guide to experiencing the ultimate lake adventure. Unearth the hidden
												gems and serenity that
												await you in Canada's vast natural playground ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>Read
															More</span></a></div>
												<div class="social"><strong>Share</strong> <a href="#"
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
												<li><a href="#"><i class="fa-solid fa-clock"></i> May 1, 2023</a></li>
											</ul>
											<h3><a href="blog-single.html">Beachfront Bliss, Exploring Thailand's
													Coastal Gems</a>
											</h3>
											<div class="travilo-text">Thailand's coastal beauty beckons with its idyllic
												beaches and
												crystal-clear waters. This post delves into the top beachfront
												destinations, from the lively
												Patong Beach to the serene Railay Beach. Get insider tips on water
												sports, local cuisine, and
												the vibrant beach culture that will leave you yearning for more ...
											</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>Read
															More</span></a></div>
												<div class="social"><strong>Share</strong> <a href="#"
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
												<li><a href="#"><i class="fa-solid fa-folder"></i> Hiking</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Rick Stanford</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> June 17, 2022</a></li>
											</ul>
											<h3><a href="blog-single.html">Hiking in the USA, Exploring Nature's
													Spectacular Trails</a>
											</h3>
											<div class="travilo-text"> Lace up your hiking boots and set out to conquer
												some of the most
												breathtaking trails in the USA. From the towering peaks of the Rocky
												Mountains to the dramatic
												canyons of the Grand Canyon, this blog post is a hiker's guide to
												unforgettable adventures.
												Discover the best trails, tips for preparation, and the awe-inspiring
												landscapes that await you
												...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>Read
															More</span></a></div>
												<div class="social"><strong>Share</strong> <a href="#"
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
												<li><a href="#"><i class="fa-solid fa-folder"></i> Adventure</a></li>
												<li><a href="#"><i class="fa-solid fa-user"></i> Stacey Writer</a></li>
												<li><a href="#"><i class="fa-solid fa-clock"></i> April 25, 2023</a>
												</li>
											</ul>
											<h3><a href="blog-single.html">Beach Paradise in the Philippines,
													Island-Hopping Adventure</a>
											</h3>
											<div class="travilo-text">Embark on a tropical journey through the
												Philippines' paradisiacal
												islands. From the pristine shores of Boracay to the secluded beauty of
												Palawan's lagoons, this
												post unveils the best beach destinations in the Philippines. Prepare to
												be enchanted by the
												diverse marine life, lush landscapes, and the warm hospitality of the
												Filipino ...</div>
											<div class="more-links clearfix">
												<div class="more"><a href="blog-single.html"
														class="theme-btn btn-style-two"><span>Read
															More</span></a></div>
												<div class="social"><strong>Share</strong> <a href="#"
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
										<h4>Search</h4>
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
										<h4>Recent Posts</h4>
									</div>
									<div class="posts">
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/oman-12-thumb.jpg') }}"
														alt="Salalah"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Salalah, A Tropical
													Paradise in Oman</a>
											</div>
											<div class="post-info">August 3 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-1.jpg') }}"
														alt="New York"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Exploring the New York
													Architectural
													Marvels</a></div>
											<div class="post-info">July 28 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-2.jpg') }}"
														alt="Sydney"></a></div>
											<div class="travilo-text"><a href="blog-single.html">The Vibrant Harbor City
													Down Under</a></div>
											<div class="post-info">July 24 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-3.jpg') }}"
														alt="India"></a></div>
											<div class="travilo-text"><a href="blog-single.html">India's Majestic
													Monument of Love</a></div>
											<div class="post-info">July 24 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-4.jpg') }}"
														alt="Morocco"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Morocco Beach Sun,
													Sand, and Serenity</a>
											</div>
											<div class="post-info">July 22 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-5.jpg') }}"
														alt="Italy"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Lakeside Tranquility
													and Italian Charm</a>
											</div>
											<div class="post-info">July 12 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-6.jpg') }}"
														alt="India"></a></div>
											<div class="travilo-text"><a href="blog-single.html">A Fusion of Cultures
													and Wonders Await!</a>
											</div>
											<div class="post-info">June 30 2023</div>
										</div>
										<div class="post">
											<div class="post-thumb"><a href="blog-single.html"><img
														src="{{ asset('frontend/assets/images/resources/gallery/gallery-thumb-7.jpg') }}"
														alt="London"></a></div>
											<div class="travilo-text"><a href="blog-single.html">Discovering Historic
													Landmarks in the UK</a>
											</div>
											<div class="post-info">June 29 2023</div>
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
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Hiking</a></li>
										<li><a href="#">Romance</a></li>
										<li><a href="#">Culture</a></li>
										<li><a href="#">City Tour</a></li>
										<li><a href="#">History</a></li>
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
										<li><a href="#">Fishing</a></li>
										<li><a href="#">Cooking</a></li>
										<li><a href="#">Art</a></li>
										<li><a href="#">Mountain</a></li>
										<li><a href="#">Family</a></li>
										<li><a href="#">Bike</a></li>
										<li><a href="#">Luxury</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Cycling</a></li>
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
										<h4>Follow Us</h4>
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