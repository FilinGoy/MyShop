@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
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
                <div class="col">
                    <div class="card card-info">
                        <div class="card-header"></div>
                        <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <h4>Новый пользователь</h4>
                                <div class="form-group">
                                    <label for="login" class="col-form-label">Логин<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="login" name="login"
                                        value="{{ old('login') }}" placeholder="Логин" minlength="4" required>
                                    @if ($errors->has('login'))
                                        <p class="text-danger">{{ $errors->first('login') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email адрес<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="example@mail.ru">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="col-form-label">Имя</label>
                                    <input type="text" class="form-control col" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}" placeholder="Иван">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-form-label">Фамилия</label>
                                    <input type="text" class="form-control col" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}" placeholder="Иванов">
                                </div>
                                <div class="form-group">
                                    <label for="number" class="col-form-label">Номер</label>
                                    <input type="text" class="form-control col" id="number" name="number"
                                        data-inputmask="&quot;mask&quot;: &quot;+7 (999) 999-99-99&quot;" data-mask=""
                                        inputmode="text" value="{{ old('number') }}" placeholder="+7 (999) 999-99-99">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Адрес</label>
                                    <input type="text" class="form-control col" id="address" name="address"
                                        value="{{ old('address') }}" placeholder="г.Москва, Благвощенская, д.3, кв.5">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Пароль<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="password" name="password"
                                        value="{{ old('password') }}" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control col" id="password_confirmation"
                                        name="password_confirmation" placeholder="Повторите пароль">
                                    @if ($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Создать</button>
                                <a type="button" href="{{ route('user.index') }}"
                                    class="btn btn-outline-danger float-right">Отменить</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
