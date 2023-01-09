<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
</head>


<body style="background-color: white;" onload="window.print()">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>

    <div class="row">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-body">
                    <table style="width: 100%;">
                        <tr>
                            <td align="center">
                                <span style="line-height: 1.6; font-weight:bold;">
                                    Data Pembayaran
                                </span>
                            </td>
                        </tr>
                    </table>

                    <hr class="line-title">
                    <p align="center">
                        Laporan Data Pembayaran
                    </p>
                    <p align="center">
                        Periode Tanggal {{ $tgl_mulai }}
                    </p>
                    </hr>

                    <table class="table" id="maintable">
                        <thead>
                            <tr style="font-size: 12px">
                                <th>No</th>
                                <th>Zakat</th>
                                <th>Muzakki</th>
                                <th>Jumlah</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        @if($sum_jumlah == 0)
                        <tr>
                            <td colspan="6"><center><b>Data Tidak ada pada periode tanggal {{date('d f Y', strtotime($tgl_mulai)</b></center></td>
                        </tr>
                        @else
                        <tbody>
                            @foreach ($pembayaran as $key => $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_zakat }}</td>
                                <td>{{ $item->nama_muzakki }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->metode_pembayaran }}</td>
                                <td>{{ date('d f Y', strtotime($item->created_at)) }}</td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="6">Total Donasi</td>
                                <td>Rp. {{ number_format($sum_jumlah) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>