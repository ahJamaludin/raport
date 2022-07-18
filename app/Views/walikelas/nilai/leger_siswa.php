    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- ./row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-success card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Data Diri</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-academik-tab" data-toggle="pill" href="#custom-tabs-three-academik" role="tab" aria-controls="custom-tabs-three-academik" aria-selected="false">Nilai Academik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-catatan-tab" data-toggle="pill" href="#custom-tabs-three-catatan" role="tab" aria-controls="custom-tabs-three-catatan" aria-selected="false">Messages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-keterngan-tab" data-toggle="pill" href="#custom-tabs-three-keterngan" role="tab" aria-controls="custom-tabs-three-keterngan" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                                    <div class="row">
                                                        <div class="col-12">

                                                            <div class="active tab-pane" id="activity">
                                                                <!-- Post -->
                                                                <div class="mb-3 row">
                                                                    <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nama_siswa" value=": <?= $siswa['nama_siswa']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="nis" class="col-sm-3 col-form-label">Nomor Induk/NISN</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nis" value=": <?= $siswa['nis']; ?>/<?= $siswa['nisn']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="t_lahir" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                                                    <div class="col-sm-9">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <input type="text" readonly class="form-control-plaintext" id="nama_ptk" class="form-control" value=": <?= $siswa['t_lahir'] ?>, <?= $siswa['tgl_lahir'] ?>">,
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="jk" value=": <?php if ($siswa['jk'] == 1) {
                                                                                                                                                        echo 'Laki-Laki';
                                                                                                                                                    } elseif ($siswa['jk'] == 2) {
                                                                                                                                                        echo 'Perempuan';
                                                                                                                                                    }  ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="agama" value=": <?= $siswa['agama']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="st_keluarga" class="col-sm-3 col-form-label">Status dalam Keluarga</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="st_keluarga" value=": <?= $siswa['st_keluarga']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="anak_ke" class="col-sm-3 col-form-label">Anak ke</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="anak_ke" value=": <?= $siswa['anak_ke']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alm_siswa" class="col-sm-3 col-form-label">Alamat</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="alm_siswa" value=": <?= $siswa['alm_siswa']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="tlp_siswa" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="tlp_siswa" value=": <?= $siswa['tlp_siswa']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="dt_tgl" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="dt_tgl" value=": <?= $siswa['dt_tgl']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="nama_kelas" class="col-sm-3 col-form-label">Kelas</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nama_kelas" value=": <?= $siswa['nama_kelas']; ?> - <?= $siswa['komp_keahlian']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="skl_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="skl_asal" value=": <?= $siswa['skl_asal']; ?>">
                                                                    </div>
                                                                </div>

                                                            </div><!-- /.post -->
                                                            <br>

                                                            <!-- Data Orangtua/Wali -->
                                                            <div class="row">
                                                                <div class="col-10" font-colour="red">
                                                                    <h6><b>Data Orangtua/Wali</b></h6>
                                                                </div>
                                                                <!-- <div class="col-2">
                                                                    <a href="<?= base_url('admin/siswa/editwali/' . $siswa['id_siswa']); ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit</i> </a>
                                                                </div> -->
                                                            </div>

                                                            <div class="post">
                                                            </div>
                                                            <div class="active tab-pane" id="activity">
                                                                <div class="mb-3 row">
                                                                    <label for="nm_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nm_ayah" value=": <?= $siswa['nm_ayah']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="nm_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nm_ibu" value=": <?= $siswa['nm_ibu']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alm_ortu" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                                                                    <div class="alm_ortu">
                                                                        <input type="text" readonly class="form-control-plaintext" id="alm_ortu" value=": <?= $siswa['alm_ortu']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="tlp_ortu" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="tlp_ortu" value=": <?= $siswa['tlp_ortu']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="pek_ayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="pek_ayah" value=": <?= $siswa['pek_ayah']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="pek_ibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="pek_ibu" value=": <?= $siswa['pek_ibu']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 row">
                                                                    <label for="nm_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="nm_wali" value=": <?= $siswa['nm_wali']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alm_wali" class="col-sm-3 col-form-label">Alamat Wali</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="alm_wali" value=": <?= $siswa['alm_wali']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="tlp_wali" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="tlp_wali" value=": <?= $siswa['tlp_wali']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="pek_wali" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" readonly class="form-control-plaintext" id="pek_wali" value=": <?= $siswa['pek_wali']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                                    <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?= $siswa['nama_siswa']; ?></h3> -->
                                                    <div class="text-center">
                                                        <img class="academik-user-img img-fluid" src="<?= base_url('public/assets/foto/siswa/' . $siswa['foto_siswa']); ?> " alt="User academik picture" width="35%">
                                                    </div>

                                                    <!-- <h3 class="academik-username text-center"><?= $siswa['nama_siswa']; ?></h3>

                                                    <p class="text-muted text-center"><?= $siswa['nis']; ?></p>
                                                    <br>

                                                    <div class="text-center mt-5 mb-3">
                                                        <a href="<?= base_url('admin/siswa/editsiswa/' . $siswa['id_siswa']); ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit</i></a>
                                                        <a href="<?= base_url('admin/siswa/delete/' . $siswa['id_siswa']); ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"> Delete</i></a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-academik" role="tabpanel" aria-labelledby="custom-tabs-three-academik-tab">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-borderless">
                                                    <tr>
                                                        <th withd="50px">Nama Peserta Didik</th>
                                                        <th withd="10px">:</th>
                                                        <td><?= $siswa['nama_siswa']; ?></td>
                                                        <th withd="100px">Kelas</th>
                                                        <th withd="10px">:</th>
                                                        <td><?= session()->get('kelas'); ?>/<?= session()->get('jurusan'); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th withd="50px">NIS/NISN</th>
                                                        <th withd="10px">:</th>
                                                        <td><?= session()->get('nis'); ?>/<?= session()->get('username'); ?></td>
                                                        <th withd="100px">Semester</th>
                                                        <th withd="10px">: </th>
                                                        <td><?= $ta_aktif['smt'] ?></td>
                                                    </tr>
                                                </table>

                                                <table class="table table-bordered ">
                                                    <thead>
                                                        <tr class="text-center bg-success">
                                                            <th style="width: 30px">No</th>
                                                            <th style="width: 300px">Mata Pelajaran</th>
                                                            <th style="width: 100px">Pengetahuan</th>
                                                            <th style="width: 100px">Ketrampilan</th>
                                                            <th style="width: 100px">Nilai Akhir</th>
                                                            <th style="width: 100px">Predikat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        $db = \Config\Database::connect()
                                                        ?>
                                                        <?php foreach ($rombelmapel as $key) :
                                                            // $nilaimapel = $db->table('rombel_mapel')
                                                            //     ->join('mapelkelas', 'mapelkelas.id_mapelkelas = rombel_mapel.id_mapelkelas', 'left')
                                                            //     ->join('siswa', 'siswa.id_siswa = rombel_mapel.id_siswa', 'left')
                                                            //     // ->orderBy('id_rombel_mapel', 'DESC')
                                                            //     ->get()->getRowArray()
                                                        ?>
                                                            <?php if ($siswa['id_kelas'] == $key['id_kelas']) { ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                    <td><?= $key['mapel'] ?></td>
                                                                    <td class="text-center"><?= $key['pengetahuan'] ?></td>
                                                                    <td class="text-center"><?= $key['ketrampilan'] ?></td>
                                                                    <td class="text-center"><?= ( $key['pengetahuan'] + $key['ketrampilan'] )/2 ?></td>
                                                                    <td class="text-center"></td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- /.card-body -->

                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-catatan" role="tabpanel" aria-labelledby="custom-tabs-three-catatan-tab">
                                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-keterngan" role="tabpanel" aria-labelledby="custom-tabs-three-keterngan-tab">
                                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.col 12 -->
            </div><!-- /.row justify-content-center-->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->