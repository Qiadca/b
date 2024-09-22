@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">İş Başvuruları</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">İş Başvurularını Görüntüle</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Başvuranın İsmi</th>
                        <th>İş Başlığı</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=0; @endphp
                    @foreach($job_application as $row)
                        @php $i++; @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->applicant_first_name.' '.$row->applicant_last_name }}</td>
                            <td>{{ $row->job->job_title }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#exampleModal{{ $i }}">Başvuru Sahibi Ayrıntıları</a>
                                <a href="{{ URL::to('admin/job/application/delete/'.$row->id) }}" class="btn btn-danger btn-sm btn-block" onClick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Başvuru Sahibi Ayrıntıları</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">İsim:</div>
                                            <div>{{ $row->applicant_first_name }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Soyisim:</div>
                                            <div>{{ $row->applicant_last_name }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">E-Posta Adresi:</div>
                                            <div>{{ $row->applicant_email }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Telefon Numarası:</div>
                                            <div>{{ $row->applicant_phone }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Ülke:</div>
                                            <div>{{ $row->applicant_country }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Semt:</div>
                                            <div>{{ $row->applicant_state }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Sokak:</div>
                                            <div>{{ $row->applicant_street }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Şehir:</div>
                                            <div>{{ $row->applicant_city }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Posta Kodu: </div>
                                            <div>{{ $row->applicant_zip_code }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Beklenen Maaş:</div>
                                            <div>{{ $row->applicant_expected_salary }}</div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">Ön Yazı:</div>
                                            <div>
                                                {!! nl2br(e($row->applicant_cover_letter)) !!}
                                            </div>
                                        </div>
                                        <div class="item mb-3">
                                            <div class="font-weight-bold">CV:</div>
                                            <div>
                                                <a href="{{ asset('public/uploads/'.$row->applicant_cv) }}">CV'yi Yükleyin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Kapat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
