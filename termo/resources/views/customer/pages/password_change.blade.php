@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_customer_panel) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Parolayı Değiştir</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Parolayı Değiştir</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-md-3">				
                    <div class="user-sidebar">
                        @include('layouts.sidebar_customer')
                    </div>
                </div>

                <div class="col-md-9">
                    <form action="{{ url('customer/password-change/update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Yeni Parola *</label>
                                    <input type="password" class="form-control" value="" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Parolayı Yeniden Yazın *</label>
                                    <input type="password" class="form-control" value="" name="re_password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Parolayı Güncelle</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
