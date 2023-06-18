@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать заказ</h1>
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
            {{-- <div class="row">
                <div class="col-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Данные для изменения</h3>
                        </div>
                        <form class="form-horizontal" action="{{ route('order.update', $order->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <dl>
                                    <dt>Номер заказа</dt>
                                    <dd>{{ $order->id }}</dd>
                                    <dt>Статус</dt>
                                    <dd>
                                        <select class="form-control select2" style="width: 100%;" name="status"
                                            id="status" required>
                                            @foreach ($statuses as $status)
                                                <option @if ($status->id == $order->status_id) selected @endif
                                                    value="{{ $status->id }}">{{ $status->title }}</option>
                                            @endforeach
                                        </select>
                                    </dd>
                                    <dt>Пользователь</dt>
                                    <dd><a href="{{ route('user.show', $order->user->id) }}"
                                            class="text-danger">{{ $order->user->first_name . ' ' . $order->user->last_name . ' (' . $order->user->login . '), ' }}</a>
                                        {{ $order->user->number . ', ' . $order->user->email ?? '-' }}
                                    </dd>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Заказчик<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control col" id="first_name" name="first_name"
                                            value="{{ old('first_name') ?? $order->first_name }}" placeholder="Имя"
                                            required>

                                        <input type="text" class="form-control col" id="last_name" name="last_name"
                                            value="{{ old('last_name') ?? $order->last_name }}" placeholder="Фамилия"
                                            required>
                                        @if ($errors->has('last_name'))
                                            <p class="text-danger">{{ $errors->first('first_name') }}</p>
                                            <p class="text-danger">{{ $errors->first('last_name') }}</p>
                                        @endif
                                    </div>
                                    <dt>Адрес</dt>
                                    <dd>{{ $order->address ?? '-' }}</dd>
                                    <dt>Комментарий</dt>
                                    <dd>{{ $order->description ?? '-' }}</dd>
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
                                                                        <td class="col-6 text-truncate">
                                                                            {{ $product->title }}</td>
                                                                        <td class="col-2 text-truncate">
                                                                            {{ $product->pivot->price }} ₽</td>
                                                                        <td class="col-2 ">{{ $product->pivot->count }}
                                                                        </td>
                                                                        <td class="col-2 text-truncate">
                                                                            {{ number_format($product->pivot->price * $product->pivot->count, 2) }}
                                                                            ₽
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
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
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('order.index') }}"
                                    class="btn btn-outline-danger float-right">Отменить</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Данные для изменения</h3>
                        </div>
                        <form class="form-horizontal" action="{{ route('order.update', $order->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>Заказ №{{ $order->id }}
                                </h4>
                                <div class="form-group">
                                    <label for="first_name" class="col-form-label">Заказчик<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col mb-1" id="first_name" name="first_name"
                                        value="{{ old('first_name') ?? $order->first_name }}" placeholder='Имя' required>
                                    <input type="text" class="form-control col" id="last_name" name="last_name"
                                        value="{{ old('last_name') ?? $order->last_name }}" placeholder='Фамилия' required>
                                    @if ($errors->has('first_name'))
                                        <p class="text-danger">{{ $errors->first('first_name') }}</p>
                                    @endif
                                    @if ($errors->has('last_name'))
                                        <p class="text-danger">{{ $errors->first('last_name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Адрес<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col mb-1" id="address" name="address"
                                        value="{{ old('address') ?? $order->address }}" placeholder='Адрес' required>
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-form-label">Комментарий</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') ?? $order->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Статус<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control select2" style="width: 100%;" name="status" id="status"
                                        required>
                                        {{ $tempStatus = old('status') ?? $order->status_id }}
                                        @foreach ($statuses as $status)
                                            <option @if ($status->id == $tempStatus) selected @endif
                                                value="{{ $status->id }}">{{ $status->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger">{{ $errors->first('status') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="datetime_delivery" class="col-form-label">Дата доставки<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control col" id="datetime_delivery" name="datetime_delivery"
                                        value="{{ $order->datetime_delivery }}" type="datetime-local" required
                                        min="{{ $order->datetime_delivery }}"
                                        max="{{ date('Y-m-d\TH:i', strtotime('+1 week', strtotime($order->datetime_delivery))) }}" />
                                    @if ($errors->has('datetime_delivery'))
                                        <p class="text-danger">{{ $errors->first('datetime_delivery') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('order.index') }}"
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
                                <dt>Номер заказа</dt>
                                <dd>{{ $order->id }}</dd>
                                <dt>Пользователь</dt>
                                <dd>
                                    @if ($order->user)
                                        <a href="{{ route('user.show', $order->user->id) }}"
                                            class="text-danger">{{ $order->user->first_name . ' ' . $order->user->last_name . ' (' . $order->user->login . '), ' }}</a>
                                        {{ $order->user->number . ', ' . $order->user->email ?? '-' }}
                                    @else
                                        -
                                    @endif
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
                                                                    <td class="col-6 text-truncate">{{ $product->title }}
                                                                    </td>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
