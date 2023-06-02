@extends('client.layouts.main')

@section('content')

    <body class="h-100">
        <div class="preloader flex-column justify-content-center align-items-center" id="loadingModal">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden"></span>
            </div>
            <div class="text-danger text-bold">
                Загрузка
            </div>
        </div>

        <div id="app" class="d-flex flex-column min-vh-100">

        </div>
        <div class="btn btn-outline-danger btn-floating" id="btn-back-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </body>
@endsection
