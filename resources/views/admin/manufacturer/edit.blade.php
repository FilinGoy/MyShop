@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать производителя</h1>
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
                        <form class="form-horizontal" action="{{ route('manufacturer.update', $manufacturer->id) }}"
                            method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>{{ $manufacturer->name . ' (' . $manufacturer->country_name . ')' }}
                                </h4>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Наименование<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="name" name="name"
                                        value="{{ old('name') ?? $manufacturer->name }}" placeholder='ООО "Дом Вкуса"'>
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-form-label">Страна<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control select2" style="width: 100%;" name="country" id="country"
                                        required>
                                        <option selected value="" disabled hidden>Не выбрано</option>
                                        {{ $tempCountry = old('country') ?? $manufacturer->country_id }}
                                        @foreach ($countries as $country)
                                            <option @if ($country->id == $tempCountry) selected @endif
                                                value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <p class="text-danger">{{ $errors->first('country') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('manufacturer.index') }}"
                                    class="btn btn-outline-danger float-right">Отменить</a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
