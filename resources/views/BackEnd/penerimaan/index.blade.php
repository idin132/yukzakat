@extends('BackEnd.template.index')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
        <br>
        <a href="{{ route('penerimaan.create') }}", class="">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div  class="card text-white" style="background-color: green;">
                <div class="card-body text-center">
                    Tambah Data
                </div>
            </div>
        </div>
        </a>
        <!-- <a href="{{ route('penerimaan.export') }}", class="text-white"> -->
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: grey;">
                <div class="card-body text-center">
                    Print
                </div>
            </div>
        </div>
        </a>
        <table class="table" id="maintable">
            <thead>
                <tr  style="font-size: 12px">
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Zakat</th>
                    <th>Jumlah</th>
                    <th>Bukti</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penerimaan as $key=>$item)
                <tr>
                    <td  style="font-size: 12px">{{$item->id}}</td>
                    <td  style="font-size: 12px">{{$item->nama}}</td>
                    <td  style="font-size: 12px">{{$item->alamat}}</td>
                    <td  style="font-size: 12px">{{$item->jenis_zakat}}</td>
                    <td  style="font-size: 12px">{{$item->jumlah}}</td>
                    <td  style="font-size: 12px">@if($item->bukti == null) - @else <a href="{{ url('storage/foto/'.$item->bukti) }}" target="_blank" class="btn btn-dark">View</a> @endif</td>
                    <td  style="font-size: 12px">{{$item->created_at}}</td>
                    <td>


                        <form action="{{ route ('penerimaan.destroy', $item->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button  style="font-size: 12px" type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a  style="font-size: 12px" href="{{route ('penerimaan.edit', $item->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
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
