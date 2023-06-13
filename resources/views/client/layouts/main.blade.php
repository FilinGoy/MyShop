<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('/') }}">

    <title>Дом Вкуса</title>

    <link rel="shortcut icon" href="../storage/images/main/logo.png" type="image/x-icon">

    <link rel="stylesheet" media="all" href="../css/vendor/animate.css" />
    <link rel="stylesheet" media="all" href="../css/vendor/jquery.lavalamp.css" />

    <link rel="stylesheet" href="../css/fontawesome/all.min.css">
    <link media="all" rel="stylesheet" href="../css/bootstrap/bootstrap.css">

    <link media="all" rel="stylesheet" href="../css/template/style.css">

    <link media="all" rel="stylesheet" href="../css/normalize.css">
    <link media="all" rel="stylesheet" href="../css/app.css">
</head>

@yield('content')

<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../js/vendor/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="../js/vendor/jquery.lavalamp.js"></script>
<script src="../js/vendor/bootstrap.bundle.js"></script>
<script src="js/moment/moment-with-locales.min.js"></script>
<script src="js/inputmask/jquery.inputmask.min.js"></script>
<script src="../js/vendor/in-view.min.js"></script>
<script src="../js/vendor/wow.js"></script>
<script src="../js/vendor/tabzy.js"></script>
<script src="../js/vendor/isotope.pkgd.js"></script>

<script src="js/app.js"></script>

</html>
