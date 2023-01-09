@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('zakat.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="kategori_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kategori Zakat') }}</label>

                                <div class="col-md-6">
                                    <select name="kategori_zakat" class="form-control">
                                        <option value="Zakat Penghasilan">{{__('Zakat Penghasilan')}}</option>
                                        <option value="Zakat Fitrah">{{__('Zakat Fitrah')}}</option>
                                        <option value="Zakat Mal">{{__('Zakat Mal')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ID Zakat') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id_zakat" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('zakat.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
