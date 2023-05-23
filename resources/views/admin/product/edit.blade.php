@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать товар</h1>
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
                        <form class="form-horizontal" action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <h4>{{ $product->id.'. '.$product->title }}</h4>
                                <div class="form-group">
                                    <label for="published" class="col-form-label">Публикация (видимость на сайте)<span
                                            class="text-danger">*</span></label>
                                    <div>
                                        <input type="checkbox" name="published" id="published"
                                        @if ( old('published') ?? $product->published ) checked @endif data-bootstrap-switch
                                        data-off-color="danger" data-on-color="success">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-form-label">Наименование<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control col" id="title" name="title"
                                        value="{{ old('title') ?? $product->title }}" placeholder="Конфеты шоколадные (упаковка 0,5кг)">
                                    @if ($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-form-label">
                                        Категория<span class="text-danger">*</span></label>
                                    <select class="form-control select2" style="width: 100%;" name="category">
                                        <option selected disabled hidden value="">Не выбрано</option>
                                        {{ $tempCategory = old('category') ?? $product->category_id }}

                                        @foreach ($categories as $category)
                                            <option @if ($category->id == $tempCategory) selected @endif
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
                                        <option @if (old('brand') == null && $product->brand == null) selected @endif value="">Не выбрано</option>
                                        {{ $tempBrand = old('brand') ?? $product->brand_id }}
                                        @foreach ($brands as $brand)
                                            <option @if ($brand->id == $tempBrand) selected @endif
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
                                        {{ $tempManufacturer = old('manufacturer') ?? $product->manufacturer_id }}
                                        @foreach ($manufacturers as $manufacturer)
                                            <option @if ($manufacturer->id == $tempManufacturer) selected @endif
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
                                                min="1" placeholder="-" value="{{ old('expiration') ?? $product->expiration_date }}">
                                        </div>
                                        <div class="col-2">
                                            <select class="form-control select2 col-3" style="width: 100%;"
                                                name="expiration_type">
                                                <option @if (old('expiration_type') == null && $product->expiration_type_id == null) selected @endif value="">Не выбрано</option>
                                                {{ $tempExpirationType = old('expiration_type') ?? $product->expiration_type_id }}
                                                @foreach ($expirations as $expiration)
                                                    <option @if ($expiration->id == $tempExpirationType) selected @endif
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
                                        value="{{ old('article') ?? $product->article}}" placeholder="АБВ123">
                                    @if ($errors->has('article'))
                                        <p class="text-danger">{{ $errors->first('article') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="packaging" class="col-form-label">
                                        Упаковка</label>
                                    <select class="form-control select2" style="width: 100%;" name="packaging">
                                        <option @if (old('packaging') == null && $product->packaging_id == null) selected @endif value="">Не выбрано</option>
                                        {{ $tempPackaging = old('packaging') ?? $product->packaging_id }}
                                        @foreach ($packagings as $packaging)
                                            <option @if ($packaging->id == $tempPackaging) selected @endif
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
                                    <textarea name="ingredients" class="form-control" placeholder="Текст..." style="min-height: 60px;">{{ old('ingredients') ?? $product->ingredients }}</textarea>
                                    @if ($errors->has('ingredients'))
                                        <p class="text-danger">{{ $errors->first('ingredients') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="weight">Вес</label>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <input type="number" class="form-control" id="weight" name="weight"
                                                min="1" placeholder="-" value="{{ old('weight') ?? $product->weight }}">
                                        </div>
                                        <div class="col-2">
                                            <select class="form-control select2 col-3" style="width: 100%;"
                                                name="weight_type">
                                                <option selected value="">Не выбрано</option>
                                                {{ $tempWeight = old('weight_type') ?? $olds["weight"] }}
                                                @foreach ($weights as $weight)
                                                    <option @if ($weight->id == $tempWeight) selected @endif
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
                                    <input type="number" class="form-control col" id="calorie" name="calorie"
                                        value="{{ old('calorie') ?? $product->calorie }}" placeholder="ККАЛ">
                                    @if ($errors->has('calorie'))
                                        <p class="text-danger">{{ $errors->first('calorie') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="count" class="col-form-label">
                                        Количество (на складе)<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control col" id="count" name="count"
                                        value="{{ old('count') ?? $product->count }}" placeholder="шт." min="0">
                                    @if ($errors->has('count'))
                                        <p class="text-danger">{{ $errors->first('count') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-form-label">
                                        Цена<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ?? $product->price }}"
                                        data-inputmask='"mask": "9{1,8}.99", "greedy" : false' data-mask>
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
                                    <textarea name="description" class="form-control" rows="3" placeholder="Текст..." style="min-height: 60px;">{{ old('description') ?? $product->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Теги</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;" name="tags[]">
                                        {{ $tempTags = old('tags') !== null ? collect(old('tags')) : $olds['tags'] }}
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                    @if($tempTags->contains($tag->id)) selected @endif> {{ $tag->title }}
                                            </option>
                                        @endforeach
                                </select>
                                    @if ($errors->has('tags'))
                                        <p class="text-danger">{{ $errors->first('tags') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="preview_image">Файл (превью)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                                        <label class="custom-file-label" for="customFile">Выберите файл</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                                <a type="button" href="{{ route('product.index') }}" class="btn btn-outline-danger float-right">Отменить</a>
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
                                <dt>Публикация</dt>
                                <dd>{{ $product->published ? 'Опубликовано' : 'Не опубликовано' }}</dd>
                                <dt>Идентификатор (ID)</dt>
                                <dd>{{ $product->id }}</dd>
                                <dt>Наименование</dt>
                                <dd>{{ $product->title }}</dd>
                                <dt>Артикул</dt>
                                <dd>{{ $product->article ?? '-' }}</dd>
                                <dt>Категория</dt>
                                <dd>{{ $olds['category'] }}</dd>

                                <dt>Бренд</dt>
                                <dd>{{ $olds['brand'] ?? '-' }}</dd>
                                <dt>Производитель</dt>
                                <dd>{{ $olds['manufacturer']->name.' '.$olds['manufacturer']->country }}</dd>
                                <dt>Срок хранения</dt>
                                <dd>{{ $product->expiration_date ? $product->expiration_date . ' ' . $olds['expiration'] : '-' }}
                                </dd>
                                <dt>Упаковка</dt>
                                <dd>{{ $olds['packaging'] ?? '-' }}</dd>

                                <dt>Ингридиенты</dt>
                                <dd>{{ $product->ingredients }}</dd>
                                <dt>Вес</dt>
                                <dd>{{ $product->weight ? $product->weight . ' ' . $olds['weight'] : '-' }}</dd>
                                <dt>Калории</dt>
                                <dd>{{ $product->calorie ? $product->calorie . ' ККАЛ' : '-' }}</dd>
                                <dt>В наличии</dt>
                                <dd>{{ $product->count }} шт</dd>

                                <dt>Описание</dt>
                                <dd>{{ $product->description ?? '-' }}</dd>
                                <dt>Фотографии</dt>
                                <dd class="row">
                                    <div class="col-2 d-flex align-items-center mt-2">
                                        <div class="img-thumbnail d-flex h-100 p-3 position-relative">
                                            <img src="{{ asset('storage/' . $product->preview_image) }}" class="img-fluid align-self-center" alt="{{ $product->preview_image }}">
                                            <div class="ribbon-wrapper ribbon">
                                                <div class="ribbon bg-success text-lg">
                                                    Превью
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (isset($images))
                                        <div class="col-2 d-flex align-items-center mt-2">
                                            <b>Доп.фотографии не найдены</b>
                                        </div>
                                    @else
                                        @foreach ($images as $image)
                                            <div class="col-2 d-flex align-items-center mt-2">
                                                <div class="img-thumbnail d-flex h-100 p-3">
                                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid align-self-center" alt="{{ $image->image_path }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </dd>
                                <dt>Теги</dt>
                                <dd>
                                    @if (isset($olds['tags']))
                                        @foreach ($olds['tags'] as $tag)
                                            {{ $tag->title }}
                                            <br>
                                        @endforeach
                                    @else
                                        {{ '-' }}
                                    @endif
                                </dd>

                                <dt>Создан</dt>
                                <dd>{{ $product->created_at }}</dd>
                                <dt>Изменён</dt>
                                <dd>{{ $product->updated_at }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
