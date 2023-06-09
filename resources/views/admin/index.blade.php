@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Панель управления (Главная)</h1>
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
                <div class="col-12 col-md-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $orders }}</h3>
                            <p>Новые заказы ожидающие подтверждения</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <a href="{{ route('order.index') }}" class="small-box-footer">Переход в заказы<i
                                class="fas fa-arrow-circle-right pl-2"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-12 col-md-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ number_format($cash, 2, '.', ' ') }} ₽</h3>
                            <p>Потенциаьная прибыль за неделю</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-money-bill-alt"></i>
                        </div>
                        <a href="{{ route('order.index') }}" class="small-box-footer">Переход в заказы<i
                                class="fas fa-arrow-circle-right pl-2"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-12 col-md-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $users }}</h3>
                            <p>Общее количество клиентов</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('user.index') }}" class="small-box-footer">Перейти в пользователи<i
                                class="fas fa-arrow-circle-right pl-2"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $products }}</h3>
                            <p>Остуствующих товаров на складе</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <a href="{{ route('product.index') }}" class="small-box-footer">Перейти в товары
                            <i class="fas fa-arrow-circle-right pl-2"></i></a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
