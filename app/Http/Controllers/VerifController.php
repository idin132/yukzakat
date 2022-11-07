<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VerifController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verifikasi = pembayaran::where('status', true);
        $verif = pembayaran::all();
        return view('verif.index', compact('verif', 'verifikasi'));
    }

    public function verifikasi($id)
    {
        $verifikasi = pembayaran::find($id);

        $verifikasi->status = true;

        return redirect()->back()->with('message', 'Success');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verif = pembayaran::all();

        return view('verif.create', [
            'verif' => $verif,
        ]);
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
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
            'status' => 'required',

        ]);

        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/foto', $image->hashName());

        $verif = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),
            'status' => $request->status,
        ]);

        return redirect()->route('verif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $verif = pembayaran::oldest('id')->simplepaginate(1);
        return view('verif.detail', compact('verif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $verif = pembayaran::where('id', $id)->first();
        return view('verif.show', [
            "verif" => $verif,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
            'status' => 'required',
        ]);

        $verif = pembayaran::where('id', $id);
        $verif->update($request->except('_token', '_method'));
        return redirect()->route('verif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $verif = pembayaran::find($id);
        $verif->delete();
        Storage::delete('public/storage/foto/' . $verif->bukti_pembayaran);
        return to_route('penerimaan.index')->with('hapus data berhasil>');
    }
}
