
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
        @include('admin.layout.head')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
            @include('admin.layout.header')
      </nav>
      <div class="main-sidebar sidebar-style-2">
        @include('admin.layout.sidebar')
      </div>
      <!-- Main Content -->
      <div class="main-content">
            @yield('content')
      </div>
      <footer class="main-footer">
            @include('admin.layout.footer')
      </footer>
    </div>
  </div>
            @include('admin.layout.script')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>


{{-- 
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
</html> --}}
