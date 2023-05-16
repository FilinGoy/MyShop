@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
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
                        <h3 class="card-title">{{ $product->title }}</h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Идентификатор (ID)</dt>
                            <dd>{{ $product->id }}</dd>
                            <dt>Наименование</dt>
                            <dd>{{ $product->title }}</dd>
                            <dt>Артикул</dt>
                            <dd>{{ $product->article ?? '-' }}</dd>
                            <dt>Категория</dt>
                            <dd>{{ $category->title }}</dd>

                            <dt>Бренд</dt>
                            <dd>{{ $brand->title ?? '-' }}</dd>
                            <dt>Производитель</dt>
                            <dd>{{ $manufacturer->name }}</dd>
                            <dt>Срок хранения</dt>
                            <dd>{{ $product->expiration_date ? $product->expiration_date.' '.$expiration->title : '-' }}</dd>
                            <dt>Упаковка</dt>
                            <dd>{{ $packaging->title ?? '-' }}</dd>

                            <dt>Ингридиенты</dt>
                            <dd>{{ $product->ingredients }}</dd>
                            <dt>Вес</dt>
                            <dd>{{ $product->weight ? $product->weight.' '.$weight->title : '-' }}</dd>
                            <dt>Калории</dt>
                            <dd>{{ $product->calorie }} ККАЛ</dd>
                            <dt>В наличии</dt>
                            <dd>{{ $product->count }} шт</dd>

                            <dt>Описание</dt>
                            <dd>{{ $product->description }}</dd>
                            <dt>Публикация</dt>
                            <dd>{{ $product->published ? 'Опубликовано' : 'Не опубликовано' }}</dd>
                            <dt>Превью</dt>
                            <dd class="row">
                                <div class="position-relative col-3">
                                    <img src="{{ asset('storage/images/'.$product->preview_image) }}" alt="{{ $product->preview_image }}" class="img-fluid">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-info text-lg"> Превью </div>
                                    </div>
                                </div>
                            </dd>
                            <dt>Теги</dt>
                            <dd>@foreach ($tags as $tag)
                                {{ $tag->title }}
                                <br>
                             @endforeach</dd>

                            <dt>Создан</dt>
                            <dd>{{ $product->created_at }}</dd>
                            <dt>Изменён</dt>
                            <dd>{{ $product->updated_at }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a type="button" href="{{ route('product.index') }}" class="btn btn-outline-danger float-right">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
