<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahiq extends Model
{
    use HasFactory;
    protected $table = "mustahiq";
    protected $fillable = [
        'nik',
        'nama_mustahiq',
        'jenis_kelamin',
        'tgl_lahir', 
         'alamat',
         'agama',
         'pekerjaan',
         'penghasilan',
         'jumlah_anak',
         'ashnaf',
    ];

    public function mustahiq(){
        return $this->belongsTo('App\Models\mustahiq');
    } 
}
