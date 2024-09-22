@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_contact) }})">
        <div class="bg-page"></div>
        <div class="text">
        <title>@yield('title', 'İletişim')</title>
            <h1>{{ $contact->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $contact->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $contact->detail !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Adres</h4>
                            <p>
                                {!! nl2br(e($contact->contact_address)) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-phone-volume" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telefon Numarası</h4>
                            <p>
                                {!! nl2br(e($contact->contact_phone)) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-envelope-open" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>E-Posta Adresi</h4>
                            <p>
                                {!! nl2br(e($contact->contact_email)) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row contact-form">
                <div class="col-md-12">
                    <h4 class="contact-form-title mt_50 mb_20">İletişim Formu</h4>
                    <form action="{{ route('front.contact_form') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>İsim (Gerekli)</label>
                                    <input type="text" class="form-control" name="visitor_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-Posta Adresi (Gerekli)</label>
                                    <input type="email" class="form-control" name="visitor_email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telefon Numarası</label>
                                    <input type="text" class="form-control" name="visitor_phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mesaj (Gerekli)</label>
                            <textarea name="visitor_message" class="form-control h-200" cols="30" rows="10"></textarea>
                        </div>

                        @if($g_setting->google_recaptcha_status == 'Show')
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                        </div>
                        @endif

                        <button id="iletisim-buton" type="submit" class="btn btn-primary mt_10">Mesaj Gönder</button>
                </div>
            </div>
        </div>
    </div>
@endsection
