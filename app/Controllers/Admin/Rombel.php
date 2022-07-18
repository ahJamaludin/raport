<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Rombel extends BaseController
{

    public function index()
    {
        $data   = [
            'title'       => 'Rombel',
            'judul'       => 'Data Rombel',
            'add'         => 'Tambah Data Rombel',
            'edit'        => 'Edit Data Rombel',
            'delete'      => 'Delete Data Rombel',
            'siswa'       => $this->Model_Siswa->allData(),
            'kelas'       => $this->Model_Kelas->allData(),
            'jurusan'     => $this->Model_Jurusan->allData(),
            'ptk'         => $this->Model_Ptk->allData(),
        ];
        return render('admin/rombel/index', $data);
    }

    //--------------------------------------------------

    public function anggota_rombel($id_kelas)
    {
        $data   = [
            'title'       => 'Data Kelas',
            'judul'       => 'Anggora Rombel',
            'add'         => 'Tambah Anggota Rombel',
            // 'kelas'      => $this->Model_Kelas->detail($id_kelas),
            // 'walikelas'   => $this->Model_Jurusan->allData(),
            // 'kelas'       => $this->Model_Kelas->detail($id_kelas),
            // 'siswa'       => $this->Model_Rombel->siswa($id_kelas),
            // 'siswa_tpk'   => $this->Model_Rombel->siswa_tdk_ada_kls(),
            // 'jml_siswa'   => $this->Model_Rombel->jml_siswa($id_kelas),
            // 'ta'          => $this->Model_Tahun->dataTahunAngkatan(),
        ];
        return render('admin/rombel/anggota_rombel', $data);
    }

    public function add_anggota_rombel($id_siswa, $id_rombel)
    {
        $data = [
            'id_siswa'   => $id_siswa,
            'id_rombel'   => $id_rombel,
        ];
        $this->Model_Rombel->edit_siswa($data);
        $this->WaliKelas_Model->edit_siswa($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('admin/rombel/anggota_rombel/' . $id_rombel));
    }

    public function delete_anggota_rombel($id_siswa, $id_rombel)
    {
        $data = [
            'id_siswa'   => $id_siswa,
            'id_rombel'   => null,
        ];
        $this->Model_Rombel->edit_siswa($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/rombel/anggota_rombel/' . $id_rombel));
    }
}
