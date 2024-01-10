<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('admin/assets/logo/logo.png') }}" alt="package-place" width="100px">
                        <!-- tour<span>Nest</span> -->
                    </a>
                </div><!-- /.logo-->
            </div><!-- /.col-->
            <div class="col-sm-10">
                <div class="main-menu">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button><!-- / button-->
                    </div><!-- /.navbar-header-->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="smooth-me nu"><a href="/">Accueil</a></li>
                            {{-- <li class="smooth-me nu"><a href="#gallery">Destination</a></li> --}}
                            {{-- <li class="smooth-me nu"><a href="#pack">Packages </a></li> --}}
                            {{-- <li class="smooth-me nu"><a href="#spo">Special Offers</a></li> --}}
                            <li class="smooth-me nu"><a href="{{route('apropos')}}">A-propos </a></li>
                            <li class="smooth-me nu"><a href="{{route('contacts')}}">Contacts</a></li>
                            {{-- <li class="smooth-menu"><a href="#subs">subscription</a></li> --}}
                            <li class="smooth-me nu"><a href="/">Service</a></li>
                            {{-- <li>
                                <button class="book-btn">book now
                                </button>
                            </li><!--/.project-btn--> --}}
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.main-menu-->
            </div><!-- /.col-->
        </div><!-- /.row -->
        <div class="home-border"></div><!-- /.home-border-->
    </div><!-- /.container-->
</div><!-- /.header-area -->
@yield('content')
