<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Preconnect to Google Fonts for faster loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Load Inter font from Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    {{--Load CSS and JS files with Vite--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body class="antialiased bg-slate-50">
<!--Navbar Area Start -->
@include('frontend.layouts.navbar')
<!--Navbar Area End -->

<!-- Main Content Start-->
<section>
    @yield('content')
</section>
<!-- Main Content End-->

<!--Footer Area Start -->
@include('frontend.layouts.footer')
<!--Footer Area End -->

</body>
</html>
