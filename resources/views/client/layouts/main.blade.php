<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <base href="{{ asset('/') }}">

        <title>CapyProducts</title>

        <link rel="icon" href="storage/images/main/iconSite.png">

        <link rel="stylesheet" media="all" href="../css/vendor/animate.css" />
        <link rel="stylesheet" media="all" href="../css/vendor/font-awesome.css" />
        <link rel="stylesheet" media="all" href="../css/vendor/linear-icons.css" />
        <link rel="stylesheet" media="all" href="../css/vendor/owl.carousel.css" />
        <link rel="stylesheet" media="all" href="../css/vendor/jquery.lavalamp.css" />

        <link media="all" rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/fontawesome/all.min.css">

        <link media="all" rel="stylesheet" href="../css/template/style.css">

        <link media="all" rel="stylesheet" href="../css/app.css">
    </head>

    @yield('content')

    <script defer src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script defer src="js/app.js"></script>
</html>
