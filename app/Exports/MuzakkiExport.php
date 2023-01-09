<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MuzakkiExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::select(
            "nik",
            "name",
            "jenis_kelamin",
            "nomor_rekening",
            "tgl_lahir",
            "email",
            "no_hp",
            "alamat",
            "pekerjaan",
            "penghasilan",
            "status",
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
            "name",
            "jenis kelamin",
            "nomor rekening",
            "tgl lahir",
            "email",
            "no hp",
            "alamat",
            "pekerjaan",
            "penghasilan",
            "status",
        ];
    }
}