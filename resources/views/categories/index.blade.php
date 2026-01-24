@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-3">التصنيفات</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">إضافة تصنيف جديد</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>الاسم (عربي)</th>
                            <th>عدد المنتجات</th>
                            <th>الصورة</th>
                            <th>إجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                            <tr>
                                <td>{{ $cat->name_ar }}</td>
                                <td>
                                    @if ($cat->products->count() > 0)
                                        <a href="{{ route('categories.products', $cat->id) }}">
                                            {{ $cat->products->count() }}
                                        </a>
                                    @else
                                        0
                                    @endif
                                </td>
                                <td>
                                    @if ($cat->image)
                                        <img src="{{ asset('images/categories/' . $cat->image) }}" width="80">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('categories.edit', $cat->id) }}"
                                        class="btn btn-sm btn-warning">تعديل</a>
                                    <form action="{{ route('categories.destroy', $cat->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('هل تريد حذف هذا التصنيف؟')">حذف</button>
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
