    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">Tahun Pelajaran</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/tahun'); ?>"><?= $title ?></a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><?= $judul ?></h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $errors = session()->getFlashdata('failed');
                            if (!empty($errors)) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><i class="fas fa-times"></i> Failed</strong> data not added to database.
                                    <ul>
                                        <?php foreach ($errors as $e) { ?>
                                            <li><?= esc($e); ?></li>
                                        <?php } ?>
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <?php
                            if (isset($validation)) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><i class="fas fa-times"></i> Failed</strong> data not added to database.
                                    <ul>
                                        <?= $validation->listErrors() ?>
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>


                            <?= form_open_multipart('admin/ptk/insert'); ?>
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_ptk" value="<?= $ptk['id_ptk']; ?>">

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
                                <div class="col-sm-6">
                                    <!-- <div class="form-group"> -->
                                    <!-- <label>Foto PTK</label> -->
                                    <input type="file" name="foto_ptk" id="preview_gambar" class="form-control">
                                    <!-- </div> -->
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <img src="<?= base_url('public/assets/foto/ptk/' . $ptk['foto_ptk']) ?>" id="gambar_load" width="200px">
                                    </div>
                                </div>
                            </div>

                            <a href="<?= base_url('admin/ptk') ?>" type="submit" class="btn btn-info"><i class="fas fa-reply"></i> Back</a>
                            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Save</button>
                            <?= form_close(); ?>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->