<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Catatan Akademik</li>
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
            <div class="col-md-12">
                <!-- Info boxes -->
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $judul ?></h3>

                        <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>

                        <div class="card-tools">
                            <!-- <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add -->
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table class="table table-bordered ">
                            <thead>
                                <tr class="text-center bg-success">
                                    <th style="width: 30px">No</th>
                                    <!-- <th style="width: 100px">NIS/NISN</th> -->
                                    <th style="width: 300px">Nama Siswa</th>
                                    <th>Catatan Academic</th>
                                    <th style="width: 30px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($rombelkelas as $key) : ?>
                                    <?php if ($kelas['id_kelas'] == $key['id_kelas']) { ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><?= $key['nama_siswa'] ?></td>
                                            <td><?= $key['c_academik'] ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $key['id_anggota_rombel'] ?>"><i class="fas fa-plus"></i></button>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
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
                <?= form_open('walikelas/c_academic/add'); ?>
                <?= csrf_field(); ?>

                <table id="" class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr class="text-center bg-success">
                            <th style="width: 30px">NIS</th>
                            <th style="width: 200px">Nama Siswa</th>
                            <th style="width: 300px">Catatan Academik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        $db = \Config\Database::connect()
                        ?>
                        <?php foreach ($rombelkelas as $key) :
                            $anggota_rombel = $db->table('anggota_rombel')
                                ->get()->getRowArray()
                        ?>
                            <?php if ($anggota_rombel['id_kelas'] == $key['id_kelas']) { ?>
                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td><?= $key['id_siswa'] ?></td>
                                    <td>
                                        <input name="c_academik" class="form-control">
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-warning btn-sm " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal edit-->
<?php foreach ($rombelkelas as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_anggota_rombel'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header card-outline card-success">
                    <h4 class="modal-title"><?= $edit ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('walikelas/c_academic/edit/' . $value['id_anggota_rombel']); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="id_anggota_rombel" class="col-sm-3 col-form-label">Nama Siswa</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <label> <?= $value['nama_siswa']; ?></label>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="c_academik" class="col-sm-3 col-form-label">Catatan Academik</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="c_academik" class="form-control" value="<?= $value['c_academik']; ?>" placeholder="Catatan Academik">
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
<?php } ?>