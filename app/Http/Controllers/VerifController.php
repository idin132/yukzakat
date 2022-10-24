<?php

namespace App\Http\Controllers;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\zakat;

class VerifController extends Controller
{
    public function index()
    {
        $pembayarans = pembayaran::all();
        return view ('verif.index', compact('pembayarans'));
    }
    public function create()
    {
        $zakat = zakat::all();
        $muzakki = muzakki::all();

        return view('verif.create', [
            'zakat' => $zakat,
            'muzakki' => $muzakki,
        ]);

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat' => 'required',
            'nama_mustahiq' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
            'status' => 'required',
        ]);

        $pembayarans = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'status' => $request->status,
        ]);

        return redirect()->route('mustahiq.index');
    }
    public function edit ($id)
    {
        $pembayarans = pembayaran::where('id', $id)->first();
        return view('verif.show', [
            "pembayarans" => $pembayarans,
        ]);
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nama_zakat' => 'required',
            'nama_mustahiq' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
            'status' => 'required',
         ]);

         $pembayarans = pembayaran::where('id', $id);
         $pembayarans->update($request->except('_token','_method'));
         return redirect()->route('verif.index');
    }
    public function destroy ($id)
    {
        $pembayarans = pembayaran::find($id);
        $pembayarans->delete();
        return to_route('verif.index')->with('hapus data berhasil>');
    }
}
