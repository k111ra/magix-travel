@extends('layouts.layout')
@section('content')
<div class="inner-banner">
    <div class="image-layer" style="background-image: url({{asset('frontend/assets/images/resources/featured/banner-6.jpg')}});">
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>About Us</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End Banner Section -->


<!--About Us Section-->
<div class="about-section alternate">
    <div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-2.png')}}" alt="" title=""></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Text Col-->
            <div class="text-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/green-1.png')}}" alt=""></div>
                    <div class="title-box">
                        <div class="subtitle">Explorons le monde</div>
                        <h2><span>Nous Rendons Votre Voyage Plus Agréable</span></h2>
                        <p class="travilo-text">Notre équipe dévouée s’engage à vous fournir des expériences exceptionnelles, Des itinéraires personnalisés et des conseils d’experts, garantissant que votre voyage est rempli de Moments inoubliable .</p>
                    </div>
                    <div class="features">
                        <div class="row clearfix">
                            <div class="f-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-1.png')}}" alt=""></div>
                                    <h6>Organisateur de voyages et de voyages primé</h6>
                                </div>
                            </div>
                            <div class="f-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-2.png')}}" alt=""></div>
                                    <h6>Fournisseur de solutions de réservation le plus populaire</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-text">
                        <div class="travilo-text">
                            <ul>
                                <li>Des expériences de voyage inspirantes</li>
                                <li>Des itinéraires soigneusement sélectionnés</li>
                                <li>Un accompagnement et un accompagnement personnalisés</li>
                            </ul>
                        </div>
                        <div class="link-box"><a href="about.html" class="theme-btn btn-style-one"><span>Lire Plus</span></a></div>
                    </div>
                </div>
            </div>
            <!--Image Col-->
            <div class="image-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-26.png')}}" alt=""
                            title=""></div>
                    <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/yellow-3.png')}}" alt=""></div>
                    <div class="d-elem-2"><img src="{{asset('frontend/assets/images/elements/pink-4.png')}}" alt=""></div>
                    <div class="image-box clearfix">
                        <div class="image"><img src="{{asset('frontend/assets/images/resources/misc/tickets.jpg')}}" alt="Tickets"
                                title="Tickets"></div>
                        <div class="image"><img src="{{asset('frontend/assets/images/resources/misc/man-hiking-2.jpg')}}" alt=""
                                title=""></div>
                    </div>
                    <div class="exp"><span class="count">12</span> Successful <br>Years</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Intro Section-->
<div class="intro-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Block-->
            <div class="intro-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-4.png')}}" alt=""></span></div>
                    <h4>Notre mission</h4>
                    <div class="travilo-text">d’inspirer et de donner aux voyageurs les moyens d’explorer le monde avec émerveillement, créant Des expériences inoubliables.</div>
                </div>
            </div>
            <!--Block-->
            <div class="intro-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-5.png')}}" alt=""></span></div>
                    <h4>Informations sur les destinations</h4>
                    <div class="travilo-text">Obtenez des informations précieuses sur des destinations captivantes grâce à notre complet guides et recommandations d’experts.</div>
                </div>
            </div>
            <!--Block-->
            <div class="intro-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon"><span><img src="{{asset('frontend/assets/images/icons/intro-6.png')}}" alt=""></span></div>
                    <h4>Planification de voyage sur mesure</h4>
                    <div class="travilo-text">Notre site Web offre des services de planification de voyage personnalisés à votre préférences et intérêts.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Our Speciality Section-->
