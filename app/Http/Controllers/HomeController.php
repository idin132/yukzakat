<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakki;
use App\Models\mustahiq;

class HomeController extends Controller
{
    public function index()
    {
        $muzakkis = muzakki::count();
        $mustahiqs = mustahiq::count();

        return view('dashboard', [
            "mustahiqs" => $mustahiqs,
            "muzakkis" => $muzakkis,
        ]);
    }
}

