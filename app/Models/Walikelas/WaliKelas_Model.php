<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_Model extends Model
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
            // ->orderBy('id_anggota_rombel', 'DESC')
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


    // public function siswa($id_rombel)
    // {
    //     return $this->db->table('anggota_rombel')
    //         // ->join('tahun', 'tahun.id_tahun = anggota_rombel.id_tahun', 'left')
    //         // ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
    //         // ->join('rombel', 'rombel.id_rombel = anggota_rombel.id_rombel', 'left')
    //         ->where('id_rombel', $id_rombel)
    //         ->orderBy('id_anggota_rombel', 'DESC')
    //         ->get()->getResultArray();
    // }


    // public function anggota_rombel($id_rombel)
    // {
    //     return $this->db->table('anggota_rombel')
    //         ->join('tahun', 'tahun.id_tahun = anggota_rombel.id_tahun', 'left')
    //         ->join('siswa', 'siswa.id_siswa = anggota_rombel.id_siswa', 'left')
    //         ->join('rombel', 'siswa.id_siswa = anggota_rombel.id_rombel', 'left')
    //         ->where('id_rombel', $id_rombel)
    //         ->get()->getRowArray();
    // }













































    // public function anggota_rombel($data)
    // {
    //     return $this->db->table('anggota_rombel')
    //         ->join('keahlian', 'keahlian.id_keahlian = siswa.id_keahlian', 'left')
    //         ->join('siswa', 'siswa.id_siswa = siswa.id_rombel', 'left')
    //         ->where('id_rombel', $data['id_rombel'])
    //         ->get()->getRowArray();
    // }













}
