@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Footer Sütun Öğeleri</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Footer Sütun Öğelerini Görüntüle</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.footer.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Metin</th>
                        <th>URL</th>
                        <th>Sıra</th>
                        <th>Sütun İsmi</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($footer_columns as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->column_item_text }}</td>
                            <td>{{ $row->column_item_url }}</td>
                            <td>{{ $row->column_item_order }}</td>
                            <td>{{ $row->column_name }}</td>
                            <td>
                                <a href="{{ URL::to('admin/footer/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ URL::to('admin/footer/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection