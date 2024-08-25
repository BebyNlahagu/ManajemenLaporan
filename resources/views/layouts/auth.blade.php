<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}">
    <link rel="icon" href="{{ asset('auth/img/L.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        @yield('auth')
    </div>
</body>

</html>
