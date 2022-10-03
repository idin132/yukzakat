@extends('muzakki.layout')

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
        <a class="btn btn-success">+</a>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Muzakki</th>
                    <th>Usia</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            @foreach ($muzakkis as $key=>$muzakki)
            <tbody>
                <tr>
                    <td>{{$muzakki->id}}</td>
                    <td>{{$muzakki->nama_muzakki}}</td>
                    <td>{{$muzakki->usia}}</td>
                    <td>{{$muzakki->no_hp}}</td>
                    <td>{{$muzakki->alamat}}</td>
                    <td>


                        <form>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>

                        <a class="btn btn-primary bi bi-card-text"></a>
                            <a class="btn btn-warning">
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
