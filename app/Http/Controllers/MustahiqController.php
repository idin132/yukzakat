<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mustahiq;
use App\Models\muzakki;

class MustahiqController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $mustahiqs = mustahiq::all();
        return view('mustahiq.index', compact('mustahiqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        $mustahiqr = mustahiq::all();
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

        $mustahiqs = mustahiq::create([
            'nama_mustahiq' => $request->nama_mustahiq,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
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
        $mustahiqs = mustahiq::oldest('id')->simplepaginate(1);
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
        $mustahiqs = mustahiq::where('id', $id)->first();
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

        $mustahiqs = mustahiq::where('id', $id);
        $mustahiqs->update($request->except('_token','_method'));
        return redirect()->route('mustahiq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        $mustahiqs = mustahiq::find($id);
        $mustahiqs->delete();
        return to_route('mustahiq.index')->with('hapus data berhasil');
    }

    
    
}