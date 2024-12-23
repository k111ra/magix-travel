  <form method="post" action="{{route('step1.reservation.aller.retour.store')}}" id="roundTripForm" style="display: none;">
            @csrf
            {{-- <input class="" type="hidden" name="type_reservations_id"  value="{{ $type->id ?? '' }}" placeholder="" required> --}}
            <div class="row clearfix">
                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Départ</div>
                    <div class="field-inner">
                        <select id="destination-select-aller" name="destination_depart" class="">
                            <option></option>
                            @foreach ($pays as $data)
                            <option value="{{ $data->name . ', ' . $data->countryName }}">{{ $data->name . ', ' . $data->countryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Destination</div>
                    <div class="field-inner">
                        <select id="destination-select-retour" name="destination_final" class="">
                            <option></option>
                            @foreach ($pays as $data)
                            <option value="{{ $data->name . ', ' . $data->countryName }}">{{ $data->name . ', ' . $data->countryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group col-xl-1 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Départ</div>
                    <div class="field-inner">
                        <input class="datepicker" type="text" name="date_depart" value="" placeholder="">
                        <i class="alt-icon fa fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="form-group col-xl-1 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Retour</div>
                    <div class="field-inner">
                        <input class="datepicker" type="text" name="date_retour" value="" placeholder="">
                        <i class="alt-icon fa fa-calendar-alt"></i>
                    </div>
                </div>

                <div class="form-group col-xl-1 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Enfants</div>
                    <div class="field-inner">
                        <input class="" type="number" name="nombre_enfant" value="" placeholder="" min="0">
                        <i class="alt-icon fa fa-user"></i>
                    </div>
                </div>
                <div class="form-group col-xl-1 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Bébé(s)</div>
                    <div class="field-inner">
                        <input class="" type="number" name="nombre_bebe" value="" min="0" placeholder="">
                        <i class="alt-icon fa fa-user"></i>
                    </div>
                </div>
                <div class="form-group col-xl-1 col-lg-6 col-md-6 col-sm-12">
                    <div class="field-label">Adulte(s)</div>
                    <div class="field-inner">
                        <input class="" type="number" name="nombre_adultes" min="0" value="" placeholder="">
                        <i class="alt-icon fa fa-user"></i>
                    </div>
                </div>
            </div>
            <button type="submit" class="theme-btn f-btn"><span>Reservation</span></button>
        </form>