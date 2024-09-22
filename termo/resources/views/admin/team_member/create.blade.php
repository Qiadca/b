@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Ekip Üyesi Ekle</h1>

    <form action="{{ route('admin.team_member.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Ekip Üyesi Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.team_member.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                </div>
                <div class="form-group">
                    <label for="">Atama *</label>
                    <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
                </div>
                <div class="form-group">
                    <label for="">Derece</label>
                    <textarea name="degree" class="form-control editor" cols="30" rows="10">{{ old('degree') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Detay</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ old('detail') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}">
                </div>
                <div class="form-group">
                    <label for="">Twitter</label>
                    <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                </div>
                <div class="form-group">
                    <label for="">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
                </div>
                <div class="form-group">
                    <label for="">YouTube</label>
                    <input type="text" name="youtube" class="form-control" value="{{ old('youtube') }}">
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}">
                </div>
                <div class="form-group">
                    <label for="">E-Posta</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="">Telefon</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="">Web Site</label>
                    <input type="text" name="website" class="form-control" value="{{ old('website') }}">
                </div>
                <div class="form-group">
                    <label for="">Video (YouTube Id)</label>
                    <input type="text" name="video_youtube" class="form-control" value="{{ old('video_youtube') }}">
                </div>
                <div class="form-group">
                    <label for="">Adres</label>
                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ old('address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf *</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection
