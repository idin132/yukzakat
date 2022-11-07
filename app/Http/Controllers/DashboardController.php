<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $total_donasi = pembayaran::sum('jumlah');
        $total_tersalurkan = penerimaan::sum('jumlah');
        return view('dashboard', compact('mustahiqs','muzakkis', 'penerimaan', 'pembayaran','total_donasi', 'total_tersalurkan'));
    }

}
