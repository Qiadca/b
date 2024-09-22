@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sipariş Detayı</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Sipariş Detayları</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Sipariş Numarası</td>
                                <td>{{ $order_detail->order_no }}</td>
                            </tr>
                            <tr>
                                <td>Kargo Maliyeti</td>
                                <td>{{ $order_detail->shipping_cost }}</td>
                            </tr>
                            <tr>
                                <td>Kupon İndirimi</td>
                                <td>${{ $order_detail->coupon_discount }} (CODE: {{ $order_detail->coupon_code }})</td>
                            </tr>
                            <tr>
                                <td>Ödenen Miktar</td>
                                <td>${{ $order_detail->paid_amount }}</td>
                            </tr>
                            <tr>
                                <td>Ücret Miktarı</td>
                                <td>${{ $order_detail->fee_amount }}</td>
                            </tr>
                            <tr>
                                <td>Net Tutar</td>
                                <td>${{ $order_detail->net_amount }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Müşteri ve Ödeme Ağ Geçidi Ayrıntıları</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Müşteri Tipi</td>
                                <td>{{ $order_detail->customer_type }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri İsmi</td>
                                <td>{{ $order_detail->customer_name }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri E-Postası</td>
                                <td>{{ $order_detail->customer_email }}</td>
                            </tr>
                            <tr>
                                <td>Ödeme Yöntemi</td>
                                <td>
                                    {{ $order_detail->payment_method }}
                                    @if($order_detail->payment_method == 'Stripe')
                                        <br>
                                        Kartın Son 4 Hanesi: {{ $order_detail->card_last4 }}
                                        <br>
                                        Bitiş Ayı: {{ $order_detail->card_exp_month }}
                                        <br>
                                        Bitiş Yılı: {{ $order_detail->card_exp_year }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Ödeme Tarihi ve Saati</td>
                                <td>{{ $order_detail->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Ödeme Durumu</td>
                                <td>{{ $order_detail->payment_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Fatura Bilgileri</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Fatura Adı</td>
                                <td>{{ $order_detail->billing_name }}</td>
                            </tr>
                            <tr>
                                <td>Fatura E-postası</td>
                                <td>{{ $order_detail->billing_email }}</td>
                            </tr>
                            <tr>
                                <td>Fatura Telefonu</td>
                                <td>{{ $order_detail->billing_phone }}</td>
                            </tr>
                            <tr>
                                <td>Faturalandırma Ülkesi</td>
                                <td>{{ $order_detail->billing_country }}</td>
                            </tr>
                            <tr>
                                <td>Faturalandırma Adresi</td>
                                <td>{{ $order_detail->billing_address }}</td>
                            </tr>
                            <tr>
                                <td>Faturalandırma Durumu</td>
                                <td>{{ $order_detail->billing_state }}</td>
                            </tr>
                            <tr>
                                <td>Faturalandırma Şehri</td>
                                <td>{{ $order_detail->billing_city }}</td>
                            </tr>
                            <tr>
                                <td>Fatura Posta Kodu</td>
                                <td>{{ $order_detail->billing_zip }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Kargo Bilgileri</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Gönderim adı</td>
                                <td>{{ $order_detail->shipping_name }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim E-Postası</td>
                                <td>{{ $order_detail->shipping_email }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Telefonu</td>
                                <td>{{ $order_detail->shipping_phone }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Ülkesi</td>
                                <td>{{ $order_detail->shipping_country }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Adresi</td>
                                <td>{{ $order_detail->shipping_address }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Durumu</td>
                                <td>{{ $order_detail->shipping_state }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Şehri</td>
                                <td>{{ $order_detail->shipping_city }}</td>
                            </tr>
                            <tr>
                                <td>Gönderim Posta Kodu</td>
                                <td>{{ $order_detail->shipping_zip }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Ürün Bilgisi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Ürün İsmi</th>
                                <th>Ürün Fiyatı</th>
                                <th>Ürün Adedi</th>
                                <th>Ürün Ara Toplamı</th>
                            </tr>
                            @foreach($product_list as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->product_name }}</td>
                                <td>${{ $row->product_price }}</td>
                                <td>{{ $row->product_qty }}</td>
                                <td>${{ $row->product_price * $row->product_qty }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
