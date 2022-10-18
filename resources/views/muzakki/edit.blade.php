@extends('tampilan.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <form action="{{route('muzakki.update', $muzakki->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_muzakki">Nama Muzakki</label>
                        <input type="text" class="form-control" value="{{$muzakki->nama_muzakki}}" name="nama_muzakki">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="text" class="form-control" value="{{$muzakki->usia}}" name="usia">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="text" class="form-control" value="{{$muzakki->usia}}" name="usia">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" class="form-control" value="{{$muzakki->alamat}}" name="alamat" >
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{route('muzakki.index')}}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection