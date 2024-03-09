{{-- <!doctype html>
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

</html> --}}


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jufailitech.com/envatoitems/travilo/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 12:44:53 GMT -->
<head>
	@include('frontend.layout.head')
</head>

<body>
	<div class="page-wrapper">
		<!-- Preloader -->
		<div class="loader-wrap">
			<div class="preloader">
				<div class="preloader-close">x</div>
				<div id="handle-preloader" class="handle-preloader">
					<div class="animation-preloader">
						<div class="txt-loading">
							<span data-text-preloader="M" class="letters-loading">M</span>
							<span data-text-preloader="A" class="letters-loading">A</span>
							<span data-text-preloader="G" class="letters-loading">G</span>
							<span data-text-preloader="I" class="letters-loading">I</span>
							<span data-text-preloader="X" class="letters-loading">X</span>
							
						</div>
						<div class="txt-loading">
							<span data-text-preloader="T" class="letters-loading">T</span>
							<span data-text-preloader="R" class="letters-loading">R</span>
							<span data-text-preloader="A" class="letters-loading">A</span>
							<span data-text-preloader="V" class="letters-loading">V</span>
							<span data-text-preloader="E" class="letters-loading">E</span>
							<span data-text-preloader="L" class="letters-loading">L</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Preloader End -->

		<!-- Main Header-->
		<header class="main-header header-style-two">
			@include('frontend.layout.header')
		</header>
		<!--End Main Header -->


		<!--Menu Backdrop-->
		<div class="menu-backdrop"></div>

		<!-- Hidden Navigation Bar -->
		<div class="hidden-bar">
			<!-- Hidden Bar Wrapper -->
			<div class="hidden-bar-wrapper">
				<div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation"
							viewBox="0 0 16 14">
							<path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
						</svg></span></div>
				<div class="nav-logo-box">
					<!-- logo will be copied here ! -->
				</div>
				<!-- .Side-menu -->
				<nav class="side-menu">
					<!-- main-menu will be copied here! -->
				</nav><!-- .side-menu -->

				<div class="links-box clearfix">
					<div class="clearfix">
						<div class="link"><a href="contact.html" class="theme-btn btn-style-one"><span>Login /
									Signup</span></a></div>
					</div>
				</div>

			</div><!-- / Hidden Bar Wrapper -->
		</div>
		<!-- / Hidden Bar -->

		@yield('content')
		<!--Main Footer-->
		<footer class="main-footer style-two">
			@include('frontend.layout.footer')
		</footer>

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html">
		<span class="icon"><img src="assets/images/icons/arrow-up.svg" alt="" title="Go To Top"></span>
	</div>

	@include('frontend.layout.script')
</body>


<!-- Mirrored from jufailitech.com/envatoitems/travilo/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 12:45:48 GMT -->
</html>