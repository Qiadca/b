@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sosyal Medya Öğesini Düzenle</h1>

    <form action="{{ url('admin/social-media/update/'.$social_media->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sosyal Medya Öğesini Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.social_media.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">URL *</label>
                            <input type="text" name="social_url" class="form-control" value="{{ $social_media->social_url }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Mevcut İkon</label>
                            <div class="col-sm-5">
                                <div class="pt_10">
                                    <i class="{{ $social_media->social_icon }}"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">İkon (Font Awesome 5 Codes) *</label>
                            <input type="text" name="social_icon" class="form-control" value="{{ $social_media->social_icon }}">
                            <div class="text-danger">Example: "fab fa-facebook-f"</div>
                        </div>
                        <div class="form-group">
                            <label for="">Sırası</label>
                            <input type="text" name="social_order" class="form-control" value="{{ $social_media->social_order }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
