<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muzakki extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = "muzakki";
    protected $fillable = [
        'nama_muzakki', 'usia','no_hp','alamat',

    ];
}
