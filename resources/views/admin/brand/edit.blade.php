@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать торговую марку</h1>
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
                        <form class="form-horizontal" action="{{ route('brand.update', $brand->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>{{ $brand->title }}</h4>
                                <div class="form-group row">
                                    <label for="title" class="col-lg-3 col-form-label">Наименование:</label>
                                    <input type="text" class="form-control col" id="title" name="title" value="{{ $brand->title }}" placeholder="Новое наименование">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('brand.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
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
                                <dd>{{ $brand->id }}</dd>
                                <dt>Наименование</dt>
                                <dd>{{ $brand->title }}</dd>
                                <dt>Создан</dt>
                                <dd>{{ $brand->created_at }}</dd>
                                <dt>Изменён</dt>
                                <dd>{{ $brand->updated_at }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
