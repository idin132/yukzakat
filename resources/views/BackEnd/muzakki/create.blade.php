@extends('BackEnd.template.index')

@section('content')
    <div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{ route('muzakki.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="nik">{{ __('NIK') }}</label>
                                        <input type="text" class="form-control" name="nik" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="name">{{ __('Nama Muzakki') }}</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" name="email" request>    
                                    </div>
                                    <div class="col-6">
                                        <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                                        <input type="text" class="form-control" name="jenis_kelamin" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                    <label for="nomor_rekening">{{ __('Nomor Rekening') }}</label>
                                    <input type="text" class="form-control" name="nomor_rekening" required>
                                        
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
                                        <label for="no_hp">{{ __('No Handphone') }}</label>
                                        <input type="text" class="form-control" name="no_hp" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="alamat">{{ __('Alamat') }}</label>
                                        <input type="text" class="form-control" name="alamat" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="pekerjaan">{{ __('Pekerjaan') }}</label>
                                        <input type="text" class="form-control" name="pekerjaan" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="penghasilan">{{ __('Penghasilan') }}</label>
                                        <input type="text" class="form-control" name="penghasilan" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="status">{{ __('Status Perkawinan') }}</label>
                                        <select name="status" class="form-control">
                                            <option value="Menikah">{{__('Menikah')}}</option>
                                            <option value="Belum">{{__('Belum Menikah')}}</option>
                                            <option value="Cerai">{{__('Cerai')}}</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="username">{{ __('Username') }}</label>
                                        <input type="text" class="form-control" name="username" request>
                                    </div>
                                    <div class="col-6">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" name="password" request>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ route('muzakki.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
