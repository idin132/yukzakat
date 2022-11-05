<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahiq extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "mustahiq";
    protected $fillable = [
        'nama_mustahiq', 'usia','alamat',

    ];

    public function mustahiq(){
        return $this->belongsTo('App\Models\mustahiq');
    } 
}
