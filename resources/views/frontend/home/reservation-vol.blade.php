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
        @include('frontend.home.vol-simple')

        @include('frontend.home.vol-aller-retour')

    </div>

