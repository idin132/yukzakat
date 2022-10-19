<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerimaan;
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
        $penerimaan = penerimaan::all();

        return view('penerimaan.create', [
            'penerimaan' => $penerimaan,
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
        return view('penerimaan.show', [
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

        $penerimaan = penerimaan::where('id', $id);
        $penerimaan->update($request->except('_token', '_method'));
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
        return to_route('penerimaan.index')->with('hapus data berhasil>');
    }
}
