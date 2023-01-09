<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;

class LoginFEController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect('/');
        }else{
            return view('FrontEnd.login.index');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::Attempt($data)){
            return redirect('/');
        }else{
            Session::flash('error', 'salah');
            return redirect('login');     
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
