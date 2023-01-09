<?php

namespace App\Exports;

use App\Models\mustahiq;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MustahiqExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return mustahiq::select("nik","nama_mustahiq","jenis_kelamin","tgl_lahir","alamat","agama","pekerjaan","penghasilan","jumlah_anak","ashnaf")->get();

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["NIK","Nama","Jenis Kelamin","Tanggal Lahir", "Alamat", "Agama", "Pekerjaan", "penghasilan", "Jumlah Anak", "Golongan"];
    }
}