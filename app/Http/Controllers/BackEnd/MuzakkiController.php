<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MuzakkiExport;
use App\Http\Controllers\Controller;

class MuzakkiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = User::all();
        return view('BackEnd.muzakki.index', compact('muzakkis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $muzakki = User::all();
        return view('BackEnd.muzakki.create', compact('muzakki'));
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
            'nik' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_rekening' => 'required',
            'tgl_lahir' => 'required',
            'email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'status' => 'required',
            'username',
            'password',
        ]);

        $muzakkis = User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_rekening' => $request->nomor_rekening,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'status' => $request->status,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect()->route('muzakki.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $muzakki = User::where('id', $id)->first();
        return view('BackEnd.muzakki.detail', compact('muzakki'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $muzakki = User::where('id', $id)->first();
        return view('BackEnd.muzakki.show', [
            "muzakkis" => $muzakki,
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
            'nik' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_rekening' => 'required',
            'tgl_lahir' => 'required',
            'email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'status' => 'required',
            'username',
            'password',
        ]);

        $muzakki = User::where('id', $id);
        $muzakki->update($request->except('_token', '_method'));
        return redirect()->route('muzakki.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $muzakki = User::find($id);
        $muzakki->delete();
        return to_route('muzakki.index')->with('hapus data berhasil>');
    }

    public function export()
    {
        return Excel::download(new MuzakkiExport, 'Muzakki.xlsx');
    }
}
