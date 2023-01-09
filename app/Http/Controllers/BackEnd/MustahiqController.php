<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\mustahiq;
use App\Models\muzakki;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MustahiqExport;
use App\Http\Controllers\Controller;

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
        return view('BackEnd.mustahiq.index', compact('mustahiqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        $mustahiqr = mustahiq::all();
        return view('BackEnd.mustahiq.create', compact('mustahiqr'));
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
            'nik' => 'required',
            'nama_mustahiq' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'jumlah_anak' => 'required',
            'ashnaf' => 'required',
        ]);

        $mustahiqs = mustahiq::create([
            'nik' => $request->nik,
            'nama_mustahiq' => $request->nama_mustahiq,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'jumlah_anak' => $request->jumlah_anak,
            'ashnaf' => $request->ashnaf,
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
        $mustahiqs = mustahiq::where('id', $id)->first();
        return view('BackEnd.mustahiq.detail', compact('mustahiqs'));  
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
        return view('BackEnd.mustahiq.show', [
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
            'nik',
            'nama_mustahiq',
            'jenis_kelamin',
            'tgl_lahir',
            'alamat',
            'agama',
            'pekerjaan',
            'penghasilan',
            'jumlah_anak',
            'ashnaf',
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

    public function export()
    {
        return Excel::download(new MustahiqExport, 'BackEnd.Mustahiq.xlsx');
    }

    
    
}