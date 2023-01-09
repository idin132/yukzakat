@extends('BackEnd.template.index')


@section('content')

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h6>Detail Mustahiq</h6>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                        <table class="table">
                            <tr style="font-size: 12px">
                                <td>NIK</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->nik }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Nama Mustahiq</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->nama_mustahiq }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->jenis_kelamin }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Tanggal Lahirr</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->tgl_lahir }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->alamat }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Agama</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->agama }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->pekerjaan }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->penghasilan }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>jumlah anak</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->jumlah_anak }}</td>
                            </tr>
                            <tr style="font-size: 12px">
                                <td>ashnaf</td>
                                <td>:</td>
                                <td>{{ $mustahiqs->ashnaf }}</td>
                            </tr>
                        </table>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('mustahiq.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
