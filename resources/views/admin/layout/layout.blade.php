<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    @include('admin.layout.head')
</head>

<body>
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif

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


</html>
