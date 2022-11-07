@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Muzakki</h3>
    </div>
        <br>
        <a href="{{ route('muzakki.create') }}", class="btn btn-secondary">+</a>
        <br><br>
        <table id="maintable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($muzakkis as $key=>$muzakki)
            <tbody>
                <tr>
                    <td>{{$muzakki->id}}</td>
                    <td>{{$muzakki->name}}</td>
                    <td>{{$muzakki->no_hp}}</td>
                    <td>{{$muzakki->alamat}}</td>
                    <td>


                        <form action="{{ route ('muzakki.destroy', $muzakki->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
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
