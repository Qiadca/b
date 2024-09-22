@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_product_detail) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $product_detail->product_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.shop') }}">Ürünler</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product_detail->product_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row product-detail pt_30 pb_40">
                <div class="col-md-5">
                    <div class="photo"><img src="{{ asset('public/uploads/'.$product_detail->product_featured_photo)  }}"></div>
                </div>
                <div class="col-md-6" id="urun-detay">
                    <form action="{{ route('front.add_to_cart') }}" method="post">
                        @csrf
                        <h2>{{ $product_detail->product_name }}</h2>
					<div class="row11">
					<div class="icon-shop" >
					<img src="/termo/resimler/shop-icon.svg">
					</div> 
					<div class="icon-shop-yazi" >
					<p> Her An İstediğiniz Gibi! <br>
                    Hem Sıcak, Hem de Soğuk</p>
					</div> 
					<div class="icon-shop2" >
					<img src="/termo/resimler/shop-paylas.svg">
					</div> 
					</div> 
                        <p>
                            <a href="javascript:void(0);" class="stock-available-amount">Stok Mevcut: {{ $product_detail->product_stock }}</a>
                        </p>
						{{--  <p>
                            {!! nl2br(e($product_detail->product_content_short)) !!}
                        </p>

                        <h2 class="mt_30">Ürün Fiyatı</h2>
                        <div class="price">
                            ${{ $product_detail->product_current_price }}
                            @if($product_detail->product_old_price != '')
                            <del>${{ $product_detail->product_old_price }}</del>
                            @endif
                        </div>
                         --}}
						 <div class="icon-shop4" >
					<img src="/termo/resimler/liste-icon.svg">
					<button type="submit" id="sepet-liste" class="btn btn-primary mt_30">Listeme Ekle</button>
					
					</div> 
					
					   <div class="row row12">
                        <div class="qty">
                            <input type="number" class="form-control" name="product_qty" step="1" min="1" max="" value="1" pattern="[0-9]*" inputmode="numeric">
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                         <h2 class="row13">Teklif Alın</h2>
						 
						  </div>
						  
						  {{--
						  
                        @if($product_detail->product_stock == 0)
                        <a href="javascript:void(0);" class="stock-empty">Stokta Yok</a>
                        @else
                        <button type="submit" class="btn btn-primary mt_30">Sepete Ekle</button>
                        @endif
						--}}
						<br>
                    </form>
					 <div class="icon-shop5 row" >
					<img src="/termo/resimler/group-wp.svg">
                 <a href="https://api.whatsapp.com/send?phone=905320503680&text={{ $product_detail->product_name }}" target="_blank"> <p>Whatsapp İle Teklif Alın</p> </a>
					 
					</div> 
					 <div class="urun-detay-yazis">
					<img src="/termo/resimler/clock.svg"> <p>13:00'a kadar verilen siparişler aynı gün kargolanır.</p> 
					<img src="/termo/resimler/return.svg"> <p>Kolay İade İmkanı</p> 
					<img src="/termo/resimler/protected.svg"> <p>Ücretsiz Kargo!</p> 
					 </div>
                </div>
            </div>

            <div class="row product-detail pt_30 pb_40">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Açıklama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">İade Politikası</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            {!! $product_detail->product_content !!}
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            {!! $product_detail->product_return_policy !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
