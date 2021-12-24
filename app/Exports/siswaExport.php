<?php

namespace App\Exports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class siswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return siswa::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'siswa_no_kk',
            'siswa_nisn',
            'siswa_no_kip',
            'siswa_nama',
            'siswa_jenis_kelamin',
            'siswa_tempat_lahir',
            'siswa_tanggal_lahir',
            'siswa_alamat',
            'siswa_kelurahan',
            'siswa_provinsi',
            'siswa_kota',
            'siswa_kecamatan',
            'siswa_kode_pos',
            'siswa_agama',
            'siswa_no_hp',
            'siswa_anak_ke',
            'siswa_jumlah_saudara',
            'siswa_status_tempat_tinggal',
            'siswa_pembiaya',
            'siswa_kewarganegaraan',
            'siswa_kebutuhan_khusus',
            'siswa_kebutuhan_disabilitas',
            'siswa_kepala_keluarga',
            'siswa_pernah_paud',
            'siswa_pernah_tk',   
            'siswa_jarak_tempuh',
            'siswa_waktu_tempuh',
            'siswa_cita_cita',
            'siswa_hobi',
            'siswa_media_sosial',
            'lembaga_id',
        ];
    }
}
