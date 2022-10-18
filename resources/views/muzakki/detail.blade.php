@extends('tampilan.layout')


@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h3>Detail Muzakki</h3>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($muzakkis as $item)
                        <table class="table">
                            <tr>
                                <td>Nama Muzakki</td>
                                <td>:</td>
                                <td>{{ $item->nama_muzakki }}</td>
                            </tr>
                            <tr>
                                <td>Usia </td>
                                <td>:</td>
                                <td>{{ $item->usia }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Handphone </td>
                                <td>:</td>
                                <td>{{ $item->no_hp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Username </td>
                                <td>:</td>
                                <td>{{ $item->username }}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>{{ $item->password }}</td>
                            </tr>
                        </table>
                    @endforeach
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('muzakki.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $muzakkis->links() }}
        <br>
    </div>
    <br><br>
@endsection
