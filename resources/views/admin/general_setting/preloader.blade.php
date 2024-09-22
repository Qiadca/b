@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Ön Yükleyici Bilgilerini Düzenle</h1>

    <form action="{{ url('admin/setting/general/preloader/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_photo" value="{{ $general_setting->preloader_photo }}">

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Mevcut Ön Yükleyici Fotoğrafı</label>
                            <div>
                                <img src="{{ asset('public/uploads/'.$general_setting->preloader_photo) }}" alt="" class="w_200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Önyükleyici Fotoğrafını Değiştir</label>
                            <div>
                                <input type="file" name="preloader_photo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Önyükleyici Durumu</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="preloader_status" id="rr1" value="Show" @if($general_setting->preloader_status == 'Show') checked @endif>
                                    <label class="form-check-label font-weight-normal" for="rr1">Göster</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="preloader_status" id="rr2" value="Hide" @if($general_setting->preloader_status == 'Hide') checked @endif>
                                    <label class="form-check-label font-weight-normal" for="rr2">Gizle</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection