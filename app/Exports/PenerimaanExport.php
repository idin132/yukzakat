<?php

namespace App\Exports;

use App\Models\penerimaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenerimaanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return penerimaan::select(
            "nik",
            "nama",
            "jenis_kelamin",
            "tgl_lahir",
            "alamat",
            "agama",
            "pekerjaan",
            "penghasilan",
            "jumlah_anak",
            "jenis_zakat",
            "jumlah",
            "ashnaf",
            "created_at"
        )->get();

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            "nik",
            "nama",
            "jenis_kelamin",
            "tgl_lahir",
            "alamat",
            "agama",
            "pekerjaan",
            "penghasilan",
            "jumlah_anak",
            "jenis_zakat",
            "jumlah",
            "ashnaf",
            "tanggal"
        ];
    }
}