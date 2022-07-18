<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{

    public function index()
    {
        $data = [
            'title'     => 'Data Siswa',
            'judul'     => 'Data Siswa',
            'siswa'     => $this->Model_Siswa->allData(),
            'jurusan'   => $this->Model_Jurusan->allData(),
            'kelas'   => $this->Model_Kelas->allData(),
        ];

        return render('admin/siswa/index', $data);
    }

    public function view($id_siswa)
    {
        $data   = [
            'title'     => 'Profile',
            'judul'     => 'Data Siswa',
            'siswa'     => $this->Model_Siswa->detailData($id_siswa),
            'jurusan'   => $this->Model_Jurusan->allData(),
        ];

        return render('admin/siswa/view', $data);
    }

    public function add()
    {
        $data   = [
            'title'      => 'Data Siswa',
            'judul'      => 'Form Tambah Data',
            'jurusan'   => $this->Model_Jurusan->allData(),
            'kelas'   => $this->Model_Kelas->allData(),
            'validation' => \Config\Services::validation()
        ];
        return render('admin/siswa/form_add', $data);
    }

    public function insert()
    {

        if ($this->validate([
            'nis'        => [
                'rules'  => 'required|is_unique[siswa.nis]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                    'is_unique'  => '{field} sudah ada'
                ]
            ],
            'nama_siswa'       => [
                'rules'  => 'required[siswa.nama_siswa]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'jk'       => [
                'rules'  => 'required[siswa.jk]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            't_lahir'   => [
                'rules'  => 'required[siswa.t_lahir]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            'tgl_lahir' => [
                'rules'  => 'required[siswa.tgl_lahir]',
                'errors' => [
                    'required'   => '{field} tidak boleh kosong',
                ]
            ],
            // 'alm_siswa'      => [
            //     'rules'  => 'required[siswa.alm_siswa]',
            //     'errors' => [
            //         'required'   => '{field} tidak boleh kosong',
            //     ]
            // ],
            'foto_siswa'    => [
                'label'  => 'foto_siswa',
                'rules'  => 'uploaded[foto_siswa]|max_size[foto_siswa,1024]|is_image[foto_siswa]|mime_in[siswa.foto_siswa,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded'  => 'Gambar belum dipilih',
                    'max_size'  => 'Gambar lebih dari 1 Mb',
                    'is_image'  => 'Fle bukan gambar',
                    'mime_in'   => 'File bukan gambar',
                ]
            ],

        ])) {

            //ambil gambar
            $foto = $this->request->getFile('foto_siswa');
            //ambil nama file
            $nama_file = $foto->getRandomName();
            //jika valid
            $data = array(
                'nis'           => $this->request->getVar('nis'),
                'nisn'          => $this->request->getVar('nisn'),
                'nama_siswa'    => $this->request->getVar('nama_siswa'),
                'jk'            => $this->request->getVar('jk'),
                't_lahir'       => $this->request->getVar('t_lahir'),
                'tgl_lahir'     => $this->request->getVar('tgl_lahir'),
                'alm_siswa'     => $this->request->getVar('alm_siswa'),
                'skl_asal'      => $this->request->getGetPost('skl_asal'),
                'id_keahlian'   => $this->request->getVar('id_keahlian'),
                'id_kelas'      => $this->request->getGetPost('id_kelas'),
                'dt_tgl'        => $this->request->getGetPost('dt_tgl'),
                'foto_siswa'    => $nama_file,
                'password'      => 'S123456',
            );

            //pindah gambar ke (public/assets/foto/siswa)
            $foto->move('public/assets/foto/siswa', $nama_file);
            $this->Model_Siswa->add($data);
            // session()->setFlashData('success', 'data has been added to database');
            session()->setFlashdata('message', 'ditambah');
            return redirect()->to('/admin/siswa');
        } else {
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('/admin/siswa/add');
        }
        // return render('admin/siswa/form_add', $data);
    }

    public function editsiswa($id_siswa)
    {
        $data   = [
            'title'     => 'Edit Data Siswa',
            'judul'     => 'Edit Data Siswa',
            'judul2'    => 'Edit Data Siswa',
            'jurusan'   => $this->Model_Jurusan->allData(),
            'siswa'     => $this->Model_Siswa->detailData($id_siswa),
            'kelas'     => $this->Model_Kelas->allData(),
        ];

        return render('admin/siswa/form_update_siswa', $data);
    }

    public function updatesiswa($id_siswa)
    {
        $foto = $this->request->getFile('foto_siswa');
        if ($foto->getError() == 4) {
            //Jika Foto Tidak diganti
            $data = array(
                'id_siswa'      => $id_siswa,
                'nis'           => $this->request->getGetPost('nis'),
                'nisn'          => $this->request->getGetPost('nisn'),
                'nama_siswa'    => $this->request->getGetPost('nama_siswa'),
                't_lahir'       => $this->request->getGetPost('t_lahir'),
                'tgl_lahir'     => $this->request->getGetPost('tgl_lahir'),
                'jk'            => $this->request->getGetPost('jk'),
                'agama'         => $this->request->getGetPost('agama'),
                'st_keluarga'   => $this->request->getGetPost('st_keluarga'),
                'anak_ke'       => $this->request->getGetPost('anak_ke'),
                'alm_siswa'     => $this->request->getGetPost('alm_siswa'),
                'tlp_siswa'     => $this->request->getGetPost('tlp_siswa'),
                'skl_asal'      => $this->request->getGetPost('skl_asal'),
                'id_kelas'      => $this->request->getGetPost('id_kelas'),
                'id_keahlian'   => $this->request->getGetPost('id_keahlian'),
                'dt_tgl'        => $this->request->getGetPost('dt_tgl'),
            );
            $this->Model_Siswa->edit($data);
            session()->setFlashData('success', 'data has been added to database');
            session()->setFlashdata('message', 'diubah');
            return redirect()->to('admin/siswa/view/' . $id_siswa);
        } else {
            //Menghapus foto lama
            $siswa = $this->Model_Siswa->detailData($id_siswa);
            if ($siswa['foto_siswa'] != "") {
                unlink('public/assets/foto/siswa/' . $siswa['foto_siswa']);
                // }

                //ambil nama file
                $nama_file = $foto->getRandomName();
                //jika valid
                $data = array(
                    'id_siswa'      => $id_siswa,
                    'nis'           => $this->request->getGetPost('nis'),
                    'nisn'          => $this->request->getGetPost('nisn'),
                    'nama_siswa'    => $this->request->getGetPost('nama_siswa'),
                    't_lahir'       => $this->request->getGetPost('t_lahir'),
                    'tgl_lahir'     => $this->request->getGetPost('tgl_lahir'),
                    'jk'            => $this->request->getGetPost('jk'),
                    'agama'         => $this->request->getGetPost('agama'),
                    'st_keluarga'   => $this->request->getGetPost('st_keluarga'),
                    'anak_ke'       => $this->request->getGetPost('anak_ke'),
                    'alm_siswa'     => $this->request->getGetPost('alm_siswa'),
                    'tlp_siswa'     => $this->request->getGetPost('tlp_siswa'),
                    'skl_asal'      => $this->request->getGetPost('skl_asal'),
                    'id_kelas'      => $this->request->getGetPost('id_kelas'),
                    'id_keahlian'   => $this->request->getGetPost('id_keahlian'),
                    'dt_tgl'        => $this->request->getGetPost('dt_tgl'),
                    'foto_siswa'    => $nama_file,
                );
                //pindah gambar
                $foto->move('public/assets/foto/siswa', $nama_file);
                $this->Model_Siswa->edit($data);
                session()->setFlashData('success', 'data has been added to database');
                session()->setFlashdata('message', 'diubah');
                return redirect()->to('admin/siswa/view/' . $id_siswa);
                // }
            } else {
                session()->setFlashData('failed', \Config\Services::validation()->getErrors());
                return redirect()->to('admin/siswa/editsiswa/' . $id_siswa);
            }
        }
    }

    public function editwali($id_siswa)
    {
        $data   = [
            'title'     => 'Edit Data Orang Tua/Wali',
            'judul'     => 'Data Orang Tua/Wali',
            'judul2'    => 'Edit Data Orang Tua/Wali',
            'siswa'     => $this->Model_Siswa->detailData($id_siswa),
        ];

        return render('admin/siswa/form_update_wali', $data);
    }

    public function updatewali($id_siswa)
    {
        if ($data = [
            'id_siswa'      => $id_siswa,
            'nm_ayah'           => $this->request->getGetPost('nm_ayah'),
            'nm_ibu'           => $this->request->getGetPost('nm_ibu'),
            'alm_ortu'           => $this->request->getGetPost('alm_ortu'),
            'tlp_ortu'           => $this->request->getGetPost('tlp_ortu'),
            'pek_ayah'           => $this->request->getGetPost('pek_ayah'),
            'pek_ibu'           => $this->request->getGetPost('pek_ibu'),
            'nm_wali'           => $this->request->getGetPost('nm_wali'),
            'alm_wali'           => $this->request->getGetPost('alm_wali'),
            'tlp_wali'           => $this->request->getGetPost('tlp_wali'),
            'pek_wali'           => $this->request->getGetPost('pek_wali'),
        ]) {
            $this->Model_Siswa->edit($data);
            session()->setFlashData('success', 'data has been added to database');
            session()->setFlashdata('message', 'diubah');
            return redirect()->to('admin/siswa/view/' . $id_siswa);
        } else {
            session()->setFlashData('failed', \Config\Services::validation()->getErrors());
            return redirect()->to('admin/siswa/editwali/' . $id_siswa);
        }
    }

    public function delete($id_siswa)
    {
        $data = [
            'id_siswa'   => $id_siswa,
        ];
        $this->Model_Siswa->deleteData($data);
        session()->setFlashdata('message', 'dihapus');
        return redirect()->to('/admin/siswa');
    }
}
