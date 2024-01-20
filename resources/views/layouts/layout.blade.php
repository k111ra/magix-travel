<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
	    @include('frontend.layout.head')
	</head>

	<body>

		<!-- main-menu Start -->
		<header class="top-area">
	    	@include('frontend.layout.header')
		</header><!-- /.top-area-->
		<!-- main-menu End -->
		
        @yield('content')
			
		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
            @include('frontend.layout.footer')
		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->
        @include('frontend.layout.script')
	</body>

</html>
