<?php

namespace App\Models\Guru;

use CodeIgniter\Model;

class Guru_Model_Nilai_Mapel extends Model
{
    public function allData()
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->orderBy('id_rombelmapel', 'DESC')
            ->get()->getResultArray();
    }

    public function detalData($id_rombelmapel)
    {
        return $this->db->table('rombel_mapel')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->where('id_rombelmapel', $id_rombelmapel)
            ->get()->getRowArray();
    }

    
    public function edit($data)
    {
        $this->db->table('rombel_mapel')
            ->where('id_rombelmapel', $data['id_rombelmapel'])
            ->update($data);
    }



    // --- Data Mapel Kelas --- //

    public function dataMapel()
    {
        return $this->db->table('mapelkelas')
            ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
            ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
            ->orderBy('id_rombelmapel', 'DESC')
            ->get()->getResultArray();
    }

}
