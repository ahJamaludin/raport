<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Rapor extends BaseController
{

    public function raporSiswa($id_kelas)
    {
        $data   = [
            'title'       => 'Data Kelas',
            'judul'       => 'Anggota Rombel',
            'add'         => 'Tambah Anggota Rombel',
            'rombelkelas'   => $this->WaliKelas_ModelRombel->allData(),
            'kelas'         => $this->Model_Kelas->detailData($id_kelas),
            'jml_siswa'     => $this->WaliKelas_Model->jml_siswa($id_kelas),
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'tahun'         => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/rapor', $data);
    }

    public function dataSiswa($id_rombel)
    {
        $data   = [
            'title'      => 'Data Kelas',
            'judul'      => 'KETERANGAN TENTANG DIRI PESERTA DIDIK',
            'siswa'      => $this->Rapor_Model->dataSiswa($id_rombel),
        ];
        return render('walikelas/nilai/detail_rapor', $data);
    }
}
