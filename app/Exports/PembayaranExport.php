<?php

namespace App\Exports;

use App\Models\pembayaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PembayaranExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return pembayaran::select("nama_zakat", "nama_muzakki", "jumlah", "metode_pembayaran", "status","created_at")->get();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Nama Zakat", "Nama", "Jumlah", "Metode Pembayaran", "status","Tanggal"];
    }
}