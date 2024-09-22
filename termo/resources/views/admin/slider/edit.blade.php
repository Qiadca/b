@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Slaytı Düzenle</h1>

    <form action="{{ url('admin/slider/update/'.$slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $slider->slider_photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Slaytı Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Slayt Başlığı</label>
                    <input type="text" name="slider_heading" class="form-control" value="{{ $slider->slider_heading }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slayt Metni</label>
                    <textarea name="slider_text" class="form-control h_100" cols="30" rows="10">{{ $slider->slider_text }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Slayt Buton Metni</label>
                    <input type="text" name="slider_button_text" class="form-control" value="{{ $slider->slider_button_text }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slayt Buton URL</label>
                    <input type="text" name="slider_button_url" class="form-control" value="{{ $slider->slider_button_url }}" autofocus>
                </div>                
                <div class="form-group">
                    <label for="">Mevcut Slayt Fotoğrafı</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$slider->slider_photo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Slayt Fotoğrafını Değiştir</label>
                    <div>
                        <input type="file" name="slider_photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection