@extends('tampilan.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>Table Pembayaran</h3>
    </div>
        <br>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Zakat</th>
                    <th>Nama Muzakki</th>
                    <th>Jumlah</th>
                    <th>Metode Pembayaran</th>
                </tr>
            </thead>
            @foreach ($pembayarans as $key=>$item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_zakat}}</td>
                    <td>{{$item->nama_muzakki}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->metode_pembayaran}}</td>
                    <td>@if($item->bukti_pembayaran == null) - @else <a href="{{ url('storage/foto/'.$item->bukti_pembayaran) }}" target="_blank" class="btn btn-dark">View</a> @endif</td>
                    <td>{{$item->metode_pembayaran}}</td>


                    <td>

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
