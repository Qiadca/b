@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Ürün Ekle</h1>

    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Ürün Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="product_slug" class="form-control" value="{{ old('product_slug') }}">
                </div>
                <div class="form-group">
                    <label for="">Eski Fiyat</label>
                    <input type="text" name="product_old_price" class="form-control" value="{{ old('product_old_price') }}">
                </div>
                <div class="form-group">
                    <label for="">Mevcut Fiyat *</label>
                    <input type="text" name="product_current_price" class="form-control" value="{{ old('product_current_price') }}">
                </div>
                <div class="form-group">
                    <label for="">Stok *</label>
                    <input type="text" name="product_stock" class="form-control" value="{{ old('product_stock') }}">
                </div>
                <div class="form-group">
                    <label for="">İçerik *</label>
                    <textarea name="product_content" class="form-control editor" cols="30" rows="10">{{ old('product_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Kısa İçerik *</label>
                    <textarea name="product_content_short" class="form-control h_100" cols="30" rows="10">{{ old('product_content_short') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">İade Politikası</label>
                    <textarea name="product_return_policy" class="form-control editor" cols="30" rows="10">{{ old('product_return_policy') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Öne Çıkan Fotoğraf *</label>
                    <div>
                        <input type="file" name="product_featured_photo">
                    </div>
                </div>
				<div class="form-group">
                            <label for="">Kategori Seç*</label>
                            <select name="product_category" class="form-control">
                                 
                                  
								    <option value="Canulla">Canulla </option>
									<option value="PVA">PVA </option>
									<option value="DCR">DCR </option>
									<option value="CXL">CXL </option>								
							
																		
                                    									 									 									                                 
                            </select>
                        </div>
                <div class="form-group">
                    <label for="">Sıra</label>
                    <input type="text" name="product_order" class="form-control" value="{{ old('product_order', '0') }}">
                </div>
                <div class="form-group">
                    <label for="">Durum *</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="product_status" id="rr1" value="Show" checked>
                            <label class="form-check-label font-weight-normal" for="rr1">Göster</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="product_status" id="rr2" value="Hide">
                            <label class="form-check-label font-weight-normal" for="rr2">Gizle</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Bilgileri</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Açıklaması</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection
