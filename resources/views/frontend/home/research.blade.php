<style>
    .select2-container {
        width: 250px !important;
    }

    .select2-selection {
        min-height: 53px !important;
    }

</style>
<div class="search-one">
    <div class="auto-container">
        <div class="tabs-box search-tabs">
            <ul class="tab-buttons clearfix">
                <li class="tab-btn active-btn" data-tab="#tab-1"><span>Hôtel</span></li>
                <li class="tab-btn" data-tab="#tab-2"><span>Tour</span></li>
                {{-- <li class="tab-btn" data-tab="#tab-3"><span>Activité</span></li> --}}
                {{-- <li class="tab-btn" data-tab="#tab-4"><span>Véhicule</span></li>--}}
                <li class="tab-btn" data-tab="#tab-5"><span>Vol</span></li>
            </ul>
            <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="form-box site-form">
                        <form method="GET" action="{{ route('hotel.search') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="form-group col-xl-8 col-lg-6 col-md-12 col-sm-12">
                                    <div class="field-label">Destination</div>
                                    <div class="field-inner">

                                        <input type="text" name="query" value="" placeholder="Recherche... Hotel, Destination, localité" required>
                                        <i class="alt-icon fa fa-map-marker-alt"></i>
                                    </div>
                                    <button type="submit" class="theme-btn f-btn"><span>Recherche <i class="fa-solid fa-search"></i></span></button>
                                </div>
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
                <!--Tab-->
                <div class="tab" id="tab-2">
                    <div class="form-box site-form">
                        <form method="get" action="{{ route('tour.search') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="form-group col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Destination</div>
                                    <div class="field-inner">
                                        <input type="text" name="query" value="" placeholder="Recherche," required>
                                        <i class="alt-icon fa fa-map-marker-alt"></i>
                                    </div>
                                    <button type="submit" class="theme-btn f-btn"><span>Recherche <i class="fa-solid fa-search"></i></span></button>
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
                            </div>

                        </form>

                    </div>
                </div>
                <!--Tab-->
                <div class="tab" id="tab-3">
                    <div class="form-box site-form">
                        <form method="get" action="{{ route('tour.search') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="form-group col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Destination</div>
                                    <div class="field-inner">
                                        <input type="text" name="query" value="" placeholder="Recherche," required>
                                        <i class="alt-icon fa fa-map-marker-alt"></i>
                                    </div>
                                    <button type="submit" class="theme-btn f-btn"><span>Recherche <i class="fa-solid fa-search"></i></span></button>
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
                            </div>

                        </form>

                    </div>
                </div>
                <!--Tab-->
                <div class="tab" id="tab-5">
                   @include('frontend.home.reservation-vol')
               
                    {{-- <div class="form-box site-form">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

