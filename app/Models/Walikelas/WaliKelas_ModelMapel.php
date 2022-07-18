<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_ModelMapel extends Model
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

    public function detailData($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('n_pkl', 'n_pkl.id_pkl = anggota_rombel.id_pkl', 'left')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_anggota_rombel', 'DESC')
            ->get()->getRowArray();
    }

    //Menampilkan siswa berdasarkan rombel
    public function dataKelas($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            // ->join('kelas', 'kelas.id_kelas = anggota_rombel.id_kelas', 'left')
            ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = anggota_rombel.id_ta', 'left')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_anggota_rombel', 'DESC')
            ->get()->getRowArray();
    }


    public function jml_ptk()
    {
        return $this->db->table('ptk')
            ->countAll();
    }

    public function jml_siswa($id_kelas)
    {
        return $this->db->table('anggota_rombel')
            ->where('id_kelas', $id_kelas)
            ->countAllResults();
    }

    public function jmlsiswa()
    {
        return $this->db->table('anggota_rombel')
            ->countAllResults();
    }

    public function jml_rombel()
    {
        return $this->db->table('rombel')
            ->countAll('id_rombel');
    }

    public function jml_jurusan()
    {
        return $this->db->table('keahlian')
            ->countAll();
    }
}
