<div class="header-top">
    <div class="auto-container">
        <div class="inner clearfix">
            <div class="top-left clearfix">
                <ul class="info clearfix">
                    <li><i class="icon fa fa-envelope"></i> <a href="mailto:info@magixtravel.com">info@magixtravel.com</a>
                    </li>
                    <li><i class="icon fa fa-map-marker-alt"></i> <a href="#">Trechville, Abidjan, Côte d'Ivoire</a>
                    </li>
                </ul>
            </div>
            <div class="top-right clearfix">
                {{-- <div class="login"><a href="#">Login / Signup</a></div> --}}
                <div class="login">
                    <a href="{{ route('login') }}">Login</a>
                </div>

                <div class="lang-box">
                    <div class="lang-btn clearfix"><span class="txt">FR</span><span
                            class="icon far fa-angle-down"></span>
                    </div>
                    <ul class="lang-list">
                        <li><a href="#">Tur</a></li>
                        <li><a href="#">Esp</a></li>
                        <li><a href="#">Rus</a></li>
                        <li><a href="#">Hin</a></li>
                    </ul>
                </div>
                <div class="social">
                    <ul class="social-links clearfix">
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Upper -->
<div class="header-upper">
    <div class="auto-container">
        <!-- Main Box -->
        <div class="main-box clearfix">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="{{route('home')}}" title="Travilo">
                        {{-- <span style="font-weight: 900; font-size:50px;">
                            Magix <span style="color: green">Travel</span>
                        </span> --}}
                        <img src="{{ asset('frontend/assets/images/Logo.png') }}" width="200px" alt=""
                            title="Travilo">
                    </a>
                </div>
            </div>

            <div class="outer clearfix">
                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{route('home')}}">Home</a></li>
                                <li class="dropdown"><a href="tour-list.html">Tours</a>
                                    <ul>
                                        <li><a href="tour-list.html">Tours List</a></li>
                                        {{-- <li><a href="tour-packages.html">Tour Packages</a></li>
                                        <li><a href="tour-single.html">Tour Details</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                        <li><a href="activity-single.html">Activity Details</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="destinations.html">Destination</a>
                                    <ul>
                                        <li><a href="{{route('destination')}}">Les Destinations</a></li>
                                        {{-- <li><a href="destination-single.html">Destination Single</a></li>
                                        <li><a href="hotels.html">Hotels</a></li>
                                        <li><a href="hotel-single.html">Hotel Details</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="{{route('hotels')}}">Hotels</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown"><a href="blog.html">News</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-single.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                @auth
                                    <!-- Afficher le profil de l'utilisateur -->
                                    <li><a href="{{ route('dashboard') }}" title="Tableau de bord"><i
                                                class="icon fa-solid fa-home" style="color: orangered"></i></a></li>
                                @endauth
                                {{-- <li><a href="{{route('login')}}">Connexion</a></li> --}}
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                </div>

                <div class="links-box clearfix">
                    <div class="link call-to">
                        <a href="tel:+96899999000"><i class="icon fa-solid fa-phone"></i> Call Us <span
                                class="nmbr">+96899999000</span></a>
                    </div>
                </div>

                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon"><img
                                src="{{ asset('frontend/assets/images/icons/menu-icon.svg') }}"
                                alt=""></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Upper -->
