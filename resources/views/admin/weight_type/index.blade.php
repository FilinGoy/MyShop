@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Единицы измерения веса</h1>
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
                                        Быстрое добавление
                                    </a>
                                    <button class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </h4>
                            </div>
                            <div class="card-body" style="display: block;">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('weight.store') }}" method="post">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="title" class="form-control">
                                                <div class="input-group-prepend">
                                                    <button type="submit" class="btn btn-success">Добавить</button>
                                                </div>
                                            </div>
                                        </form>
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
                                        <th class="col-2">ID</th>
                                        <th class="col-7">Наименование</th>
                                        <th class="col-3">Действие</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr class="d-flex">
                                            <td class="col-2">{{ $type->id }}</td>
                                            <td class="col-7">{{ $type->title }}</td>
                                            <td class="col-3">
                                                <div>
                                                    <a href="{{ route('weight.show', $type->id) }}" class="btn btn-outline-info btn-flat">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('weight.edit', $type->id) }}" class="btn btn-outline-warning btn-flat">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('weight.delete', $type->id) }}" id="deleteForm{{ $type->id }}" method="post" hidden>
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                    <button type="submit" form="deleteForm{{ $type->id }}" class="btn btn-outline-danger btn-flat">
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
