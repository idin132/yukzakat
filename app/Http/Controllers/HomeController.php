<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakkis;
use App\Models\mustahiqs;

class HomeController extends Controller
{
    public function index()
    {
        $muzakkis = muzakkis::count()->get();
        $mustahiqs = mustahiqs::count()->get();

        return view('muzakki.dashboard', [
            "mustahiqs" => $mustahiqs,
            "muzakkis" => $muzakkis,
        ]);
    }
}

