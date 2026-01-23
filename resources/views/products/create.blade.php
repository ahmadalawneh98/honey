@extends('adminlte::page')

@section('title', 'إضافة منتج')

@section('content_header')
    <h1>إضافة منتج جديد</h1>
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

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- التصنيف --}}
        <div class="form-group">
            <label>التصنيف</label>
            <select name="category_id" class="form-control" required>
                <option value="">اختر التصنيف</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name_ar }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- صور المنتج --}}
        <div class="form-group">
            <label>صور المنتج</label>
            <input type="file" name="images[]" class="form-control" multiple>
            <small class="text-muted">يمكنك اختيار أكثر من صورة</small>
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
                            value="{{ old('title_' . $key) }}" required>
                    </div>

                    <div class="form-group">
                        <label>الوصف</label>
                        <textarea name="description_{{ $key }}" class="form-control" rows="3">{{ old('description_' . $key) }}</textarea>
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
                <input type="text" name="sizes[]" class="form-control mb-2" placeholder="أدخل حجم العبوة">
                <input type="text" name="sizes[]" class="form-control mb-2" placeholder="إضافة حجم جديد">
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fas fa-save"></i> حفظ المنتج
        </button>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">
            رجوع
        </a>
    </form>

@stop
