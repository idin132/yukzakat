<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $total_donasi_disetujui = pembayaran::where('status', '0')->sum('jumlah');
        return view('FrontEnd.index', compact('total_donasi_disetujui'));
    }
}
