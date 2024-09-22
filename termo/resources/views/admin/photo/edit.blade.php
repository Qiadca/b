@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Fotoğrafı Düzenle</h1>

    <form action="{{ url('admin/photo-gallery/update/'.$photo->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Fotoğrafı Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.photo.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Mevcut Fotoğraf</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$photo->photo_name) }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Fotoğrafı Değiştir</label>
                    <div>
                        <input type="file" name="photo_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Altyazı</label>
                            <input type="text" name="photo_caption" class="form-control" value="{{ $photo->photo_caption }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Sırası</label>
                            <input type="text" name="photo_order" class="form-control" value="{{ $photo->photo_order }}">
                        </div>        
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
