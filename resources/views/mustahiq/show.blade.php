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
                        <form action="{{ route('mustahiq.update', $mustahiqs->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nama_mustahiq"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Mustahiq') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="nama_mustahiq"
                                        value="{{ $mustahiqs->nama_mustahiq }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="usia"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="usia"
                                        value="{{ $mustahiqs->usia }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="alamat"
                                        value="{{ $mustahiqs->alamat }}" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('mustahiqp.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
