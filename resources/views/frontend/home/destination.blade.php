<div class="popular-section">
    <div class="auto-container">
        <div class="title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="subtitle">Commencer à voyager aujourd'hui</div>
            <h2><span>Destinations</span></h2>
        </div>
        <div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="bg-grad-left"><img src="{{ asset('frontend/assets/images/background/bg-gradient-15.png') }}"
                    alt="" title="">
            </div>
            <div class="bg-grad-right"><img src="{{ asset('frontend/assets/images/background/bg-gradient-16.png') }}"
                    alt="" title="">
            </div>
            <div class="d-elem-1"><img src="{{ asset('frontend/assets/images/elements/purple-2.png') }}" alt="">
            </div>
            <div class="popular-carousel">

                <!--Block-->
                @php $count = 0 @endphp

                @foreach ($destinations as $destination)
                    <div class="popular-block @if ($count % 2 == 1) alternate @endif">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image">
                                    <a href="{{ route('single-destination', $destination->id) }}">
                                        <img src="{{ asset('storage/' . json_decode($destination->images)[0]) }}"
                                            alt="{{ $destination->name }}" style="height: 369.52px;">
                                    </a>
                                </div>
                            </div>
                            <div class="hvr-box">
                                <div class="hvr-inner">
                                    <h3><a
                                            href="{{ route('single-destination', $destination->id) }}">{{ $destination->name }}</a>
                                    </h3>
                                    <!-- <div class="info"><span>20 Hotels</span> <span>30 Tours</span> <span>15
                                        Cars</span> <span>18 Flights</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $count++ @endphp
                @endforeach


            </div>
        </div>
    </div>
</div>
