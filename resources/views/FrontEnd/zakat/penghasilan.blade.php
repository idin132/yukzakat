@extends('FrontEnd.layouts.main')
@section('content')
<br>
<div class="container">
    <div class='block'>
        <h2 class="d-flex justify-content-center"><b>Kalkulator Zakat</b></h2>
        <br><br>


        <div class="container">
            <form action="{{ route('penghasilan.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="nama_zakat">{{ __('Kategori Zakat') }}</label>
                            <input type="text" class="form-control" name="nama_zakat" value="Zakat Penghasilan" readonly>
                        </div>
                    </div>
                </div>

                <div class="perhitungan">

                    <div class="row">
                        <div class="col">
                            <label for="penghasilan">{{ __('Penghasilan Perbulan') }}</label>
                            <input type="text" class="form-control" name="penghasilan" id="bil1" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="bonus">{{ __('Bonus/THR/Penghasilan Lainnya') }}</label>
                            <input type="text" class="form-control" name="bonus" id="bil2" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="jumlah">{{ __('Jumlah') }}</label>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" readonly>
                        </div>
                    </div>

                </div>

                <br><br>
                <button type="submit" class="btn col text-white" style="background-color: cyan;">Tambah</button>

                <!-- <a href="" class="btn col text-white" style="background-color: cyan;">Hitung</a> -->
            </form>
        </div>
    </div>
</div>
<br>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script type="text/javascript">
    $(".perhitungan").keyup(function() {
        var bil1 = parseInt($("#bil1").val())
        var bil2 = parseInt($("#bil2").val())

        var jumlah = (bil1 + bil2) * 0.025;
        $("#jumlah").attr("value", jumlah)
    });
</script>
@endsection