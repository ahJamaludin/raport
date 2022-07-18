<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Model_Admin;
use App\Models\Admin\Model_Ptk;
use App\Models\Admin\Model_Group_User;

class Admin extends BaseController
{

    protected $Model_Admin, $Model_Ptk, $Model_Group_User;

    public function __construct()
    {
        $this->Model_Admin = new Model_Admin();
        $this->Model_Ptk = new Model_Ptk();
        $this->Model_Group_User = new Model_Group_User();
    }

    public function index()
    {
        $user   = $this->Model_Admin->allData();
        $guru    = $this->Model_Ptk->allData();
        $level  = $this->Model_Group_User->findAll();
        $data   = [
            'title'   => 'User',
            'judul'   => 'Data User',
            'add'     => 'Tambah Data User',
            'edit'    => 'Edit Data User',
            'delete'  => 'Delete Data User',
            'user'    => $user,
            'ptk'     => $guru,
            'level'   => $level,
        ];
        return render('admin/admin/index', $data);
    }

    //--------------------------------------------------

    public function add()
    {
        $data = [
            'id_ptk'    => $this->request->getVar('id_ptk'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
            'level'     => '1',
        ];
        $this->Model_Admin->add($data);
        session()->setFlashdata('message', 'ditambahkan');
        return redirect()->to(base_url('admin/admin'));
    }

    //--------------------------------------------------

    public function edit($id_user)
    {
        $data = [
            'id_user'   => $id_user,
            'id_ptk'    => $this->request->getVar('id_ptk'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
            'level'     => '1',
        ];
        $this->Model_Admin->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/admin'));
    }

    //--------------------------------------------------

    public function delete($id_user)
    {
        $data = [
            'id_user'   => $id_user,
        ];
        $this->Model_Admin->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/admin'));
    }
}
