@extends('tampilan.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <form action="{{route('mustahiq.update', $item->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_mustahiq">Nama Mustahiq</label>
                        <input type="text" class="form-control" value="{{$item->nama_mustahiq}}" name="nama_mustahiq">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="text" class="form-control" value="{{$item->usia}}" name="usia">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" class="form-control" value="{{$item->alamat}}" name="alamat" >
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{route('mustahiq.index')}}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection