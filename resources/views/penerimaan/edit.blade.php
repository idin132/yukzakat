@extends('tampilan.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <div class="card-header" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>EDIT MUSTAHIQ</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('penerimaan.update', $penerimaan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama"
                                        value="{{ $penerimaan->nama }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="alamat"
                                        value="{{ $penerimaan->alamat }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                                <div class="col-md-6">
                                    <input id="jumlah" type="numeric" class="form-control" name="jumlah"
                                        value="{{ $penerimaan->jumlah }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                                <div class="col-md-6">
                                    <input id="bukti" type="file" class="form-control" name="bukti"
                                        value="{{ $penerimaan->bukti }}" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('penerimaan.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
