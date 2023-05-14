@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Статус</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Главная</a></li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col card card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{ $status->title }}</h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Идентификатор (ID):</dt>
                            <dd class="col-sm-9">{{ $status->id }}</dd>
                            <dt class="col-sm-3">Наименование:</dt>
                            <dd class="col-sm-9">{{ $status->title }}</dd>
                            <dt class="col-sm-3">Создан:</dt>
                            <dd class="col-sm-9">{{ $status->created_at }}</dd>
                            <dt class="col-sm-3">Изменён:</dt>
                            <dd class="col-sm-9">{{ $status->updated_at }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
