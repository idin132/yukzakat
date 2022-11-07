@extends('tampilan.layout')

@section('content')
    <br>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 70rem;">
            <div class="container">
                <div class="text-center">
                    <br><br>
                    <h3>Table Verifikasi</h3>
                </div>
                <br>
                <a href="{{ route('verif.create') }}" class="btn btn-secondary">+</a>
                <br><br>
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Zakat</th>
                            <th>Nama Muzakki</th>
                            <th>Jumlah</th>
                            <th>Metode Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($verif as $key => $item)
                        <tbody>
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_zakat }}</td>
                                <td>{{ $item->nama_muzakki }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->metode_pembayaran }}</td>
                                <td>
                                    @if ($item->bukti_pembayaran == null)
                                        -
                                    @else
                                        <a href="{{ url('storage/foto/' . $item->bukti_pembayaran) }}" target="_blank"
                                            class="btn btn-dark">View</a>
                                    @endif
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>

                                    <form action="{{ url('verif.index', $item->id) }}" <button type="submit"
                                        class="btn btn-primary btn-sm">Konfirmasi 
                                        <i class="fas fa-chevron-right"></i></button></a>
                                    </form>
                                    <form action="" <button type="submit"
                                        class="btn btn-danger btn-sm">Tolak
                                        <i class="fas fa-times"></i></button></a>
                                    </form>

                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script></script>
@endsection
