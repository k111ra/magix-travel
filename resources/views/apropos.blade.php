<!doctype html>
<html class="no-js"  lang="en">
    
</body>
</html>
<head>
          @include('partial.head')
    </head>
    <body>	<!-- main-menu Start -->
		<header class="top-area">
	    @include('partial.header')
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

	
        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{asset('admin/assets/images/service/s1.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									amazing tour packages
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{asset('admin/assets/images/service/s2.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										book top class hotel
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="{{asset('admin/assets/images/service/s3.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										online flight booking
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->
<center><h1>A-propos de nous</h1></center>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, recusandae tempore ut quod provident reprehenderit sit quisquam rerum, fuga porro explicabo doloremque officiis repellat voluptatum, praesentium dolores enim excepturi necessitatibus.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, odit repellat? Cupiditate laudantium voluptatem ipsum perspiciatis veniam dolorum mollitia omnis saepe tenetur quos architecto cumque amet, non sunt ipsa sapiente.</p>


<hr>
<hr>


	<!-- footer-copyright start -->
    <footer  class="footer-copyright">
            @include('partial.footer')

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

        @include('partial.script')
</body>

</html>