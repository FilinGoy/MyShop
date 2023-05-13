@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Торговая марка</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Главная</a></li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col card card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{ $brand->title }}</h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Идентификатор (ID):</dt>
                            <dd class="col-sm-9">{{ $brand->id }}</dd>
                            <dt class="col-sm-3">Наименование:</dt>
                            <dd class="col-sm-9">{{ $brand->title }}</dd>
                            <dt class="col-sm-3">Создан:</dt>
                            <dd class="col-sm-9">{{ $brand->created_at }}</dd>
                            <dt class="col-sm-3">Изменён:</dt>
                            <dd class="col-sm-9">{{ $brand->updated_at }}</dd>
                        </dl>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
