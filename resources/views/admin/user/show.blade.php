@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
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
                        <h3 class="card-title">{{ $user->email . ' (' . $user->first_name . ' ' . $user->last_name . ')' }}</h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Идентификатор (ID)</dt>
                            <dd>{{ $user->id }}</dd>
                            <dt>Email адрес</dt>
                            <dd>{{ $user->email }}</dd>
                            <dt>Логин</dt>
                            <dd>{{ $user->login }}</dd>
                            <dt>Имя</dt>
                            <dd>{{ $user->first_name ?? '-' }}</dd>
                            <dt>Фамилия</dt>
                            <dd>{{ $user->last_name ?? '-' }}</dd>
                            <dt>Адрес</dt>
                            <dd>{{ $user->address ?? '-' }}</dd>
                            <dt>Номер</dt>
                            <dd>{{ $user->number ?? '-' }}</dd>
                            <dt>Создан</dt>
                            <dd>{{ $user->created_at }}</dd>
                            <dt>Изменён</dt>
                            <dd>{{ $user->updated_at }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a type="button" href="{{ route('user.index') }}"
                            class="btn btn-outline-danger float-right">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
