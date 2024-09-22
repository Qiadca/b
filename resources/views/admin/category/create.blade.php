@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Kategori Ekle</h1>

    <form action="{{ route('admin.category.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Kategori Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Kategori İsmi *</label>
                    <input type="text" name="category_name" class="form-control" value="{{ old('category_name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Kategori Linki</label>
                    <input type="text" name="category_slug" class="form-control" value="{{ old('category_slug') }}">
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection
