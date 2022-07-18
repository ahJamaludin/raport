<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\Admin\Model_User;
// use App\Models\Admin\Model_Siswa;
// use App\Models\Admin\Model_Ptk;
// use App\Models\Admin\Model_Rombel;

class User extends BaseController
{
    // public function __construct()
    // {
    //     $this->Model_User = new Model_User();
    //     $this->Model_Siswa = new Model_Siswa();
    //     $this->Model_Ptk = new Model_Ptk();
    //     $this->Model_Rombel = new Model_Rombel();
    // }

    public function index()
    {
        $data   = [
            'title'   => 'User',
            'judul'   => 'Data User',
            'add'     => 'Tambah Data User',
            'edit'    => 'Edit Data User',
            'delete'  => 'Delete Data User',
            'user'    => $this->Model_User->allData(),
        ];
        return render('admin/setting/v_user', $data);
    }

    //--------------------------------------------------

    public function user_ptk()
    {
        $ptk    = $this->Model_Ptk->allData();
        $data   = [
            'title'   => 'Setting Guru',
            'judul'   => 'Data Guru  ',
            'ptk'    => $ptk,
        ];
        return render('admin/setting/v_guru', $data);
    }

    //--------------------------------------------------

    public function user_wali()
    {
        $data   = [
            'title'   => 'Wali Kelas',
            'judul'   => 'Data Wali Kelas  ',
            'ptk'    => $this->Model_Ptk->allData(),
            'kelas'  => $this->Model_Kelas->allData(),

        ];
        return render('admin/setting/v_wali', $data);
    }

    //--------------------------------------------------

    public function user_siswa()
    {
        $siswa   = $this->Model_Siswa->allData();
        $data   = [
            'title'   => 'Setting Siswa',
            'judul'   => 'Data Siswa  ',
            'siswa'    => $siswa,
        ];
        return render('admin/setting/v_siswa', $data);
    }

    //--------------------------------------------------

    public function add()
    {
        if ($this->validate([
            'niy'        => [
                'label'  => 'NIY',
                'rules'  => 'required|is_unique[ptk.niy]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                    'is_unique'  => '{field} sudah ada'
                ]
            ],
            'nama_ptk'       => [
                'label'  => 'Nama PTK',
                'rules'  => 'required[ptk.nama_ptk]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'jk'        => [
                'label'  => 'Jenis Kelamin',
                'rules'  => 'required[ptk.jk]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            't_lahir'   => [
                'label'  => 'Tempat Lahir',
                'rules'  => 'required[ptk.t_lahir]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'tgl_lahir' => [
                'label'  => 'Tanggal Lahir',
                'rules'  => 'required[ptk.tgl_lahir]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'alamat'     => [
                'label'  => 'Alamat',
                'rules'  => 'required[ptk.alamat]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'email'      => [
                'rules'  => 'required[ptk.email]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'password'      => [
                'rules'  => 'required[ptk.password]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            // 'foto_ptk'    => [
            //     'label'  => 'foto_ptk',
            //     'rules'  => 'uploaded[foto_ptk]|max_size[foto_ptk,1024]|is_image[foto_ptk]|mime_in[ptk.foto_ptk,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'uploaded'  => 'Gambar belum dipilih',
            //         'max_size'  => 'Gambar lebih dari 1 Mb',
            //         'is_image'  => 'Fle bukan gambar',
            //         'mime_in'   => 'File bukan gambar',
            //     ]
            // ],
        ])) {
        }





        // $data = [
        //     'namauser'    => $this->request->getVar('namauser'),
        //     'username'  => $this->request->getVar('username'),
        //     'password'  => $this->request->getVar('password'),
        // ];
        // $this->Model_User->add($data);
        // session()->setFlashdata('message', 'ditambahkan');
        // return redirect()->to(base_url('admin/user'));
    }

    //--------------------------------------------------

    public function edit($id_user)
    {
        $data = [
            'id_user'   => $id_user,
            'namauser'  => $this->request->getVar('namauser'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
        ];
        $this->Model_User->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/user'));
    }

    //--------------------------------------------------

    public function delete($id_user)
    {
        $resetuser   = $this->Model_User->allData();
        $data = [
            'id_user'   => $id_user,
        ];
        $this->Model_User->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to(base_url('admin/user'));
    }

    //--------------------------------------------------

    public function resetuser($id_user)
    {
        //Reset Password
        $this->Model_User->resetuser($id_user);
        $data = [
            'id_user'   => $id_user,
            'password'  => 'A123456',
        ];
        $this->Model_User->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/user'));
    }

    //--------------------------------------------------

    public function resetwali($id_kelas)
    {
        //Reset Password
        $this->Model_User->resetwali($id_kelas);
        //Setting Password Wali Kelas
        $data = [
            'id_kelas'   => $id_kelas,
            'pass_word'    => 'W123456',
        ];
        $this->Model_Kelas->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/user/user_wali'));
    }

    //--------------------------------------------------

    public function resetptk($id_ptk)
    {
        //Reset Password
        $this->Model_User->resetptk($id_ptk);
        $data = [
            'id_ptk'   => $id_ptk,
            'password'  => date('hmY'),
        ];
        $this->Model_Ptk->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/user/user_ptk'));
    }

    //--------------------------------------------------

    public function resetsiswa($id_siswa)
    {
        //Reset Password
        $this->Model_User->resetsiswa($id_siswa);
        $data = [
            'id_siswa'   => $id_siswa,
            'password'  => 123456,
        ];
        $this->Model_Siswa->edit($data);
        session()->setFlashdata('message', 'diubah');
        return redirect()->to(base_url('admin/user/user_siswa'));
    }

    //--------------------------------------------------
}
