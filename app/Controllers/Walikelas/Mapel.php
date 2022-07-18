<?php

namespace App\Controllers\Walikelas;

use App\Controllers\BaseController;

class Mapel extends BaseController
{
    public function mapelkelas($id_kelas)
    {
        $data   = [
            'title'             => 'Kelas : ' . session()->get('kelas'),
            'title1'            => 'Data Mapel : ' . session()->get('kelas'),
            'judul'             => 'Mapel Kelas',
            'add'               => 'Tambah Mapel',
            'edit'              => '',
            'delete'            => '',
            'kelas'             => $this->Model_Kelas->allData(),
            'detailkelas'       => $this->Model_Kelas->detailData($id_kelas),
            'rombel'            => $this->Model_Rombel->allData(),
            'mapelkelas'        => $this->Model_Mapel_Kelas->allData(),
            'detailmapelkelas'  => $this->Model_Mapel_Kelas->detailData($id_kelas),
            'ptk'               => $this->Model_Ptk->allData(),
            'mapel'             => $this->Model_Mapel->allData(),
            'allmapelkelas'  => $this->Model_Mapel_Kelas->allData(),
        ];
        return render('walikelas/mapel/index', $data);
    }

    //--------------------------------------------------

    public function add($id_kelas)
    {
        if ($this->validate([
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
            return redirect()->to(base_url('walikelas/mapel/mapelkelas/' . $id_kelas));
        } else {
            //Jika tidak Valid
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('/walikelas/mapel/mapelkelas/' . $id_kelas);
        }
    }

    //--------------------------------------------------

    public function rombel_mapel($id_mapel)
    {
        $data   = [
            'title'             => 'Mapel',
            'judul'             => 'Anggota Rombel',
            'add'               => 'Tambah Anggota Rombel',
            'edit'              => '',
            'delete'            => '',
            'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
            'mapelkelas'        => $this->WaliKelas_Model_Mapel->allData(),
            // 'kelas'             => $this->Model_Kelas->detail_Data($id_kelas),
            'detailmapel'               => $this->Model_Mapel->detailData($id_mapel),
            'ptk'               => $this->Model_Ptk->allData(),
            'rombelkelas'       => $this->Model_Siswa->allData(),
            'siswa_tpk'         => $this->Model_Rombel->siswa_tdk_ada_kls(),
        ];
        return render('walikelas/mapel/anggota_rombel', $data);
    }

    // public function rombel_mapel($id_mapelkelas)
    // {
    //     $data   = [
    //         'title'             => 'Mapel',
    //         'judul'             => 'Anggota Rombel',
    //         'add'               => 'Tambah Anggota Rombel',
    //         'edit'              => '',
    //         'delete'            => '',
    //         'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
    //         'mapelkelas'        => $this->WaliKelas_Model_Mapel->allData(),
    //         'detailmapelkelas'  => $this->Model_Mapel_Kelas->detail_Data($id_mapelkelas),
    //         // 'detailmapelkelas'  => $this->Model_Mapel_Kelas->detailData($id_mapelkelas),
    //         'jml_siswa'         => $this->WaliKelas_Model_RombelMapel->jml_siswa($id_mapelkelas),
    //         'mapel'             => $this->Model_Mapel->allData(),
    //         'ptk'               => $this->Model_Ptk->allData(),
    //         'rombelkelas'       => $this->WaliKelas_ModelRombel->allData(),
    //         'siswa_tpk'         => $this->Model_Rombel->siswa_tdk_ada_kls(),
    //         // 'kelas'             => $this->Model_Kelas->allData(),
    //         // 'mapelsiswa'        => $this->Model_Kelas->detail($id_kelas),
    //         // 'siswa'             => $this->Model_Rombel->siswa($id_kelas),
    //         // 'ta'                => $this->Model_Tahun->dataTahunAngkatan(),
    //     ];
    //     return render('walikelas/mapel/anggota_rombel', $data);
    // }

    public function add_rombelmapel($id_siswa, $id_kelas)
    {
        $data = array(
            // 'detailmapelkelas'  => $this->Model_Mapel_Kelas->detail_Data($id_mapelkelas),
            'id_siswa'          => $id_siswa,
            'id_kelas'     => $id_kelas,
            // 'id_mapelkelas'    => $this->request->getVar('id_mapelkelas'),
            // 'id_siswa'    => $this->request->getVar('id_siswa'),
            // 'id_keahlian'   => $this->request->getVar('id_keahlian'),
            // 'id_ptk'        => $this->request->getVar('id_ptk'),
            // 'id_ta'        => $this->request->getVar('id_ta'),
        );
        $this->WaliKelas_ModelMapel->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/mapel/rombel_mapel/' . $id_kelas));
    }

    //--------------------------------------------------

    public function delete($id_rombelmapel)
    {
        $data = [
            'id_rombelmapel'   => $id_rombelmapel,
            // 'id_mapelkelas'   => $id_mapelkelas,
        ];
        $this->WaliKelas_Model_RombelMapel->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        // return redirect()->to(base_url('walikelas/mapel/rombel_mapel/' . $id_mapelkelas));
        return render('walikelas/mapel/anggota_rombel');
    }
}
