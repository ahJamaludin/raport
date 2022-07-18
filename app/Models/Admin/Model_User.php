<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Model_User extends Model
{

    public function allData()
    {
        return $this->db->table('user')
            ->orderBy('id_user', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->delete($data);
    }

    public function resetuser($id_user)
    {
        $this->db->table('user')
            ->where('id_user', $id_user)
            ->update(['password' => 'A123456']);
    }

    public function resetptk($id_ptk)
    {
        $this->db->table('ptk')
            ->where('id_ptk', $id_ptk)
            ->update(['password' => 123456]);
    }

    public function resetsiswa($id_siswa)
    {
        $this->db->table('siswa')
            ->where('id_siswa', $id_siswa)
            ->update(['password' => 123456]);
    }

    //Reset Password Wali Kelas
    public function resetwali($id_kelas)
    {
        $this->db->table('kelas')
            ->where('id_kelas', $id_kelas)
            ->update(['pass_word' => 123456]);
    }
}
