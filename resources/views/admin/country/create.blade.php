@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить страну</h1>
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
                <div class="col">
                    <div class="card card-info">
                        <div class="card-header"></div>
                        <form class="form-horizontal" action="{{ route('country.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <h4>Новая страна</h4>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Наименование<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Россия" required>
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="abbreviation" class="col-form-label">Аббревиатура (3 буквы)<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="abbreviation" name="abbreviation" placeholder="RUS" maxlength="3" required>
                                    @if($errors->has('abbreviation'))
                                        <p class="text-danger">{{$errors->first('abbreviation')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Создать</button>
                                <a type="button" href="{{ route('country.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
