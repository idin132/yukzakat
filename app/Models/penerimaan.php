<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerimaan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "penerimaans";
    protected $fillable = [
        'nama',
        'alamat',
        'jumlah',
        'bukti',

    ];
}
