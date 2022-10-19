@extends('tampilan.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('muzakki.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama_muzakki"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Muzakki') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_muzakki" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="usia"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="usia" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_hp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Handphone') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="no_hp" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alamat" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('muzakki.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
