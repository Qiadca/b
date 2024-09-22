@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Slayt Ekle</h1>

    <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Slayt Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Slayt Başlığı</label>
                    <input type="text" name="slider_heading" class="form-control" value="{{ old('slider_heading') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slayt Metni</label>
                    <textarea name="slider_text" class="form-control h_100" cols="30" rows="10">{{ old('slider_text') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Slayt Buton Metni</label>
                    <input type="text" name="slider_button_text" class="form-control" value="{{ old('slider_button_text') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slayt Buton URL</label>
                    <input type="text" name="slider_button_url" class="form-control" value="{{ old('slider_button_url') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slayt Fotoğrafı *</label>
                    <div>
                        <input type="file" name="slider_photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection
