@extends('layouts.layout')
@section('content')
<!-- Hidden Navigation Bar -->
<div class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">
        <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14">
                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                </svg></span></div>
        <div class="nav-logo-box">
            <!-- logo will be copied here ! -->
        </div>
        <!-- .Side-menu -->
        <nav class="side-menu">
            <!-- main-menu will be copied here! -->
        </nav><!-- .side-menu -->

        <div class="links-box clearfix">
            <div class="clearfix">
                <div class="link"><a href="contact.html" class="theme-btn btn-style-one"><span>Login /
                            Signup</span></a></div>
            </div>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</div>
<!-- / Hidden Bar -->


<!-- Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-3.jpg')}})">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Tour Packages</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="current">Tour Packages</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Packages Section-->
<section class="packages-three">
    <!--Serach One-->
    <div class="search-one">
        <div class="auto-container">
            <div class="outer">
                <div class="search-title"><span>Search for your desired tour package</span></div>
                <div class="form-box site-form">
                    <form method="post" action="https://jufailitech.com/envatoitems/travilo/html/index.html">
                        <div class="row clearfix">
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Destination</div>
                                <div class="field-inner">
                                    <input type="text" name="field-name" value="" placeholder="Where to go?" required>
                                    <i class="alt-icon fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Start</div>
                                <div class="field-inner">
                                    <input class="datepicker" type="text" name="field-name" value="" placeholder="Check in" required>
                                    <i class="alt-icon fa fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">End</div>
                                <div class="field-inner">
                                    <input class="datepicker" type="text" name="field-name" value="" placeholder="Check out" required>
                                    <i class="alt-icon fa fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Guest</div>
                                <div class="field-inner">
                                    <input type="text" name="field-name" value="" placeholder="Guests" required>
                                    <i class="alt-icon fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="theme-btn f-btn"><span>Search <i class="fa-solid fa-search"></i></span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="packages">

            <div class="filter-row">
                <div class="clearfix">
                    <div class="s-info">Showing results of <strong>1 - 9</strong> of <strong>200</strong> items
                    </div>
                    <div class="filters clearfix+">
                        <div class="sort-by">
                            <div class="drop-list-one">
                                <div class="inner clearfix">
                                    <div class="dropdown-outer open"><a class="btn-box dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Sort <i class="fas fa-angle-down"></i></a>
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
                            <a class="active" href="tour-packages.html"><span class="fas fa-th-large"></span></a> &ensp; <a href="tour-list.html"><span class="fas fa-th-list"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Block-->
                @foreach ($tours as $tour)
                <div class="package-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="tour-single.html">
                                
                                    
                                
                                
                        <img src="{{ asset('storage/' . $tour->images[0]) }}" width="200px" alt="Tour Image" class="img-thumbnail">
                    </a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="p-icon"><img src="{{asset('frontend/assets/images/icons/t-icon-1.png')}}" alt=""><span class="icon flaticon-adventure"></span></div>
                            <div class="location">{{ $tour->destination }}</div>
                            <h5><a href="tour-single.html">{{ $tour->description }}</a></h5>
                            <div class="info clearfix">
                                <div class="duration"><i class="fa-solid fa-clock"></i> {{ $tour->duree }} Days {{ $tour->duree }} Nights</div>
                                <div class="persons"><i class="fa-solid fa-user"></i> 12</div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="rating"><a href="#" class="theme-btn"><i class="fa-solid fa-star"></i>
                                        <strong>4.8</strong> &ensp; <span class="count">4570 Reviews</span></a>
                                </div>
                                <div class="price">Start from &ensp;<span class="amount">{{ number_format($tour->prix, 0, ',', ' ') }} CFA</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
</section>


@endsection