@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_job) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Job Title: {{ $job_detail->job_title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $job_detail->job_title }}</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="career-detail">
                        <div class="item">
                            <h3>İş Başlığı:</h3>
                            <p>
                                {{ $job_detail->job_title }}
                            </p>
                        </div>
                        <div class="item">
                            <h3>İş Sorumlulukları:</h3>
                            {!! $job_detail->job_responsibility !!}
                        </div>

                        <div class="item">
                            <h3>Eğitimsel Yeterlilik:</h3>
                            {!! $job_detail->job_education !!}
                        </div>
                        <div class="item">
                            <h3>Deneyim Gereksinimleri:</h3>
                            {!! $job_detail->job_experience !!}
                        </div>
                        <div class="item">
                            <h3>Ek Gereksinimler:</h3>
                            {!! $job_detail->job_additional_requirement !!}
                        </div>
                        <div class="item">
                            <h3>Tazminat ve Diğer Faydalar</h3>
                            {!! $job_detail->job_benefit !!}
                        </div>
                        <div class="item">
                            <a href="{{ url('job/apply/'.$job_detail->job_slug) }}" class="btn btn-primary btn-arf">Şimdi Uygula</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="career-sidebar">
                        <div class="widget">
                            <h3>Bu İş Hakkında</h3>
                            <div class="career-detail-sidebar">
                                <div class="item">
                                    <h4>Boş Pozisyon</h4>
                                    <p>{{ $job_detail->job_vacancy }}</p>
                                </div>
                                <div class="item">
                                    <h4>Şirket İsmi</h4>
                                    <p>{{ $job_detail->job_company_name }}</p>
                                </div>
                                <div class="item">
                                    <h4>İş Konumu</h4>
                                    <p>{{ $job_detail->job_location }}</p>
                                </div>
                                <div class="item">
                                    <h4>Son Başvuru Tarihi</h4>
                                    <p>{{ $job_detail->job_deadline }}</p>
                                </div>
                                <div class="item">
                                    <h4>İş Tipi</h4>
                                    <p>{{ $job_detail->job_type }}</p>
                                </div>
                                <div class="item">
                                    <h4>Maaş</h4>
                                    <p>{{ $job_detail->job_salary }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
