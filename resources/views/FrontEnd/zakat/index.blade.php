@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class="container">
    <div class='block'>
        <h2 class="d-flex justify-content-center"><b>Kalkulator Zakat</b></h2>
        <br><br>

        <div class="container">
            <form action="{{ route('kalkulator.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="nama_zakat">{{ __('nama Zakat') }}</label>
                            <input type="text" class="form-control" name="nama_zakat" value="Zakat Fitrah" readonly>
                        </div>
                    </div>
                </div>
                <div class="perhitungan">
                    <div class="row">
                        <div class="col">
                            <label for="beras">{{ __('Harga Beras') }}</label>
                            <input type="text" class="form-control" name="beras" id="bil1">
                        </div>

                        <div class="col">
                            <label for="jumlah">{{ __('Jumlah') }}</label>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" readonly>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- <a href="" class="btn col text-white" style="background-color: cyan;">Hitung</a> -->
                <br><br>
                <br>

                <!-- <div class="container text-center">
                    <div class="white-box info">
                        <div class="col-sm-6 help-process ">
                            <h2 style="color: #65FFDC;">Rp. 32.500</h2>
                            <b>
                                <p>Jumlah Zakat Yang Harus Dibayar</p>
                            </b>
                        </div>
                    </div> -->
                </div>
                <br><br>
                <button type="submit" class="btn col text-white" style="background-color: cyan;">Tambah</button>
            </form>
            <!-- <a href="pembayaran/fitrah" class="btn col text-white" style="background-color: cyan;">Lanjutkan</a> -->


            <!-- <a href="" class="btn col text-white" style="background-color: cyan;">Bayar Zakat</a> -->
        </div>
    </div>
</div>

<br>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script type="text/javascript">
    $(".perhitungan").keyup(function() {
        var bil1 = parseInt($("#bil1").val())

        var jumlah = bil1 * 2.5;
        $("#jumlah").attr("value", jumlah)
    });
</script>
@endsection