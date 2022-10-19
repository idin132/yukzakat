<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakki;
use App\Models\mustahiq;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $mustahiqs = mustahiq::count();
        $muzakkis = muzakki::count();
        return view('dashboard', compact('mustahiqs','muzakkis'));
    }

}
