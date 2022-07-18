<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_Model_Leger extends Model
{

    public function allData()
    {
        return $this->db->table('tbl_leger')
            ->join('siswa', 'siswa.id_siswa = tbl_leger.id_siswa', 'left')
            ->join('kelas', 'kelas.id_kelas = tbl_leger.id_kelas', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_leger.id_ta', 'left')
            ->join('n_pkl', 'n_pkl.id_pkl = tbl_leger.id_pkl', 'left')
            ->join('n_eskul', 'n_eskul.id_eskul = tbl_leger.id_eskul', 'left')
            ->join('n_absensi', 'n_absensi.id_absensi = tbl_leger.id_absensi', 'left')
            ->orderBy('id_leger', 'DESC')
            ->get()->getResultArray();
    }

    // public function detailData($id_kelas)
    // {
    //     return $this->db->table('tbl_leger')
    //         ->join('siswa', 'siswa.id_siswa = tbl_leger.id_siswa', 'left')
    //         ->join('kelas', 'kelas.id_kelas = tbl_leger.id_kelas', 'left')
    //         ->join('tbl_ta', 'tbl_ta.id_ta = tbl_leger.id_ta', 'left')
    //         ->join('n_pkl', 'n_pkl.id_pkl = tbl_leger.id_pkl', 'left')
    //         ->join('n_eskul', 'n_eskul.id_eskul = tbl_leger.id_eskul', 'left')
    //         ->join('n_absensi', 'n_absensi.id_absensi = tbl_leger.id_absensi', 'left')
    //         ->where('id_kelas', $id_kelas)
    //         ->orderBy('id_leger', 'DESC')
    //         ->get()->getRowArray();
    // }
    public function add($data)
    {
        $this->db->table('tbl_leger')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_leger')
            ->where('id_leger', $data['id_leger'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_leger')
            ->where('id_leger', $data['id_leger'])
            ->delete($data);
    }

    public function detail($data)
    {
        return $this->db->table('tbl_leger')
            ->join('rombel', 'rombel.id_rombel = tbl_leger.id_rombel', 'left')
            ->join('siswa', 'siswa.id_siswa = tbl_leger.id_siswa', 'left')
            ->join('tahun', 'tahun.id_tahun = tbl_leger.id_tahun', 'left')
            ->where('id_leger', $data['id_leger'])
            ->get()->getRowArray();
    }

    public function tbl_leger($id_leger)
    {
        return $this->db->table('tbl_leger')
            ->join('rombel', 'rombel.id_rombel = tbl_leger.id_rombel', 'left')
            ->join('siswa', 'siswa.id_siswa = tbl_leger.id_siswa', 'left')
            ->join('tahun', 'tahun.id_tahun = tbl_leger.id_tahun', 'left')
            ->where('id_leger', $id_leger)
            ->get()->getRowArray();
    }

    //Menampilkan Siswa berdasarkan Kelas
    public function kls_siswa($id_kelas)
    {
        return $this->db->table('tbl_leger')
            // ->join('kelas', 'kelas.id_kelas = tbl_leger.id_kelas', 'left')
            // ->join('siswa', 'siswa.id_siswa = tbl_leger.id_siswa', 'left')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_leger', 'ASC')
            ->get()->getResultArray();
    }

    public function jmlsiswa($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            ->where('id_kelas', $id_kelas)
            ->countAllResults();
    }
}
