<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muzakki extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "muzakkis";
    protected $fillable = [
        'nama_muzakki', 'usia','no_hp','alamat',

    ];
}
