<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\CpwResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CpwController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $users = User::latest()->paginate(5);

        return new CpwResource(true, 'List Data Posts', $users);
    }

    public function changePassword(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with(['error' => 'Old password does not match']);
        }
        $users = User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        //return response
        return new CpwResource(true, 'Password berhasil dirubah');
    }
}
