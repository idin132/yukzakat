<?php

namespace App\Http\Controllers\Api;

use App\Models\zakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KategoriResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $kategoris = zakat::all();
        return new KategoriResource(200, 'List Data', $kategoris);
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
            'id_zakat'     => 'required',
            'kategori_zakat'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //create post
        $kategori = zakat::create([
            'id_zakat'     => $request->id_zakat,
            'kategori_zakat'     => $request->kategori_zakat,
        ]);

        //return response
        return new KategoriResource(true, 'Data Berhasil Ditambahkan!', $kategori);
    }

    public function show(zakat $kategori)
    {
        //return single post as a resource
        return new KategoriResource(true, 'Data Ditemukan!', $kategori);
    }

    public function update(Request $request, zakat $kategori)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'id_zakat'   => 'required',
            'kategori_zakat'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        {

            //update
            $kategori->update([
                'id_zakat'   => $request->id_zakat,
                'kategori_zakat'   => $request->kategori_zakat,
            ]);
        }

        //return response
        return new KategoriResource(true, 'Data Berhasil Diubah!', $kategori);
    }
}
