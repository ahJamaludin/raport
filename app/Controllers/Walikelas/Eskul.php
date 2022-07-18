<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Eskul extends BaseController
{

    public function n_eskul($id_kelas)
    {
        $data   = [
            'title'       => 'Ekstra Kurikuler ',
            'judul'       => 'Nilai Ekstra Kurikuler',
            'add'         => 'Tambah Ekstra Kurikuler',
            'edit'        => 'Nilai Ekstra Kurikuler',
            'rombelkelas'       => $this->WaliKelas_ModelRombel->allData(),
            'kelas'       => $this->Model_Kelas->detailData($id_kelas),
            'dataeskul'   => $this->WaliKelas_ModelEskul->eskul(),
            'eskul'       => $this->WaliKelas_ModelEskul->allData(),
            'rombel'      => $this->WaliKelas_Model->allData(),
            'jml_siswa'   => $this->WaliKelas_Model->jml_siswa($id_kelas),
            'ta_aktif'    => $this->Model_Tahun->ta_aktif(),
            'jurusan'     => $this->Model_Rombel->detail($id_kelas),
            'tahun'       => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/eskul', $data);
    }

    //-------------------------------------------------
    public function add()
    {
        $data = [
            'eskul'   => $this->request->getVar('eskul'),
            // 'temp_dudi'   => $this->request->getVar('temp_dudi'),
            // 'lama_pkl'    => $this->request->getVar('lama_pkl'),
            // 'ket_pkl'     => $this->request->getVar('ket_pkl'),
        ];
        $this->Eskul_Model->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/eskul/n_eskul/' . session()->get('rombel')));
    }
    //-------------------------------------------------
    public function edit($id_anggota_rombel)
    {
        $data = [
            'id_anggota_rombel'     => $id_anggota_rombel,
            'pramuka'               => $this->request->getVar('pramuka'),
            'karya_ilmiah'          => $this->request->getVar('karya_ilmiah'),
        ];
        $this->WaliKelas_ModelRombel->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('walikelas/eskul/n_eskul/' . session()->get('rombel')));
    }
}
