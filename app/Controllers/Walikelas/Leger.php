<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Leger extends BaseController
{

    public function anggota_rombel($id_kelas)
    {
        $data   = [
            'title'       => 'Kelas : ' . session()->get('kelas'),
            'judul'       => 'Anggota Rombel',
            'add'         => 'Tambah Anggota Rombel',
            'rombelkelas'   => $this->WaliKelas_ModelRombel->allData(),
            'kelas'         => $this->Model_Kelas->detailData($id_kelas),
            'jml_siswa'     => $this->WaliKelas_Model_Leger->jmlsiswa($id_kelas),
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'tahun'         => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/leger', $data);
    }

    public function dataSiswa($id_siswa)
    {
        $data   = [
            'title'     => 'Profile',
            'judul'     => 'Data Siswa',
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'tahun'         => $this->Model_Rombel->allData(),
            'siswa'     => $this->Model_Siswa->detailData($id_siswa),
            'jurusan'   => $this->Model_Jurusan->allData(),
            // 'kelas'       => $this->Model_kelas->allData(),
            'detailsiswa' => $this->Model_Siswa->detailData($id_siswa),
            'mapelkelas'  => $this->Guru_Model_Nilai_Mapel->allData(),
            'rombelmapel'  => $this->WaliKelas_Model_Mapel->allData(),
        ];
        return render('walikelas/nilai/leger_siswa', $data);
    }
}
