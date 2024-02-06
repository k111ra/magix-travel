@extends('layouts.layout')

@section('content')
   
<section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    <br>incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+12457836913 , +12457836913</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>example@info.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>6743 last street , Abcd, Xyz</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<div class="container">

<div class="gallary-header text-center">
    <h2>
        clients reviews
    </h2>
    <p>
        Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.
    </p>

</div><!--/.gallery-header-->

<div class="owl-carousel owl-theme" id="testemonial-carousel">

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        Ouattara Harouna
                    </a>
                </h3>
                <h4>Korhogo, Côte d'ivoire</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial2.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial2.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial2.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

    <div class="home1-testm item">
        <div class="home1-testm-single text-center">
            <div class="home1-testm-img">
                <img src="{{asset('frontend/assets/images/client/testimonial1.jpg')}}" alt="img"/>
            </div><!--/.home1-testm-img-->
            <div class="home1-testm-txt">
                <span class="icon section-icon">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                    Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <h3>
                    <a href="#">
                        kevin watson
                    </a>
                </h3>
                <h4>london, england</h4>
            </div><!--/.home1-testm-txt-->
        </div><!--/.home1-testm-single-->

    </div><!--/.item-->

</div><!--/.testemonial-carousel-->
</div><!--/.container-->
@endsection
