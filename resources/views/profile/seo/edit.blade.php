@extends('adminlte::page')

@section('title', 'إعدادات SEO')

@section('content_header')
    <h1>إعدادات SEO</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Meta Tags</h3>
        </div>

        <form method="POST" action="{{ route('seo.update') }}">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label>Meta (يوضع كما هو داخل &lt;head&gt;)</label>
                    <textarea name="meta" class="form-control" rows="8" placeholder="<meta name='description' content='...'>">{{ old('meta', $seo->meta ?? '') }}</textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> حفظ
                </button>
            </div>
        </form>
    </div>

@stop
