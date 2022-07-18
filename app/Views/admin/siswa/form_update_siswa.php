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
                    <a href="<?= base_url('admin/siswa/view/' . $siswa['id_siswa']) ?>" class="btn btn-info float-right btn-sm"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
                <?= form_open_multipart('admin/siswa/updatesiswa/' . $siswa['id_siswa']); ?>
                <?= csrf_field(); ?>
                <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">

                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="mb-3 row">
                                        <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $siswa['nama_siswa']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nis" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="nis" id="nis" class="form-control" value="<?= $siswa['nis']; ?>" required>
                                        </div>
                                        <label for="nisn" class="col-sm-1 col-form-label">NISN</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="nisn" id="nisn" class="form-control" value="<?= $siswa['nisn']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="t_lahir" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="t_lahir" id="t_lahir" class="form-control" value="<?= $siswa['t_lahir'] ?>" required>
                                                </div>
                                                <div class="col">
                                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $siswa['tgl_lahir'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <?php if ($siswa['jk'] == '1') : ?>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="1" value="1" <?= 'checked' ?>>
                                                            <label class="form-check-label" for="1">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="2" value="2">
                                                            <label class="form-check-label" for="2">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php elseif ($siswa['jk'] == '2') : ?>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="1" value="1">
                                                            <label class="form-check-label" for="1">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="2" value="2" <?= 'checked' ?>>
                                                            <label class="form-check-label" for="2">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="agama" id="agama" class="form-control" value="<?= $siswa['agama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="st_keluarga" class="col-sm-3 col-form-label">Status dalam Keluarga</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="st_keluarga" id="st_keluarga" class="form-control" value="<?= $siswa['st_keluarga']; ?>" required>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <label for="anak_ke" class="col-sm-2 col-form-label">Anak ke</label>
                                        <div class="col-sm-1">
                                            <input type="text" name="anak_ke" id="anak_ke" class="form-control text-center" value="<?= $siswa['anak_ke']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alm_siswa" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alm_siswa" id="alm_siswa" class="form-control" value="<?= $siswa['alm_siswa']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tlp_siswa" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tlp_siswa" id="tlp_siswa" class="form-control" value="<?= $siswa['tlp_siswa']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="dt_tgl" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                        <div class="col-sm-5">
                                            <input type="date" name="dt_tgl" id="dt_tgl" class="form-control" value="<?= $siswa['dt_tgl']; ?>" required>
                                        </div>
                                        <label for="id_kelas" class="col-sm-1 col-form-label">Kelas</label>
                                        <div class="col-sm-3">
                                            <select name="id_kelas" id="id_kelas" class="form-control">
                                                <option selected="selected" value="<?= $siswa['id_kelas']; ?>"><?= $siswa['kode_kelas']; ?></option>
                                                <?php foreach ($kelas as $key) : ?>
                                                    <option value="<?= $key['id_kelas']; ?>"><?= $key['kode_kelas']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="id_keahlian" class="col-sm-3 col-form-label">Kompetensi Keahlian</label>
                                        <div class="col-sm-9">
                                            <select name="id_keahlian" id="id_keahlian" class="form-control">
                                                <option selected="selected" value="<?= $siswa['id_keahlian']; ?>"><?= $siswa['komp_keahlian']; ?></option>
                                                <?php foreach ($jurusan as $key) : ?>
                                                    <option value="<?= $key['id_keahlian']; ?>"><?= $key['komp_keahlian']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="skl_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="skl_asal" id="skl_asal" class="form-control" value="<?= $siswa['skl_asal']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="foto_siswa" class="col-sm-3 col-form-label">Foto Siswa</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="foto_siswa" id="preview_gambar" class="form-control">
                                        </div>
                                    </div>
                                </div><!-- /.post -->

                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </div> <!-- /.col-12 col-md-12 col-lg-8 order-2 order-md-1 -->
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
                    </div><!-- /.col-12 col-md-12 col-lg-4 order-1 order-md-2 -->
                </div><!-- /.row -->
                <?= form_close(); ?>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </section><!-- /.content -->