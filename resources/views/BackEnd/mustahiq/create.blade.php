@extends('BackEnd.template.index')

@section('content')
    <div class="container">
    <div class="row">
    <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('mustahiq.store') }}" method="post">
                            @csrf
                            <div class="form-group">
`                                <div class="row">
                                    <div class="col-6">
                                        <label for="nik">{{ __('NIK') }}</label>
                                        <input type="text" class="form-control" name="nik" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="nama_mustahiq">{{ __('Nama Mustahiq') }}</label>
                                        <input type="text" class="form-control" name="nama_mustahiq" required>    
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                    <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="L">{{__('L')}}</option>
                                        <option value="P">{{__('P')}}</option>
                                    </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="tgl_lahir">{{ __('Tanggal Lahir') }}</label>
                                        <input type="text" class="form-control" name="tgl_lahir" required>    
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="alamat">{{ __('Alamat') }}</label>
                                        <input type="text" class="form-control" name="alamat" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="agama">{{__('Agama')}}</label>
                                        <input type="text" class="form-control" name="agama" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="pekerjaan">{{__('Pekerjaan')}}</label>
                                        <input type="text" class="form-control" name="pekerjaan" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="penghasilan">{{__('Penghasilan')}}</label>
                                        <input type="text" class="form-control" name="penghasilan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="jumlah_anak" >{{ __('Jumlah Anak') }}</label>
                                        <input type="nama" class="form-control" name="jumlah_anak" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="ashnaf">{{ __('Ashnaf') }}</label>
                                        <select name="ashnaf" class="form-control">
                                            <option value="amil">{{__('Amil')}}</option>
                                            <option value="fakir">{{__('Fakir')}}</option>
                                            <option value="fisabilillah">{{__('Fisabilillah')}}</option>
                                            <option value="gharim">{{__('Gharim')}}</option>
                                            <option value="ibnu sabil">{{__('Ibnu sabil')}}</option>
                                            <option value="miskin">{{__('Miskin')}}</option>
                                            <option value="muallaf">{{__('Muallaf')}}</option>
                                            <option value="gharim">{{__('Gharim')}}</option>
                                            <option value="riqab">{{__('Riqab')}}</option>    
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('mustahiq.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
        
        </div>
    @endsection