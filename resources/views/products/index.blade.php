@extends('adminlte::page')

@section('title', 'المنتجات')

@section('content_header')
    <h1>المنتجات</h1>
@stop

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
        إضافة منتج
    </a>

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

                    {{-- صورة المنتج (أول صورة فقط) --}}
                    <td>
                        @if (!empty($product->images) && count($product->images) > 0)
                            <img src="{{ asset('storage/' . $product->images[0]) }}" width="80" class="img-thumbnail"
                                alt="{{ $product->title_ar }}">
                        @else
                            <span class="text-muted">لا توجد صورة</span>
                        @endif
                    </td>

                    {{-- التصنيف --}}
                    <td>
                        {{ $product->category?->name_ar ?? 'بدون تصنيف' }}
                    </td>

                    {{-- الإجراءات --}}
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                            تعديل
                        </a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('حذف المنتج؟')">
                                حذف
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
