<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Arts of Laser</title>
</head>
<body>

@include('header')

<!-- Основний контент сторінки -->
<div class="main_content">
    @yield('content')
</div>

@include('footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
