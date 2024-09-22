@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_job_application) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Apply for: {{ $job_detail->job_title }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.career') }}">Kariyer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $job_detail->job_title }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-sidebar">
                        <div class="widget">
                            <h3>Bu İşe Başvur</h3>
                            <div class="type-3">
                                <form action="{{ route('front.apply_form') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <input type="hidden" name="job_id" value="{{ $job_detail->id }}">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>İsim *</label>
                                                <input type="text" class="form-control" name="applicant_first_name" value="{{ old('applicant_first_name') }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Soyisim *</label>
                                                <input type="text" class="form-control" name="applicant_last_name" value="{{ old('applicant_last_name') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>E-Posta Adresi *</label>
                                                <input type="email" class="form-control" name="applicant_email" value="{{ old('applicant_email') }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Telefon Numarası *</label>
                                                <input type="text" class="form-control" name="applicant_phone" value="{{ old('applicant_phone') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Ülke *</label>
                                                <input type="text" class="form-control" name="applicant_country" value="{{ old('applicant_country') }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Semt *</label>
                                                <input type="text" class="form-control" name="applicant_state" value="{{ old('applicant_state') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Sokak *</label>
                                                <input type="text" class="form-control" name="applicant_street" value="{{ old('applicant_street') }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Şehir *</label>
                                                <input type="text" class="form-control" name="applicant_city" value="{{ old('applicant_city') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Posta Kodu *</label>
                                                <input type="text" class="form-control" name="applicant_zip_code" value="{{ old('applicant_zip_code') }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Beklenen Maaş*</label>
                                                <input type="text" class="form-control" name="applicant_expected_salary" value="{{ old('applicant_expected_salary') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Ön Yazı *</label>
                                        <textarea name="applicant_cover_letter" class="form-control h-300" cols="30" rows="10">{{ old('applicant_cover_letter') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Özgeçmiş Ekle *</label><br>
                                        <input type="file" name="applicant_cv"><br>
                                        <span class="text-danger">(Only doc, docx or pdf are allowed)</span>
                                    </div>

                                    @if($g_setting->google_recaptcha_status == 'Show')
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Bu formu kullanarak, verilerinizin bu web sitesi tarafından saklanmasını ve işlenmesini kabul etmiş olursunuz.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt_10 button_final" disabled>Başvuruyu Gönder</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#customCheck1").on('change',function() {
            if(this.checked)
            {
                $(".button_final").prop('disabled', false);
            }
            else
            {
                $(".button_final").prop('disabled', true);
            }
        });
    </script>

@endsection
