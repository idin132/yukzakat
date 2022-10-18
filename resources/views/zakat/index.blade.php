@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Zakat</h3>
    </div>
        <br>
        <a href="{{route('zakat.create')}}" class="btn btn-success">+</a>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID Zakat</th>
                    <th>Kategori Zakat</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($zakats as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->id_zakat}}</td>
                    <td>{{$item->kategori_zakat}}</td>
                    <td>


                        <form action="{{ route('zakat.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                              <i class="fas fa-solid fa-trash"></i>
                            </button>
                          </form>


                    <a href="{{ route('zakat.edit', $item->id) }}"class="btn btn-warning">
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
