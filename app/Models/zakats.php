<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zakats extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "zakats";
    protected $fillable = [
        'id_zakat', 'kategori_zakat',

    ];
}