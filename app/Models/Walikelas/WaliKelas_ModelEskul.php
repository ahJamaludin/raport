<?php

namespace App\Models\Walikelas;

use CodeIgniter\Model;

class WaliKelas_ModelEskul extends Model
{
    public function allData()
    {
        return $this->db->table('n_eskul')
            ->join('eskul', 'eskul.id_eskul = n_eskul.id_eskul', 'left')
            // ->join('kelas', 'kelas.id_kelas = n_eskul.id_kelas', 'left')
            // ->join('siswa', 'siswa.id_siswa = n_eskul.id_siswa', 'left')
            ->orderBy('id_n_eskul', 'DESC')
            ->get()->getResultArray();
    }

    public function eskul()
    {
        return $this->db->table('eskul')
            ->orderBy('id_eskul', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('n_eskul')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('n_eskul')
            ->where('id_eskul', $data['id_eskul'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('n_c_academik')
            ->where('id_c_academik', $data['id_c_academik'])
            ->delete($data);
    }
}
