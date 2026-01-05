@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-3">تعديل التصنيف</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- الاسماء --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الاسم (عربي)</label>
                        <input type="text" name="name_ar" class="form-control" value="{{ $category->name_ar }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إنجليزي)</label>
                        <input type="text" name="name_en" class="form-control" value="{{ $category->name_en }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (فرنسي)</label>
                        <input type="text" name="name_fr" class="form-control" value="{{ $category->name_fr }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إسباني)</label>
                        <input type="text" name="name_es" class="form-control" value="{{ $category->name_es }}">
                    </div>
                </div>

                {{-- الوصف --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الوصف (عربي)</label>
                        <textarea name="description_ar" class="form-control" rows="3">{{ $category->description_ar }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إنجليزي)</label>
                        <textarea name="description_en" class="form-control" rows="3">{{ $category->description_en }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (فرنسي)</label>
                        <textarea name="description_fr" class="form-control" rows="3">{{ $category->description_fr }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إسباني)</label>
                        <textarea name="description_es" class="form-control" rows="3">{{ $category->description_es }}</textarea>
                    </div>
                </div>
            </div>

            {{-- الصورة --}}
            <div class="form-group">
                <label>الصورة الحالية</label><br>
                @if ($category->image)
                    <img src="{{ asset('images/categories/' . $category->image) }}" width="100"><br><br>
                @endif
                <label>تغيير الصورة</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">رجوع</a>
        </form>
    </div>
@endsection
