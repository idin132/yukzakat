@extends('BackEnd.template.index')

@section('content')


<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
        <br>
        <a href="{{ route('muzakki.create') }}", class="text-white">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: green;">
                <div class="card-body text-center">
                    Tambah Data
                </div>
            </div>
        </div>
        </a>
        <a href="{{ route('muzakki.export') }}", class="text-white">
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
                <tr style="font-size: 12px">
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muzakkis as $key=>$muzakki)
                <tr>
                    <td style="font-size: 12px">{{$muzakki->id}}</td>
                    <td style="font-size: 12px">{{$muzakki->name}}</td>
                    <td style="font-size: 12px">{{$muzakki->no_hp}}</td>
                    <td style="font-size: 12px">{{$muzakki->alamat}}</td>
                    <td>


                        <form action="{{ route ('muzakki.destroy', $muzakki->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <a style="font-size: 12px" href="{{ route('muzakki.show', $muzakki->id) }}" class="btn btn-primary">
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

    
@endsection
