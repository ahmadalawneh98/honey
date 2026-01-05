@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-3">تعديل المدونة</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الاسم (عربي)</label>
                        <input type="text" name="name_ar" class="form-control" value="{{ $blog->name_ar }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إنجليزي)</label>
                        <input type="text" name="name_en" class="form-control" value="{{ $blog->name_en }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (فرنسي)</label>
                        <input type="text" name="name_fr" class="form-control" value="{{ $blog->name_fr }}">
                    </div>
                    <div class="form-group">
                        <label>الاسم (إسباني)</label>
                        <input type="text" name="name_es" class="form-control" value="{{ $blog->name_es }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>الوصف (عربي)</label>
                        <textarea name="description_ar" class="form-control" rows="3">{{ $blog->description_ar }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إنجليزي)</label>
                        <textarea name="description_en" class="form-control" rows="3">{{ $blog->description_en }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (فرنسي)</label>
                        <textarea name="description_fr" class="form-control" rows="3">{{ $blog->description_fr }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>الوصف (إسباني)</label>
                        <textarea name="description_es" class="form-control" rows="3">{{ $blog->description_es }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>الصورة الحالية</label><br>
                @if ($blog->image)
                    <img src="{{ asset('images/' . $blog->image) }}" width="100"><br><br>
                @endif
                <label>تغيير الصورة</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>الحالة</label>
                <select name="status" class="form-control">
                    <option value="new" {{ $blog->status == 'new' ? 'selected' : '' }}>new</option>
                    <option value="blog" {{ $blog->status == 'blog' ? 'selected' : '' }}>blog</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">رجوع</a>
        </form>
    </div>
@endsection
