@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Logo'yu Düzenle</h1>

    <form action="{{ url('admin/setting/general/logo/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_photo" value="{{ $general_setting->logo }}">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Mevcut Logo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$general_setting->logo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Logo'yu Değiştir</label>
                    <div>
                        <input type="file" name="logo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection