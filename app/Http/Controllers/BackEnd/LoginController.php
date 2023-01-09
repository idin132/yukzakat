<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect('/admin');
        }else{
            return view('auth.login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::Attempt($data)){
            return redirect('/admin');
        }else{
            Session::flash('error', 'salah');
            return redirect('/admin');     
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
