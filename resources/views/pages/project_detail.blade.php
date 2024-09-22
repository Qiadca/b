@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_project_detail) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $project_detail->project_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.projects') }}">Projeler</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $project_detail->project_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section single-project">

                        <div class="text mt_20">
                            <h2>Hizmet Bölgesi Detayları</h2>
                            <p>
                                <img src="{{ asset('public/uploads/'.$project_detail->project_featured_photo) }}" class="featured-photo">
                            </p>
                            <p>
                                {!!  $project_detail->project_content !!}
                            </p>

                  
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">

          
                        <div class="widget">
                            <h3>Tüm Hizmet Bölgelerimiz</h3>
                            <div class="type-2">
                                <ul>
                                    @foreach($project_items as $row)
                                        <li>
                                            <img src="{{ asset('public/uploads/'.$row->project_featured_photo) }}">
                                            <a href="{{ url('araclarimiz/'.$row->project_slug) }}">{{ $row->project_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
