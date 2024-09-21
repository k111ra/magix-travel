<script src="{{asset('frontend/assets/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/isotope.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/appear.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/lib/date-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/vol.js')}}"></script>

 <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <!-- Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
	$(document).ready(function() {
        $('#destination-select-arrive').select2({
            placeholder: 'Vers',
            allowClear: true,
            width: 'resolve'
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#destination-select-depart').select2({
            placeholder: 'De',
            allowClear: true,
            width: 'resolve'
        });
    });
     $(document).ready(function() {
        $('#destination-select-aller').select2({
            placeholder: 'De',
            allowClear: true,
            width: 'resolve'
        });
    });
     $(document).ready(function() {
        $('#destination-select-retour').select2({
            placeholder: 'Vers',
            allowClear: true,
            width: 'resolve'
        });
    });
</script>

