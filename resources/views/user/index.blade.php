@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table User</h3>
    </div>
        <br>
        <a href="{{ route('user.create') }}", class="btn btn-secondary">+</a>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($users as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->role}}</td>
                    <td>


                        <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>

                              
                              <a href="{{route ('user.edit', $item->id)}}" class="btn btn-warning">
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
