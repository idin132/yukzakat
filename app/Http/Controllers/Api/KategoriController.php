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
        //get posts
        $kategoris = zakat::latest()->paginate(5);

        //return collection of posts as a resource
        return new KategoriResource(true, 'List Data Posts', $kategoris);
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
            'kategori_zakat'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //create post
        $kategori = zakat::create([
            'kategori_zakat'     => $request->kategori_zakat,
        ]);

        //return response
        return new KategoriResource(true, 'Data Post Berhasil Ditambahkan!', $kategori);
        
    }

    public function show(zakat $kategori)
    {
        //return single post as a resource
        return new KategoriResource(true, 'Data Post Ditemukan!', $kategori);
    }

    public function update(Request $request, zakat $kategori)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
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
                'kategori_zakat'   => $request->kategori_zakat,
            ]);
        }

        //return response
        return new KategoriResource(true, 'Data Post Berhasil Diubah!', $kategori);
    }
}