@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-3">المدونات</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">إضافة مدونة جديدة</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>الاسم (عربي)</th>
                            <th>الاسم (إنجليزي)</th>
                            <th>الوصف (عربي)</th>
                            <th>الصورة</th>
                            <th>الحالة</th>
                            <th>إجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->name_ar }}</td>
                                <td>{{ $blog->name_en }}</td>
                                <td>{{ Str::limit($blog->description_ar, 50) }}</td>
                                <td>
                                    @if ($blog->image)
                                        <img src="{{ asset('images/' . $blog->image) }}" width="80">
                                    @endif
                                </td>
                                <td>{{ $blog->status }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('هل تريد حذف هذا العنصر؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
