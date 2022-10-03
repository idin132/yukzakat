<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakkis;

class ZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = muzakkis::all();
        return view ('muzakki.index', compact('muzakkis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $muzakkir = muzakkis::all();
        return view ('muzakki.create', compact('muzakkir'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_muzakki' => 'required',
            'usia' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $muzakkis = muzakkis::create([
            'nama_muzakki' => $request->nama_muzakki,
            'usia' => $request->usia,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('muzakkip.index');
    }


}
