<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zakat extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $table = "zakat";
    protected $fillable = [
        'id_zakat',
        'kategori_zakat',

    ];
}