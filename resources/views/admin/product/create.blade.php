@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
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
                        <form class="form-horizontal" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4>Новый продукт</h4>
                                <div class="form-group">
                                    <label for="published" class="col-form-label">Публикация (видимость на сайте)<span
                                            class="text-danger">*</span></label>
                                    <div>
                                        <input type="checkbox" name="published" id="published"
                                            @if (old('published')) checked @endif data-bootstrap-switch
                                            data-off-color="danger" data-on-color="success">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-form-label">Наименование<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="title" name="title"
                                        value="{{ old('title') }}" placeholder="Конфеты шоколадные (упаковка 0,5кг)">
                                    @if ($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-form-label">
                                        Категория<span class="text-danger">*</span></label>
                                    <select class="form-control select2" style="width: 100%;" name="category">
                                        <option selected disabled hidden value="">Не выбрано</option>
                                        @foreach ($categories as $category)
                                            <option @if ($category->id == old('category')) selected @endif
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category'))
                                        <p class="text-danger">{{ $errors->first('category') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="brand" class="col-form-label">
                                        Бренд</label>
                                    <select class="form-control select2" style="width: 100%;" name="brand">
                                        <option selected value="">Не выбрано</option>
                                        @foreach ($brands as $brand)
                                            <option @if ($brand->id == old('brand')) selected @endif
                                                value="{{ $brand->id }}">{{ $brand->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('brand'))
                                        <p class="text-danger">{{ $errors->first('brand') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="manufacturer" class="col-form-label">
                                        Производители<span class="text-danger">*</span></label>
                                    <select class="form-control select2" style="width: 100%;" name="manufacturer">
                                        <option selected disabled hidden value="">Не выбрано</option>
                                        @foreach ($manufacturers as $manufacturer)
                                            <option @if ($manufacturer->id == old('manufacturer')) selected @endif
                                                value="{{ $manufacturer->id }}">
                                                {{ $manufacturer->manufacturer . ', ' . $manufacturer->country }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('manufacturer'))
                                        <p class="text-danger">{{ $errors->first('manufacturer') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="expiration">Срок хранения</label>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <input type="number" class="form-control" id="expiration" name="expiration"
                                                min="1" placeholder="-" value="{{ old('expiration') }}">
                                        </div>
                                        <div class="col-2">
                                            <select class="form-control select2 col-3" style="width: 100%;"
                                                name="expiration_type">
                                                <option selected value="">Не выбрано</option>
                                                @foreach ($expirations as $expiration)
                                                    <option @if ($expiration->id == old('expiration_type')) selected @endif
                                                        value="{{ $expiration->id }}">{{ $expiration->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @if ($errors->has('expiration'))
                                        <p class="text-danger">{{ $errors->first('expiration') }}</p>
                                    @endif
                                    @if ($errors->has('expiration_type'))
                                        <p class="text-danger">{{ $errors->first('expiration_type') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="article" class="col-form-label">
                                        Артикул</label>
                                    <input type="text" class="form-control col" id="article" name="article"
                                        value="{{ old('article') }}" placeholder="АБВ123">
                                    @if ($errors->has('article'))
                                        <p class="text-danger">{{ $errors->first('article') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="packaging" class="col-form-label">
                                        Упаковка</label>
                                    <select class="form-control select2" style="width: 100%;" name="packaging">
                                        <option selected value="">Не выбрано</option>
                                        @foreach ($packagings as $packaging)
                                            <option @if ($packaging->id == old('packaging')) selected @endif
                                                value="{{ $packaging->id }}">{{ $packaging->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('packaging'))
                                        <p class="text-danger">{{ $errors->first('packaging') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="ingredients" class="col-form-label">Состав продукта<span
                                            class="text-danger">*</span></label>
                                    <textarea name="ingredients" class="form-control" placeholder="Текст..." style="min-height: 60px;">{{ old('ingredients') }}</textarea>
                                    @if ($errors->has('ingredients'))
                                        <p class="text-danger">{{ $errors->first('ingredients') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="weight">Вес</label>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <input type="number" class="form-control" id="weight" name="weight"
                                                min="1" placeholder="-" value="{{ old('weight') }}">
                                        </div>
                                        <div class="col-2">
                                            <select class="form-control select2 col-3" style="width: 100%;"
                                                name="weight_type">
                                                <option selected value="">Не выбрано</option>
                                                @foreach ($weights as $weight)
                                                    <option @if ($weight->id == old('weight_type')) selected @endif
                                                        value="{{ $weight->id }}">{{ $weight->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @if ($errors->has('weight'))
                                        <p class="text-danger">{{ $errors->first('weight') }}</p>
                                    @endif
                                    @if ($errors->has('weight_type'))
                                        <p class="text-danger">{{ $errors->first('weight_type') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="calorie" class="col-form-label">
                                        Калорийность</label>
                                    <input type="text" class="form-control col" id="calorie" name="calorie"
                                        value="{{ old('calorie') }}" placeholder="ККАЛ">
                                    @if ($errors->has('calorie'))
                                        <p class="text-danger">{{ $errors->first('calorie') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="count" class="col-form-label">
                                        Количество (на складе)<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="count" name="count"
                                        value="{{ old('count') }}" placeholder="шт." min="0">
                                    @if ($errors->has('count'))
                                        <p class="text-danger">{{ $errors->first('count') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-form-label">
                                        Цена<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price" name="price"
                                            value="{{ old('price') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00 (формат)</span>
                                        </div>
                                    </div>
                                    @if ($errors->has('price'))
                                        <p class="text-danger">{{ $errors->first('price') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-form-label">Описание</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Текст..." style="min-height: 60px;">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Теги</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Выберите теги"
                                        style="width: 100%;" name="tags[]">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                @if (old('tags') !== null) @if (in_array($tag->id, old('tags'))) selected @endif
                                                @endif> {{ $tag->title }} </option>
                                        @endforeach

                                    </select>
                                    @if ($errors->has('tags'))
                                        <p class="text-danger">{{ $errors->first('tags') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="preview_image">Файл (превью)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="preview_image"
                                            name="preview_image" accept="image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp">
                                        <label class="custom-file-label" for="customFile">Выберите файл</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="images">Файлы (доп.фотографии)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="images" name="images[]" multiple
                                            accept="image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp">
                                        <label class="custom-file-label" for="images">Выберите файлы (до 10 файлов)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Создать</button>
                                <a type="button" href="{{ route('product.index') }}"
                                    class="btn btn-outline-danger float-right">Отменить</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
