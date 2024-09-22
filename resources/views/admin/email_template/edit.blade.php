@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">E-posta Şablonunu Düzenle</h1>

    <form action="{{ url('admin/email-template/update/'.$email_template->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">E-posta Şablonunu Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.email_template.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Konu *</label>
                            <input type="text" name="et_subject" class="form-control" value="{{ $email_template->et_subject }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">İletişim Sayfası Mesajı *</label>
                            <textarea name="et_content" class="form-control editor" cols="30" rows="10">{{ $email_template->et_content }}</textarea>

                            <div class="font-weight-bold mt_20 text-danger">Kullanabileceğiniz Parametreler: </div>
                            
                            @if($id == 1)
                            <div>[[visitor_name]] = Ziyaretçi Adı</div>
                            <div>[[visitor_email]] = Ziyaretçi E-Postası</div>
                            <div>[[visitor_phone]] = Ziyaretçi Telefonu</div>
                            <div>[[visitor_message]] = Ziyaretçi Mesajı</div>

                            @elseif($id == 2)
                            <div>[[person_name]] = Yorumcu Adı</div>
                            <div>[[person_email]] = Yorumcu E-Postası</div>
                            <div>[[person_message]] = Yorumcu Mesajı</div>
                            <div>[[comment_see_url]] = Yorumu göreceğiniz yönetici paneli Linki</div>

                            @elseif($id == 3)
                            <div>[[verification_link]] = Abone Doğrulama Linki</div>
 
                            @elseif($id == 4)
                            <div>[[post_link]] = Haber Görünüm Linki</div>
  
                            @elseif($id == 5)
                            <div>[[reset_link]] = Şifre Sıfırla Sayfası Linki</div>
  
                            @elseif($id == 6)
                            <div>[[verification_link]] = Müşteri Kayıt Doğrulama Linki</div>
 
                            @elseif($id == 7)
                            <div>[[reset_link]] = Şifre Sıfırla Sayfası Linki </div>
 
                            @elseif($id == 8)
                            <div>[[customer_name]] = Müşteri İsmi</div>
                            <div>[[order_number]] = Sipariş Numarası</div>
                            <div>[[payment_method]] = Kart Bilgileri ile Ödeme Yöntemi Detayları</div>
                            <div>[[payment_date_time]] = Ödeme Tarihi ve Saati</div>
                            <div>[[transaction_id]] = İşlem Id</div>
                            <div>[[shipping_cost]] = Kargo Maliyeti</div>
                            <div>[[coupon_code]] = Kupon Kodu</div>
                            <div>[[coupon_discount]] = Kupon İndirimi</div>
                            <div>[[paid_amount]] = Toplam Ödenen Tutar</div>
                            <div>[[payment_status]] = Ödeme Durumu (Ödendi veya Tamamlandı)</div>
                            <div>[[billing_name]] = Faturalandırma İsmi</div>
                            <div>[[billing_email]] = Faturalandırma E-Postası</div>
                            <div>[[billing_phone]] = Faturalandırma Telefonu</div>
                            <div>[[billing_country]] = Faturalandırma Ülkesi</div>
                            <div>[[billing_address]] = Faturalandırma Adresi</div>
                            <div>[[billing_state]] = Faturalandırma Semti</div>
                            <div>[[billing_city]] = Faturalandırma Şehri</div>
                            <div>[[billing_zip]] = Faturalandırma Posta Kodu</div>
                            <div>[[shipping_name]] = Kargo İsmi</div>
                            <div>[[shipping_email]] = Kargo E-Postası</div>
                            <div>[[shipping_phone]] = Kargo Telefonu</div>
                            <div>[[shipping_country]] = Kargo Ülkesi</div>
                            <div>[[shipping_address]] = Kargo Adresi</div>
                            <div>[[shipping_state]] = Kargo Semti</div>
                            <div>[[shipping_city]] = Kargo Şehri</div>
                            <div>[[shipping_zip]] = Kargo Posta Kodu</div>
                            <div>[[product_detail]] = Tüm Ürün Adı, Fiyatı ve Miktarı</div>
                            
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
