<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Model_Ptk;

class Ptk extends BaseController
{
    protected $Model_Ptk;

    public function __construct()
    {
        $this->Model_Ptk = new Model_Ptk();
    }

    public function index()
    {
        $data = [
            'title'     => 'PTK',
            'judul'     => 'Data PTK',
            'add'       => 'Tambah Data PTK',
            // 'edit'      => 'Edit Data PTK',
            // 'delete'    => 'Delete Data PTK',
            'ptk'       => $this->Model_Ptk->allData(),
        ];

        return render('admin/ptk/index', $data);
    }

    public function view($id_ptk)
    {
        $data   = [
            'title'     => 'Profile',
            'judul'     => 'Data PTK',
            'ptk'       => $this->Model_Ptk->detailData($id_ptk),
        ];

        return render('admin/ptk/view', $data);
    }

    public function add()
    {
        $data   = [
            'title'     => 'Tambah Data PTK',
            'judul'     => 'Data PTK',
            'ptk'       => $this->Model_Ptk->allData(),
        ];

        return render('admin/ptk/form_add', $data);
    }

    public function insert()
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
            // ambil gambar
            $foto = $this->request->getFile('foto_ptk');
            //ambil nama file
            $nama_file = $foto->getRandomName();
            //jika valid
            $data = array(
                'niy' => $this->request->getGetPost('niy'),
                'nuptk' => $this->request->getGetPost('nuptk'),
                'nama_ptk' => $this->request->getGetPost('nama_ptk'),
                'jk' => $this->request->getGetPost('jk'),
                't_lahir' => $this->request->getGetPost('t_lahir'),
                'tgl_lahir' => $this->request->getGetPost('tgl_lahir'),
                'alamat' => $this->request->getGetPost('alamat'),
                'email' => $this->request->getGetPost('email'),
                'password' => $this->request->getGetPost('password'),
                'foto_ptk' => $nama_file,
            );
            //pindah gambar
            $foto->move('public/assets/foto/ptk', $nama_file);
            $this->Model_Ptk->add($data);
            session()->setFlashData('success', 'data has been added to database');
            session()->setFlashdata('message', 'ditambah');
            return redirect()->to('/admin/ptk');
        } else {
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('/admin/ptk/add');
        }
    }

    public function edit($id_ptk)
    {
        $data   = [
            'title'     => 'Edit Data PTK',
            'judul'     => 'Profile PTK',
            'judul2'    => 'Edit Data PTK',
            'ptk'       => $this->Model_Ptk->detailData($id_ptk),
        ];

        return render('admin/ptk/form_update', $data);
    }

    public function update($id_ptk)
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
            // 'password'      => [
            //     'rules'  => 'required[ptk.password]',
            //     'errors' => [
            //         'required'   => '{field} tidak boleh kosong',
            //     ]
            // ],
            // 'foto_ptk'    => [
            //     'label'  => 'foto_ptk',
            //     'rules'  => 'max_size[foto_ptk,1024]|is_image[foto_ptk]|mime_in[ptk.foto_ptk,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'max_size'  => 'Gambar lebih dari 1 Mb',
            //         'is_image'  => 'Fle bukan gambar',
            //         'mime_in'   => 'File bukan gambar',
            //     ]
            // ],
        ])) {
            // ambil gambar
            $foto = $this->request->getFile('foto_ptk');
            if ($foto->getError() == 4) {
                //Jika Foto Tidak diganti
                $data = array(
                    'id_ptk' => $id_ptk,
                    'niy' => $this->request->getGetPost('niy'),
                    'nuptk' => $this->request->getGetPost('nuptk'),
                    'nama_ptk' => $this->request->getGetPost('nama_ptk'),
                    'jk' => $this->request->getGetPost('jk'),
                    't_lahir' => $this->request->getGetPost('t_lahir'),
                    'tgl_lahir' => $this->request->getGetPost('tgl_lahir'),
                    'alamat' => $this->request->getGetPost('alamat'),
                    'email' => $this->request->getGetPost('email'),
                );
                $this->Model_Ptk->edit($data);
            } else {
                //Menghapus foto lama
                $ptk = $this->Model_Ptk->detailData($id_ptk);
                if ($ptk['foto_ptk'] != "") {
                    unlink('public/assets/foto/ptk/' . $ptk['foto_ptk']);
                }

                //ambil nama file
                $nama_file = $foto->getRandomName();
                //jika valid
                $data = array(
                    'id_ptk' => $id_ptk,
                    'niy' => $this->request->getGetPost('niy'),
                    'nuptk' => $this->request->getGetPost('nuptk'),
                    'nama_ptk' => $this->request->getGetPost('nama_ptk'),
                    'jk' => $this->request->getGetPost('jk'),
                    't_lahir' => $this->request->getGetPost('t_lahir'),
                    'tgl_lahir' => $this->request->getGetPost('tgl_lahir'),
                    'alamat' => $this->request->getGetPost('alamat'),
                    'email' => $this->request->getGetPost('email'),
                    // 'password' => $this->request->getGetPost('password'),
                    'foto_ptk' => $nama_file,
                );
                //pindah gambar
                $foto->move('public/assets/foto/ptk', $nama_file);
                $this->Model_Ptk->edit($data);
                session()->setFlashData('success', 'data has been added to database');
                session()->setFlashdata('message', 'diubah');
                return redirect()->to('admin/ptk/view/' . $id_ptk);
            }
        } else {
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('admin/ptk/edit/' . $id_ptk);
        }
    }

    //--------------------------------------------------

    public function delete($id_ptk)
    {
        $data = [
            'id_ptk'   => $id_ptk,
        ];
        $this->Model_Ptk->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to('/admin/ptk');
    }
}
