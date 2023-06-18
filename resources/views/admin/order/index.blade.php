@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказы</h1>
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
            {{-- <div class="row">
                <div class="col-12">
                    <div id="accordion">
                        <div class="card card-info">
                            <div class="card-header btn" data-card-widget="collapse">
                                <h4 class="card-title w-100 d-flex justify-content-between">
                                    <a class="d-block" aria-expanded="true" data-card-widget="collapse">
                                        Быстрый действия
                                    </a>
                                    <button class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h4>
                            </div>
                            <div class="card-body" style="display: block;">
                                                                <div class="row">
                                    <h5 class="col">Поиск</h5>
                                    <div class="col">
                                        <form action="{{ route('order.search') }}" method="post">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Номер заказа">
                                                <div class="input-group-prepend">
                                                    <button type="submit" class="btn btn-secondary"><i
                                                            class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="col">Ожидаюющие подтверждение</h5>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <a href="{{ route('order.new') }}" class="btn btn-warning">Вывести</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="height: 700px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr class="d-flex">
                                        <th class="col-1">Номер</th>
                                        <th class="col-1">Статус</th>
                                        <th class="col-5">Адрес</td>
                                        <th class="col-2">Покупатель</th>
                                        <th class="col-2">Сумма</th>
                                        <th class="col-1">Действие</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="d-flex">
                                            <td class="col-1">{{ $order->id }}</td>
                                            <td class="col-1">
                                                <span
                                                    class="text-wrap badge @php
switch ($order->statuses->id) {
                                                    case 1:
                                                    case 2:
                                                        echo 'bg-warning';
                                                        break;

                                                    case 5:
                                                        echo 'bg-gray';
                                                        break;

                                                    case 3:
                                                    case 4:
                                                        echo 'bg-info';
                                                        break;

                                                    case 6:
                                                        echo 'bg-success';
                                                        break;

                                                    case 7:
                                                    case 8:
                                                    case 9:
                                                    case 10:
                                                        echo 'bg-danger';
                                                        break;

                                                    default:
                                                        break;
                                                } @endphp">{{ $order->statuses->title }}</span>
                                            </td>
                                            <td class="col-5 text-truncate">{{ $order->address }}</td>
                                            <td class="col-2 text-truncate">
                                                {{ $order->last_name . ' ' . $order->first_name }}
                                            </td>
                                            <td class="col-2 text-truncate">{{ $order->total_price }} ₽</td>
                                            <td class="col-1">
                                                <div>
                                                    <a href="{{ route('order.show', $order->id) }}"
                                                        class="btn btn-outline-info btn-flat">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('order.edit', $order->id) }}"
                                                        class="btn btn-outline-warning btn-flat">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
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
