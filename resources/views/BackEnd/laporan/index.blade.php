@extends('BackEnd.template.index')

@section('content')


<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;">
<div class="container">
        <br>
        <a href="{{ route('laporan.export') }}", class="text-white">
        <div  style="font-size: 12px" class="col-md-12 mb-3">
            <div class="card text-white" style="background-color: grey;">
                <div class="card-body text-center">
                    Print
                </div>
            </div>
        </div>
        </a>
        <table class="table" id="">
            <thead>
                <tr style="font-size: 12px">
                    <th>Total User</th>
                    <th>Total Mustahiq</th>
                    <th>Total Penerimaan</th>
                    <th>Total Transaksi Pembayaran</th>
                    <th>Total Uang Masuk</th>
                    <th>Total Uang Keluar</th>
                </tr>
            </thead>
            <tbody>
         
                <tr>
                    <td style="font-size: 12px">{{ $muzakkis }}</td>
                    <td style="font-size: 12px">{{$mustahiqs}}</td>
                    <td style="font-size: 12px">{{$penerimaan}}</td>
                    <td style="font-size: 12px">{{$pembayaran}}</td>
                    <td style="font-size: 12px">{{ $total_donasi_disetujui}}</td>
                    <td style="font-size: 12px">{{ $total_tersalurkan}}</td>
                </tr>
            </tbody>
        </table>
</div>
</div>
</div>

    
@endsection
