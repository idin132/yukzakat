@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <div class="card-header" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>EDIT DATA</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('verif.update', $verifs->id) }}" method="POST">
                            @csrf
                            @method('PUT')

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
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bukti Pembayaran') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="bukti_pembayaran" required>
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

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('verif.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
