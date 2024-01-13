<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
	    @include('admin.layout.head')
	</head>

	<body>

		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
	    	@include('admin.layout.header')
		</header><!-- /.top-area-->
		<!-- main-menu End -->
        @yield('content')

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
            @include('admin.layout.footer')
		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

        @include('admin.layout.script')
	</body>

</html>
