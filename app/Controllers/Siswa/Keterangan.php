<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Keterangan extends BaseController
{

    public function nilai_academik($id_siswa)
    {
        $data   = [
            'title'       => 'Tahun Pelajaran',
            'judul'       => 'Data Tahun Pelajaran',
            'add'         => 'Tambah Data Tahun Pelajaran',
            'edit'        => 'Edit Data Tahun Pelajaran',
            'delete'      => 'Delete Data Tahun Pelajaran',
            'ta_aktif'    => $this->Model_Tahun->ta_aktif(),
            'siswa'       => $this->Model_Siswa->allData(),
            'detailsiswa' => $this->Model_Siswa->detailData($id_siswa),
            'mapelkelas'  => $this->Guru_Model_Nilai_Mapel->allData(),
            'rombelmapel'  => $this->WaliKelas_ModelMapel->allData(),
            // 'rombelmapel'  => $this->WaliKelas_ModelMapel->allData(),
        ];
        return view('Siswa/nilai_academik', $data);
    }

    //--------------------------------------------//


    //--------------------------------------------//

    public function nilai_karakter($id_siswa)
    {
        $data   = [
            'title'       => 'Tahun Pelajaran',
            'judul'       => 'Data Tahun Pelajaran',
            'add'         => 'Tambah Data Tahun Pelajaran',
            'edit'        => 'Edit Data Tahun Pelajaran',
            'delete'      => 'Delete Data Tahun Pelajaran',
            'ta_aktif'    => $this->Model_Tahun->ta_aktif(),
            'siswa'       => $this->Model_Siswa->allData(),
            'detailsiswa' => $this->Model_Siswa->detailData($id_siswa),
            'mapelkelas'  => $this->Guru_Model_Nilai_Mapel->allData(),
            'rombelmapel'  => $this->WaliKelas_ModelMapel->allData(),
            // 'rombelmapel'  => $this->WaliKelas_ModelMapel->allData(),
        ];
        return view('Siswa/nilai_karakter', $data);
    }
}

