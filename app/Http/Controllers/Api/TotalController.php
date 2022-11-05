<?php

namespace App\Http\Controllers\Api;

use App\Models\muzakki;
use App\Models\pembayaran;
use App\Http\Controllers\Controller;
use App\Http\Resources\TotalResource;
use App\Http\Resources\CountResource;


class TotalController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $total_donasi = pembayaran::sum('jumlah');
        return new TotalResource(200, 'Total Donasi Terkumpul', $total_donasi);
    }
}
