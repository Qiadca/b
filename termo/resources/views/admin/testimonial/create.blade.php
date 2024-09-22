@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Referans Ekle</h1>

    <form action="{{ route('admin.testimonial.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Referans Ekle</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.testimonial.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Hepsini Görüntüle</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">İsim *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Atama *</label>
                    <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
                </div>
                <div class="form-group">
                    <label for="">Yorum *</label>
                    <textarea name="comment" class="form-control h_100" cols="30" rows="10">{{ old('comment') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf *</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>

@endsection
