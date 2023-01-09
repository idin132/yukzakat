@extends('BackEnd.template.index')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 100%;">
<div class="container">
        <br>
        <a href="{{route('mustahiq.create')}}" class="">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: green;">
                <div class="card-body text-center">
                    Tambah Data
                </div>
            </div>
        </div>
        </a>
        <a href="{{ route('mustahiq.export') }}", class="text-white">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: grey;">
                <div class="card-body text-center">
                    Print
                </div>
            </div>
        </div>
        </a>
        <table class="table"id="maintable">
            <thead>
                <tr style="font-size: 12px">
                    <th>NO</th>
                    <th>Nama Mustahiq</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mustahiqs as $key=>$item)
                <tr>
                    <td style="font-size: 12px">{{$item->id}}</td>
                    <td style="font-size: 12px">{{$item->nama_mustahiq}}</td>
                    <td style="font-size: 12px">{{$item->tgl_lahir}}</td>
                    <td style="font-size: 12px">{{$item->alamat}}</td>
                    <td style="font-size: 12px">{{$item->created_at}}</td>
                    <td>


                        <form action="{{ route('mustahiq.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a style="font-size: 12px" href="{{ route('mustahiq.edit', $item->id) }}"class="btn btn-warning">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a style="font-size: 12px" href="{{ route('mustahiq.show', $item->id) }}" class="btn btn-primary">
                                <i class="fa fa-info"></i>
                              </a>
                              
                              </form>
                              

                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</div>
</div>
<script>
    
</script>
    
@endsection
