<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Muzakki</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn538xqQ1aoWXA+058RPxPg6fy4IWvTNh0E263XnFcJlSAwiGgFAW/dAi56jXm" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css"> -->
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
                                    Data Muzakki
                                </span>
                            </td>
                        </tr>
                    </table>

                    <hr class="line-title">
                    <p align="center">
                        Laporan Data Muzakki
                    </p>
                    </hr>

                    <table class="table">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor Rekening</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Nomor Handphone</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Status Perkawinan</th>
                        </tr>

                        @foreach($muzakkis as $key=>$item)

                        <tr>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->nomor_rekening}}</td>
                            <td>{{$item->tgl_lahir}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->no_hp}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->pekerjaan}}</td>
                            <td>{{$item->penghasilan}}</td>
                            <td>{{$item->status}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>