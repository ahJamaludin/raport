<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Pkl extends BaseController
{

    public function catatan_pkl($id_kelas)
    {
        $data   = [
            'title'       => 'Kelas : ' . session()->get('kelas'),
            'title1'      => 'Praktik Kerja Lapangan ',
            'judul'       => 'Nilai Praktik Kerja Lapangan',
            'add'         => 'Tambah Nama DU/DI',
            'edit'        => 'Nilai Praktik Kerja Lapangan',
            'rombelkelas'       => $this->WaliKelas_ModelRombel->allData(),
            'dudi'        => $this->WaliKelas_ModelPkl->allData(),
            'rombel'      => $this->WaliKelas_ModelRombel->allData(),
            'kelas'       => $this->Model_Kelas->detailData($id_kelas),
            'jml_siswa'   => $this->WaliKelas_Model->jml_siswa($id_kelas),
            'ta_aktif'    => $this->Model_Tahun->ta_aktif(),
            'jurusan'     => $this->Model_Rombel->detail($id_kelas),
            'tahun'       => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/pkl', $data);
    }

    //-------------------------------------------------
    public function add()
    {
        $data = [
            'nama_dudi'   => $this->request->getVar('nama_dudi'),
            'temp_dudi'   => $this->request->getVar('temp_dudi'),
            'lama_pkl'    => $this->request->getVar('lama_pkl'),
            'ket_pkl'     => $this->request->getVar('ket_pkl'),
        ];
        $this->WaliKelas_ModelPkl->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/pkl/catatan_pkl/' . session()->get('rombel')));
    }
    //-------------------------------------------------
    public function edit($id_anggota_rombel)
    {
        $data = [
            'id_anggota_rombel'   => $id_anggota_rombel,
            'id_pkl'          => $this->request->getVar('id_pkl'),
        ];
        $this->WaliKelas_ModelPkl->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('walikelas/pkl/catatan_pkl/' . session()->get('rombel')));
    }
}
