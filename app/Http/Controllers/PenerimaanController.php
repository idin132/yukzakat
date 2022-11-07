<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerimaan;
use App\Models\mustahiq;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PenerimaanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaan = penerimaan::all();
        return view('penerimaan.index', compact('penerimaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total = penerimaan::sum('jumlah');
        $penerimaan = penerimaan::all();
        $mustahiq = mustahiq::all();

        return view('penerimaan.create', [
            'penerimaan' => $penerimaan, compact('total', 'mustahiq'),
            'mustahiq' => $mustahiq,
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
            'nama' => 'required',
            'alamat' => 'required',
            'jumlah' => 'required',
            'bukti' => 'required',

        ]);

        $image = $request->file('bukti');
        $image->storeAs('public/foto', $image->hashName());

        $penerimaan = penerimaan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jumlah' => $request->jumlah,
            'bukti' => $image->hashName(),
        ]);

        return redirect()->route('penerimaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $penerimaan = penerimaan::oldest('id')->simplepaginate(1);
        return view('penerimaan.detail', compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $penerimaan = penerimaan::where('id', $id)->first();
        return view('penerimaan.edit', [
            "penerimaan" => $penerimaan,
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
            'nama' => 'required',
            'alamat' => 'required',
            'jumlah' => 'required',
            'bukti' => 'required',
        ]);

        $penerimaan = penerimaan::where('id', $id)->first();

        if ($request->file('bukti') == "") {

            $penerimaan->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jumlah' => $request->jumlah,

            ]);
        } else {
            Storage::disk('local')->delete('public/foto/' . $penerimaan->bukti);

            $image = $request->file('bukti');
            $image->storeAs('public/foto', $image->hashName());

            $penerimaan->update([
                'bukti' => $image->hashName(),
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jumlah' => $request->jumlah,

            ]);
        }


        
        // $penerimaan->update($request->except('_token', '_method'));
        return redirect()->route('penerimaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $penerimaan = penerimaan::find($id);
        $penerimaan->delete();
        Storage::delete('public/storage/foto/' . $penerimaan->bukti);
        return to_route('penerimaan.index')->with('hapus data berhasil>');
    }
}
