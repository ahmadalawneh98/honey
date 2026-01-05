@extends('adminlte::page')

@section('title', 'المنتجات')

@section('content_header')
    <h1>المنتجات</h1>
@stop

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">إضافة منتج</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>العنوان</th>
                <th>الصورة</th>
                <th>التصنيف</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->title_ar }}</td>

                    {{-- صورة المنتج --}}
                    <td>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" width="80" alt="{{ $product->title_ar }}">
                        @else
                            <span>لا يوجد صورة</span>
                        @endif
                    </td>

                    {{-- اسم التصنيف --}}
                    <td>
                        {{ $product->category ? $product->category->name_ar : 'بدون تصنيف' }}
                    </td>

                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">تعديل</a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('حذف المنتج؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
