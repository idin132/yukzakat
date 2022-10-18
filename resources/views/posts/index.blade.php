@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Post</h3>
    </div>
        <br>
        {{-- <a href="{{route('pembayaranp.create')}}" class="btn btn-success">+</a> --}}
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            @foreach ($post as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{ asset('storage/posts')}}/{{$item->image}}" width="120px" height="120px" alt=""></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->content}}</td>
                    <td>


                        {{-- <form action="{{ route ('muzakkip.destroy', $muzakki->id) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>

                              <a href="{{route('muzakkip.show', $muzakki->id)}}" class="btn btn-primary bi bi-card-text"></a>
                        <a href="{{route ('muzakkip.edit', $muzakki->id)}}" class="btn btn-warning">
                                <i class="fas fa-solid fa-pen"></i>
                              </a> --}}
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
