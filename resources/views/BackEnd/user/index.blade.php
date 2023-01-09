@extends('BackEnd.template.index')

@section('content')

<div class="d-flex justify-content-center">
<div class="card" style="width: 100%;">
<div class="container">
        <br>
        <a href="{{ route('user.create') }}", class="text-white">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: green;">
                <div class="card-body text-center">
                    Tambah Data
                </div>
            </div>
        </div>
        </a>
       
        <!-- <a href="{{ route('user.create') }}", class="btn btn-secondary">+</a> -->
        
        <table class="table" id="maintable">
            <thead>
                <tr style="font-size: 12px">
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$item)
                <tr>
                    <td style="font-size: 12px">{{$item->id}}</td>
                    <td style="font-size: 12px">{{$item->email}}</td>
                    <td style="font-size: 12px">{{$item->username}}</td>
                    <td style="font-size: 12px">{{$item->role}}</td>
                    <td>


                        <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                  <i class="fa fa-solid fa-trash"></i>
                                </button>
                                <a style="font-size: 12px" href="{{route ('user.edit', $item->id)}}" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pencil"></i>
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
