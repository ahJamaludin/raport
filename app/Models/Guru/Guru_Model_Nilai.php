<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class Guru_Model_Nilai extends Model
{
    public function data_Mapelkelas()
    {
        return $this->db->table('mapelkelas')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->join('ptk', 'ptk.id_ptk = mapelkelas.id_ptk', 'left')
            ->join('kelas', 'kelas.id_kelas = mapelkelas.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = mapelkelas.id_siswa', 'left')
            ->orderBy('id_mapelkelas', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_mapelkelas)
    {
        return $this->db->table('mapelkelas')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->join('ptk', 'ptk.id_ptk = mapelkelas.id_ptk', 'left')
            ->join('siswa', 'siswa.id_siswa = mapelkelas.id_siswa', 'left')
            ->join('kelas', 'kelas.id_kelas = mapelkelas.id_kelas', 'left')
            ->where('id_mapelkelas', $id_mapelkelas)
            // ->orderBy('id_mapelkelas', 'DESC')
            ->get()->getRowArray();
    }

    public function data_Rombelmapel()
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->orderBy('id_rombelmapel', 'DESC')
            ->get()->getResultArray();
    }

    public function nilai_Rombelmapel($id_rombelmapel)
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->where('id_rombelmapel', $id_rombelmapel)
            ->get()->getRowArray();
    }

    //Menampilkan Mapel berdasarkan ptk
    public function datamapel($id_ptk)
    {
        return $this->db->table('mapelkelas')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->where('id_ptk', $id_ptk)
            ->orderBy('id_mapelkelas', 'DESC')
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('mapelkelas')
            ->where('id_mapelkelas', $data['id_mapelkelas'])
            ->update($data);
    }

    //Menampilkan Siswa berdasarkan Kelas
    public function siswa($id_siswa)
    {
        return $this->db->table('mapelkelas')
            // ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->where('id_siswa', $id_siswa)
            ->orderBy('id_mapelkelas', 'ASC')
            ->get()->getResultArray();
    }
}
