@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_about) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $create->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $create->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                {!! $create->detail !!}
                </div>
                        <h4>Randevu Al</h4>
                    
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('appointment.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Ad Soyad</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" name="phone" class="form-control" id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Tarih</label>
                                <input type="date" name="date" class="form-control" id="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Saat</label>
                                <input type="time" name="time" class="form-control" id="time" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Randevu Al</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="{{ url('/yeni') }}" class="btn btn-secondary">Ana Sayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
@endsection

@section('scripts')
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
