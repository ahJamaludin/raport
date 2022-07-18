    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>Data Diri Peserta Didik</b></h4>
                <div class="card-tools">
                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-info float-right btn-sm"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
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
                                    <div class="col-2">
                                        <a href="<?= base_url('admin/siswa/editwali/' . $siswa['id_siswa']); ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit</i> </a>
                                    </div>
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
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/assets/foto/siswa/' . $siswa['foto_siswa']); ?> " alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $siswa['nama_siswa']; ?></h3>

                        <p class="text-muted text-center"><?= $siswa['nis']; ?></p>
                        <br>

                        <div class="text-center mt-5 mb-3">
                            <a href="<?= base_url('admin/siswa/editsiswa/' . $siswa['id_siswa']); ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"> Edit</i></a>
                            <a href="<?= base_url('admin/siswa/delete/' . $siswa['id_siswa']); ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"> Delete</i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->

    </section><!-- /.content -->