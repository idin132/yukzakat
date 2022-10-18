@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Mustahiq</h3>
    </div>
        <br>
        <a href="{{route('mustahiq.create')}}" class="btn btn-success">+</a>
        <br><br>
        <table id="maintable" class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Mustahiq</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Action</th>
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


                        <form action="{{ route('mustahiq.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>

                              <a href="{{ route('mustahiq.show',$item->id)  }}" class="btn btn-primary bi bi-card-text"></a>
                        <a href="{{ route('mustahiq.edit', $item->id) }}"class="btn btn-warning">
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
