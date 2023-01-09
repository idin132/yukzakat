<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\mustahiq;
use App\Models\pembayaran;
use App\Models\penerimaan;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $mustahiqs = mustahiq::count();
        $muzakkis = User::count();
        $penerimaan = penerimaan::count();
        $pembayaran = pembayaran::count();
        // $total_donasi = pembayaran::sum('jumlah');
        $total_donasi_disetujui = pembayaran::where('status', '0')->sum('jumlah');
        $total_tersalurkan = penerimaan::sum('jumlah');
        return view('BackEnd.dashboard', compact('mustahiqs','muzakkis', 'penerimaan', 'pembayaran','total_donasi_disetujui', 'total_tersalurkan'));
    }

}
