@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать тег</h1>
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
                        <form class="form-horizontal" action="{{ route('tag.update', $tag->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>{{ $tag->title }}</h4>
                                <div class="form-group row">
                                    <label for="title" class="col-lg-3 col-form-label">Наименование:</label>
                                    <input type="text" class="form-control col" id="title" name="title" value="{{ $tag->title }}" placeholder="Новое наименование">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('tag.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
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
                            <dl class="row">
                                <dt class="col-lg-3">Идентификатор (ID):</dt>
                                <dd class="col-lg-9">{{ $tag->id }}</dd>
                                <dt class="col-lg-3">Наименование:</dt>
                                <dd class="col-lg-9">{{ $tag->title }}</dd>
                                <dt class="col-lg-3">Создан:</dt>
                                <dd class="col-lg-9">{{ $tag->created_at }}</dd>
                                <dt class="col-lg-3">Изменён:</dt>
                                <dd class="col-lg-9">{{ $tag->updated_at }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
