<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;

class LaporanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = User::all();
        return view('BackEnd.laporan.muzakki', compact('muzakkis'));
    }

    public function pembayaran(Request $request)
    {
        $tgl_masuk = $request->tgl_masuk;
        $tgl_selesai = $request->tgl_selesai;
        if($tgl_masuk){
            $tgl_masuk = pembayaran::all()->where('created_at', [$tgl_masuk,$tgl_selesai]);

            $sum_jumlah = pembayaran::where('created_at')->sum('jumlah');
        }else{
            $tgl_masuk = pembayaran::all();
        }
        return view('BackEnd.laporan.pembayaran', compact('tgl_masuk', 'tgl_selesai'));
    }
}
