<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mustahiqs;

class MustahiqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $mustahiqs = mustahiqs::all();
        return view('mustahiq.index', compact('mustahiqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        $mustahiqr = mustahiqs::all();
        return view('mustahiq.create', compact('mustahiqr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $this->validate($request, [
            'nama_mustahiq' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);

        $mustahiqs = mustahiqs::create([
            'nama_mustahiq' => $request->nama_mustahiq,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
        ]);

        return redirect('mustahiqp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        $mustahiqs = mustahiqs::oldest('id')->simplepaginate(1);
        return view('mustahiq.detail', compact('mustahiqs'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $mustahiqs = mustahiqs::where('id', $id)->first();
        return view('mustahiq.show', [
            "mustahiqs" => $mustahiqs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_mustahiq' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);

        $mustahiqs = mustahiqs::where('id', $id);
        $mustahiqs->update($request->except('_token','_method'));
        return redirect()->route('mustahiqp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        $mustahiqs = mustahiqs::find($id);
        $mustahiqs->delete();
        return to_route('mustahiqp.index')->with('hapus data berhasil');
    }
    
}