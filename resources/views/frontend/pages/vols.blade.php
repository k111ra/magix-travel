@extends('layouts.layout')
@section('content')
<!-- Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-3.jpg')}});">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1> Resultat </h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current">Vols</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->
<section class="hotels-section">

    <div class="container">
        {{-- <div class="header">
            <h2>Le meilleur</h2>
            <div class="price">226299 F</div>
            <div class="info">1h 03 (en moyenne)</div>
        </div>
    
        
        <div class="options">
            <div class="option">
                <div class="title">Le moins cher</div>
                <div class="details">1h 03 (en moyenne)</div>
                <div class="price">226299 F</div>
            </div>

            <div class="option">
                <div class="title">Le plus rapide</div>
                <div class="details">1h 03 (en moyenne)</div>
                <div class="price">226299 F</div>
            </div>
        </div>

        <div class="emirates-section">
            <h2>Emirates Voyagez vers Accra avec Emirates</h2>
            <p>Plus de confort et de meilleurs repas avec Emirates</p>
            <div class="cta"><a href="#">Voir plus</a></div>
        </div> --}}
        @if($vols->isEmpty())
        <p>Aucun vol trouvé pour cette recherche.</p>
        @else
        @foreach($vols as $vol)
        <div class="flights">
            <div class="flight">
                <div class="airline">
                    <i class="fa-solid fa-plane"></i>
                    <div class="details">
                        <div class="depart">{{ $vol->depart->name }} </div>
                        <div class="time"> --- </div>
                        <div class="duration">> </div>
                        <div class="destination"> {{ $vol->destination->name }} </div>
                    </div>
                </div>
                <div class="price">{{ $vol->price }}  </div>
                <div class="cta"><a href="#">Voir →</a></div>
            </div>
            @endforeach
            @endif
            
    </div>

</section>
@endsection