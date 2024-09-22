@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_login) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Müşteri Girişi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Müşteri Girişi</li>
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
                            <form action="{{ route('customer.login.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">E-Posta Adresi</label>
                                    <input type="text" class="form-control" name="customer_email">
                                </div>
                                <div class="form-group">
                                    <label for="">Parola</label>
                                    <input type="password" class="form-control" name="customer_password">
                                </div>

                                @if($g_setting->google_recaptcha_status == 'Show')
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-arf">Giriş Yap</button>
                                <a href="{{ route('customer.forget_password') }}" class="btn btn-warning">Parolamı Unuttum</a>
                                <div class="new-user">
                                    <a href="{{ route('customer.registration') }}">Yeni kullanıcı? Kayıt Yap</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
