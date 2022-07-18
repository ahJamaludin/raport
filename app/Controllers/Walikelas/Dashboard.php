<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function index()
    {
        $data   = [
            'title'         => 'Kelas : ' . session()->get('kelas'),
            'judul'         => 'Data Jurusan',
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'kelas'         => $this->WaliKelas_Model->allData(),
            'jml_siswa'     => $this->WaliKelas_Model->jmlsiswa(),
        ];
        return render('walikelas/index', $data);
    }
    //--------------------------------------------//
}
