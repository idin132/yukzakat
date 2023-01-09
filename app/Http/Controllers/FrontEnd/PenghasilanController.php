<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Storage;

class PenghasilanController extends Controller
{
    public function index()
    {
        $penghasilan = pembayaran::all();
        return view('FrontEnd.zakat.penghasilan', compact('penghasilan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat',
            'jumlah',
        ]);

       $penghasilan = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            // 'bukti_pembayaran' => $request->bukti_pembayaran,
            
        ]);

        return redirect()->route('penghasilan.edit',$penghasilan->id);
    }

    public function edit ($id)
    {
        $penghasilan = pembayaran::where('id', $id)->first();
        return view('FrontEnd.pembayaran.penghasilan', [
            "penghasilan" => $penghasilan,
        ]);
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_zakat',
            'nama_muzakki',
            'jumlah',
            'metode_pembayaran',
            // 'bukti_pembayaran',
        ]);

        
        $penghasilan = pembayaran::where('id', $id);
        $penghasilan->update($request->except('_token','_method'));
        return redirect()->route('home');
    }
}