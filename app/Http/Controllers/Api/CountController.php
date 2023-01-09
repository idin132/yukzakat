<?php

namespace App\Http\Controllers\Api;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CountController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
       
        $muzakkis = muzakki::count();
        return new CountResource(true, 'Data Muzakki', $muzakkis);
    }

}