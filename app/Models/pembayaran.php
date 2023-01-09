<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayaran";
    protected $fillable = [
        'nama_zakat',
        'nama_muzakki',
        'jumlah',
        'metode_pembayaran',
        'bukti_pembayaran',
        'status',
    ];

    public function zakat()
    {
        return $this->hasOne(zakats::class, 'id', 'kategori_zakat');
        return $this->hasOne(muzakkis::class, 'id', 'id_muzakki');
    }
}
