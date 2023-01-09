<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd.layouts.css')
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #65FFDC;">
        @include('FrontEnd.layouts.nav')
    </nav>
    @yield('content')
    @include('FrontEnd.layouts.js')
    @yield('js')
    @include('FrontEnd.layouts.footer')
    @yield('footer')
</body>

</html>