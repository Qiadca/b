@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Renk Bilgilerini Düzenle</h1>

    <form action="{{ url('admin/setting/general/color/update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tema Rengi</label>
                            <input type="text" name="theme_color" class="form-control jscolor" value="{{ $general_setting->theme_color }}">
                        </div>
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection