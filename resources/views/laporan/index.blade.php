@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Laporan Zakat</h3>
    </div>
        <br>
        <a href="{{route('mustahiqp.create')}}" class="btn btn-success">+</a>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Tanggal</th>
                    <th>Kategori Zakat</th>
                </tr>
            </thead>
            @foreach ($mustahiqs as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_mustahiq}}</td>
                    <td>{{$item->usia}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>


                        <form action="{{ route('mustahiqp.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>

                              <a href="{{ route('mustahiqp.show',$item->id)  }}" class="btn btn-primary bi bi-card-text"></a>
                        <a href="{{ route('mustahiqp.edit', $item->id) }}"class="btn btn-warning">
                                <i class="fas fa-solid fa-pen"></i>
                              </a>
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