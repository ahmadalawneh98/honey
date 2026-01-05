@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-3">إضافة مدونة جديدة</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الاسم (عربي)</label>
                        <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إنجليزي)</label>
                        <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (فرنسي)</label>
                        <input type="text" name="name_fr" class="form-control" value="{{ old('name_fr') }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إسباني)</label>
                        <input type="text" name="name_es" class="form-control" value="{{ old('name_es') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>الوصف (عربي)</label>
                        <textarea name="description_ar" class="form-control" rows="3">{{ old('description_ar') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إنجليزي)</label>
                        <textarea name="description_en" class="form-control" rows="3">{{ old('description_en') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (فرنسي)</label>
                        <textarea name="description_fr" class="form-control" rows="3">{{ old('description_fr') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إسباني)</label>
                        <textarea name="description_es" class="form-control" rows="3">{{ old('description_es') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>الصورة</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>الحالة</label>
                <select name="status" class="form-control">
                    <option value="new">new</option>
                    <option value="blog">blog</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">حفظ</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">رجوع</a>
        </form>
    </div>
@endsection
