<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakkis;
use App\Models\mustahiqs;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $mustahiqs = mustahiqs::count();
        $muzakkis = muzakkis::count();
        return view('dashboard', compact('mustahiqs','muzakkis'));
    }

}
