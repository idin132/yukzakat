<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Storage;

class KalkulatorController extends Controller
{
    public function index()
    {
        $kalkulator = pembayaran::all();
        return view('FrontEnd.zakat.index', compact('kalkulator'));
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat',
            'jumlah',
        ]);

        $fitrah = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            
        ]);

        return redirect()->route('kalkulator.edit', $fitrah->id);
    }

    public function edit ($id)
    {
        $fitrah = pembayaran::where('id', $id)->first();
        return view('FrontEnd.pembayaran.fitrah', [
            "fitrah" => $fitrah,
        ]);
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_zakat',
            'nama_muzakki',
            'jumlah',
            // 'metode_pembayaran',
            // 'bukti_pembayaran',
        ]);

        
        $fitrah = pembayaran::where('id', $id);
        $fitrah->update($request->except('_token','_method'));
        return redirect()->route('home');
    }
}
