<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakki;
use App\Models\mustahiq;
use App\Models\pembayaran;
use App\Models\penerimaan;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $mustahiqs = mustahiq::count();
        $muzakkis = muzakki::count();
        $penerimaan = penerimaan::count();
        $pembayaran = pembayaran::count();
        return view('dashboard', compact('mustahiqs','muzakkis', 'penerimaan', 'pembayaran'));
    }

}
