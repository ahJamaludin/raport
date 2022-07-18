<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

	public function index()
	{
		$data   = [
            'title'         => '' . session()->get('nama'),
            // 'judul'         => 'Data Jurusan',
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'kelas'         => $this->WaliKelas_Model->allData(),
            'jml_siswa'     => $this->WaliKelas_Model->jmlsiswa(),
			'mapelkelas'    => $this->Model_Mapel_Kelas->allData(),
        ];
		return render('guru/index', $data);
	}
	//--------------------------------------------//


}
