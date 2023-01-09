@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <div class="card-header" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>EDIT MUZAKKI</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('muzakki.update', $muzakkis->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nama_muzakki"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Muzakki') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="nama_muzakki"
                                        value="{{ $muzakkis->nama_muzakki }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="usia"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="usia"
                                        value="{{ $muzakkis->nama }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_hp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nomor Handphone') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="no_hp"
                                        value="{{ $muzakkis->no_hp }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="alamat"
                                        value="{{ $muzakkis->alamat }}" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('muzakki.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
