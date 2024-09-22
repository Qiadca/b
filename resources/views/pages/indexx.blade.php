@extends('layouts.app')

@section('content')
<style>

</style>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

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

@if($page_home->service_status == 'Show')
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->service_title }}</h2>
                    <h3>{{ $page_home->service_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-carousel owl-carousel">
                    @foreach($services as $row)
                    <div id="hizmet-div" class="service-item wow fadeInUp">
                        <div class="photo" id="kateg-foto">
                            <a href="{{ url('service/'.$row->slug) }}"><img src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></h3>
                            <p>
                                {!! nl2br(e($row->short_description)) !!}
                            </p>
                            <div id="incele-kateg" class="read-more">
                                <a href="{{ url('service/'.$row->slug) }}">İncele</a>
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
<div class="container" id="iletisim-index">
	 <h2 class="teklif-index"> Teklif İste </h2>
	  <div class="row">
	 <div class="col-md-6">
	 <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(%C3%87ORLU%20V%C4%B0N%C3%87%20%C4%B0%C5%9ELETMEC%C4%B0L%C4%B0%C4%9E%C4%B0%20NAK.%20%C4%B0N%C5%9E.%20SAN.%20VE%20T%C4%B0C.%20LTD.%20%C5%9ET%C4%B0.)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
	  	   
                <div class="col-md-6">
                    <h4 id="contact-form-index" class="contact-form-title mt_50 mb_20">İletişim Formu</h4>
                    <form action="{{ route('front.contact_form') }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>İsim (Gerekli)</label>
                                    <input type="text" class="form-control" name="visitor_name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>E-Posta Adresi (Gerekli)</label>
                                    <input type="email" class="form-control" name="visitor_email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Telefon Numarası</label>
                                    <input type="text" class="form-control" name="visitor_phone">
                                </div>
                            </div>
							<div class="form-group col-md-12">
                            <label>Mesaj (Gerekli)</label>
                            <textarea name="visitor_message" class="form-control" cols="30" rows="10" style="height:185px!important;"></textarea>
                        </div>
                        </div>
                        

             

                        <button type="submit" id="contact-form-button-index" class="btn btn-primary mt_10">Mesaj Gönder</button>
                    </form>
                </div>
           
	  
	  </div>
	   <div class="contact-index">
	  @foreach($page_contact_items as $row)
	  
	  <div class="contact-text">
	    <br>
	   <p>
	   ÇORLU VİNÇ İŞLETMECİLİĞİ NAK. İNŞ. SAN. VE TİC. LTD. ŞTİ.
	   </p>
	  </div>
	 <div class="contact-text">
                             <p>
                             {!! nl2br(e($row->contact_address)) !!}
                            </p>
                        </div>
						  <div class="contact-text">
						   <br>
                            <p class="contact-p-1">
                              {!! nl2br(e($row->contact_phone)) !!}
                            </p>
                        </div>
						<div class="contact-text">
						<br>
                            <p class="contact-p-2">
                              {!! nl2br(e($row->contact_email)) !!}
                            </p>
                        </div>
						   @endforeach

@if($page_home->latest_blog_status == 'Show')
<div class="blog-area">
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
                            <p>
                                {!! nl2br(e($row->blog_content_short)) !!}
                            </p>
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.google.com/specimen/Poppins?query=poppins" rel="stylesheet">
</head>
<body>
    <div class="centered-text">
     Servis Verdiğimiz Markalar
    </div>
</body>

@if($page_home->testimonial_status == 'Show')
<div class="testimonial ">
    <div class="testimonial-bg " id="neden_biz2" ></div>
    <div class="container">
	{{--   <div class="row">
            <div class="col-md-12 ">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->testimonial_title }}</h2>
                    <h3>{{ $page_home->testimonial_subtitle }}</h3>
                </div>
            </div>
        </div>
		--}}
        <div class="row ">
           
              <div class="col-md-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach($testimonials as $row)
					
                    <div class="testimonial-item wow fadeInUp">
					 <div id="kero">
					  
                        <div class="photo">
                            <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                        </div>
						{{--
						<div id="rating1">
						<p class="testim-1">{{ $row->name }}</p> 
						
						 </div>
						<p class="testim-2">{{ $row->comment }}</p>
						--}}
                          </div>
                    </div>
					
                    @endforeach

@endsection