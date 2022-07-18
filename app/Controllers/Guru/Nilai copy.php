<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Nilai extends BaseController
{

    public function nilai_mapel($id_ptk)
    {
        $data   = [
            'title'         => '' . session()->get('nama'),
            'title1'        => '' . session()->get('nama'),
            'judul'         => 'Data Jurusan',
            'add'           => '',
            'edit'          => '',
            'ta_aktif'      => $this->Model_Tahun->ta_aktif(),
            'mapelkelas'    => $this->Guru_Model_Nilai->data_Mapelkelas(),
            'detailptk'     => $this->Model_Ptk->detailData($id_ptk),
            'mapel'         => $this->Model_Mapel->allData(),
            'kelas'         => $this->Model_Kelas->allData(),
            'detailmapel'    => $this->Guru_Model_Nilai->datamapel($id_ptk),
        ];
        return render('guru/nilai', $data);
    }

    //--------------------------------------------//

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
            'rombelkelas'       => $this->Guru_Model_Nilai->data_Rombelmapel(),
            'nilaikelas'       => $this->Guru_Model_Nilai->detailData($id_mapelkelas),
            'detailmapelkelas'  => $this->WaliKelas_ModelMapel->detailData($id_mapelkelas),

            // 'rombelmapel'       => $this->WaliKelas_Model_RombelMapel->allData(),
            // 'jml_siswa'         => $this->WaliKelas_Model_RombelMapel->jml_siswa($id_mapelkelas),
            // 'mapel'             => $this->Model_Mapel->allData(),
            // 'ptk'               => $this->Model_Ptk->allData(),
            // 'siswa_tpk'         => $this->Model_Rombel->siswa_tdk_ada_kls(),
            // 'kelas'             => $this->Model_Kelas->allData(),
            // 'mapelsiswa'        => $this->Model_Kelas->detail($id_kelas),
            // 'siswa'             => $this->Model_Rombel->siswa($id_kelas),
            // 'ta'                => $this->Model_Tahun->dataTahunAngkatan(),
        ];
        return render('guru/form_nilai', $data);
        // return render('guru/nilaikelas', $data);
    }

    public function add_rombelmapel($id_mapelkelas, $id_siswa)
    {
        $data = array(
            // 'detailmapelkelas'  => $this->Model_Mapel_Kelas->detail_Data($id_mapelkelas),
            'id_siswa'          => $id_siswa,
            'id_mapelkelas'     => $id_mapelkelas,
            // 'id_mapelkelas'    => $this->request->getVar('id_mapelkelas'),
            // 'id_siswa'    => $this->request->getVar('id_siswa'),
            // 'id_keahlian'   => $this->request->getVar('id_keahlian'),
            // 'id_ptk'        => $this->request->getVar('id_ptk'),
            // 'id_ta'        => $this->request->getVar('id_ta'),
        );
        $this->WaliKelas_Model_RombelMapel->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('walikelas/mapel/rombel_mapel/' . $id_mapelkelas));
    }

    // public function edit_rombelmapel($id_mapelkelas, $id_siswa)
    // public function edit_rombelmapel($id_mapelkelas)
    // {
    //     $data = array(
    //         'title'             => 'Mapel',
    //         'title1'             => 'Mapel',
    //         'judul'             => 'Anggota Rombel',
    //         'add'               => 'Tambah Anggota Rombel',
    //         'edit'              => '',
    //         'delete'            => '',
    //         'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
    //         'tahun'             => $this->Model_Tahun->allData(),
    //         'rombelkelas'       => $this->Guru_Model_Nilai->data_Rombelmapel(),
    //         'detailmapelkelas'  => $this->WaliKelas_ModelMapel->detailData($id_mapelkelas),
    // 'detailmapelkelas'  => $this->Model_Mapel_Kelas->detail_Data($id_mapelkelas),
    // 'id_siswa'          => $id_siswa,
    // 'id_mapelkelas'     => $id_mapelkelas,
    // 'id_mapelkelas'    => $this->request->getVar('id_mapelkelas'),
    // 'id_siswa'    => $this->request->getVar('id_siswa'),
    // 'id_keahlian'   => $this->request->getVar('id_keahlian'),
    // 'id_ptk'        => $this->request->getVar('id_ptk'),
    // 'id_ta'        => $this->request->getVar('id_ta'),
    // );
    // return render('guru/nilai/form_nilai', $data);
    // $this->WaliKelas_Model_RombelMapel->add($data);
    // session()->setFlashdata('message', 'ditambahkan');
    // return redirect()->to(base_url('walikelas/mapel/rombel_mapel/' . $data));
    // }


    //--------------------------------------------//

    // public function add($id_siswa, $id_kelas, $id_ptk)
    // {
    //     $data = [
    //         'id_siswa'          => $id_siswa,
    //         // 'id_ptk'          => $id_ptk,
    //         'id_kelas'          => $id_kelas,
    //         'nama_kelas'    => $this->request->getVar('nama_kelas'),
    //         'kode_kelas'    => $this->request->getVar('kode_kelas'),
    //         'id_keahlian'   => $this->request->getVar('id_keahlian'),
    //         'id_ptk'        => $this->request->getVar('id_ptk'),
    //         'id_ta'        => $this->request->getVar('id_ta'),
    //     ];
    //     $this->Guru_Model_Nilai->add($data);
    //     session()->setFlashdata('message', 'ditambahkan');
    //     return redirect()->to(base_url('admin/kelas'));
    // }

    // //--------------------------------------------//


    public function edit($id_rombelmapel)
    {
        $data =[
            // 'id_rombelmapel '     => $id_rombelmapel,
            'title'             => 'Mapel',
            'title1'             => 'Mapel',
            'judul'             => 'Anggota Rombel',
            'add'               => 'Tambah Anggota Rombel',
            'add1'               => 'Tambah Anggota Rombel',
            'edit'              => '',
            'delete'            => '',
            'ta_aktif'          => $this->Model_Tahun->ta_aktif(),
            'tahun'             => $this->Model_Tahun->allData(),
            'rombelkelas'       => $this->Guru_Model_Nilai->data_Rombelmapel(),
            'nilaikelas'       => $this->Guru_Model_Nilai->nilai_Rombelmapel($id_rombelmapel),
            // 'detailmapelkelas'  => $this->WaliKelas_ModelMapel->detailData($id_mapelkelas),
            // // 'id_mapelk'     => $id_mapelkelas,
            // // 'id_siswa'          => $id_siswa,
            // // 'id_siswa'          => $this->request->getVar('id_siswa'),
            // 'pengetahuan'       => $this->request->getVar('pengetahuan'),
            // 'ketrampilan'       => $this->request->getVar('ketrampilan'),
        ];
        return view('guru/nilai/insert_nilai', $data);
        // return render('guru/nilai/insert_nilai', $data);
        // $this->Guru_Model_Nilai->edit($data);
        // session()->setFlashdata('message', 'diubah');
        // return redirect()->to(base_url('guru/nilai/nilaikelas/' . $id_mapelkelas));
    }


    public function editsiswa($id_siswa)
    {
        $data   = [
            'title'     => 'Edit Data Siswa',
            'judul'     => 'Edit Data Siswa',
            'judul2'    => 'Edit Data Siswa',
            'jurusan'   => $this->Model_Jurusan->allData(),
            'siswa'     => $this->Model_Siswa->detailData($id_siswa),
            'kelas'     => $this->Model_Kelas->allData(),
        ];

        return render('admin/siswa/form_update_siswa', $data);
    }


    //--------------------------------------------//

    // public function mapelkelas($id_kelas)
    // {
    //     $data   = [
    //         'title'      => 'Data Kelas',
    //         'title1'      => 'Data Kelas',
    //         'add'           => '',
    //         'edit'          => '',
    //         'judul'      => 'Mapel',
    //         'mapel'      => $this->Model_Mapel->allData(),
    //         'siswa'     => $this->Guru_Model_Nilai->detailData($id_kelas),
    //         // 'rombel'      => $this->WaliKelas_ModelRombel->allData(),
    //         'rombelkelas' => $this->Model_Rombelkelas->allData(),
    //         'rombel'      => $this->WaliKelas_ModelRombel->detailData($id_kelas)  ,
    //         'kelas'       => $this->Model_Kelas->detailData($id_kelas),
    //         'mapelkelas'    => $this->Guru_Model_Nilai->allData(),
    //         'detailmapel'    => $this->Guru_Model_Nilai->detailData($id_kelas),
    //     ];
    //     return render('guru/nilaikelas', $data);
    // }




}
