<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class C_Academic extends BaseController
{

    public function catatan_academic($id_kelas)
    {
        $data   = [
            'title'         => 'Kelas : ' . session()->get('kelas'),
            'title1'        => 'Catatan Academic ',
            'judul'         => 'Nilai Catatan Academic',
            'add'           => 'Tambah Nilai',
            'edit'          => 'Edit Nilai Catatan Academik',
            'rombelkelas'   => $this->WaliKelas_ModelRombel->allData(),
            'kelas'         => $this->Model_Kelas->detailData($id_kelas),
            'jml_siswa'     => $this->WaliKelas_Model->jml_siswa($id_kelas),
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'tahun'         => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/catatan_academic', $data);
    }

    //-------------------------------------------------
    public function add()
    {
        $data = [
            'c_academik'    => $this->request->getVar('c_academik'),
        ];
        $this->WaliKelas_ModelC_Academic->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/c_academic/catatan_academic/' . session()->get('rombel')));
    }
    //-------------------------------------------------
    public function edit($id_anggota_rombel)
    {
        $data = [
            'id_anggota_rombel'   => $id_anggota_rombel,
            'c_academik'          => $this->request->getVar('c_academik'),
        ];
        $this->WaliKelas_ModelC_Academic->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('walikelas/c_academic/catatan_academic/' . session()->get('rombel')));
    }
}
