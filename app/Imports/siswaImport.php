<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class siswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new siswa([
            'siswa_no_kk'=>$row['siswa_no_kk'],
            'siswa_nisn'=>$row['siswa_nisn'],
            'siswa_no_kip'=>$row['siswa_no_kip'],
            'siswa_nama'=>$row['siswa_nama'],
            'siswa_jenis_kelamin'=>$row['siswa_jenis_kelamin'],
            'siswa_tempat_lahir'=>$row['siswa_tempat_lahir'],
            'siswa_tanggal_lahir'=>$row['siswa_tanggal_lahir'],
            'siswa_alamat'=>$row['siswa_alamat'],
            'siswa_kelurahan'=>$row['siswa_kelurahan'],
            'siswa_provinsi'=>$row['siswa_provinsi'],
            'siswa_kota'=>$row['siswa_kota'],
            'siswa_kecamatan'=>$row['siswa_kecamatan'],
            'siswa_kode_pos'=>$row['siswa_kode_pos'],
            'siswa_agama'=>$row['siswa_agama'],
            'siswa_no_hp'=>$row['siswa_no_hp'],
            'siswa_anak_ke'=>$row['siswa_anak_ke'],
            'siswa_jumlah_saudara'=>$row['siswa_jumlah_saudara'],
            'siswa_status_tempat_tinggal'=>$row['siswa_status_tempat_tinggal'],
            'siswa_pembiaya'=>$row['siswa_pembiaya'],
            'siswa_kewarganegaraan'=>$row['siswa_kewarganegaraan'],
            'siswa_kebutuhan_khusus'=>$row['siswa_kebutuhan_khusus'],
            'siswa_kebutuhan_disabilitas'=>$row['siswa_kebutuhan_disabilitas'],
            'siswa_kepala_keluarga'=>$row['siswa_kepala_keluarga'],
            'siswa_pernah_paud'=>$row['siswa_pernah_paud'],
            'siswa_pernah_tk'=>$row['siswa_pernah_tk'],   
            'siswa_jarak_tempuh'=>$row['siswa_jarak_tempuh'],
            'siswa_waktu_tempuh'=>$row['siswa_waktu_tempuh'],
            'siswa_cita_cita'=>$row['siswa_cita_cita'],
            'siswa_hobi'=>$row['siswa_hobi'],
            'siswa_media_sosial'=>$row['siswa_media_sosial'],
            'lembaga_id'=> $row['lembaga_id'],
        ]);
    }
}
