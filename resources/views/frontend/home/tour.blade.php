<div class="packages-section">
    <div class="bg-layer" style="background-image: url({{ asset('frontend/assets/images/background/pattern-1.png') }});">
    </div>
    <div class="auto-container">
        <div class="title-box">
            <div class="subtitle">Packages</div>
            <h2><span>Nos Tours</span></h2>
        </div>
        <div class="carousel-box">
            <div class="packages-carousel">
                @foreach ($tours as $tour)
                    <div class="package-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="{{ route('single-tour', $tour->id) }}"><img
                                            src="{{ asset('storage/' . json_decode($tour->images)[0]) }}"
                                            alt="Morocco"></a></div>
                            </div>
                            <div class="lower-box">
                                <div class="p-icon"><img src="{{ asset('storage/' . json_decode($tour->images)[0]) }}"
                                        alt=""><span class="icon flaticon-family"></span></div>
                                <div class="location">{{ $tour->destination->name }}</div>
                                <h5><a href="{{ route('single-tour', $tour->id) }}">{{ $tour->nom }}</a></h5>
                                <div class="info clearfix">
                                    <div class="duration"><i class="fa-solid fa-clock"></i>{{ $tour->duree }} jour(s)
                                    </div>
                                    <div class="persons"><i class="fa-solid fa-user"></i>{{ $tour->place }} </div>
                                </div>
                                <div class="bottom-box clearfix">
                                    <div class="rating"><a href="#" class="theme-btn">
                                            <strong></strong> &ensp; <span class="count"></span></a>
                                    </div>
                                    <div class="price">Prix &ensp;<span
                                            class="amount">{{ number_format($tour->prix, 0, ',', ' ') }} FCFA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
