<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Servicio SemiLima')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('images/favicon.png') }} " rel="icon">
    <link href="{{ asset('images/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('source/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('source/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href="{{ asset('source/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet">
    <link href="{{ asset('source/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }} " rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles') {{-- Permite agregar CSS extra desde cada vista --}}
</head>
<body class="index-page">

    @include('partials.header') {{-- Menú de navegación --}}

    <main>
        @yield('content') {{-- Contenido de cada página --}}
    </main>

    @include('partials.footer') {{-- Pie de página --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('source/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('source/vendor/php-email-form/validate.js') }} "></script>
    <script src="{{ asset('source/vendor/aos/aos.js') }} "></script>
    <script src="{{ asset('source/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('source/vendor/purecounter/purecounter_vanilla.js') }} "></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }} "></script>
    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('scripts') {{-- Permite agregar JS extra desde cada vista --}}
</body>
</html>
