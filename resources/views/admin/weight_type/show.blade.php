@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Единица измерения веса</h1>
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
                        <h3 class="card-title">{{ $type->title }}</h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Идентификатор (ID)</dt>
                            <dd>{{ $type->id }}</dd>
                            <dt>Наименование</dt>
                            <dd>{{ $type->title }}</dd>
                            <dt>Создан</dt>
                            <dd>{{ $type->created_at }}</dd>
                            <dt>Изменён</dt>
                            <dd>{{ $type->updated_at }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
