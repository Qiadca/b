@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sosyal Medya Öğesi Ekle</h1>

    <form action="{{ route('admin.social_media.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sosyal Medya Öğesi Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.social_media.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">URL *</label>
                            <input type="text" name="social_url" class="form-control" value="{{ old('social_url') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">İkon (Font Awesome 5 Codes) *</label>
                            <input type="text" name="social_icon" class="form-control" value="{{ old('social_icon') }}">
                            <div class="text-danger">Example: "fab fa-facebook-f"</div>
                        </div>
                        <div class="form-group">
                            <label for="">Sırası</label>
                            <input type="text" name="social_order" class="form-control" value="{{ old('social_order', '0') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection