<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        @include('includes.header')
        <!--progress sec start-->
        @yield('content')
        <!--progress sec end-->
    </div>

    @include('includes.footer')
    @yield('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>
</html>
