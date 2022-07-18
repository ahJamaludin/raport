<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Mapelkelas extends BaseController
{

    public function index()
    {
        $data   = [
            'title'       => 'Mapel Kelas',
            'judul'       => 'Data Mapel Kelas',
            'add'           => 'Tambah Data Mapel',
            'edit'          => 'Edit Data Mapel',
            'delete'        => 'Delete Data Mapel',
            'mapelkelas'  => $this->Model_Mapel_Kelas->allData(),
            'mapel'       => $this->Model_Mapel->allData(),
            'kelas'       => $this->Model_Kelas->allData(),
            'ptk'         => $this->Model_Ptk->allData(),
        ];
        return render('admin/mapelkelas/index', $data);
    }

    //--------------------------------------------------

    public function detail($id_kelas)
    {
        $data   = [
            'title'       => 'Mapel Kelas',
            'title1'       => 'Kelas',
            'judul'       => 'Data Mapel Kelas',
            'add'         => 'Tambah Data Mapel Kelas',
            'edit'          => 'Edit Data Mapel',
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'kelas'       => $this->Model_Kelas->allData(),
            'detailkelas' =>  $this->Model_Kelas->detailData($id_kelas),
            'rombel'      => $this->Model_Rombel->allData(),
            'mapelkelas'  => $this->Model_Mapel_Kelas->allData(),
            // 'mapelkelas'  => $this->Model_Mapel_Kelas->detailData($id_kelas),
            'ptk'         => $this->Model_Ptk->allData(),
            'mapel'       => $this->Model_Mapel->allData(),
        ];
        return render('admin/mapelkelas/detail_mapel', $data);
    }

    //--------------------------------------------------

    public function add($id_kelas)
    {
        if ($this->validate([
            // 'id_kelas' => [
            //     'label' => 'Kelas',
            //     'rules' => 'required',
            //     'error' => [
            //         'required' => '{field} Tidak bolaeh kosong !'
            //     ]
            // ],
            'id_mapel' => [
                'label' => 'Mata Pelajaran',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Tidak bolaeh kosong !'
                ]
            ],
            'id_ptk' => [
                'label' => 'Guru Mapel',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Tidak bolaeh kosong !'
                ]
            ],
        ])) {
            //Jika Valid
            $data = [
                'id_kelas'   => $id_kelas,
                'id_mapel'   => $this->request->getVar('id_mapel'),
                'id_ptk'     => $this->request->getVar('id_ptk'),
            ];
            $this->Model_Mapel_Kelas->add($data);
            session()->setFlashdata('message', 'ditambahkan');
            return redirect()->to(base_url('admin/mapelkelas/detail/' . $id_kelas));
        } else {
            //Jika tidak Valid
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('/admin/mapelkelas/detail/' . $id_kelas);
        }
    }

    //--------------------------------------------------

    public function edit($id_kelas)
    {
        $data = [
            'id_kelas'   => $id_kelas,
            'id_mapel'   => $this->request->getVar('id_mapel'),
            'id_ptk'     => $this->request->getVar('id_ptk'),
        ];
        $this->Model_Mapel_Kelas->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/mapelkelas/detail/' . $id_kelas));
    }

    //--------------------------------------------------

    public function delete($id_mapelkelas)
    {
        $data = [
            'id_mapelkelas'   => $id_mapelkelas,
            // 'id_kelas'   => null,
        ];
        $this->Model_Mapel_Kelas->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/mapelkelas'));
    }
}
