@extends('adminlte::page')

@section('title', 'تعديل منتج')

@section('content_header')
    <h1>تعديل المنتج</h1>
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- التصنيف --}}
        <div class="form-group">
            <label>التصنيف</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name_ar }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- صورة المنتج --}}
        <div class="form-group">
            <label>صورة المنتج</label>

            @if ($product->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" width="150">
                </div>
            @endif

            <input type="file" name="image" class="form-control">
            <small class="text-muted">اترك الحقل فارغًا إذا لا تريد تغيير الصورة</small>
        </div>

        <hr>

        {{-- اللغات --}}
        @php
            $langs = [
                'ar' => 'العربية',
                'en' => 'English',
                'fr' => 'Français',
                'es' => 'Español',
            ];
        @endphp

        @foreach ($langs as $key => $lang)
            <div class="card card-outline card-primary mb-3">
                <div class="card-header">
                    <h5 class="card-title">{{ $lang }}</h5>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" name="title_{{ $key }}" class="form-control"
                            value="{{ old('title_' . $key, $product->{'title_' . $key}) }}" required>
                    </div>

                    <div class="form-group">
                        <label>الوصف</label>
                        <textarea name="description_{{ $key }}" class="form-control" rows="3">{{ old('description_' . $key, $product->{'description_' . $key}) }}</textarea>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- أحجام العبوات --}}
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <h5 class="card-title">أحجام العبوات</h5>
            </div>

            <div class="card-body">
                @if ($product->sizes)
                    @foreach ($product->sizes as $size)
                        <input type="text" name="sizes[]" class="form-control mb-2" value="{{ $size }}">
                    @endforeach
                @endif

                <input type="text" name="sizes[]" class="form-control mb-2" placeholder="إضافة حجم جديد">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            <i class="fas fa-save"></i> تحديث المنتج
        </button>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">
            رجوع
        </a>
    </form>

@stop
