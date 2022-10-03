@extends('tampilan.layout')

@section('content')
    <br><br><br><br>
  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 w-100">
            <div class="card text-end">

                <div class="card-header">Today's Activities</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row text-end">

                            <div class="col-md-6 mb-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-header">
                                        User
                                    </div>
                                    <div class="card-body">
                                      {{ $muzakkis }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-white bg-secondary">
                                    <div class="card-header">
                                        Instansi
                                    </div>
                                    <div class="card-body">
                                      {{ $muzakkis }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        Surat Masuk
                                    </div>
                                    <div class="card-body">
                                      {{ $muzakkis }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-white bg-danger">
                                    <div class="card-header">
                                        Surat Keluar
                                    </div>
                                    <div class="card-body">
                                      {{ $muzakkis }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
