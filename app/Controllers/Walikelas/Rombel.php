<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Rombel extends BaseController
{

    public function anggota_rombel($id_kelas)
    {
        $data   = [
            'title'             => 'Kelas : ' . session()->get('kelas'),
            'title1'             => 'Data Kelas : ' . session()->get('kelas'),
            'judul'             => 'Anggota Rombel',
            'add'               => 'Tambah Anggota Rombel',
            'tahun'             => $this->Model_Rombel->allData(),
            'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
            'jurusan'           => $this->Model_Rombel->detail($id_kelas),
            'jmlsiswa'         => $this->WaliKelas_ModelRombel->jmlsiswa($id_kelas),
            'rombelkelas'       => $this->Model_Siswa->allData(),
            'kelas'             => $this->Model_Kelas->detailData($id_kelas),
        ];
        return render('walikelas/rombel/index', $data);
    }
}
