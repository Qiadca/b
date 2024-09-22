@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_blog) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $blog->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-header">
                        <h2>{{ $blog->name }}</h2>
                        {!! $blog->detail !!}
                    </div>
                    <div class="row">
                        @foreach($blog_items as $row)
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="blog-item flex-fill">
                                    <a href="{{ url('blog/'.$row->blog_slug) }}" class="blog-link">
                                        <img src="{{ asset('public/uploads/'.$row->blog_photo) }}" alt="{{ $row->blog_title }}" class="img-fluid">
                                    </a>
                                    <div class="item-content">
                                        <h3><a href="{{ url('blog/'.$row->blog_slug) }}" class="blog-title">{{ $row->blog_title }}</a></h3>
                                        <p>
                                            {!! nl2br(e($row->blog_content_short)) !!}
                                        </p>
                                        <a href="{{ url('blog/'.$row->blog_slug) }}" class="read-more">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    @include('layouts.sidebar_blog')
                </div>
            </div>
        </div>
    </div>
@endsection
