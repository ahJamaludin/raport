<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_ModelAbsensi extends Model
{
    public function allData()
    {
        return $this->db->table('n_absensi')
            ->join('tahun', 'tahun.id_tahun = n_absensi.id_tahun', 'left')
            ->join('kelas', 'kelas.id_kelas = n_absensi.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = n_absensi.id_siswa', 'left')
            ->orderBy('id_absensi', 'DESC')
            ->get()->getResultArray();
    }

    public function absensi()
    {
        return $this->db->table('n_absensi')
            ->orderBy('id_absensi', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('n_absensi')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('n_absensi')
            ->where('id_absensi', $data['id_absensi'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('n_c_academik')
            ->where('id_c_academik', $data['id_c_academik'])
            ->delete($data);
    }
}
