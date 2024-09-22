@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Araçlarımızı Düzenle</h1>

    <form action="{{ url('admin/project/update/'.$project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Araç Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.project.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="project_name" class="form-control" value="{{ $project->project_name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="project_slug" class="form-control" value="{{ $project->project_slug }}">
                </div>
                <div class="form-group">
                    <label for="">İçerik</label>
                    <textarea name="project_content" class="form-control editor" cols="30" rows="10">{{ $project->project_content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">İçerik (Kısa)</label>
                    <textarea name="project_content_short" class="form-control h_100" cols="30" rows="10">{{ $project->project_content_short }}</textarea>
                </div>
              
                <div class="form-group">
                    <label for="">Mevcut Öne Çıkan Fotoğraf</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$project->project_featured_photo) }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Öne Çıkan Fotoğrafı Değiştir</label>
                    <div>
                        <input type="file" name="project_featured_photo">
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $project->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $project->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>
@endsection