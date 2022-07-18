<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Model_Rombelkelas extends Model
{
    public function allData()
    {
        return $this->db->table('anggota_rombel')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->orderBy('id_anggota_rombel', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->where('id_kelas', $id_kelas)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('anggota_rombel')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('rombel')
            ->where('id_rombel', $data['id_rombel'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('anggota_rombel')
            ->where('id_siswa', $data['id_siswa'])
            ->delete($data);
    }

    //Menampilkan Siswa belum punya Kelas
    public function siswa_tdk_ada_kls()
    {
        return $this->db->table('siswa')
            // ->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left')
            ->where('id_kelas', null)
            ->orderBy('id_siswa', 'DESC')
            ->get()->getResultArray();
    }

    //Menampilkan Siswa berdasarkan Kelas
    public function siswa($id_kelas)
    {
        return $this->db->table('siswa')
            // ->join('keahlian', 'keahlian.id_keahlian = kelas.id_keahlian', 'left')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_siswa', 'ASC')
            ->get()->getResultArray();
    }

    public function jml_siswa($id_kelas)
    {
        return $this->db->table('siswa')
            ->where('id_kelas', $id_kelas)
            ->countAllResults();
    }

    public function edit_siswa($data)
    {
        $this->db->table('siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }

    //Reset Password Wali Kelas
    public function resetwali($id_rombel)
    {
        $this->db->table('rombel')
            ->where('id_rombel', $id_rombel)
            ->update(['password' => 123456]);
    }
}
