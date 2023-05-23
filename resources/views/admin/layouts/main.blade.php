<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('/') }}">
    <title>Панель управления</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Select2 style -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/select2/css/select2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/dropzone/min/dropzone.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    @yield('head')
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
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                {{--                 <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/AdminLTE/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/AdminLTE/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/AdminLTE/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin') }}" class="brand-link">
                <img src="{{ asset('storage/images/main/logo.png') }}" alt="Logo"
                    class="brand-image bg-secondary rounded elevation-3">
                <span class="brand-text font-weight-light">CapyProducts</span>
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
                        <li class="nav-header">Основные разделы</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
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
    <script src="assets/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="assets/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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

            bsCustomFileInput.init();
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>

    @yield('script')
</body>

</html>