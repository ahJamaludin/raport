<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Nilai_Mapel extends BaseController
{

    public function nilaikelas($id_mapelkelas)
    {
        $data   = [
            'title'             => 'Mapel',
            'title1'             => 'Mapel',
            'judul'             => 'Anggota Rombel',
            'add'               => 'Tambah Anggota Rombel',
            'add1'               => 'Tambah Anggota Rombel',
            'edit'              => '',
            'delete'            => '',
            'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
            'tahun'             => $this->Model_Tahun->allData(),
            'rombelkelas'       => $this->Guru_Model_Nilai->data_Mapelkelas(),
            // 'nilaikelas'       => $this->Guru_Model_Nilai->detailData($id_mapelkelas),
            'detailmapelkelas'  => $this->WaliKelas_ModelMapel->detailData($id_mapelkelas),
        ];
        return render('guru/insert_nilai', $data);
        // return render('guru/nilaikelas', $data);
    }

    

    public function edit_rombelmapel( $id_mapelkelas)
    {
        $data = [
            // 'id_rombelmapel'    => $id_rombelmapel,
            'id_mapelkelas'     => $id_mapelkelas,
            'pengetahuan'       => $this->request->getVar('pengetahuan'),
            'ketrampilan'       => $this->request->getVar('ketrampilan'),
        ];
        $this->Guru_Model_Nilai->edit($data);
        // $this->WaliKelas_ModelMapel->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('guru/nilai_mapel/nilaikelas/' . $id_mapelkelas));
    }


}
