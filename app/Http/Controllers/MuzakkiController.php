<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\muzakki;

class MuzakkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = muzakki::all();
        return view ('muzakki.index', compact('muzakkis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $muzakki = muzakki::all();
        return view ('muzakki.create', compact('muzakki'));

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
            'nama_muzakki' => 'required',
            'usia' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $muzakkis = muzakki::create([
            'nama_muzakki' => $request->nama_muzakki,
            'usia' => $request->usia,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('muzakki.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show ($id)
     {
         $muzakkis = muzakki::oldest('id')->simplepaginate(1);
         return view('muzakki.detail', compact('muzakkis'));
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit ($id)
     {
         $muzakkis = muzakki::where('id', $id)->first();
         return view('muzakki.show', [
             "muzakkis" => $muzakkis,
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
             'nama_muzakki' => 'required',
             'usia' => 'required',
             'no_hp' => 'required',
             'alamat' => 'required',
         ]);

         $muzakkis = muzakki::where('id', $id);
         $muzakkis->update($request->except('_token','_method'));
         return redirect()->route('muzakki.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy ($id)
    {
        $muzakkis = muzakki::find($id);
        $muzakkis->delete();
        return to_route('muzakki.index')->with('hapus data berhasil>');
    }

}
