@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">İş İlanını Düzenle</h1>

    <form action="{{ url('admin/job/update/'.$job->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">İş İlanını Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.job.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık *</label>
                    <input type="text" name="job_title" class="form-control" value="{{ $job->job_title }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="job_slug" class="form-control" value="{{ $job->job_slug }}">
                </div>
                <div class="form-group">
                    <label for="">Kısa Açıklama *</label>
                    <textarea name="job_description_short" class="form-control h_100" cols="30" rows="10">{{ $job->job_description_short }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Sorumluluk *</label>
                    <textarea name="job_responsibility" class="form-control editor" cols="30" rows="10">{{ $job->job_responsibility }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Eğitim</label>
                    <textarea name="job_education" class="form-control editor" cols="30" rows="10">{{ $job->job_education }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Deneyim</label>
                    <textarea name="job_experience" class="form-control editor" cols="30" rows="10">{{ $job->job_experience }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Ek Gereksinim</label>
                    <textarea name="job_additional_requirement" class="form-control editor" cols="30" rows="10">{{ $job->job_additional_requirement }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Fayda</label>
                    <textarea name="job_benefit" class="form-control editor" cols="30" rows="10">{{ $job->job_benefit }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Son Tarih *</label>
                    <input id="datepicker" type="text" name="job_deadline" class="form-control" value="{{ $job->job_deadline }}">
                </div>
                <div class="form-group">
                    <label for="">Boş Pozisyon *</label>
                    <input type="text" name="job_vacancy" class="form-control" value="{{ $job->job_vacancy }}">
                </div>
                <div class="form-group">
                    <label for="">Firma Adı</label>
                    <input type="text" name="job_company_name" class="form-control" value="{{ $job->job_company_name }}">
                </div>
                <div class="form-group">
                    <label for="">Konum *</label>
                    <input type="text" name="job_location" class="form-control" value="{{ $job->job_location }}">
                </div>
                <div class="form-group">
                    <label for="">Job Type *</label>
                    <select name="job_type" class="form-control">
                        <option value="Full Time" @if($job->job_type == 'Full Time') selected @endif>Tam Zamanlı</option>
                        <option value="Part Time" @if($job->job_type == 'Part Time') selected @endif>Yarı Zamanlı</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Maaş *</label>
                    <input type="text" name="job_salary" class="form-control" value="{{ $job->job_salary }}">
                </div>
                <div class="form-group">
                    <label for="">Sıra</label>
                    <input type="text" name="job_order" class="form-control" value="{{ $job->job_order }}">
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $job->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $job->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
