<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_Model_RombelMapel extends Model
{

    public function allData()
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->orderBy('id_rombelmapel', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_rombelmapel)
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->where('id_rombelmapel', $id_rombelmapel)
            ->get()->getRowArray();
    }
    public function add($data)
    {
        $this->db->table('rombel_mapel')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('rombel_mapel')
            ->where('id_rombelmapel', $data['id_rombelmapel'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('rombel_mapel')
            ->where('id_rombelmapel', $data['id_rombelmapel'])
            ->delete($data);
    }

    public function detail($data)
    {
        return $this->db->table('rombel_mapel')
            ->join('rombel', 'rombel.id_rombel = rombel_mapel.id_rombel', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->join('tahun', 'tahun.id_tahun = rombel_mapel.id_tahun', 'left')
            ->where('id_rombelmapel', $data['id_rombelmapel'])
            ->get()->getRowArray();
    }

    public function rombel_mapel($id_rombelmapel)
    {
        return $this->db->table('rombel_mapel')
            ->join('rombel', 'rombel.id_rombel = rombel_mapel.id_rombel', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->join('tahun', 'tahun.id_tahun = rombel_mapel.id_tahun', 'left')
            ->where('id_rombelmapel', $id_rombelmapel)
            ->get()->getRowArray();
    }

    //Menampilkan Siswa berdasarkan Kelas
    public function kls_siswa($id_kelas)
    {
        return $this->db->table('rombel_mapel')
            // ->join('kelas', 'kelas.id_kelas = rombel_mapel.id_kelas', 'left')
            // ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_rombelmapel', 'ASC')
            ->get()->getResultArray();
    }

    public function jml_siswa($id_mapelkelas)
    {
        return $this->db->table('rombel_mapel')
            ->where('id_mapelkelas', $id_mapelkelas)
            ->countAllResults();
    }
}
