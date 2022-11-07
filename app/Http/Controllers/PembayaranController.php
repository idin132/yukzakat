<?php

namespace App\Http\Controllers;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\zakat;

class PembayaranController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pembayarans = pembayaran::all();
        return view ('pembayaran.index', compact('pembayarans'));
        $pembayarans = muzakki::count()->DB::select('select * from pembayaran where jumlah = ?', [1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zakat = zakat::all();
        $muzakki = muzakki::all();

        return view('pembayaran.create', [
            'zakat' => $zakat,
            'muzakki' => $muzakki,
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
            'nama_mustahiq' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
            'status' => 'required',
        ]);

        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/foto', $image->hashName());

        $pembayarans = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),
            'status' => $request->status,

        ]);

        return redirect()->route('mustahiq.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show ($id)
     {
         $pembayarans = pembayaran::oldest('id')->simplepaginate(1);
         return view('pembayaran.detail', compact('pembayarans'));
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit ($id)
     {
         $pembayarans = pembayaran::where('id', $id)->first();
         return view('pembayaran.show', [
             "pembayarans" => $pembayarans,
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
         ]);

         $pembayarans = pembayaran::where('id', $id);
         $pembayarans->update($request->except('_token','_method'));
         return redirect()->route('pembayaranp.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy ($id)
    {
        $pembayarans = pembayaran::find($id);
        $pembayarans->delete();
        return to_route('pembayaranp.index')->with('hapus data berhasil>');
    }
}
