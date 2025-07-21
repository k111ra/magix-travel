<div class="banner-two">
    <div class="banner-container">
        <div class="banner-slider">
            <div class="swiper-wrapper">
                @foreach ($sliders as $index => $image)
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('storage/' . $image->images) }}')"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <h1><span>{{ $image->nom ?? '' }}<i
                                                        class="s-text">{{ $image->nom ?? '' }}</i></span></h1>
                                            <div class="travilo-text">{{ $image->description }}</div>
                                            <div class="links-box clearfix">
                                                <div class="link"><a href="{{ route('about') }}"
                                                        class="theme-btn btn-style-two"><span>Explorer
                                                            Maintenant</span></a>
                                                </div>
                                                <div class="link"><a href="{{ route('about') }}"
                                                        class="theme-btn btn-style-three"><span>À propos de
                                                            nous</span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-button-prev"><span class="fa-solid fa-angle-left"></span></div>
            <div class="swiper-button-next"><span class="fa-solid fa-angle-right"></span></div>
        </div>
    </div>
</div>
