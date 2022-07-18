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
                <h4 class="card-title"><b><?= $judul ?></b></h4>
                <div class="card-tools">
                    <a href="<?= base_url('admin/siswa/view/' . $siswa['id_siswa']) ?>" class="btn btn-info float-right btn-sm"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
                <?= form_open_multipart('admin/siswa/updatewali/' . $siswa['id_siswa']); ?>
                <?= csrf_field(); ?>
                <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="mb-3 row">
                                        <label for="nm_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nm_ayah" id="nm_ayah" class="form-control" value="<?= $siswa['nm_ayah']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nm_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nm_ibu" id="nm_ibu" class="form-control" value="<?= $siswa['nm_ibu']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alm_ortu" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alm_ortu" id="alm_ortu" class="form-control" value="<?= $siswa['alm_ortu']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tlp_ortu" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tlp_ortu" id="tlp_ortu" class="form-control" value="<?= $siswa['tlp_ortu']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="pek_ayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pek_ayah" id="pek_ayah" class="form-control" value="<?= $siswa['pek_ayah']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="pek_ibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pek_ibu" id="pek_ibu" class="form-control" value="<?= $siswa['pek_ibu']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nm_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nm_wali" id="nm_wali" class="form-control" value="<?= $siswa['nm_wali']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alm_wali" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alm_wali" id="alm_wali" class="form-control" value="<?= $siswa['alm_wali']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tlp_wali" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tlp_wali" id="tlp_wali" class="form-control" value="<?= $siswa['tlp_wali']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="pek_wali" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pek_wali" id="pek_wali" class="form-control" value="<?= $siswa['pek_wali']; ?>" required>
                                        </div>
                                    </div>





                                </div>
                            </div><!-- /.col-12 -->
                        </div><!-- /.Row -->
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?= $siswa['nama_siswa']; ?></h3> -->
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/assets/foto/siswa/' . $siswa['foto_siswa']); ?> " alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $siswa['nama_siswa']; ?></h3>

                        <p class="text-muted text-center"><?= $siswa['nis']; ?>/<?= $siswa['nisn']; ?></p>
                        <br>

                        <div class="text-center mt-5 mb-3">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                        </div>
                    </div>
                </div><!-- /.Row -->
                <?= form_close(); ?>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </section><!-- /.content -->