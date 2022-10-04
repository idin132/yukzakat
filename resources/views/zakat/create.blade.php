@extends('tampilan.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('zakatp.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="id_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ID Zakat') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id_zakat" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kategori_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kategori Zakat') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kategori_zakat" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('zakatp.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
