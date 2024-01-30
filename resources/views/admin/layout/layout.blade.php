
<!DOCTYPE html>
<html lang="en">

<head>
    	@include('admin.layout.head')
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('admin/img/logo.png')}}" data-retina="true" alt="" width="150" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                @include('admin.layout.sidebar')
            </ul>

            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
                </li>
            </ul>
        
        <ul class="navbar-nav ml-auto">
            @include('admin.layout.header')
        </ul>

      </div>
  </nav>

  <!-- /Navigation-->
     <div class="content-wrapper">
         @yield('content')
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
        @include('admin.layout.footer')
    </footer>

@include('admin.layout.script')
</body>
</html>
