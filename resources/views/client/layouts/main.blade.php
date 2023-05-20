<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <base href="{{ asset('/') }}">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link media="all" rel="stylesheet" href="../css/bootstrap.min.css">
        <link media="all" rel="stylesheet" href="../css/style.css">
    </head>

    @yield('content')

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="js/app.js"></script>
</html>
