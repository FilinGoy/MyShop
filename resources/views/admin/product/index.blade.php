@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товары</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Главная</a></li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div id="accordion">
                        <div class="card card-info">
                            <div class="card-header btn" data-card-widget="collapse">
                                <h4 class="card-title w-100 d-flex justify-content-between">
                                    <a class="d-block" aria-expanded="true" data-card-widget="collapse">
                                        Панель быстрого доступа
                                    </a>
                                    <button class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h4>
                            </div>
                            <div class="card-body" style="display: block;">
                                <div class="row">
                                    <div class="col">
                                        <h4>Действия с товарами</h4>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <a href="{{ route('product.create') }}" class="btn btn-outline-primary">Добавить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="height: 700px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr class="d-flex">
                                        <th class="col-1">ID</th>
                                        <th class="col-4">Наименование</th>
                                        <th class="col-1">Артикул</td>
                                        <th class="col-1">Цена</td>
                                        <th class="col-1">Количество</td>
                                        <th class="col-2">Публикация</td>
                                        <th class="col-2">Действие</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="d-flex">
                                            <td class="col-1">{{ $product->id }}</td>
                                            <td class="col-4 text-truncate" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $product->title }}">
                                                {{ $product->title }}
                                            </td>
                                            <td class="col-1 text-truncate">{{ $product->article }}</td>
                                            <td class="col-1 text-truncate">{{ $product->price }} руб.</td>
                                            <td class="col-1 text-truncate">{{ $product->count }} шт.</td>
                                            <td class="col-2 text-truncate">
                                                <i class="fas fa-circle nav-icon text-{{ $product->published ? 'success' : 'danger' }}"></i>
                                                <span class="text-{{ $product->published ? 'success' : 'danger' }}">{{ $product->published ? 'Опубликован' : 'Не опубликован' }}</span>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-outline-info btn-flat">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-warning btn-flat">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('product.delete', $product->id) }}" id="deleteForm{{ $product->id }}" method="post" hidden>
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                    <button type="submit" form="deleteForm{{ $product->id }}" class="btn btn-outline-danger btn-flat">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
