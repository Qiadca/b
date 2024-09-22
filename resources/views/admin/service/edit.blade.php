@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Hizmet Ekle</h1>

    <form action="{{ url('admin/service/update/'.$service->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Hizmet Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.service.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="name" class="form-control" value="{{ $service->name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="slug" class="form-control" value="{{ $service->slug }}">
                </div>
                <div class="form-group">
                    <label for="">Açıklama</label>
                    <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $service->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Kısa Açıklama</label>
                    <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ $service->short_description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Mevcut Fotoğraf</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$service->photo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Fotoğrafı Değiştir</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $service->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $service->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
