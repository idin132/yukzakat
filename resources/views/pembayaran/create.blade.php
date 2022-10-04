@extends ('tampilan.main')

@section('content')
        <x-slot name="header">
            <h2 style="color: white" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Pembayaran') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card-body">

                        <form method="POST" action="{{ route('pembayaranp.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="id_zakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ID Zakat') }}</label>

                                <div class="col-md-6">
                                    <select name="id_zakat" id="id_zakat" class="form-control">
                                        <option>{{ __('--PILIH ZAKAT--') }}</option>
                                        @foreach ($zakats as $item)
                                            <option value="{{ $item->id }}">{{ $item->id_zakat }}</option>
                                        @endforeach
                                    </select>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_muzakki"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Muzakki') }}</label>

                                <div class="col-md-6">
                                    <select name="id_muzakki" id="id_muzakki" class="form-control">
                                        <option>{{ __('--PILIH MUZAKKI--') }}</option>
                                        @foreach ($muzakkis as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_muzakki }}</option>
                                        @endforeach
                                    </select>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jumlah" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                                <div class="col-md-6">
                                    <input id="jumlah" type="text"
                                        class="form-control @error('nama_mustahiq') is-invalid @enderror" name="jumlah"
                                        required>

                                    @error('nama_mustahiq')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>




                            <div class="row mb-3">
                                <label for="metode_pembayaran"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Metode Pembayaran') }}</label>

                                <div class="col-md-6">

                                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-control">
                                        <option value="">-- PILIH Metode --</option>
                                        <option value="Dana">Dana</option>
                                        <option value="ATM">ATM</option>
                                    </select>

                                    @error('nama_mustahiq')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah') }}
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
