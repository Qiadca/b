@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_service) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $service->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="servis" class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $service->detail !!}
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
			
                <div class="service">
				
                    
					 @foreach($service_items as $index => $row)
                    <div id="hizmet" class="service-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('service/'.$row->slug) }}"><img class="images-{{ $index + 1 }}" src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                        </div>
                        <div id="hizmet_yazi" class="text">
                            <h3><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></h3>
                            <h3 class="service-baslik2">
                                {!! nl2br(e($row->short_description)) !!}
                            </h3>
							<p class="servis-yazi1"> {{$row->description }}</p>
                            <div class="read-more">
                                <a href="{{ url('service/'.$row->slug) }}">Devamını Oku</a>
                            </div>
                        </div>
                    </div>
				
                    @endforeach
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $service_items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
