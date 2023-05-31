<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <base href="{{ asset('/') }}">

        <title>Дом Вкуса</title>

        <link rel="stylesheet" href="../css/fontawesome/all.min.css">
        <link media="all" rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="shortcut icon" href="../storage/images/main/logo.png" type="image/x-icon">

        <link media="all" rel="stylesheet" href="../css/template/style.css">

        <link media="all" rel="stylesheet" href="../css/app.css">
    </head>

    @yield('content')

    <script defer src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script defer src="js/script.js"></script>
    <script defer src="js/app.js"></script>
</html>
