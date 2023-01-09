<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;


class ZakatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = zakat::all();
        return view('BackEnd.zakat.index', compact('zakats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zakatr = zakat::all();
        return view('BackEnd.zakat.create', compact('zakatr'));
        

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

        $zakats = zakat::create([
            'id_zakat' => $request->id_zakat,
            'kategori_zakat' => $request->kategori_zakat,
        ]);

        return redirect()->route('zakat.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show ($id)
     {
         $zakats = zakat::oldest('id')->simplepaginate(1);
         return view('BackEnd.zakat.detail', compact('zakats'));
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit ($id)
     {
         $zakats = zakat::where('id', $id)->first();
         return view('BackEnd.zakat.show', [
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

         $zakats = zakat::where('id', $id);
         $zakats->update($request->except('_token','_method'));
         return redirect()->route('zakat.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy ($id)
    {
        $zakats = zakat::find($id);
        $zakats->delete();
        return to_route('zakat.index')->with('hapus data berhasil>');
    }

}
