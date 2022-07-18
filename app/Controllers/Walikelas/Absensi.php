<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Absensi extends BaseController
{

    public function n_absensi($id_kelas)
    {
        $data   = [
            'title'       => 'Kelas : ' . session()->get('kelas'),
            'title1'      => 'Ketidakhadiran ',
            'judul'       => 'Ketidakhadiran',
            'add'         => 'Tambah Ketidakhadiran',
            'edit'        => 'Nilai Ketidakhadiran',
            'rombel'      => $this->WaliKelas_ModelRombel->allData(),
            'kelas'       => $this->Model_Kelas->detailData($id_kelas),
            // 'dataeskul'   => $this->Absensi_Model->eskul(),
            // 'absensi'       => $this->WaliKelas_ModelAbsensi->allData(),
            // 'rombel'      => $this->WaliKelas_Model->allData(),
            // 'detail'      => $this->WaliKelas_Model->detail($id_kelas),
            // 'dataKelas'   => $this->WaliKelas_Model->dataKelas($id_kelas),
            'jml_siswa'   => $this->WaliKelas_Model->jml_siswa($id_kelas),
            'ta_aktif'    => $this->Model_Tahun->ta_aktif(),
            'jurusan'     => $this->Model_Rombel->detail($id_kelas),
            'tahun'       => $this->Model_Rombel->allData(),
        ];
        return render('walikelas/nilai/absensi', $data);
    }

    //-------------------------------------------------
    public function add($id_anggota_rombel)
    {
        $data = [
            'id_anggota_rombel'   => $id_anggota_rombel,
            // 'id_absensi'   => $id_absensi,
            // 'id_absensi'   => $this->request->getVar('id_absensi'),
            'alpa'   => $this->request->getVar('alpa'),
            'ijin'   => $this->request->getVar('ijin'),
            'sakit'    => $this->request->getVar('sakit'),
        ];
        // $this->WaliKelas_ModelAbsensi->add($data);
        $this->WaliKelas_ModelRombel->edit($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/absensi/n_absensi/' . session()->get('rombel')));
    }
    //-------------------------------------------------
    public function edit($id_anggota_rombel)
    {
        $data = [
            'id_anggota_rombel'   => $id_anggota_rombel,
            // 'id_absensi'   => $id_absensi,
            // 'id_absensi'   => $this->request->getVar('id_absensi'),
            'sakit'          => $this->request->getVar('sakit'),
            'ijin'          => $this->request->getVar('ijin'),
            'alpa'          => $this->request->getVar('alpa'),
        ];
        // $this->WaliKelas_ModelAbsensi->edit($data);
        $this->WaliKelas_ModelRombel->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('walikelas/absensi/n_absensi/' . session()->get('rombel')));
    }
}
