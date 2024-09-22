@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sidebar Bilgilerini Düzenle</h1>

    <form action="{{ url('admin/setting/general/sidebar/update') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Sidebar Toplam Son Gönderi</label>
                            <input type="text" name="sidebar_total_recent_post" class="form-control" value="{{ $general_setting->sidebar_total_recent_post }}">
                        </div>
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection