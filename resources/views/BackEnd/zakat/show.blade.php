@extends('BackEnd.template.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <div class="card-header" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>EDIT ZAKAT</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('zakat.update', $zakats->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
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

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('zakat.index') }}" class="btn btn-primary">Kembali</a>

                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
