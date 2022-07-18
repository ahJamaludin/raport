<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_ModelRapor extends Model
{
    public function allData()
    {
        return $this->db->table('anggota_rombel')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('n_pkl', 'n_pkl.id_pkl = anggota_rombel.id_pkl', 'left')
            ->join('n_absensi', 'n_absensi.id_absensi = anggota_rombel.id_absensi', 'left')
            ->orderBy('anggota_rombel.id_anggota_rombel', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_anggota_rombel)
    {
        return $this->db->table('anggota_rombel')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('n_pkl', 'n_pkl.id_pkl = anggota_rombel.id_pkl', 'left')
            ->where('id_anggota_rombel', $id_anggota_rombel)
            ->get()->getRowArray();
    }

    public function dataSiswa($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->where('id_kelas', $id_kelas)
            ->get()->getRowArray();
    }
    public function add($data)
    {
        $this->db->table('n_pkl')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('anggota_rombel')
            ->where('id_anggota_rombel', $data['id_anggota_rombel'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('n_c_academik')
            ->where('id_c_academik', $data['id_c_academik'])
            ->delete($data);
    }
}
