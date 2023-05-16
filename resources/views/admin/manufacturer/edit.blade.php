@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать страну</h1>
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
                        <form class="form-horizontal" action="{{ route('country.update', $country->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>{{ $country->name.' ('.$country->abbreviation.')' }}</h4>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Наименование<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="name" name="name" value="{{ old('name') ?? $country->name }}" placeholder="Россия">
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="abbreviation" class="col-form-label">Аббревиатура (3 буквы)<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="abbreviation" name="abbreviation"
                                    value="{{ old('abbreviation') ?? $country->abbreviation }}" placeholder="RUS" maxlength="3">
                                    @if($errors->has('abbreviation'))
                                        <p class="text-danger">{{$errors->first('abbreviation')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('country.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
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
                                <dd>{{ $country->id }}</dd>
                                <dt>Наименование</dt>
                                <dd>{{ $country->name}}</dd>
                                <dt>Аббревиатура</dt>
                                <dd>{{ $country->abbreviation }}</dd>
                                <dt>Создан</dt>
                                <dd>{{ $country->created_at ?? '-'  }}</dd>
                                <dt>Изменён</dt>
                                <dd>{{ $country->updated_at ?? '-'  }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
