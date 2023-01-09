@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('verif.store') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Zakat') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_zakat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_muzakki"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Muzakki') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_muzakki" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="jumlah" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="metode_pembayaran"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Metode Pembayaran') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="metode_pembayaran" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bukti_pembayaran"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <select name="status" class="form-control">
                                        <option value="Selesai">{{__('Selesai')}}</option>
                                        <option value="Menunggu Konfirmasi">{{__('Menunggu Konfirmasi')}}</option>
                                        <option value="Gagal">{{__('Gagal')}}</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('verif.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