<div class="our-speciality">
    <div class="auto-container">
        <div class="outer-box">
            <div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-23.png')}}" alt="" title="">
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="title-col col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/green-4.png')}}" alt=""></div>
                        <div class="title-box">
                            <div class="subtitle">Notre spécialité  </div>
                            <h2><span>Votre Partenaire De Voyage De Confiance</span></h2>
                            <p class="travilo-text">Sur notre site de voyage, notre spécialité réside dans la curation inoubliable Des expériences qui répondent aux préférences uniques de chaque voyageur. De la famille Vacances en solo Aventures, escapades romantiques en escapades de groupe, nous sommes fiers d’offrir un Gamme variée de Des destinations triées sur le volet et des itinéraires soigneusement conçus.</p>
                            <p class="travilo-text">Notre équipe d’experts en voyages s’engage à garder une longueur d’avance la courbe, S’assurer que nous vous apportons les dernières tendances de voyage et les joyaux cachés à explorer. Qu’il s’agisse de activités hors des sentiers battus ou en concluant des accords exclusifs avec nos partenaires, nos L’engagement envers l’excellence garantit que chaque voyage planifié par l’intermédiaire de notre plateforme est Le voyage d’un vie.Notre équipe d’experts en voyages s’engage à garder une longueur d’avance la courbe, S’assurer que nous vous apportons les dernières tendances de voyage et les joyaux cachés à explorer. Qu’il s’agisse de activités hors des sentiers battus ou en concluant des accords exclusifs avec nos partenaires, nos L’engagement envers l’excellence garantit que chaque voyage planifié par l’intermédiaire de notre plateforme est Le voyage d’un vie.</p>
                            <p class="travilo-text">Notre service client 24h/24 et 7j/7 est toujours à votre disposition, Prêt à l’emploi toute question ou assistance en cas de modifications de dernière minute.</p>
                        </div>
                    </div>
                </div>
                <!--Content Col-->
                <div class="content-col col-lg-7 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="features">
                            <div class="row clearfix">
                                <div class="feature col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-10.png')}}" alt="">
                                        </div>
                                        <h4>Plans de tournée innovants</h4>
                                        <div class="travilo-text">Découvrez nos plans de visite innovants conçus pour vous faire sortir de la sentiers battus et découvrez des joyaux cachés.</div>
                                    </div>
                                </div>
                                <div class="feature col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-11.png')}}" alt="">
                                        </div>
                                        <h4>Guide de voyage expert </h4>
                                        <div class="travilo-text">Embarquez pour votre voyage en toute confiance, guidé par notre expert en voyages Des guides qui partagent leur expertise locale et leurs connaissances d’initiés.</div>
                                    </div>
                                </div>
                                <div class="feature col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-12.png')}}" alt="">
                                        </div>
                                        <h4>Politique de paiement flexible</h4>
                                        <div class="travilo-text">Voyagez sans stress grâce à notre système de paiement flexible politique qui tient compte des vos besoins et préférences.</div>
                                    </div>
                                </div>
                                <div class="feature col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><img src="{{asset('frontend/assets/images/icons/f-icon-13.png')}}" alt="">
                                        </div>
                                        <h4>Gestion de haute qualité</h4>
                                        <div class="travilo-text">Soyez assuré que votre expérience de voyage est en Des mains compétentes avec notre Une gestion de haute qualité et une attention portée à chaque détail.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Facts Section-->
<div class="facts-section alt-padding">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row clearfix">
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="120"
                                    data-speed="2000">0</span><i>+</i>
                            </div>
                        </div>
                        <div class="fact-title">Total <br>Destinations</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="500"
                                    data-speed="3000">0</span><i>+</i>
                            </div>
                        </div>
                        <div class="fact-title">Travel <br>Packages</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="12"
                                    data-speed="2000">0</span>K<i>+</i>
                            </div>
                        </div>
                        <div class="fact-title">Total <br>Travelers</div>
                    </div>
                </div>
                <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner clearfix">
                        <div class="fact-count">
                            <div class="count-box"><span class="count-text" data-stop="7"
                                    data-speed="2000">0</span>K<i>+</i>
                            </div>
                        </div>
                        <div class="fact-title">Positive <br>Review</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Team Section-->
<div class="team-section">
    <div class="auto-container">
        <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="subtitle">Membres de l’équipe</div>
            <h2><span>Nos Formidables membres de l’équipe</span></h2>
        </div>

        <div class="team-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="bg-grad-left"><img src="{{asset('frontend/assets/images/background/bg-gradient-24.png')}}" alt="" title="">
            </div>
            <div class="bg-grad-right"><img src="{{asset('frontend/assets/images/background/bg-gradient-25.png')}}" alt="" title="">
            </div>
            <div class="d-elem-1"><img src="{{asset('frontend/assets/images/elements/purple-4.png')}}" alt=""></div>
            <div class="row clearfix justify-content-center">
                <!--Block-->
                <div class="team-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resources/team/team-4.jpg')}}"
                                        alt="Team 4"></a>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Paul Harrison</a></h4>
                        <div class="designation">Founder & CEO</div>
                    </div>
                </div>
                <!--Block-->
                <div class="team-block alt col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resources/team/team-1.jpg')}}"
                                        alt="Team 1"></a>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Tyron Johnson</a></h4>
                        <div class="designation">Founder & CTO</div>
                    </div>
                </div>
                <!--Block-->
                <div class="team-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resources/team/team-3.jpg')}}"
                                        alt="Team 3"></a>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Richard Parker</a></h4>
                        <div class="designation">Finance Manager</div>
                    </div>
                </div>
                <!--Block-->
                <div class="team-block alt col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resources/team/team-2.jpg')}}"
                                        alt="Team 2"></a>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Tom Anderson</a></h4>
                        <div class="designation">Marketing Executive</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Testimonials Section-->
