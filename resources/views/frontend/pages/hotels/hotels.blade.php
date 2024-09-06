@extends('layouts.layout')
@section('content')
<!-- Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-3.jpg')}});">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Hotels</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
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
                <div class="search-title"><span>Recherchez l'hôtel de votre choix</span></div>
                <div class="form-box site-form">
                    <form method="GET" action="{{route('hotel.search')}}">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-xl-8 col-lg-6 col-md-12 col-sm-12">
                                <div class="field-label">Destination</div>
                                <div class="field-inner">
                                    <input type="text" name="query" value="" placeholder="Où allerz-vous?"
                                        required>
                                    <i class="alt-icon fa fa-map-marker-alt"></i>
                                </div>
                                <button type="submit" class="theme-btn f-btn"><span>Recherche <i
                                    class="fa-solid fa-search"></i></span></button></div>
                            </div>
                            {{-- <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Départ</div>
                                <div class="field-inner">
                                    <input class="datepicker" type="text" name="field-name" value=""
                                        placeholder="Check in" required>
                                    <i class="alt-icon fa fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Arrivée</div>
                                <div class="field-inner">
                                    <input class="datepicker" type="text" name="field-name" value=""
                                        placeholder="Check out" required>
                                    <i class="alt-icon fa fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Visiteur</div>
                                <div class="field-inner">
                                    <input type="text" name="field-name" value="" placeholder="Guests"
                                        required>
                                    <i class="alt-icon fa fa-user"></i>
                                </div>
                            </div> --}}
                        
                        {{-- <button type="submit" class="theme-btn f-btn"><span>Recherche <i
                                    class="fa-solid fa-search"></i></span></button></div> --}}
                    </form>


                </div>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="packages">

         
            <div class="row clearfix">
                <!--Block-->
                @foreach ($hotels as $hotel)
                <div class="package-block alt col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="{{route('single-hotel',$hotel->id)}}"><img
                                        src="{{ asset('storage/' . json_decode($hotel->images)[0]) }}"
                                        alt="Beach Hotel"></a></div>
                            <div class="b-title featured"><span>Featured</span></div>
                            <div class="fav-btn"><a href="#"><span class="far fa-heart"></span></a></div>
                        </div>
                        <div class="lower-box">
                            <div class="location">{{$hotel->destinations->name}} </div>
                            <h5><a href="{{route('single-hotel',$hotel->id)}}">{{$hotel->name}} </a></h5>
                            <div class="bottom-box clearfix">
                                <div class="rating"><a href="{{route('single-hotel',$hotel->id)}}" class="theme-btn"><i
                                            class="fa-solid fa-star"></i>
                                        <strong>{{$hotel->etoiles}}  étoiles</strong> &ensp; 
                                        {{-- <span class="count">4500 Reviews</span> --}}
                                    </a>
                                </div>
                                <div class="price">Prix  &ensp;<span class="amount">{{ number_format($hotel->prix, 0, ',', ' ') }} FCFA </span></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
            <div class="styled-pagination centered">
                <ul class="pagination">
                    <!-- Lien vers la page précédente -->
                    @if ($hotels->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $hotels->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                    @endif
                
                    <!-- Liens vers chaque page -->
                    @foreach ($hotels->links()->elements[0] as $page => $url)
                        @if ($page == $hotels->currentPage())
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
                    @if ($hotels->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $hotels->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
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
</section>
@endsection