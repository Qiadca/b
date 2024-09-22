@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Footer Sütun Öğesini Düzenle</h1>

    <form action="{{ url('admin/footer/update/'.$footer_column_item->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Footer Sütun Öğesini Düzenle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.footer.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Sütun Öğesi Metni *</label>
                            <input type="text" name="column_item_text" class="form-control" value="{{ $footer_column_item->column_item_text }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Sütun Öğesi URL *</label>
                            <input type="text" name="column_item_url" class="form-control" value="{{ $footer_column_item->column_item_url }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Sütun Öğesi Sırası</label>
                            <input type="text" name="column_item_order" class="form-control" value="{{ $footer_column_item->column_item_order }}">
                        </div>
                        <div class="form-group">
                            <label for="">Sütun Seç</label>
                            <select name="column_name" class="form-control">
                                <option value="Column 1" @if($footer_column_item->column_name == 'Column 1') selected  @endif>Sütun 1</option>
                                <option value="Column 2" @if($footer_column_item->column_name == 'Column 2') selected  @endif>Sütun 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>
    </form>

@endsection
