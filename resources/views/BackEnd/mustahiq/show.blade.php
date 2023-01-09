@extends('BackEnd.template.index')

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
                                <label for="nik"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="nik"
                                        value="{{ $mustahiqs->nik }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama_mustahiq"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Mustahiq') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="nama_mustahiq"
                                        value="{{ $mustahiqs->nama_mustahiq }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_kelamin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis kelamin') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="jenis_kelamin"
                                        value="{{ $mustahiqs->jenis_kelamin }}" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="tgl_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="tgl_lahir"
                                        value="{{ $mustahiqs->tgl_lahir }}" required>
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

                            <div class="row mb-3">
                                <label for="agama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('agama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="agama"
                                        value="{{ $mustahiqs->agama }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pekerjaan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('pekerjaan') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="pekerjaan"
                                        value="{{ $mustahiqs->pekerjaan }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="penghasilan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('penghasilan') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="penghasilan"
                                        value="{{ $mustahiqs->penghasilan }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jumlah_anak"
                                    class="col-md-4 col-form-label text-md-end">{{ __('jumlah anak') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="jumlah_anak"
                                        value="{{ $mustahiqs->jumlah_anak }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ashnaf"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ashnaf') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control" name="ashnaf"
                                        value="{{ $mustahiqs->ashnaf }}" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('mustahiq.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
