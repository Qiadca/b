@extends('layouts.app')

@section('content')
<style>

</style>
<div id="slayt" class="slider">
    <div class="slide-carousel owl-carousel">

        @foreach($sliders as $row)
        <div class="slider-item" style="background-image:url({{ asset('public/uploads/'.$row->slider_photo) }});">
		       

            <div class="slider-bg"></div>
			
            <div class="container">
			
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="slider-table">
                            <div class="slider-text">
							 <div class="slider-item-mobil"><img src="{{ asset('public/uploads/'.$row->slider_photo) }}" alt="">
                                <div class="text-animated">
                                    <h1>{{ $row->slider_heading }}</h1>
                                </div>
                                <div class="text-animated">
                                    <p>
                                        {!! nl2br(e($row->slider_text)) !!}
                                    </p>
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
        </div>
        @endforeach
  </div>
    </div>
</div>
@if($page_home->appointment_status == 'Show')
<div class="cta" style="background-image: url({{ asset('public/uploads/'.$page_home->appointment_bg) }});">
   
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cta-box text-center">
                    <h2>{{ $page_home->appointment_title }}</h2>
					<div class="row-cl">
					<div class="row1">
					<div class="icon1" >
					<img src="../termo/resimler/icon1.svg">
					</div> 
					<p> Her An İstediğiniz Gibi! <br>
                    Hem Sıcak, Hem de Soğuk</p>
					</div> 
						
<div class="row2">
						<div class="icon2"><img src="../termo/resimler/icon2.svg"></div>
					 
					 <p> Kolaylık Her Şeydir! <br>
 Her Yerde Yanınızda Taşıyın</p>
					 </div>
					 </div> 
	        <div class="cta-mobil"><img src="{{ asset('public/uploads/'.$page_home->appointment_bg) }}" alt="">

					 {{--<p class="mt-3">
                        {!! nl2br(e($page_home->appointment_text)) !!}
                    </p>
                    <a href="{{ $page_home->appointment_btn_url }}" class="btn btn-primary">{{ $page_home->appointment_btn_text }}</a>
					--}}
                </div>
				  </div>
            </div>
        </div>
    </div>
</div>
@endif

@if($page_home->why_choose_status == 'Show')
<div class="feature">
    <div class="container">
        <div class="row">
		<div class="col-md-6">
            <div id="neden-baslik" class="col-md-12">
                <div id="neden-baslik2" class="heading wow fadeInUp">
                    <h2>{{ $page_home->why_choose_title }}</h2>
                    <h3>{{ $page_home->why_choose_subtitle }}</h3>
                </div>
            </div>
       
        <div class="row">
            @foreach($why_choose_items as $row)
            <div id="neden_biz" >
                <div id ="neden-biz-ic" class="feature-item wow fadeInUp">
                    <div class="icon">
                        <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                    </div>
                    <h4>{{ $row->name }}</h4>
                    <p>
                        {!! nl2br(e($row->description)) !!}
                    </p>
                </div>
            </div>
            @endforeach
			
        </div>
		</div>
		<div class="col-md-6">
	     <img class="mob-res1" src="../termo/resimler/bnn.jpg" alt="">
		 </div>
		 </div>
    </div>
</div>
@endif



@if($page_home->special_status == 'Show')
<div class="special" style="background-image: url({{ asset('public/uploads/'.$page_home->special_bg) }});">
    <div class="bg"></div>
    <div class="container">
        <div class="roww">
		  <div class=" wow fadeInRight">
                <div class="video-section" style="background-image: url({{ asset('public/uploads/'.$page_home->special_video_bg) }})">
                    <div class="bg video-section-bg"></div>
                    <div class="video-button-container">
                        <a class="video-button" href="https://www.youtube.com/watch?v={{ $page_home->special_yt_video }}"><span></span></a>
                    </div>
                </div>
            </div>
           
          
        </div>
		 <div class=" wow fadeInLeft" id="special-yazi">
                <h2>{{ $page_home->special_title }}</h2>
                <h3>{{ $page_home->special_subtitle }}</h3>
                <p>
                    {!! nl2br(e($page_home->special_content)) !!}
                </p>
                <div class="read-more">
                    <a href="{{ $page_home->special_btn_url }}" class="btn btn-primary btn-arf">{{ $page_home->special_btn_text }}</a>
                </div>
            </div>
    </div>
