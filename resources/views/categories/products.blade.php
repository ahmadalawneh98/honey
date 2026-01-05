@extends('adminlte::page')

@section('title', 'المنتجات في التصنيف')

@section('content_header')
    <h1>المنتجات في: {{ $category->name_ar }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">قائمة المنتجات</h3>
            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-secondary float-right">رجوع للتصنيفات</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الاسم (عربي)</th>
                        <th>الاسم (إنجليزي)</th>
                        <th>الوصف (عربي)</th>
                        <th>الوصف (إنجليزي)</th>
                        <th>الصورة</th>
                        <th>إجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->title_ar }}</td>
                            <td>{{ $product->title_en }}</td>
                            <td>{{ Str::limit($product->description_ar, 50) }}</td>
                            <td>{{ Str::limit($product->description_en, 50) }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" width="80">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('هل تريد حذف هذا المنتج؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@stop
