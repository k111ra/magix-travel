@extends('layouts.layout')
@section('content')
 


<!-- Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-3.jpg')}})">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Hotels</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="current">Hotels</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Hotels Section-->
<section class="hotels-section">
    <!--Serach One-->
    <div class="search-one">
        <div class="auto-container">
            <div class="outer">
                <div class="search-title"><span>Search for your desired hotel</span></div>
                <div class="form-box site-form">
                    <form method="get" action="rechercheHotel">
                        <div class="row clearfix">
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Nom</div>
                                <div class="field-inner">
                                    <input type="text" name="rechercheHotel" value="" placeholder="Where to go?"
                                        >
                                    <i class="alt-icon fa fa-hotel-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Description</div>
                                <div class="field-inner">
                                    <input class="description" type="text" name="rechercheHotel" value=""
                                        placeholder="Check in" >
                                    <i class="alt-icon fa fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">
                                    Localisation
                                </div>
                                <div class="field-inner">
                                    <input class="price" type="text" name="rechercheHotel" value=""
                                        placeholder="Check out" >
                                    <i class="alt-icon fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Prix</div>
                                <div class="field-inner">
                                    <input type="text" name="rechercheHotel" value="" placeholder="Guests" >
                                    <i class="alt-icon fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="theme-btn f-btn"><span>Search <i
                                    class="fa-solid fa-search"></i></span></button>
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
                                    <div class="dropdown-outer open"><a class="btn-box dropdown-toggle"
                                            id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true" href="#">Sort <i
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
                            <a class="active" href="tour-packages.html"><span
                                    class="fas fa-th-large"></span></a> &ensp; <a href="tour-list.html"><span
                                    class="fas fa-th-list"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Block-->
                @forelse ($hotels as $hotel)
                    
                
                <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="hotel-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/istanbul-beach-hotel.jpg')}}"
                                        alt="Beach Hotel"></a>
                                </div>
                            <div class="b-title featured"><span>Featured</span></div>
                            <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a></div>
                        </div>
                        <div class="lower-box">
                            <div class="location">{{$hotel->localisation}}</div>
                            <h5><a href="hotel-single.html">{{$hotel->name}}</a></h5>
                            <div class="bottom-box clearfix">
                                <div class="rating"><a href="#" class="theme-btn"><i
                                            class="fa-solid fa-star"></i>
                                        <strong>4.8</strong> &ensp; <span class="count">4500 Reviews</span></a>
                                </div>
                                <div class="price">Start from &ensp;<span class="amount">{{$hotel->prix}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
      
            </div>
        
        </div>
    </div>
                         
</section>



@endsection