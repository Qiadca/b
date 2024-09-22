@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Tawk Canlı Sohbet Ayarını Düzenle</h1>

    <form action="{{ url('admin/setting/general/tawklivechat/update') }}" method="post">
        @csrf
        
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tawk Canlı Sohbet Kodu</label>
                            <textarea name="tawk_live_chat_code" class="form-control" cols="30" rows="10">{{ $general_setting->tawk_live_chat_code }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tawk Canlı Sohbet Durumu</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tawk_live_chat_status" id="rr1" value="Show" @if($general_setting->tawk_live_chat_status == 'Show') checked @endif>
                                    <label class="form-check-label font-weight-normal" for="rr1">Göster</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tawk_live_chat_status" id="rr2" value="Hide" @if($general_setting->tawk_live_chat_status == 'Hide') checked @endif>
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