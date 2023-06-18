@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказ</h1>
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
                        <h3 class="card-title">Заказ №{{ $order->id }}</h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Номер заказа</dt>
                            <dd>{{ $order->id }}</dd>
                            <dt>Пользователь</dt>
                            <dd><a href="{{ route('user.show', $order->user->id) }}"
                                    class="text-danger">{{ $order->user->first_name . ' ' . $order->user->last_name . ' (' . $order->user->login . '), ' }}</a>
                                {{ $order->user->number . ', ' . $order->user->email ?? '-' }}
                            </dd>
                            <dt>Заказчик</dt>
                            <dd>{{ $order->first_name . ' ' . $order->last_name }}</dd>
                            <dt>Адрес</dt>
                            <dd>{{ $order->address ?? '-' }}</dd>
                            <dt>Комментарий</dt>
                            <dd>{{ $order->description ?? '-' }}</dd>
                            <dt>Статус</dt>
                            <dd>{{ $order->statuses->title ?? '-' }}</dd>
                            <dt>Дата доставки</dt>
                            <dd>{{ substr($order->datetime_delivery ?? '-', 0, 10) ?? '-' }}</dd>
                            <dt>Тип оплаты</dt>
                            <dd>{{ $order->payment->title ?? '-' }}</dd>
                            <dt>Состав заказа</dt>
                            <dd>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body table-responsive p-0" style="height: 200px;">
                                                <table class="table table-head-fixed text-nowrap">
                                                    <thead>
                                                        <tr class="d-flex">
                                                            <th class="col-6">Название</th>
                                                            <th class="col-2">Цена</th>
                                                            <th class="col-2">Кол-во</td>
                                                            <th class="col-2">Сумма</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $products = $order->orders_products;
                                                        @endphp
                                                        @foreach ($products as $product)
                                                            <tr class="d-flex">
                                                                <td class="col-6 text-truncate">{{ $product->title }}</td>
                                                                <td class="col-2 text-truncate">
                                                                    {{ $product->pivot->price }} ₽</td>
                                                                <td class="col-2 ">{{ $product->pivot->count }}</td>
                                                                <td class="col-2 text-truncate">
                                                                    {{ number_format($product->pivot->price * $product->pivot->count, 2) }}
                                                                    ₽
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
                            </dd>
                            <dt>Сумма заказа</dt>
                            <dd>{{ $order->total_price ?? '-' }} ₽</dd>
                            <dt>Создан</dt>
                            <dd>{{ $order->created_at ?? '-' }}</dd>
                            <dt>Изменён</dt>
                            <dd>{{ $order->updated_at ?? '-' }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a type="button" href="{{ route('order.index') }}"
                            class="btn btn-outline-danger float-right">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
