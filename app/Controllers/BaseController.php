<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['url', 'form'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->db       = \Config\Database::connect();

        //Admin
        $this->Model_Tahun = new \App\Models\Admin\Model_Tahun();
        $this->Model_Jurusan = new \App\Models\Admin\Model_Jurusan();
        $this->Model_Mapel = new \App\Models\Admin\Model_Mapel();
        $this->Model_Kelas = new \App\Models\Admin\Model_Kelas();
        $this->Model_Mapel_Kelas = new \App\Models\Admin\Model_Mapel_Kelas();
        $this->Model_Ptk = new \App\Models\Admin\Model_Ptk();
        $this->Model_Siswa = new \App\Models\Admin\Model_Siswa();
        $this->Model_User = new \App\Models\Admin\Model_User();
        $this->Model_Rombelkelas = new \App\Models\Admin\Model_Rombelkelas();
        $this->Model_Rombel = new \App\Models\Admin\Model_Rombel();

        //Wali Kelas
        $this->WaliKelas_Model = new \App\Models\Walikelas\WaliKelas_Model();
        $this->WaliKelas_ModelRombel = new \App\Models\Walikelas\WaliKelas_ModelRombel();
        $this->WaliKelas_ModelRapor = new \App\Models\Walikelas\WaliKelas_ModelRapor();
        $this->WaliKelas_ModelC_Academic = new \App\Models\Walikelas\WaliKelas_ModelC_Academic();
        $this->WaliKelas_ModelPkl = new \App\Models\Walikelas\WaliKelas_ModelPkl();
        $this->WaliKelas_ModelEskul = new \App\Models\Walikelas\WaliKelas_ModelEskul();
        $this->WaliKelas_ModelAbsensi = new \App\Models\Walikelas\WaliKelas_ModelAbsensi();
        $this->WaliKelas_Model_Mapel = new \App\Models\Walikelas\WaliKelas_Model_Mapel();
        $this->WaliKelas_ModelSiswa = new \App\Models\Walikelas\WaliKelas_ModelSiswa();
        $this->WaliKelas_Model_Leger = new \App\Models\Walikelas\WaliKelas_Model_Leger();
        $this->WaliKelas_Model_RombelMapel = new \App\Models\Walikelas\WaliKelas_Model_RombelMapel();

        //Wali PTK
        $this->Guru_Model_Nilai = new \App\Models\Guru\Guru_Model_Nilai();
        $this->Guru_Model_Nilai_Mapel = new \App\Models\Guru\Guru_Model_Nilai_Mapel();
        //Wali Siswa
        $this->Siswa_Model = new \App\Models\Siswa\Siswa_Model();
    }
}
