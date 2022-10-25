<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $user = User::latest()->paginate(5);

        //return collection of posts as a resource
        return new UserResource(true, 'List Data', $user);
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
            'name' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //create post
        $user = User::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        //return response
        return new UserResource(true, 'Data Berhasil Ditambahkan!', $user);
        
    }

    public function show(User $user)
    {
        //return single post as a resource
        return new UserResource(true, 'Data Post Ditemukan!', $user);
    }

    public function update(Request $request, User $user)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required',
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
            $user->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        }

        //return response
        return new UserResource(true, 'Data Berhasil Diubah!', $user);
    }
}