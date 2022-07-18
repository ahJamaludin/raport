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
                <!-- <h3 class="card-title"></h3> -->
                <div class="card-tools">
                    <a href="<?= base_url('admin/ptk/view/' . $ptk['id_ptk']); ?>" class="btn btn-info float-right btn-sm"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
                <?= form_open_multipart('admin/ptk/update/' . $ptk['id_ptk']); ?>
                <?= csrf_field(); ?>
                <input type="hidden" name="id_ptk" value="<?= $ptk['id_ptk']; ?>">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

                        <div class="row">
                            <div class="col-12">
                                <h4><?= $judul2 ?></h4>
                                <div class="post">
                                </div>

                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="mb-3 row">
                                        <label for="niy" class="col-sm-3 col-form-label">NIY</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="niy" id="niy" class="form-control" value="<?= $ptk['niy'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="nuptk" class="col-sm-3 col-form-label">NUPTK</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nuptk" id="nuptk" class="form-control" value="<?= $ptk['nuptk'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="nama_ptk" class="col-sm-3 col-form-label">Nama PTK</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_ptk" id="nama_ptk" class="form-control" value="<?= $ptk['nama_ptk'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <?php if ($ptk['jk'] == 'L') : ?>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="l" value="L" <?= 'checked' ?>>
                                                            <label class="form-check-label" for="l">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="p" value="P">
                                                            <label class="form-check-label" for="p">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php elseif ($ptk['jk'] == 'P') : ?>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="l" value="L">
                                                            <label class="form-check-label" for="l">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jk" id="p" value="P" <?= 'checked' ?>>
                                                            <label class="form-check-label" for="p">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="t_lahir" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="t_lahir" id="nama_ptk" class="form-control" value="<?= $ptk['t_lahir'] ?>">
                                                </div>
                                                <div class="col">
                                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $ptk['tgl_lahir'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $ptk['alamat'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-3 col-form-label">E-Mail</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" id="email" class="form-control" value="<?= $ptk['email'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">

                                        <label for="foto_ptk" class="col-sm-3 col-form-label">Foto PTK</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="foto_ptk" id="preview_gambar" class="form-control">
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <!-- /.post -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?= $ptk['nama_ptk']; ?></h3> -->
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/assets/foto/ptk/' . $ptk['foto_ptk']); ?>" id="gambar_load" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $ptk['nama_ptk']; ?></h3>

                        <p class="text-muted text-center"><?= $ptk['niy']; ?></p>
                        <br>

                        <div class="text-center mt-5 mb-3">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div><!-- /.card-body -->
        </div><!-- /.card -->

    </section><!-- /.content -->