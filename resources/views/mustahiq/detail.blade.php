@extends('tampilan.layout')


@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-center"><br><br>
                            <h3>Detail Mustahiq</h3>
                        </div>
        
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($mustahiqs as $item)
                        <table class="table">
                            <tr>
                                <td>Nama Mustahiq</td>
                                <td>:</td>
                                <td>{{ $item->nama_mustahiq }}</td>
                            </tr>
                            <tr>
                                <td>Usia </td>
                                <td>:</td>
                                <td>{{ $item->usia }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                        </table>
                    @endforeach
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('mustahiq.index') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $mustahiqs->links() }}
        <br>
    </div>
    <br><br>
@endsection
