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
                        <form action="{{ route('penerimaan.update', $penerimaan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nik"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control" name="nik"
                                        value="{{ $penerimaan->nik }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama"
                                        value="{{ $penerimaan->nama }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_kelamin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-6">
                                    <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin"
                                        value="{{ $penerimaan->jenis_kelamin }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tgl_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir"
                                        value="{{ $penerimaan->tgl_lahir }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" name="alamat"
                                        value="{{ $penerimaan->alamat }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="agama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('agama') }}</label>

                                <div class="col-md-6">
                                    <input id="agama" type="text" class="form-control" name="agama"
                                        value="{{ $penerimaan->agama }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pekerjaan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('pekerjaan') }}</label>

                                <div class="col-md-6">
                                    <input id="pekerjaan" type="text" class="form-control" name="pekerjaan"
                                        value="{{ $penerimaan->pekerjaan }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="penghasilan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('penghasilan') }}</label>

                                <div class="col-md-6">
                                    <input id="penghasilan" type="text" class="form-control" name="penghasilan"
                                        value="{{ $penerimaan->penghasilan }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jumlah_anak"
                                    class="col-md-4 col-form-label text-md-end">{{ __('jumlah_anak') }}</label>

                                <div class="col-md-6">
                                    <input id="jumlah_anak" type="text" class="form-control" name="jumlah_anak"
                                        value="{{ $penerimaan->jumlah_anak }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('jenis_zakat') }}</label>

                                <div class="col-md-6">
                                    <input id="jenis_zakat" type="text" class="form-control" name="jenis_zakat"
                                        value="{{ $penerimaan->jenis_zakat }}">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="jumlah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                                <div class="col-md-6">
                                    <input id="jumlah" type="numeric" class="form-control" name="jumlah"
                                        value="{{ $penerimaan->jumlah }}">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="ashnaf"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ashnaf') }}</label>

                                <div class="col-md-6">
                                    <input id="ashnaf" type="numeric" class="form-control" name="ashnaf"
                                        value="{{ $penerimaan->ashnaf }}">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="bukti"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                                <div class="col-md-6">
                                    <input id="bukti" type="file" class="button" name="bukti"
                                        value="{{ $penerimaan->bukti }}" request>
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
