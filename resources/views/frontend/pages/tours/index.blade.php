@extends('layouts.layout')
@section('content')
        <!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-4.jpg')}});">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Tour List</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{route('home')}}">Home</a></li>
							<li class="current">Liste Tours </li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Sidebar Container-->
		<div class="sidebar-container">
			<div class="auto-container">
				<div class="row clearfix">
					<!--Sidebar Side-->
					<div class="sidebar-side col-xl-4 col-lg-5 col-md-12 col-sm-12">
						<div class="sidebar-inner">
							<!--Widget-->
							<div class="sb-widget s-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Rechercher des forfaits</h4>
									</div>
									<div class="form-box site-form">
										<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
											<div class="form-group">
												<div class="field-inner">
													<select name="field-name" class="custom-select">
														{{-- <option>Tour</option>
														<option>Enchanting Europe, A Journey through Time and Culture
														</option>
														<option>Unveiling the Idyllic Paradise of Southeast Asia
														</option>
														<option>Exploring Nature's Best in the American National Parks
														</option>
														<option>An African Expedition into the Heart of the Savannah
														</option>
														<option>A Fascinating Expedition to Egypt and Jordan</option> --}}
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="field-inner">
													<input class="datepicker" type="text" name="field-name" value=""
														placeholder="Check in" required>
													<i class="alt-icon fa fa-calendar-alt"></i>
												</div>
											</div>
											<div class="form-group">
												<div class="field-inner">
													<input class="datepicker" type="text" name="field-name" value=""
														placeholder="Check out" required>
													<i class="alt-icon fa fa-calendar-alt"></i>
												</div>
											</div>
											<div class="form-group">
												<div class="field-inner">
													<input type="text" name="field-name" value="" placeholder="Guests"
														required>
													<i class="alt-icon fa fa-user"></i>
												</div>
											</div>
											<div class="form-group">
												<div class="field-inner">
													<button type="submit" class="theme-btn f-btn"><span>Recherche <i
																class="fa-solid fa-search"></i></span></button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget p-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Prix</h4>
									</div>
									<div class="range-slider">
										<div class="price-range-slider"></div>
										<div class="clearfix">
											<div class="pull-left">
												<div class="input">F CFA<input type="text"
														class="property-amount property-amount-1" name="field-name"
														readonly></div>
											</div>
											<div class="pull-right">
												<div class="input">F CFA<input type="text"
														class="property-amount property-amount-2" name="field-name"
														readonly></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget cbf-widget rating-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>évaluation</h4>
									</div>
									<ul>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-1"> <label
													for="cb-1"><span class="rating"><i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i></span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-2"> <label
													for="cb-2"><span class="rating"><i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="empty fa fa-star"></i></span><span class="txt">and
														Above</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-3"> <label
													for="cb-3"><span class="rating"><i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i></span><span class="txt">Et plus</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-4"> <label
													for="cb-4"><span class="rating"><i class="fa-solid fa-star"></i><i
															class="fa-solid fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i></span><span class="txt">Et plus</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-5"> <label
													for="cb-5"><span class="rating"><i class="fa-solid fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i><i
															class="empty fa fa-star"></i></span><span class="txt">Et plus</span></label></div>
										</li>
									</ul>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget cbf-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Type de tour</h4>
									</div>
									<ul>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-6"><label
													for="cb-6"><span class="txt">Aventure</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-7"><label
													for="cb-7"><span class="txt">Randonnée</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-8"><label
													for="cb-8"><span class="txt">Romantique</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-9"><label
													for="cb-9"><span class="txt">Culture</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-10"><label
													for="cb-10"><span class="txt">Visite de la ville</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-11"><label
													for="cb-11"><span class="txt">Historiques</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-12"><label
													for="cb-12"><span class="txt">Visite de la plage</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-13"><label
													for="cb-13"><span class="txt">Voyage sportif</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-14"><label
													for="cb-14"><span class="txt">Randonnée pédestre</span></label></div>
										</li>
									</ul>
								</div>
							</div>

							<!--Widget-->
							<div class="sb-widget cbf-widget">
								<div class="w-inner">
									<div class="s-title"><i class="fa-solid fa-caret-right"></i>
										<h4>Lieu</h4>
									</div>
									<ul>
										@foreach ($destinations as $destination)
											
										
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-{{$destination->id}}" value="{{$destination->id}}"><label
													for="cb-{{$destination->id}}"><span class="txt">{{$destination->name}}</span></label></div>
										</li>
										{{-- <li>
											<div class="cb-block"><input type="checkbox" id="cb-16"><label
													for="cb-16"><span class="txt">London</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-17"><label
													for="cb-17"><span class="txt">Paris</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-18"><label
													for="cb-18"><span class="txt">Muscat</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-19"><label
													for="cb-19"><span class="txt">Dhaka</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-20"><label
													for="cb-20"><span class="txt">Kolkata</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-21"><label
													for="cb-21"><span class="txt">Chottogram</span></label></div>
										</li>
										<li>
											<div class="cb-block"><input type="checkbox" id="cb-22"><label
													for="cb-22"><span class="txt">Dubai</span></label></div>
										</li> --}}
										@endforeach
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--Content Side-->
					<div class="content-side col-xl-8 col-lg-7 col-md-12 col-sm-12">
						<div class="content-inner">

							<div class="filter-row">
								<div class="clearfix">
									{{-- <div class="s-info">Showing results of <strong>1 - 9</strong> of
										<strong>200</strong> items
									</div> --}}
									{{-- <div class="filters clearfix+">
										<div class="sort-by">
											<div class="drop-list-one">
												<div class="inner clearfix">
													<div class="dropdown-outer open"><a class="btn-box dropdown-toggle"
															id="dropdownMenu1" data-toggle="dropdown"
															aria-haspopup="true" aria-expanded="true" href="#">Sort <i
																class="fas fa-angle-down"></i></a>
														<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
															<li><a href="#">Latest First</a></li>
															<li><a href="#">Price</a></li>
															<li><a href="#">Date: Ascending</a></li>
															<li><a href="#">Date: Descending</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="layout-links clearfix">
											<a href="tour-packages.html"><span class="fas fa-th-large"></span></a>
											&ensp; <a class="active" href="tour-list.html"><span
													class="fas fa-th-list"></span></a>
										</div>
									</div> --}}
								</div>
							</div>

							<div class="packages">
								<!--Block-->
                                @foreach ($tours as $tour)
								<div class="package-block-two">
                                    
                                    <div class="inner-box">
										<div class="image-box">
											<div class="image"><a href="{{route('single-tour', $tour->id)}}"><img
														src="{{ asset('storage/' . json_decode($tour->images)[0]) }}"
														alt="Maldives"></a></div>
											<div class="image-layer"
												style="background-image: url({{ asset('storage/' . json_decode($tour->images)[0]) }});">
											</div>
											<div class="b-title featured"><span>Featured</span></div>
											<div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a>
											</div>
											<div class="p-icon"><img src="{{ asset('storage/' . json_decode($tour->images)[0]) }}" alt=""><span
													class="icon flaticon-adventure"></span></div>
										</div>
										<div class="content-box">

											<div class="loc-rat clearfix">
												<div class="location">{{$tour->destinations->name}}</div>
												<div class="rating"><a href="" class="theme-btn">
														<strong></strong> &ensp;
														<span class="count"> </span></a></div>
											</div>
											<h5><a href="{{route('single-tour', $tour->id)}}">{{$tour->nom}} </a></h5>
											<p class="travilo-text">{{$tour->description}} ...</p>
											<div class="bottom-box clearfix">
												<div class="duration"><i class="fa-solid fa-clock"></i> {{$tour->duree}} jour (s)
												</div>
												<div class="price">Prix &ensp;<span class="amount">{{ number_format($tour->prix, 0, ',', ' ') }} FCFA </span>
												</div>
											</div>
										</div>
									</div>
                                    
								</div>
                                @endforeach
							</div>

							<div class="styled-pagination">
								<ul class="pagination">
									<!-- Lien vers la page précédente -->
									@if ($tours->onFirstPage())
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-angle-left"></i></a>
										</li>
									@else
										<li class="page-item">
											<a class="page-link" href="{{ $tours->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
										</li>
									@endif
								
									<!-- Liens vers chaque page -->
									@foreach ($tours->links()->elements[0] as $page => $url)
										@if ($page == $tours->currentPage())
											<li class="page-item active">
												<span class="page-link">{{ $page }}</span>
											</li>
										@else
											<li class="page-item">
												<a class="page-link" href="{{ $url }}">{{ $page }}</a>
											</li>
										@endif
									@endforeach
								
									<!-- Lien vers la page suivante -->
									@if ($tours->hasMorePages())
										<li class="page-item">
											<a class="page-link" href="{{ $tours->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
										</li>
									@else
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-angle-right"></i></a>
										</li>
									@endif
								</ul>
								
									
									
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
        @endsection