@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_customer_panel) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Siparişler</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Siparişler</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-md-3">				
                    <div class="user-sidebar">
                        @include('layouts.sidebar_customer')
                    </div>
                </div>

                <div class="col-md-9">                   
                    <div class="table-responsive-md">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">Seri</th>
                                    <th scope="col">Sipariş Numarası</th>
                                    <th scope="col">Ödeme Yöntemi</th>
                                    <th scope="col">Ödenen Miktar</th>
                                    <th scope="col">Ödeme Tarihi ve Saati</th>
                                    <th scope="col">Ödeme Durumu</th>
                                    <th scope="col">Detay</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $order_data = DB::table('orders')->orderBy('id','desc')->where('customer_id', session()->get('customer_id'))->get();
                                    $i=0;
                                @endphp

                                @foreach($order_data as $row)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $row->order_no }}</td>
                                        <td>{{ $row->payment_method }}</td>
                                        <td>
                                            ${{ number_format((float)$row->paid_amount, 2, '.', '') }}
                                        </td>
                                        <td>
                                            <b>Tarih:</b><br>{{ \Carbon\Carbon::parse($row->created_at)->format('d M, Y') }}<br>
                                            <b>Zaman:</b><br>{{ \Carbon\Carbon::parse($row->created_at)->format('h:i:s A') }}
                                        </td>
                                        <td>
                                            @if($row->payment_status == 'Completed')
                                                <a href="javascript:void;" class="btn btn-success btn-sm">{{ $row->payment_status }}</a>
                                            @else
                                                <a href="javascript:void;" class="btn btn-danger btn-sm">{{ $row->payment_status }}</a>
                                            @endif
                                        </td>
                                        <td>
<button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
</button>
<div class="dropdown-menu dropdown-menu-right">
    <a href="" class="dropdown-item" data-toggle="modal" data-target="#modd{{ $i }}"><i class="fa fa-eye"></i> Detaylar</a>
</div>										
<div class="modal fade" id="modd{{ $i }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold mb_0" id="exampleModalLabel">Sipariş Detayları</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-bold mb_5">Sipariş Detayları</h6>
                <div class="table-responsive">
                    <table class="table table-sm w-100-p">
                        <tr>
                            <td class="alert-warning w-200">Sipariş Numarası</td>
                            <td>{{ $row->order_no }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ödeme Tarihi Saat</td>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Kargo Maliyeti</td>
                            <td>${{ number_format((float)$row->shipping_cost, 2, '.', '') }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Kupon Kodu</td>
                            <td>{{ $row->coupon_code }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Kupon İndirimi</td>
                            <td>${{ number_format((float)$row->coupon_discount, 2, '.', '') }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ödenen Miktar</td>
                            <td>${{ number_format((float)$row->paid_amount, 2, '.', '') }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ödeme Durumu</td>
                            <td>
                                @if($row->payment_status == 'Completed')
                                    <a href="javascript:void;" class="btn btn-success btn-sm">{{ $row->payment_status }}</a>
                                @else
                                    <a href="javascript:void;" class="btn btn-danger btn-sm">{{ $row->payment_status }}</a>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>

                <h6 class="font-weight-bold mt_20 mb_5">Müşteri ve Ödeme Ağ Geçidi Ayrıntıları</h6>
                <div class="table-responsive">
                    <table class="table table-sm w-100-p">
                        <tr>
                            <td class="alert-warning w-200">Müşteri Tipi</td>
                            <td>{{ $row->customer_type }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning w_150">Müşteri İsmi</td>
                            <td>{{ $row->customer_name }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Müşteri E-Postası</td>
                            <td>{{ $row->customer_email }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ödeme Yöntemi</td>
                            <td>{{ $row->payment_method }}</td>
                        </tr>

                        @if($row->payment_method == 'Stripe')
                        <tr>
                            <td class="alert-warning">Kartın Son 4 Basamağı</td>
                            <td>{{ $row->card_last4 }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Bitiş Ayı</td>
                            <td>{{ $row->card_exp_month }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Bitiş Yılı</td>
                            <td>{{ $row->card_exp_year }}</td>
                        </tr>
                        @endif

                    </table>
                </div>


                <h6 class="font-weight-bold mt_20 mb_5">Fatura Bilgileri</h6>
                <div class="table-responsive">
                    <table class="table table-sm w-100-p">
                        <tr>
                            <td class="alert-warning w-200">İsim</td>
                            <td>{{ $row->billing_name }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">E-Posta</td>
                            <td>{{ $row->billing_email }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Telefon</td>
                            <td>{{ $row->billing_phone }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ülke</td>
                            <td>{{ $row->billing_country }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Adres</td>
                            <td>{{ $row->billing_address }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Semt</td>
                            <td>{{ $row->billing_state }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Şehir</td>
                            <td>{{ $row->billing_city }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Posta Kodu</td>
                            <td>{{ $row->billing_zip }}</td>
                        </tr>
                    </table>
                </div>



                <h6 class="font-weight-bold mt_20 mb_5">Kargo Bilgisi</h6>
                <div class="table-responsive">
                    <table class="table table-sm w-100-p">
                        <tr>
                            <td class="alert-warning w-200">İsim</td>
                            <td>{{ $row->shipping_name }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">E-Posta</td>
                            <td>{{ $row->shipping_email }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Telefon</td>
                            <td>{{ $row->shipping_phone }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Ülke</td>
                            <td>{{ $row->shipping_country }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Adres</td>
                            <td>{{ $row->shipping_address }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Semt</td>
                            <td>{{ $row->shipping_state }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Şehir</td>
                            <td>{{ $row->shipping_city }}</td>
                        </tr>
                        <tr>
                            <td class="alert-warning">Posta Kodu</td>
                            <td>{{ $row->shipping_zip }}</td>
                        </tr>
                    </table>
                </div>


                <h6 class="font-weight-bold mt_20 mb_5">Ürün Bilgisi</h6>
                <div class="table-responsive">
                    <table class="table table-sm w-100-p">
                        <tr>
                            <th>SL</th>
                            <th>Ürün İsmi</th>
                            <th>Ürün Fiyatı</th>
                            <th>Ürün Adeti</th>
                            <th>Ara Toplam</th>
                        </tr>
                        @php
                            $order_detail_data = DB::table('order_details')->where('order_id', $row->id)->get();
                            $j=0;
                        @endphp
                        
                        @foreach ($order_detail_data as $row1)
                            @php
                                $j++;
                            @endphp
                            <tr>
                                <td>{{ $j }}</td>
                                <td>{{ $row1->product_name }}</td>
                                <td>${{ number_format((float)$row1->product_price, 2, '.', '') }}</td>
                                <td>{{ $row1->product_qty }}</td>
                                <td>
                                    @php
                                        $s_total = $row1->product_price*$row1->product_qty;
                                    @endphp
                                    {{ '$'.number_format((float)$s_total, 2, '.', '') }}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
