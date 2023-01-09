<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        {
            // //set validation
            // $validator = Validator::make($request->all(), [
            //     'username'     => 'required',
            //     'password'  => 'required'
            // ]);
    
            // //if validation fails
            // if ($validator->fails()) {
            //     return response()->json($validator->errors(), 422);
            // }
    
            // //get credentials from request
            // $credentials = $request->only('username', 'password');
    
            // //if auth failed
            // if(!$token = auth()->guard('api')->attempt($credentials)) {
            //     return response()->json([
            //         'success' => false,
            //         'message' => 'Email atau Password Anda salah'
            //     ], 401);
            // }
    
            // //if auth success
            // return response()->json([
            //     'success' => true,
            //     'user'    => auth()->guard('api')->user(),    
            //     'token'   => $token   
            // ], 200);
        $AUTH_USER = 'admin';
        $AUTH_PASS = 'admin';
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        $is_not_authenticated = (
            !$has_supplied_credentials ||
            $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
            $_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
        );
        if ($is_not_authenticated) {
            header('HTTP/1.1 401 Authorization Required');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit;
        }
        return $next($request);
    }
}
}