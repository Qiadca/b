@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Dinamik Sayfayı Düzenle</h1>

    <form action="{{ url('admin/dynamic-page/update/'.$dynamic_page->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Dinamik Sayfayı Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.dynamic_page.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="dynamic_page_name" class="form-control" value="{{ $dynamic_page->dynamic_page_name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="dynamic_page_slug" class="form-control" value="{{ $dynamic_page->dynamic_page_slug }}">
                </div>
                <div class="form-group">
                    <label for="">İçerik</label>
                    <textarea name="dynamic_page_content" class="form-control editor" cols="30" rows="10">{{ $dynamic_page->dynamic_page_content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Mevcut Banner</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$dynamic_page->dynamic_page_banner) }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Banner'ı Değiştir</label>
                    <div>
                        <input type="file" name="dynamic_page_banner">
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $dynamic_page->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $dynamic_page->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
