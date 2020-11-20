<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Header -->
    @include('partials.header')
    <!-- Header-End -->
</head>
<body class="@yield('body')">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Navbar-End -->

    @yield('content')

    <!-- Footer -->
    @include('partials.footer')
    <!-- Footer-End -->-

    <!-- JavaScript -->
        @yield('scripts')
    <!-- JavaScript-End -->
</body>
</html>
