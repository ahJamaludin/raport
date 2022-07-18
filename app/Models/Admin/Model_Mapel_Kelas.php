<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Model_Mapel_Kelas extends Model
{
    public function allData()
    {
        return $this->db->table('mapelkelas')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->join('ptk', 'ptk.id_ptk = mapelkelas.id_ptk', 'left')
            ->join('kelas', 'kelas.id_kelas = mapelkelas.id_kelas', 'left')
            ->orderBy('id_mapelkelas', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_mapelkelas)
    {
        return $this->db->table('mapelkelas')
            ->join('ptk', 'ptk.id_ptk = mapelkelas.id_ptk', 'left')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->join('kelas', 'kelas.id_kelas = mapelkelas.id_kelas', 'left')
            ->where('id_mapelkelas', $id_mapelkelas)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('mapelkelas')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('mapelkelas')
            ->where('id_mapelkelas', $data['id_mapelkelas'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('mapelkelas')
            ->where('id_mapelkelas', $data['id_mapelkelas'])
            // ->where('id_kelas', $data['id_kelas'])
            ->delete($data);
    }

    public function getKelas($id_kelas)
    {
        return $this->db->table('kelas')
            ->where('id_kelas', $id_kelas)
            ->orderBy('id_kelas', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_Data($id_mapelkelas)
    {
        return $this->db->table('mapelkelas')
            ->join('ptk', 'ptk.id_ptk = mapelkelas.id_ptk', 'left')
            ->join('mapel', 'mapel.id_mapel = mapelkelas.id_mapel', 'left')
            ->join('kelas', 'kelas.id_kelas = mapelkelas.id_kelas', 'left')
            ->where('id_mapelkelas', $id_mapelkelas)
            ->get()->getRowArray();
    }
}
