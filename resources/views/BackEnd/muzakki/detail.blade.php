@extends('BackEnd.template.index')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h6>Bio Data Muzakki</h6>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                        <table class="table">
                            <tr style="font-size: 12px">
                                <td>NIK</td>
                                <td>:</td>
                                <td>{{ $muzakki->nik}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Nama Muzakki</td>
                                <td>:</td>
                                <td>{{ $muzakki->name}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $muzakki->jenis_kelamin}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Nomor Rekening</td>
                                <td>:</td>
                                <td>{{ $muzakki->nomor_rekening}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $muzakki->tgl_lahir}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $muzakki->email}}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Nomor Handphone </td>
                                <td>:</td>
                                <td>{{ $muzakki->no_hp }}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $muzakki->alamat }}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $muzakki->pekerjaan }}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td>{{ $muzakki->penghasilan }}</td>
                            </tr>
                             <tr style="font-size: 12px">
                                <td>Status</td>
                                <td>:</td>
                                <td>{{ $muzakki->status }}</td>
                            </tr>
                        </table>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('muzakki.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
