<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\penerimaan;
use App\Models\mustahiq;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenerimaanExport;
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
        return view('BackEnd.penerimaan.index', compact('penerimaan'));
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
        $zakat = zakat::all();

        return view('BackEnd.penerimaan.create', [
            'penerimaan' => $penerimaan, compact('total', 'mustahiq', 'zakat'),
            'mustahiq' => $mustahiq,
            'zakat' => $zakat,
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
            'nik',
            'nama',
            'jenis_kelamin',
            'tgl_lahir',
            'alamat',
            'agama',
            'pekerjaan',
            'penghasilan',
            'jumlah_anak',
            'jenis_zakat',
            'jumlah',
            'ashnaf',
            'bukti',

        ]);

        $image = $request->file('bukti');
        $image->storeAs('public/foto', $image->hashName());

        $penerimaan = penerimaan::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'jumlah_anak' => $request->jumlah_anak,
            'jenis_zakat' => $request->jenis_zakat,
            'jumlah' => $request->jumlah,
            'ashnaf' => $request->ashnaf,
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
        return view('BackEnd.penerimaan.detail', compact('penerimaan'));
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
        return view('BackEnd.penerimaan.edit', [
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
            'nik',
            'nama',
            'jenis_kelamin',
            'tgl_lahir',
            'alamat',
            'agama',
            'pekerjaan',
            'penghasilan',
            'jumlah_anak',
            'jenis_zakat',
            'jumlah',
            'ashnaf',
            'bukti',
        ]);

        $penerimaan = penerimaan::where('id', $id)->first();

        if ($request->file('bukti') == "") {

            $penerimaan->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'agama' => $request->agama,
                'pekerjaan' => $request->pekerjaan,
                'penghasilan' => $request->penghasilan,
                'jumlah_anak' => $request->jumlah_anak,
                'jenis_zakat' => $request->jenis_zakat,
                'jumlah' => $request->jumlah,
                'ashnaf' => $request->ashnaf,

            ]);
        } else {
            Storage::disk('local')->delete('public/foto/' . $penerimaan->bukti);

            $image = $request->file('bukti');
            $image->storeAs('public/foto', $image->hashName());

            $penerimaan->update([
                'bukti' => $image->hashName(),
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'agama' => $request->agama,
                'pekerjaan' => $request->pekerjaan,
                'penghasilan' => $request->penghasilan,
                'jumlah_anak' => $request->jumlah_anak,
                'jenis_zakat' => $request->jenis_zakat,
                'jumlah' => $request->jumlah,
                'ashnaf' => $request->ashnaf,
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

    public function export()
    {
        return Excel::download(new PenerimaanExport, 'penerimaan.xlsx');
    }
}
