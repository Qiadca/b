@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Siparişler</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Siparişleri Görüntüle</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Müşteri Detayı (İsim, E-Postası, Tipi)</th>
                        <th>Sipariş Numarası</th>
                        <th>Ödenen Miktar</th>
                        <th>Ücret Miktarı</th>
                        <th>Net Tutar</th>
                        <th>Ödeme Yöntemi</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $row->customer_name }}<br>
                                {{ $row->customer_email }}<br>
                                {{ $row->customer_type }}
                            </td>
                            <td>{{ $row->order_no }}</td>
                            <td>${{ $row->paid_amount }}</td>
                            <td>${{ $row->fee_amount }}</td>
                            <td>${{ $row->net_amount }}</td>
                            <td>{{ $row->payment_method }}</td>
                            <td>
                                <a href="{{ URL::to('admin/order/detail/'.$row->id) }}" class="btn btn-success btn-sm btn-block" target="_blank">Detay</a>
                                <a href="{{ URL::to('admin/order/invoice/'.$row->id) }}" class="btn btn-info btn-sm btn-block" target="_blank">Fatura</a>
                                <a href="{{ URL::to('admin/order/delete/'.$row->id) }}" class="btn btn-danger btn-sm btn-block" onClick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
