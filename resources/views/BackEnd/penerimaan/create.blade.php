@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('penerimaan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <select name="nama" id="nama" class="form-control">
                                        @foreach ($mustahiq as $item)
                                            <option value="{{ $item->nama_mustahiq }}">{{ $item->nama_mustahiq }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">

                                    <input type="nama" class="form-control" name="alamat" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                                <div class="col-md-6">
                                    <input type="nama" class="form-control" name="jumlah" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Zakat') }}</label>

                                <div class="col-md-6">
                                    <select name="jenis_zakat" id="jenis_zakat" class="form-control">
                                        @foreach ($zakat as $zakat)
                                            <option value="{{ $zakat->kategori_zakat }}"> {{ $zakat->kategori_zakat }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bukti"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bukti') }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="button" id="bukti" name="bukti" required>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('penerimaan.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
