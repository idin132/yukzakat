<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahiqs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "mustahiqs";
    protected $fillable = [
        'nama_mustahiq', 'usia','alamat',

    ];
}
