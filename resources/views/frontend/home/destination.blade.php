<div class="popular-section">
    <div class="auto-container">
        <div class="title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="subtitle">Commencer à voyager aujourd'hui</div>
            <h2><span>Destinations</span></h2>
        </div>
        <div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-15.png')}}" alt="" title="">
            </div>
            <div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-16.png')}}" alt="" title="">
            </div>
            <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/purple-2.png')}}" alt=""></div>
            <div class="popular-carousel">

                <!--Block-->
                @foreach ($destinations as $destination )
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image">
                                <a href="{{route('single-destination',$destination->id)}}">
                                    <img src="{{ asset('storage/' . json_decode($destination->images)[0]) }}" alt="{{$destination->name}}"  style="height: 369.52px;">
                                </a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="{{route('single-destination',$destination->id)}}">{{$destination->name}}</a></h3>
                                <!-- <div class="info"><span>20 Hotels</span> <span>30 Tours</span> <span>15
                                        Cars</span> <span>18 Flights</span></div> -->
                            </div>
                        </div>	
                    </div>
                </div>
                @endforeach

                {{-- <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/rome.jpg')}}" alt="Rome"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Rome</a></h3>
                                <div class="info"><span>27 Hotels</span> <span>45 Tours</span> <span>10
                                        Cars</span> <span>12 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/london.jpg')}}" alt="London"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">London</a></h3>
                                <div class="info"><span>50 Hotels</span> <span>60 Tours</span> <span>25
                                        Cars</span> <span>25 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/paris.jpg')}}" alt="Paris"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Paris</a></h3>
                                <div class="info"><span>45 Hotels</span> <span>35 Tours</span> <span>18
                                        Cars</span> <span>22 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/phuket.jpg')}}" alt="Phuket"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Phuket</a></h3>
                                <div class="info"><span>100 Hotels</span> <span>60 Tours</span> <span>30
                                        Cars</span> <span>70 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/sydney.jpg')}}" alt="Sydney"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Sydney</a></h3>
                                <div class="info"><span>55 Hotels</span> <span>35 Tours</span> <span>18
                                        Cars</span> <span>22 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/dubai.jpg')}}" alt="Dubai"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Dubai</a></h3>
                                <div class="info"><span>220 Hotels</span> <span>45 Tours</span> <span>37
                                        Cars</span> <span>100 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/asikkala.jpg')}}"
                                        alt="Asikkala"></a></div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Asikkala</a></h3>
                                <div class="info"><span>54 Hotels</span> <span>48 Tours</span> <span>22
                                        Cars</span> <span>110 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/muscat.jpg')}}" alt="Muscat"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Muscat</a></h3>
                                <div class="info"><span>38 Hotels</span> <span>25 Tours</span> <span>24
                                        Cars</span> <span>26 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/bangkok.jpg')}}"
                                        alt="Bangkok"></a></div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Bangkok</a></h3>
                                <div class="info"><span>30 Hotels</span> <span>27 Tours</span> <span>24
                                        Cars</span> <span>25 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/beijing.jpg')}}"
                                        alt="Beijing"></a></div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Beijing</a></h3>
                                <div class="info"><span>48 Hotels</span> <span>46 Tours</span> <span>15
                                        Cars</span> <span>29 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="popular-block alternate">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="destination-single.html"><img
                                        src="{{asset('frontend/assets/images/resources/destinations/madrid.jpg')}}" alt="Madrid"></a>
                            </div>
                        </div>
                        <div class="hvr-box">
                            <div class="hvr-inner">
                                <h3><a href="destination-single.html">Madrid</a></h3>
                                <div class="info"><span>80 Hotels</span> <span>34 Tours</span> <span>40
                                        Cars</span> <span>44 Flights</span></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>