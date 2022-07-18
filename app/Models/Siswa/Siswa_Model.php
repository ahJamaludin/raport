<?php

namespace App\Models\Siswa;

use CodeIgniter\Model;

class Siswa_Model extends Model
{
    public function allData()
    {
        return $this->db->table('siswa')
            ->join('keahlian', 'keahlian.id_keahlian = siswa.id_keahlian', 'left')
            ->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left')
            ->orderBy('id_siswa', 'ASC')
            ->get()->getResultArray();
    }
}
