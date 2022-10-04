<?php

namespace App\Http\Controllers;

use App\Models\muzakkis;
use Illuminate\Http\Request;
use App\Models\pembayarans;
use App\Models\zakats;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = pembayarans::all();
        return view ('pembayaran.index', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zakats = zakats::all();
        $muzakkis = muzakkis::all();

        return view('pembayaran.create', [
            'zakats' => $zakats,
            'muzakkis' => $muzakkis
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
            'id_zakat' => 'required',
            'id_mustahiq' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $pembayarans = pembayarans::create([
            'id_zakat' => $request->id_zakat,
            'id_mustahiq' => $request->id_mustahiq,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        return redirect()->route('mustahiqp.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show ($id)
     {
         $pembayarans = pembayarans::oldest('id')->simplepaginate(1);
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
         $pembayarans = pembayarans::where('id', $id)->first();
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
             'id_zakat' => 'required',
             'id_muzakki' => 'required',
             'jumlah' => 'required',
             'metode_pembayaran' => 'required',
         ]);

         $pembayarans = pembayarans::where('id', $id);
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
        $pembayarans = pembayarans::find($id);
        $pembayarans->delete();
        return to_route('pembayaranp.index')->with('hapus data berhasil>');
    }

}