<div class="testimonials-section alt-bg">
    <div class="auto-container">
        <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="subtitle">Témoignages</div>
            <h2><span>Ce Que Disent Les Voyageurs </span></h2>
        </div>

        <div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="testimonial-carousel">

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">I can't thank the travel website enough for the seamless
                            planning of my dream
                            vacation to Italy. From the moment I inquired about Varenna to booking my flights
                            and accommodations,
                            their team was incredibly responsive and helpful. The detailed itineraries, insider
                            tips; made my trip
                            unforgettable.</div>
                        <div class="info">
                            <div class="image"><img src="assets/images/resources/thumbnails/testi-1.jpg"
                                    alt="Testimonial 1"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Patrick Pepe</div>
                            <div class="designation">UI Designer</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">As an avid adventure seeker, I rely on the travel website for
                            unique and
                            off-the-beaten-path experiences. Their expertly curated hiking tour in the USA was
                            everything I could
                            have hoped for and more. The scenic trails, knowledgeable guides, and attention to
                            safety made the
                            trip both thrilling and enjoyable.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-7.jpg')}}"
                                    alt="Testimonial 2"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Mike Anderson</div>
                            <div class="designation">Journalist</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">We had the most magical getaway to Greece, all thanks to the
                            travel website.
                            Their personalized assistance for the perfect island-hopping itinerary and
                            hand-picked luxury
                            accommodations exceeded our expectations. All activities made every every moment
                            unforgettable and
                            amazing.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-3.jpg')}}"
                                    alt="Testimonial 3"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Peter Parker</div>
                            <div class="designation">Photographer</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">Booking our dream vacation through the travel website was a
                            breeze! The
                            interface made it easy to compare various destinations and find the perfect
                            itinerary for our family.
                            From the flights to the accommodations, everything was seamless, and we received
                            personalized support
                            throughout.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-4.jpg')}}"
                                    alt="Testimonial 4"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Clint River</div>
                            <div class="designation">Audio Coordinator</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">I've been a frequent traveler for years, and this website has
                            become my go-to
                            resource for planning my adventures. The vast selection of destinations and the
                            detailed information
                            on attractions, hotels, and activities make it a one-stop-shop for all my travel
                            needs. The customer
                            service is top-notch.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-5.jpg')}}"
                                    alt="Testimonial 5"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Timothy Dark</div>
                            <div class="designation">Catalyst</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">As a solo traveler, safety is paramount, and the travel
                            website exceeded my
                            expectations. Their featured tours and excursions were carefully vetted, ensuring I
                            could embark on
                            thrilling experiences with peace of mind. Their blog posts also provided invaluable
                            travel tips and
                            destination insights.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-6.jpg')}}"
                                    alt="Testimonial 6"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Tim Robinson</div>
                            <div class="designation">Adventurist</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">Booking our group getaway through the travel website was a
                            breeze. The group
                            booking feature saved us time and effort, and the discounts we received were
                            fantastic. We had a
                            fantastic time exploring a new country together, and the website's recommended
                            activities catered to
                            everyone's interests.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-2.jpg')}}"
                                    alt="Testimonial 7"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Carlos Santana</div>
                            <div class="designation">Retailer</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">I recently used the travel website to plan a surprise
                            honeymoon for my wife,
                            and it was an absolute success! The honeymoon packages offered were romantic and
                            luxurious, and the
                            website's customer support team helped me customize the perfect trip. It was a
                            magical experience from
                            start to finish.</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-8.jpg')}}"
                                    alt="Testimonial 8"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">Sam Drake</div>
                            <div class="designation">Chef</div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="testi-block-one">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-left-quote"></span></div>
                        <div class="travilo-text">I stumbled upon this travel website while planning a
                            last-minute weekend
                            getaway, and I couldn't have been happier with my decision. The website's
                            last-minute deals and
                            exclusive offers saved me money without compromising on the quality of our stay. The
                            booking process
                            was plain smooth!</div>
                        <div class="info">
                            <div class="image"><img src="{{asset('frontend/assets/images/resources/thumbnails/testi-9.jpg')}}"
                                    alt="Testimonial 9"></div>
                            <div class="rating">
                                <div class="stars"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="name">David Hustler</div>
                            <div class="designation">Pyhsician</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!--Partners Section-->
<div class="partners-two">
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle">Des partenaires précieux</div>
            <h2>Nos Précieux Partenaires</h2>
        </div>
        <div class="carousel-box">
            <div class="partners-carousel">
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-1.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-2.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-3.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-4.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-5.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-1.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-2.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-3.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-4.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Block-->
                <div class="partner-block">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/partners/partner-5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection