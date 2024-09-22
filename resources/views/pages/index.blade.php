@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.google.com/specimen/Poppins?query=poppins" rel="stylesheet">
@endsection

@section('content')
    <!-- Slider Section -->
    <div id="slayt" class="slider">
        <div class="slide-carousel owl-carousel">
            @foreach($sliders as $row)
                <div class="slider-item" style="background-image:url({{ asset('public/uploads/'.$row->slider_photo) }});">
                    <div class="slider-bg"></div>
                    <div class="container">
                        <div class="col-md-12 col-sm-12">
                            <div class="slider-table">
                                <div class="slider-text">
                                    <div id="mob-slider" class="slider-item-mobil">
                                        <img src="{{ asset('public/uploads/'.$row->slider_photo_mb) }}" alt="">
                                        <div class="text-animated">
                                            <h1>{{ $row->slider_heading }}</h1>
                                        </div>
                                        <div class="text-animated">
                                            <p>{!! nl2br(e($row->slider_text)) !!}</p>
                                        </div>
                                    </div>
                                    <div class="text-animated">
                                        <ul>
                                            <li><a href="{{ $row->slider_button_url }}">{{ $row->slider_button_text }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Service Section -->
    @if($page_home->service_status == 'Show')
        <div class="homepage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading wow fadeInUp">
                            <br>
                            <br>
                            <h1>{{ $page_home->service_title }}</h1>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-carousel owl-carousel">
                            @foreach($services as $row)
                                <div id="hizmet-div" class="service-item wow fadeInUp">
                                    <div class="photo" id="kateg-foto">
                                        <a href="{{ url('hizmetlerimiz/'.$row->slug) }}"><img src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h3><a href="{{ url('hizmetlerimiz/'.$row->slug) }}">{{ $row->name }}</a></h3>
                                        <p>{!! nl2br(e($row->short_description)) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

  <!-- Contact Section -->
<div class="homepage" id="iletisim-index">
    <h2 class="teklif-index">Teklif Al</h2>
    <div id="contact-form-index">
        <h4 class="contact-form-title mt_50 mb_20">İletişim Formu</h4>
        <form action="{{ route('front.contact_form') }}" method="post">
            @csrf
            <div class="form-group">
                <label>İsim (Gerekli)</label>
                <input type="text" class="form-control" name="visitor_name" required>
            </div>
            <div class="form-group">
                <label>E-Posta Adresi (Gerekli)</label>
                <input type="email" class="form-control" name="visitor_email" required>
            </div>
            <div class="form-group">
                <label>Telefon Numarası</label>
                <input type="text" class="form-control" name="visitor_phone">
            </div>
            <div class="form-group">
                <label>Mesaj (Gerekli)</label>
                <textarea name="visitor_message" class="form-control" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" id="contact-form-button-index" class="btn btn-primary mt_10">Mesaj Gönder</button>
        </form>
    </div>
    <div class="contact-index">
        @foreach($page_contact_items as $row)
            <div class="contact-text">
                <p>ALPHA PSİKOLOJİK DANIŞMANLIK</p>
            </div>
            <div class="contact-text">
                <p>{!! nl2br(e($row->contact_address)) !!}</p>
            </div>
            <div class="contact-text">
                <p class="contact-p-1">{!! nl2br(e($row->contact_phone)) !!}</p>
            </div>
            <div class="contact-text">
                <p class="contact-p-2">{!! nl2br(e($row->contact_email)) !!}</p>
            </div>
        @endforeach
    </div>
</div>


    <!-- Latest Blog Section -->
    @if($page_home->latest_blog_status == 'Show')
        <div class="blog-area homepage">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading wow fadeInUp">
                            <h2>{{ $page_home->latest_blog_title }}</h2>
                            <h3>{{ $page_home->latest_blog_subtitle }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-carousel owl-carousel">
                            @foreach($blogs as $row)
                                <div id="anasayfa-blog" class="blog-item wow fadeInUp">
                                    <a href="{{ url('blog/'.$row->blog_slug) }}">
                                        <div class="blog-image">
                                            <img src="{{ asset('public/uploads/'.$row->blog_photo) }}" alt="Blog Image">
                                            <div class="date">
                                                <h3>{{ \Carbon\Carbon::parse($row->created_at)->format('d') }}</h3>
                                                <h4>{{ \Carbon\Carbon::parse($row->created_at)->format('M') }}</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="blog-text">
                                        <h3><a href="{{ url('blog/'.$row->blog_slug) }}">{{ $row->blog_title }}</a></h3>
                                        <p>{!! nl2br(e($row->blog_content_short)) !!}</p>
                                        <div class="read-more">
                                            <a href="{{ url('blog/'.$row->blog_slug) }}">Devamını Oku</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection
