@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Производитель</h1>
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
                        <h3 class="card-title">{{ $manufacturer->name . ' (' . $manufacturer->country_name . ')' }}</h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Идентификатор (ID)</dt>
                            <dd>{{ $manufacturer->id }}</dd>
                            <dt>Наименование</dt>
                            <dd>{{ $manufacturer->name }}</dd>
                            <dt>Страна</dt>
                            <dd>{{ $manufacturer->country_name }}</dd>
                            <dt>Создан</dt>
                            <dd>{{ $manufacturer->created_at ?? '-' }}</dd>
                            <dt>Изменён</dt>
                            <dd>{{ $manufacturer->updated_at ?? '-' }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a type="button" href="{{ route('manufacturer.index') }}"
                            class="btn btn-outline-danger float-right">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
