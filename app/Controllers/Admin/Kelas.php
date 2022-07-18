<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kelas extends BaseController
{

    public function index()
    {
        $data   = [
            'title'       => 'Kelas',
            'judul'       => 'Data Kelas',
            'add'         => 'Tambah Data Kelas',
            'edit'        => 'Edit Data Kelas',
            'delete'      => 'Delete Data Kelas',
            'kelas'       => $this->Model_Kelas->allData(),
            'jurusan'     => $this->Model_Jurusan->allData(),
            'ptk'         => $this->Model_Ptk->allData(),
            'ta'          => $this->Model_Tahun->dataTahunAngkatan(),
        ];
        return render('admin/kelas/index', $data);
    }

    //--------------------------------------------------

    public function add()
    {
        $data = [
            'nama_kelas'    => $this->request->getVar('nama_kelas'),
            'kode_kelas'    => $this->request->getVar('kode_kelas'),
            'id_keahlian'   => $this->request->getVar('id_keahlian'),
            'id_ptk'        => $this->request->getVar('id_ptk'),
            'id_ta'        => $this->request->getVar('id_ta'),
        ];
        $this->Model_Kelas->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('admin/kelas'));
    }

    //--------------------------------------------------

    public function edit($id_kelas)
    {
        $data = [
            'id_kelas'      => $id_kelas,
            'nama_kelas'    => $this->request->getVar('nama_kelas'),
            'kode_kelas'    => $this->request->getVar('kode_kelas'),
            'id_keahlian'   => $this->request->getVar('id_keahlian'),
            'id_ptk'        => $this->request->getVar('id_ptk'),
            'id_ta'        => $this->request->getVar('id_ta'),
        ];
        $this->Model_Kelas->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/kelas'));
    }

    //--------------------------------------------------

    public function delete($id_kelas)
    {
        $data = [
            'id_kelas'   => $id_kelas,
        ];
        $this->Model_Kelas->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/kelas'));
    }

    //--------------------------------------------------

    public function rombel()
    {
        $data   = [
            'title'       => 'Kelas',
            'judul'       => 'Data Kelas',
            'add'         => 'Tambah Data Kelas',
            'edit'        => 'Edit Data Kelas',
            'delete'      => 'Delete Data Kelas',
            'kelas'       => $this->Model_Kelas->allData(),
            'siswa'       => $this->Model_Siswa->allData(),
            'jurusan'     => $this->Model_Jurusan->allData(),
            'ptk'         => $this->Model_Ptk->allData(),
            'ta'          => $this->Model_Tahun->dataTahunAngkatan(),
        ];
        return render('admin/kelas/rombel', $data);
    }

    //--------------------------------------------------

    public function anggota_rombel($id_kelas)
    {
        $data   = [
            'title'       => 'Data Kelas',
            'judul'       => 'Anggora Rombel',
            'add'         => 'Tambah Anggota Rombel',
            'kelas'       => $this->Model_Kelas->detailData($id_kelas),
            // 'siswa'       => $this->Model_Siswa->detailData($id_siswa),
            'siswa'       => $this->Model_Siswa->allData(),
            // 'rombel'       => $this->Model_Rombel->allData(),
            'rombelkelas' => $this->Model_Rombelkelas->allData(),
            // 'rombel_kelas' => $this->Model_Kelas->rombel_kelas($id_kelas),
            'siswa_tpk'   => $this->Model_Kelas->siswa_tdk_ada_kls(),
            'jml_siswa'   => $this->Model_Kelas->jml_siswa($id_kelas),
        ];
        return render('admin/kelas/anggota_rombel', $data);
    }

    public function add_anggota_rombel($id_siswa, $id_kelas)
    {
        if ($this->validate([
            'id_siswa'        => [
                'rules'  => 'is_unique[anggota_rombel.id_siswa]',
                'errors' => [
                    'is_unique'  => '{field} sudah ada'
                ]
            ],
        ])) {
            $data = array(
                'id_siswa'   => $id_siswa,
                'id_kelas'   => $id_kelas,
            );
            $this->Model_Kelas->edit_siswa($data);
            $this->Model_Rombelkelas->add($data);
            $this->WaliKelas_ModelAbsensi->add($data);
            $this->WaliKelas_ModelEskul->add($data);
            session()->setFlashdata('message', 'ditambahkan');
            return redirect()->to(base_url('admin/kelas/anggota_rombel/' . $id_kelas));
        } else {
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/kelas/anggota_rombel/' . $id_kelas));
        }
    }

    public function delete_anggota_rombel($id_siswa, $id_kelas)
    {
        $data = [
            'id_siswa'   => $id_siswa,
            'id_kelas'   => null,
        ];
        $this->Model_Kelas->edit_siswa($data);
        $this->Model_Rombelkelas->add($data);
        // $this->WaliKelas_ModelAbsensi->add($data);
        // $this->WaliKelas_ModelEskul->add($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/kelas/anggota_rombel/' . $id_kelas));
    }
}
