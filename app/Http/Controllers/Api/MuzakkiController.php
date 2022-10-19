<?php

namespace App\Http\Controllers\Api;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MuzakkiResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MuzakkiController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $muzakki = muzakki::latest()->paginate(5);

        //return collection of posts as a resource
        return new MuzakkiResource(true, 'List Data', $muzakki);
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
            'nama_muzakki' => 'required',
             'usia' => 'required',
             'no_hp' => 'required',
             'alamat' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //create post
        $muzakki = muzakki::create([
            'nama_muzakki' => $request->nama_muzakki,
            'usia' => $request->usia,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        //return response
        return new MuzakkiResource(true, 'Data Berhasil Ditambahkan!', $muzakki);
        
    }

    public function show(muzakki $muzakki)
    {
        //return single post as a resource
        return new MuzakkiResource(true, 'Data Post Ditemukan!', $muzakki);
    }

    public function update(Request $request, muzakki $muzakki)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_muzakki' => 'required',
             'usia' => 'required',
             'no_hp' => 'required',
             'alamat' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        {

            //update
            $muzakki->update([
                'nama_muzakki' => $request->nama_muzakki,
                'usia' => $request->usia,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        }

        //return response
        return new MuzakkiResource(true, 'Data Berhasil Diubah!', $muzakki);
    }
}