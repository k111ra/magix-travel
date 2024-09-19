<style>
    .select2-container {
        width: 75% !important;
    }

    .select2-selection {
        min-height: 53px !important;
    }

</style>
<div class="search-one">
    <div class="auto-container">
        <div class="tabs-box search-tabs">
            <ul class="tab-buttons clearfix">
                <li class="tab-btn active-btn" data-tab="#tab-1"><span>Hotel</span></li>
                <li class="tab-btn" data-tab="#tab-2"><span>Tour</span></li>
                <li class="tab-btn" data-tab="#tab-3"><span>Activité</span></li>
                {{-- <li class="tab-btn" data-tab="#tab-4"><span>Véhicule</span></li>--}}
                <li class="tab-btn" data-tab="#tab-5"><span>Vol</span></li>
                {{-- <li class="tab-btn" data-tab="#tab-6"><span>Vol (Aller-retour)</span></li> --}}
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
                    <div class="form-box site-form">
                        <div class="d-flex ">
                            <div class="form-check col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="oneWayBtn">
                                <label class="field-label" for="roundTripBtn">
                                    Aller simple
                                </label>
                            </div>
                            <div class="form-check col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="roundTripBtn" checked>
                                <label class="field-label" for="roundTripBtn">
                                    Aller-retour
                                </label>
                            </div>
                        </div>
                        <form method="post" action="{{route('tour.search')}}" id="oneWayForm" style="display: none;">
                            <div class="row clearfix">

                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Départ</div>
                                    <div class="field-inner">
                                        <select id="destination-select-depart" name="destination" class="">
                                            <option></option>
                                            @foreach ($pays as $data)
                                            <option value="{{ $data->id }}">{{ $data->name . ', ' . $data->countryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Destination</div>
                                    <div class="field-inner">
                                        <select id="destination-select-arrive" name="destination_final" class="">
                                            <option></option>
                                            @foreach ($pays as $data)
                                            <option value="{{ $data->id }}">{{ $data->name . ', ' . $data->countryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Destination</div>
                                    <div class="field-inner">
                                       <select id="destination-select-arrive" name="destination_final" class="">
                                            <option></option>
                                            @foreach ($pays as $data)
                                            <option value="{{ $data->id }}">{{ $data->name . ', ' . $data->countryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Date de départ</div>
                                    <div class="field-inner">
                                        <input class="datepicker" type="text" name="date_depart" value="" placeholder="Check out" required>
                                        <i class="alt-icon fa fa-calendar-alt"></i>
                                    </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Visiteur</div>
                                    <div class="field-inner">
                                        <input type="text" id="passenger-input" name="field-name" value="1 adulte" placeholder="Guests" readonly required>
                                        <i class="alt-icon fa fa-user"></i>
                                
                                        <!-- Fenêtre modale pour la sélection des passagers -->
                                        <div id="passenger-modal" class="passenger-modal" style="display: none;">
                                            <div class="d-block">
                                                <div>
                                                    <label>Adultes</label>
                                                    <button  class="minus" data-type="adulte">-</button>
                                                    <span id="adulte-count">1</span>
                                                    <button  class="plus" data-type="adulte">+</button>
                                                </div>
                                                <div>
                                                    <label>Enfants (2-12 ans)</label><span>
                                                    <button  class="minus btn btn-primary" data-type="enfant">-</button>
                                                    <span id="enfant-count">0</span>
                                                    <button  class="plus btn btn-primary" data-type="enfant">+</button></span>
                                                </div>
                                                <div>
                                                    <label>Bébés (0-2 ans)</label>
                                                    <button type="button" class="minus" data-type="bebe">-</button>
                                                    <span id="bebe-count">0</span>
                                                    <button type="button" class="plus" data-type="bebe">+</button>
                                                </div>
                                                <button id="close-passenger-modal" >Confirmer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="theme-btn f-btn"><span>Recherche <i class="fa-solid fa-search"></i></span></button>
                        </form>

                        {{-- </div>
                </div> 
                <!--Tab-->
                 <div class="tab" id="tab-6">
                    <div class="form-box site-form"> --}}
                        <form method="post" action="" id="roundTripForm" style="display: none;">
                            <div class="row clearfix">
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Départ</div>
                                    <div class="field-inner">
                                        <select name="field-name" class="custom-select">
                                            <option>Destination de départ</option>
                                            <option>Enchanting Europe, A Journey through Time and Culture
                                            </option>
                                            <option>Unveiling the Idyllic Paradise of Southeast Asia
                                            </option>
                                            <option>Exploring Nature's Best in the American National Parks
                                            </option>
                                            <option>An African Expedition into the Heart of the Savannah
                                            </option>
                                            <option>A Fascinating Expedition to Egypt and Jordan</option>
                                        </select>
                                        <i class="alt-icon fa fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Arrivée</div>
                                    <div class="field-inner">
                                        <select name="field-name" class="custom-select">
                                            <option>Destination d'arrivée</option>
                                            <option>Enchanting Europe, A Journey through Time and Culture
                                            </option>
                                            <option>Unveiling the Idyllic Paradise of Southeast Asia
                                            </option>
                                            <option>Exploring Nature's Best in the American National Parks
                                            </option>
                                            <option>An African Expedition into the Heart of the Savannah
                                            </option>
                                            <option>A Fascinating Expedition to Egypt and Jordan</option>
                                        </select>
                                        <i class="alt-icon fa fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Date de départ</div>
                                    <div class="field-inner">
                                        <input class="datepicker" type="text" name="date_depart" value="" placeholder="Check out" required>
                                        <i class="alt-icon fa fa-calendar-alt"></i>
                                    </div>
                                </div>
                                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Visiteur</div>
                                    <div class="field-inner">
                                        <input type="text" name="field-name" value="" placeholder="Guests" required>
                                        <i class="alt-icon fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="theme-btn f-btn"><span>Recherche <i class="fa-solid fa-search"></i></span></button>
                        </form>

                    </div>
                </div>
                <!--Tab-->
            </div>
        </div>
    </div>
</div>

