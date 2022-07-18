<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Model_Jurusan extends Model
{
    public function allData()
    {
        return $this->db->table('keahlian')
            ->orderBy('id_keahlian', 'DESC')
            ->get()->getResultArray();
    }

    public function detailData($id_keahlian)
    {
        return $this->db->table('keahlian')
            ->where('id_keahlian', $id_keahlian)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('keahlian')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('keahlian')
            ->where('id_keahlian', $data['id_keahlian'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('keahlian')
            ->where('id_keahlian', $data['id_keahlian'])
            ->delete($data);
    }

    //Menampilkan Siswa berdasarkan Jurusan
    public function siswa_jurusan($id_keadlian)
    {
        return $this->db->table('siswa')
            ->where('id_keahlian', $id_keadlian)
            ->orderBy('id_siswa', 'DESC')
            ->get()->getResultArray();
    }

}
