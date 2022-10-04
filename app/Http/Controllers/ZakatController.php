<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zakats;

class ZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = zakats::all();
        return view ('zakat.index', compact('zakats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zakatr = zakats::all();
        return view ('zakat.create', compact('zakatr'));
        

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
            'kategori_zakat' => 'required',
        ]);

        $zakats = zakats::create([
            'id_zakat' => $request->id_zakat,
            'kategori_zakat' => $request->kategori_zakat,
        ]);

        return redirect()->route('zakatp.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show ($id)
     {
         $zakats = zakats::oldest('id')->simplepaginate(1);
         return view('zakat.detail', compact('zakats'));
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit ($id)
     {
         $zakats = zakats::where('id', $id)->first();
         return view('zakat.show', [
             "zakats" => $zakats,
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
             'kategori_zakat' => 'required',
         ]);

         $zakats = zakats::where('id', $id);
         $zakats->update($request->except('_token','_method'));
         return redirect()->route('zakatp.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy ($id)
    {
        $zakats = zakats::find($id);
        $zakats->delete();
        return to_route('zakatp.index')->with('hapus data berhasil>');
    }

}
