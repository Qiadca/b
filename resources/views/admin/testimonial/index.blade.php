@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Referanslar</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Referansları Görüntüle</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Fotoğraf</th>
                        <th>İsim</th>
                        <th>Atama</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonial as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/uploads/'.$row->photo) }}" alt="" class="w_100"></td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->designation }}</td>
                            <td>
                                <a href="{{ URL::to('admin/testimonial/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ URL::to('admin/testimonial/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
