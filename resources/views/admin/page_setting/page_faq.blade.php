@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">S.S.S Sayfası Bilgilerini Düzenle</h1>

    <form action="{{ url('admin/page/faq/update') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim</label>
                    <input type="text" name="name" class="form-control" value="{{ $page_faq->name }}">
                </div>
                <div class="form-group">
                    <label for="">Detay</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $page_faq->detail }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Durum</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Show" @if($page_faq->status == 'Show') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">Göster</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Hide" @if($page_faq->status == 'Hide') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">Gizle</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $page_faq->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_faq->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>
@endsection
