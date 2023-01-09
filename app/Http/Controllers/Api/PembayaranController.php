<?php

namespace App\Http\Controllers\Api;

use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PembayaranResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $pembayaran = pembayaran::all();
        return new PembayaranResource(200, 'List Data', $pembayaran);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // upload image
        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/foto', $image->hashName());

        //create post
        $pembayaran = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),
        ]);

        //return response
        return new PembayaranResource(true, 'Data Berhasil Ditambahkan!', $pembayaran);
    }

    public function show(pembayaran $pembayaran)
    {
        //return single post as a resource
        return new PembayaranResource(true, 'Data Ditemukan!', $pembayaran);
    }

    public function update(Request $request, pembayaran $pembayaran)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        {

            //update
            $pembayaran->update([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),
            ]);
        }

        //return response
        return new PembayaranResource(true, 'Data Berhasil Diubah!', $pembayaran);
    }

    /**
     * destroy
     *
     * @param  mixed $pembayaran
     * @return void
     */
    public function destroy(pembayaran $pembayaran)
    {

        $pembayaran->delete();

        //return response
        return new PembayaranResource(true, 'Data Berhasil Dihapus!', null);
    }
}
