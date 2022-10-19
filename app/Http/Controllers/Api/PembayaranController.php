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
        //get posts
        $pembayaran = pembayaran::latest()->paginate(5);

        //return collection of posts as a resource
        return new PembayaranResource(true, 'List Data', $pembayaran);
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
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //create post
        $pembayaran = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        //return response
        return new PembayaranResource(true, 'Data Berhasil Ditambahkan!', $pembayaran);
    }

    public function show(pembayaran $pembayaran)
    {
        //return single post as a resource
        return new PembayaranResource(true, 'Data Post Ditemukan!', $pembayaran);
    }

    public function update(Request $request, pembayaran $pembayaran)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
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
