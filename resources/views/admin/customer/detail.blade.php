@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Müşteri Detayı</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Müşteri Detayı</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Müşteri'nin İsmi</td>
                                <td>{{ $customer_detail->customer_name }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin E-Postası</td>
                                <td>{{ $customer_detail->customer_email }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin Telefonu</td>
                                <td>{{ $customer_detail->customer_phone }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin Ülkesi</td>
                                <td>{{ $customer_detail->customer_country }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin Adresi</td>
                                <td>{{ $customer_detail->customer_address }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin Semti</td>
                                <td>{{ $customer_detail->customer_state }}</td>
                            </tr>
                            <tr>
                                <td>State Şehri</td>
                                <td>{{ $customer_detail->customer_city }}</td>
                            </tr>
                            <tr>
                                <td>Posta Kodu</td>
                                <td>{{ $customer_detail->customer_zip }}</td>
                            </tr>
                            <tr>
                                <td>Müşteri'nin Durumu</td>
                                <td>{{ $customer_detail->customer_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection