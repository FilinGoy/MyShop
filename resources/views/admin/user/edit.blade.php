@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Главная</a></li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Данные для изменения</h3>
                        </div>
                        <form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>Новый пользователь</h4>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">E-Mail адрес<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="email" name="email" value="{{ old('email') ?? $user->email }}" placeholder="example@mail.ru">
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="login" class="col-form-label">Логин</label>
                                    <input type="text" class="form-control col" id="login" name="login" value="{{ old('login') ?? $user->login }}" placeholder="Логин" minlength="4" required>
                                    @if($errors->has('login'))
                                        <p class="text-danger">{{$errors->first('login')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="col-form-label">Имя</label>
                                    <input type="text" class="form-control col" id="first_name" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" placeholder="Иван">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-form-label">Фамилия</label>
                                    <input type="text" class="form-control col" id="last_name" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" placeholder="Иванов">
                                </div>
                                <div class="form-group">
                                    <label for="number" class="col-form-label">Номер</label>
                                    <input type="text" class="form-control col" id="number" name="number" value="{{ old('number') ?? $user->number }}" placeholder="+7 (999) 999-99-99">
                                </div>
                                <div class="form-group">
                                    <label for="adress" class="col-form-label">Адрес</label>
                                    <input type="text" class="form-control col" id="adress" name="adress" value="{{ old('adress') ?? $user->adress }}" placeholder="г.Москва, Благвощенская, д.3, кв.5">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Пароль<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="password" name="password" value="{{ $user->password ?? old('password') }}" placeholder="Пароль">
                                    @if($errors->has('password'))
                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('user.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Текущие данные</h3>
                        </div>
                        <div class="card-body">
                            <dl>
                                <dt>Идентификатор (ID)</dt>
                                <dd>{{ $user->id }}</dd>
                                <dt>E-Mail</dt>
                                <dd>{{ $user->email}}</dd>
                                <dt>Имя</dt>
                                <dd>{{ $user->first_name ?? '-'  }}</dd>
                                <dt>Фамилия</dt>
                                <dd>{{ $user->last_name ?? '-'  }}</dd>
                                <dt>Номер</dt>
                                <dd>{{ $user->number ?? '-'  }}</dd>
                                <dt>Адрес</dt>
                                <dd>{{ $user->adress ?? '-'  }}</dd>
                                <dt>Создан</dt>
                                <dd>{{ $user->created_at ?? '-'  }}</dd>
                                <dt>Изменён</dt>
                                <dd>{{ $user->updated_at ?? '-'  }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
