    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0"></h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Info boxes -->
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover table-sm">
                                <thead>
                                    <tr class="text-center">
                                        <!-- <th style="width: 10px">No</th> -->
                                        <th style="width: 100px">Foto PTK</th>
                                        <th style="width: 90px">NIY</th>
                                        <th style="width: 90px">NUPTK</th>
                                        <th>Nama PTK</th>
                                        <th>E-mail</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($ptk as $key) : ?>
                                        <tr>
                                            <!-- <td><?= $i++; ?></td> -->
                                            <td class="text-center"><a href="<?= base_url('admin/ptk/view/' . $key['id_ptk']); ?>"><img src="<?= base_url('public/assets/foto/ptk/' . $key['foto_ptk']) ?>" class="img-circle elevation-2" alt="User Image" width="50px"></a></td>
                                            <td class="text-center"><?= $key['niy']; ?></td>
                                            <td class="text-center"><?= $key['nuptk']; ?></td>
                                            <td><?= $key['nama_ptk']; ?></td>
                                            <td><?= $key['email']; ?></td>
                                            <td class="text-center"><?= $key['password']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!-- /.cad body-->
                    </div><!-- /.cad -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.modal add-->
    <div class="modal fade" id="add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header card-outline card-success">
                    <h4 class="modal-title"><?= $add ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/ptk/add'); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="niy" class="col-sm-3 col-form-label">NIY</label>
                        <div class="col-sm-9">
                            <input name="niy" class="form-control" value="<?= old('niy'); ?>" placeholder="NIY" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nuptk" class="col-sm-3 col-form-label">NUPTK</label>
                        <div class="col-sm-9">
                            <input name="nuptk" class="form-control" value="<?= old('nuptk'); ?>" placeholder="NUPTK">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_ptk" class="col-sm-3 col-form-label">Nama PTK</label>
                        <div class="col-sm-9">
                            <input name="nama_ptk" class="form-control" value="<?= old('nama_ptk'); ?>" placeholder="Nama PTK" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label">Jenis kelamin</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="l" value="L">
                                        <label class="form-check-label" for="l" <?= 'checked'; ?>>
                                            Laki-laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="p" value="P">
                                        <label class="form-check-label" for="p" <?= 'checked'; ?>>
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="t_lahir" id="t_lahir" class="form-control" value="<?= old('t_lahir'); ?>">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= old('tgl_lahir'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= old('alamat'); ?>">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" class="form-control" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto_ptk" class="col-sm-3 col-form-label">Foto PTK</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="foto_ptk" id="foto_ptk" value="<?= old('foto_ptk'); ?>">
                                <label class="custom-file-label" for="foto_ptk">Choose file</label>
                            </div>
                            <br>
                            <br>
                            <div>
                                <img src="<?= base_url('public/assets/foto/ptk/avatar.png'); ?>" alt="">
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-warning btn-sm " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>