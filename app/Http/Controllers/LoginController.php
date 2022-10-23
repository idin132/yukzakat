<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect('/');
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
            return redirect('/');
        }else{
            Session::flash('error', 'salah');
            return redirect('/');     
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
