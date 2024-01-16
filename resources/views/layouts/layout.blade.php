<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
	    @include('frontend.layout.head')
	</head>

	<body>

		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
	    	@include('frontend.layout.header')
		</header><!-- /.top-area-->
		<!-- main-menu End -->
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											explore now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">

							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->
        @yield('content')
			
		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
            @include('frontend.layout.footer')
		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

        @include('frontend.layout.script')
	</body>

</html>
