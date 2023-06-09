<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('/') }}">
    <title>Панель управления</title>

    <link rel="shortcut icon" href="../storage/images/main/logo.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Select2 style -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/select2/css/select2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/summernote/summernote-bs4.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="assets/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/dropzone/min/dropzone.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/AdminLTE/dist/css/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden"></span>
            </div>
            <div class="text-danger text-bold">
                Загрузка панели
            </div>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light flex">
            <!-- Left navbar links -->
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin') }}" class="brand-link">
                <img src="{{ asset('storage/images/main/logo.png') }}" alt="Logo"
                    class="brand-image rounded elevation-3">
                <span class="brand-text font-weight-light">Дом Вкуса</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    {{--                     <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>
                                    В магазин
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Основные разделы</li>
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>
                                    Заказы
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-barcode"></i>
                                <p>
                                    Товары
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p> Категории </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Пользователи
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Разное</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Дополнительные разделы
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: node;">
                                <li class="nav-item">
                                    <a href="{{ route('brand.index') }}" class="nav-link">
                                        <i class="far fa-copyright nav-icon"></i>
                                        <p>Торговые марки</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('tag.index') }}" class="nav-link">
                                        <i class="fas fa-tag nav-icon"></i>
                                        <p>Тэги</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('country.index') }}" class="nav-link">
                                        <i class="fas fa-globe nav-icon"></i>
                                        <p>Страны</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manufacturer.index') }}" class="nav-link">
                                        <i class="fas fa-industry nav-icon"></i>
                                        <p>Производители</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Виды данных <br> (по умолчанию)
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: node;">
                                <li class="nav-item">
                                    <a href="{{ route('position.index') }}" class="nav-link">
                                        <i class="fas fa-user-shield nav-icon"></i>
                                        <p>Привелегии</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('status.index') }}" class="nav-link">
                                        <i class="fas fa-info-circle nav-icon"></i>
                                        <p>Виды статуса заказа</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('packaging.index') }}" class="nav-link">
                                        <i class="fas fa-box nav-icon"></i>
                                        <p>Виды упаковок</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('payment.index') }}" class="nav-link">
                                        <i class="fas fa-credit-card nav-icon"></i>
                                        <p>Виды оплаты</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('time.index') }}" class="nav-link">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Единицы измерения времени</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('weight.index') }}" class="nav-link">
                                        <i class="fas fa-balance-scale nav-icon"></i>
                                        <p>Единицы измерения веса</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">Отладка</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Отладочные данные
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: node;">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#modal-xl">
                                        <i class="fas fa-terminal nav-icon"></i>
                                        <p>Показать ошибки</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl h-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ошибки</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach ($errors->getMessages() as $key => $messages)
                            <b>{{ $key }}:</b><br>
                            @foreach ($messages as $text)
                                <pre>{{ $text }}</pre>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright © 2014-{{ now()->year }}</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar-->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="assets/AdminLTE/plugins/moment/moment-with-locales.min.js"></script>
    <script src="assets/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Summernote -->
    <script src="assets/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- dropzonejs -->
    <script src="assets/AdminLTE/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="assets/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


    <!-- AdminLTE App -->
    <script src="assets/AdminLTE/dist/js/adminlte.js"></script>


    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Input Elements
            $('[data-mask]').inputmask()

            //Switch Elements
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            // Summernote
            $('#summernote').summernote()

            bsCustomFileInput.init();
        })
    </script>
</body>

</html>
