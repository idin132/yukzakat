@extends('BackEnd.template.index')

@section('content')


<div class="d-flex justify-content-center">
<div class="card" style="width: 100%;">
<div class="container">
    <br>
        <table class="table" id=maintable>
            <thead>
                <tr style="font-size: 12px">
                    <th>NO</th>
                    <th>ID Zakat</th>
                    <th>Kategori Zakat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zakats as $key=>$item)
                <tr>
                    <td style="font-size: 12px">{{$item->id}}</td>
                    <td style="font-size: 12px">{{$item->id_zakat}}</td>
                    <td style="font-size: 12px">{{$item->kategori_zakat}}</td>
                    <td>


                        <form action="{{ route('zakat.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="font-size: 12px" type="submit" class="btn btn-danger">
                                <i class="fa fa-solid fa-trash"></i>
                            </button>
                            <a style="font-size: 12px" href="{{ route('zakat.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fa fa-solid fa-pencil"></i>
                            </a>
                        </form>



                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- </div> -->
</div>
<script>

</script>

@endsection