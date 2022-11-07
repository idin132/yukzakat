@extends('tampilan.layout')

@section('content')
    <br><br><br><br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 w-100">
                <div class="card text-end">
                    <div class="row justify-content-center">
                        <div class="card-header">Jumlah</div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row text-end">

                                <div class="col-md-6 mb-3">
                                    <div class="card text-white bg-dark">
                                        <div class="card-header">
                                            <div class="bi bi-people-fill">
                                                Muzakki
                                            </div>
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
                                            <div class="bi bi-people-fill">
                                                Mustahiq
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $mustahiqs }}
                                            <h5 class="card-title"></h5>
                                            <p class="card-text justify-content-end"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card text-white bg-secondary">
                                        <div class="card-header">
                                            <div class="bi bi-cloud-arrow-down">
                                                Penerimaan
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $penerimaan }}
                                            <h5 class="card-title"></h5>
                                            <p class="card-text justify-content-end"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card text-white bg-secondary">
                                        <div class="card-header">
                                            <div class="bi bi-cash-coin">
                                                Pembayaran
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $pembayaran }}
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

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8 w-100">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div class="row justify-content-center">
                            <div class="text-bold h3">Total Donasi Terkumpul</div>
                        </div>
                    </div>
                    <div class="card-body h3">
                       Rp. {{ number_format($total_donasi) }}
                        <h5 class="card-title"></h5>
                        <p class="card-text justify-content-end"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8 w-100">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div class="row justify-content-center">
                            <div class="text-bold h3">Total Zakat Tersalurkan</div>
                        </div>
                    </div>
                    <div class="card-body h3">
                       Rp. {{ number_format($total_tersalurkan) }}
                        <h5 class="card-title"></h5>
                        <p class="card-text justify-content-end"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8 w-100">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div class="row justify-content-center">
                            <div class="text-bold h3">Total Uang Yang Tersisa</div>
                        </div>
                    </div>
                    <div class="card-body h3">
                       Rp. {{ number_format($total_donasi - $total_tersalurkan) }}
                        <h5 class="card-title"></h5>
                        <p class="card-text justify-content-end"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
