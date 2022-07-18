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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/mapelkelas'); ?>"><?= $title ?></a></li>
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
                <div class="col-md-8">
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

                            <?= form_open_multipart(); ?>
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_mapelkelas" value="<?= $dataById['id_mapelkelas']; ?>">

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Mata Pelajaran</label>
                                <div class="col-sm-9">
                                    <select name="id_mapel" id="id_mapel" class="form-control">
                                        <option selected="selected" value="<?= $dataById['id_mapel']; ?>"><?= $dataById['mapel']; ?></option>
                                        <?php foreach ($datamapel as $key) : ?>
                                            <option value="<?= $key['id_mapel']; ?>"><?= $key['mapel']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Nama PTK</label>
                                <div class="col-sm-9">
                                    <select name="id_ptk" id="id_ptk" class="form-control">
                                        <option selected="selected" value="<?= $dataById['id_ptk']; ?>"><?= $dataById['nama']; ?></option>
                                        <?php foreach ($dataptk as $key) : ?>
                                            <option value="<?= $key['id_ptk']; ?>"><?= $key['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Kode Kelas</label>
                                <div class="col-sm-9">
                                    <select name="id_kelas" id="id_kelas" class="form-control">
                                        <option selected="selected" value="<?= $dataById['id_kelas']; ?>"><?= $dataById['kode_kelas']; ?></option>
                                        <?php foreach ($datakelas as $key) : ?>
                                            <option value="<?= $key['id_kelas']; ?>"><?= $key['kode_kelas']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <a href="<?= base_url('admin/mapelkelas') ?>" type="submit" class="btn btn-info"><i class="fas fa-reply"></i> Back</a>
                            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Save</button>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->