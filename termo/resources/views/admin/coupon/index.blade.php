@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Kuponlar</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Kuponları Görüntüle</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.coupon.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Yeni Ekle</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Kod</th>
                        <th>Tip</th>
                        <th>İndirim</th>
                        <th>Maksimum Kullanım</th>
                        <th>Mevcut Kullanım</th>
                        <th>Başlangıç Tarihi</th>
                        <th>Bitiş Tarihi</th>
                        <th>Durum</th>
                        <th>Sırası</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coupon as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->coupon_code }}</td>
                            <td>{{ $row->coupon_type }}</td>
                            <td>{{ $row->coupon_discount }}</td>
                            <td>{{ $row->coupon_maximum_use }}</td>
                            <td>{{ $row->coupon_existing_use }}</td>
                            <td>{{ $row->coupon_start_date }}</td>
                            <td>{{ $row->coupon_end_date }}</td>
                            <td>{{ $row->coupon_status }}</td>
                            <td>
                                <a href="{{ URL::to('admin/coupon/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ URL::to('admin/coupon/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