</div>
@endif

@if($page_home->project_status == 'Show')
<div class="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->project_title }}</h2>
                    <h3>{{ $page_home->project_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-carousel owl-carousel">
                    @foreach($projects as $row)
                    <div class="project-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('project/'.$row->project_slug) }}"><img src="{{ asset('public/uploads/'.$row->project_featured_photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('project/'.$row->project_slug) }}">{{ $row->project_name }}</a></h3>
                            <p>
                                {!! nl2br(e($row->project_content_short)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('project/'.$row->project_slug) }}">Devamını Oku</a>
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
@if($page_home->service_status == 'Show')
<div id="servis" class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->service_title }}</h2>
                    <h3>{{ $page_home->service_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="s">
            <div class="col-md-12">
                <div class="service">
                   @foreach($services as $index => $row)
    <div class="rows">
        <div id="hizmet" class="service-item wow fadeInUp">
            <div class="photo">
                <a href="{{ url('service/'.$row->slug) }}"><img class="image-{{ $index + 1 }}" src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
            </div>
            <div id="hizmet_yazis" class="text">
                <h3><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></h3>
                <h3>{!! nl2br(e($row->short_description)) !!}</h3>
                <p>{{$row->description }}</p>
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
{{--<div class="container" id="iletisim-index">
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
	 </div>
	  </div>
--}}
{{--<div class="container">
    <h2 class="photo-index-h">Saha Görselleri</h2>
 <div class="row" id="photo-index">

 @foreach ($photos as $row)
             
                <div class="col-md-4" >
                    <div class="gallery-photo">
                        <div class="gallery-photo-bg"></div>
                        <a href="{{ asset('public/uploads/'.$row->photo_name) }}" class="magnific">
                            <img src="{{ asset('public/uploads/'.$row->photo_name) }}">
                            <div class="plus-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
			
                @endforeach
	 </div>
	 </div>
	 --}}
	 
@if($page_home->testimonial_status == 'Show')
<div class="testimonial" >
    <div class="testimonial-bg " id="neden_biz2" ></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->testimonial_title }}</h2>
                    <h3>{{ $page_home->testimonial_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
           
              
                    @foreach($testimonials as $row)
					<div  class="col-md-4 col-6 ">
                    <div class="testimonial-item wow fadeInUp">
					 <div id="kero">
					  
                        <div class="photo">
                            <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                        </div>
						<div id="rating1">
						<p class="testim-1">{{ $row->name }}</p> 
						<img src="../termo/resimler/rating.jpg" class="rating">
						 </div>
						<p class="testim-2">{{ $row->comment }}</p>
						
                          </div>
                    </div>
					 </div>
                    @endforeach
            
            
        </div>
		
		
    </div>
</div>
@endif



@if($page_home->team_member_status == 'Show')
<div class="team bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->team_member_title }}</h2>
                    <h3>{{ $page_home->team_member_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel owl-carousel">

                    @foreach($team_members as $row)
                    <div class="team-item wow fadeInUp">
                        <div class="team-photo">
                            <a href="{{ url('team-member/'.$row->slug) }}" class="team-photo-anchor">
                                <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="Team Member Photo">
                            </a>
                        </div>
                        <div class="team-text">
                            <h4><a href="{{ url('team-member/'.$row->slug) }}">{{ $row->name }}</a></h4>
                            <p>{{ $row->designation }}</p>
                        </div>
                    </div>
                    @endforeach
                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endif








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
                    <div class="blog-item wow fadeInUp">
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


@if($page_home->newsletter_status == 'Show')
<div class="newsletter-area" style="background-image: url({{ asset('public/uploads/'.$page_home->newsletter_bg) }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 newsletter">
                <div class="newsletter-text wow fadeInUp">
                    <h2>{{ $page_home->newsletter_title }}</h2>
                    <p>
                        {!! nl2br(e($page_home->newsletter_text)) !!}
                    </p>
                </div>
                <div class="newsletter-button wow fadeInUp">
                    <form action="{{ route('front.subscription') }}" method="post" class="frm_newsletter justify-content-center">
                        @csrf
                        <input type="text" placeholder="Enter Your Email" name="subs_email">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection