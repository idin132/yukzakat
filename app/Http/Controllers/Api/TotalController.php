<?php

namespace App\Http\Controllers\Api;

use App\Models\pembayaran;
use App\Http\Controllers\Controller;
use App\Http\Resources\TotalResource;


class TotalController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
       
        $total = pembayaran::sum('jumlah');
        return new TotalResource(true, 'Total Donasi Terkumpul', $total);
    }

}