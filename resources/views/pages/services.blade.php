@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_service) }})">
        <div class="bg-page"></div>
        <div class="text">
            <title>@yield('title', 'Hizmetler')</title>
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
            <div class="row d-flex align-items-stretch">
                @foreach($service_items as $index => $row)
                    <div class="col-md-4 col-sm-6 mb-4 d-flex">
                        <div class="service-item wow fadeInUp flex-fill">
                            <div class="photo">
                                <a href="{{ url('hizmetlerimiz/'.$row->slug) }}">
                                    <img class="img-fluid" src="{{ asset('public/uploads/'.$row->photo) }}" alt="{{ $row->name }}">
                                </a>
                            </div>
                            <div id="hizmet_yazi" class="text mt-3">
                                <!-- Başlık -->
                                <h3><a href="{{ url('hizmetlerimiz/'.$row->slug) }}">{{ $row->name }}</a></h3>
                                <!-- Kısa Açıklama -->
                                <h3 class="service-baslik2">
                                    {!! nl2br(e($row->short_description)) !!}
                                </h3>
                                <!-- Uzun Açıklama (gizli) -->
                                <p id="desc-{{ $index }}" class="description" style="display: none;">
                                    {{ $row->description }}
                                </p>
                                <div class="read-more mt-3">
                                    <a href="{{ url('hizmetlerimiz/'.$row->slug) }}" class="btn btn-primary show-more" data-target="#desc-{{ $index }}">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $service_items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('.show-more').click(function(e){
            e.preventDefault();
            var target = $(this).data('target');
            $(target).slideToggle();
            if($(this).text() === 'Devamını Oku') {
                $(this).text('Kapat');
            } else {
                $(this).text('Devamını Oku');
            }
        });
    });
</script>
@endsection
