<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakkis;

class HomeController extends Controller
{
    public function index()
    {
        $muzakki = muzakkis::count();
        return view('muzakki.dashboard', compact('muzakki'));

    }
}
