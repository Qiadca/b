@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_forget_password) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Parolayı Sıfırla</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Müşteri Parolasını Sıfırla</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reg-login-form">
                        <div class="inner">
                            <form action="{{ url('customer/reset-password/update') }}" method="post">
                                @csrf
                                <input type="hidden" name="current_email" value="{{ $email }}">
                                <div class="form-group">
                                    <label for="">Yeni Parola</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="form-group">
                                    <label for="">Parolayı Yeniden Yazın</label>
                                    <input type="password" class="form-control" name="retype_password">
                                </div>

                                @if($g_setting->google_recaptcha_status == 'Show')
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-arf">Güncelle</button>
                                <a href="{{ route('customer.login') }}" class="btn btn-warning">Giriş Sayfasına Dön</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
