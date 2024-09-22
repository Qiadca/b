@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_product) }})">
        <div class="bg-page"></div>
        <div id="urunbaslik" class="text">
            <h1>{{ $shop->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="http://localhost/yeni">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ürünlerimiz</li>
                </ol>
            </nav>
			 
                <div id="urun_detay" class="col-md-12">
                    {!! $shop->detail !!}
             
            </div>

        </div>
    </div>

    <div class="page-content">
        <div class="containerurun">
           
			<div class="col-12" id="kategorilink">
		    <p class="float-left col-md-4" onclick="Canulla()">Aküler</p>
			<p class="float-left col-md-4" onclick="DCR()">Oto Bakım</p>
			<p class="float-left col-md-4" onclick="PVA()">Filtreler</p>
			<p class="float-left col-md-4" onclick="CXL()">Yedek Parçalar</p>
			
			
			</div>
			<script>
function Canulla() {
  document.getElementById("Canulla").style.display = "block";
   document.getElementById("DCR").style.display = "none";
   document.getElementById("PVA").style.display = "none";
   document.getElementById("CXL").style.display = "none";
}
function DCR() {
  document.getElementById("Canulla").style.display = "none";
   document.getElementById("DCR").style.display = "block";
   document.getElementById("PVA").style.display = "none";
   document.getElementById("CXL").style.display = "none";
}

function PVA() {
  document.getElementById("Canulla").style.display = "none";
   document.getElementById("DCR").style.display = "none";
   document.getElementById("PVA").style.display = "block";
   document.getElementById("CXL").style.display = "none";
}

function CXL() {
  document.getElementById("Canulla").style.display = "none";
   document.getElementById("DCR").style.display = "none";
   document.getElementById("PVA").style.display = "none";
   document.getElementById("CXL").style.display = "block";
}

</script>
			
			
            <div id="urun_blade" class="row">
<div class="col-12" id="Canulla" style=" float: left; width: 100%; display: contents; ">
                <h3 class="urun_baslik">Aküler</h3>
				<p class="urun_yazi">Araç sahiplerinin tüm gereksinimlerini karşılayacak nitelikte geliştirilen geniş Alpha akü ürün yelpazesi, aracınızın ihtiyacı olan tüm enerjiyi sağlar.</p>
                @foreach($products as $row)
				@if($row->product_category == 'Canulla')
                <div id="urun" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="photo"><a href="{{ url('product/'.$row->product_slug) }}"><img src="{{ asset('public/uploads/'.$row->product_featured_photo) }}"></a></div>
                        <div class="text">
                            <h3><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h3>
                        </div>
                    </div>
                </div>
				
				@endif
                @endforeach
				</div>
				 <div class="col-12" id="DCR" style=" float: left; width: 100%; display: contents; ">
				 <h3 class="urun_baslik">Oto Bakım</h3>
				<p class="urun_yazi">Cam suyu ve antifiriz gibi ürünler şimdi Alpha güvencesiyle sizinle!</p>
                @foreach($products as $row)
				@if($row->product_category == 'DCR')
                <div id="urun" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="photo"><a href="{{ url('product/'.$row->product_slug) }}"><img src="{{ asset('public/uploads/'.$row->product_featured_photo) }}"></a></div>
                        <div class="text">
                            <h3><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h3>
                        </div>
                    </div>
                </div>
				
				@endif
                @endforeach
				</div>
					 <div class="col-12" id="PVA" style=" float: left; width: 100%; display: contents; ">
					  <h3 class="urun_baslik">Filtreler</h3>
				<p class="urun_yazi">Orijinal uyumlu ve garantili filtreler için geniş ürün yelpazesiyle Alpha’yı tercih edin!</p>
                @foreach($products as $row)
				@if($row->product_category == 'PVA')
                <div id="urun" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="photo"><a href="{{ url('product/'.$row->product_slug) }}"><img src="{{ asset('public/uploads/'.$row->product_featured_photo) }}"></a></div>
                        <div class="text">
                        <h3><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h3>
                        </div>
                    </div>
                </div>
				
				@endif
                @endforeach
				</div>
						 <div class="col-12" id="CXL" style=" float: left; width: 100%; display: contents; ">
			    <h3 class="urun_baslik">Yedek Parçalar</h3>
				<p class="urun_yazi">Geniş Ürün gamıyla orijinal uyumlu ve garantili yedek parça Alpha’dan alınır!</p>
                @foreach($products as $row)
				@if($row->product_category == 'CXL')
                <div id="urun" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="photo"><a href="{{ url('product/'.$row->product_slug) }}"><img src="{{ asset('public/uploads/'.$row->product_featured_photo) }}"></a></div>
                        <div class="text">
                            <h3><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h3>
                        </div>
                    </div>
                </div>
				
				@endif
                @endforeach
				</div>

                <div class="col-md-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
