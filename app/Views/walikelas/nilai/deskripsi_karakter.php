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
                    <li class="breadcrumb-item active"><?= $title1 ?></li>
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
                                    <!-- <th style="width: 30px">No</th> -->
                                    <th style="width: 90%">Nama Siswa</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($rombel as $key) :?>
                                    <?php if ($kelas['id_kelas'] == $key['id_kelas']) { ?>

                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <!-- <td class="text-center"><?= $i++; ?></td> -->
                                            <td>
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                <?= $key['nama_siswa'] ?>
                                            <td class="text-center">
                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $key['id_anggota_rombel'] ?>"><i class="fas fa-plus"></i></button>

                                                </button>
                                            </td>


                                        <tr class="expandable-body">
                                            <td>
                                                <div class="p-0">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr style="width: 100%">
                                                                <th style="width: 15%">Integritas</th>
                                                                <td style="width: 85%"><?= $key['integritas'] ?></td>
                                                            </tr>
                                                            <tr style="width: 100%">
                                                                <th style="width: 15%">Religius</th>

                                                                <td style="width: 85%"><?= $key['religius'] ?></td>
                                                            </tr>
                                                            <tr style="width: 100%">
                                                                <th style="width: 15%">Nasionalis</th>
                                                                <td style="width: 85%"><?= $key['nasionalis'] ?></td>
                                                            </tr>
                                                            <tr style="width: 100%">
                                                                <th style="width: 15%">Mandiri</th>
                                                                <td style="width: 85%"><?= $key['mandiri'] ?></td>
                                                            </tr>
                                                            <tr style="width: 100%">
                                                                <th style="width: 15%">Gotong_royong</th>
                                                                <td style="width: 85%"><?= $key['gotong_royong'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
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
<?php foreach ($rombel as $key => $value) { ?>
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
                    <?= form_open('walikelas/d_karakter/add/' . $value['id_anggota_rombel']); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="id_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <label> <?= $value['nama_siswa']; ?></label>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sakit" class="col-sm-3 col-form-label">Integritas</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="sakit" id="sakit" class="form-control" value="<?= old('sakit'); ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ijin" class="col-sm-3 col-form-label">Religius</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="ijin" id="ijin" class="form-control" value="<?= old('ijin'); ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alpa" class="col-sm-3 col-form-label"></label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="alpa" id="alpa" class="form-control" value="<?= old('alpa'); ?>">
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-warning btn-sm " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
                <?= form_close() ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- /.modal edit-->
<?php foreach ($rombel as $key => $value) { ?>
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
                    <?= form_open('walikelas/d_karakter/edit/' . $value['id_anggota_rombel']); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="id_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <label> <?= $value['nama_siswa']; ?></label>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="integritas" class="col-sm-3 col-form-label">Integritas</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="integritas" id="integritas" class="form-control" value="<?= $value['integritas']; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="religius" class="col-sm-3 col-form-label">Religius</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="religius" id="religius" class="form-control" value="<?= $value['religius']; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nasionalis" class="col-sm-3 col-form-label">Nasionalis</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="nasionalis" id="nasionalis" class="form-control" value="<?= $value['nasionalis']; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="mandiri" class="col-sm-3 col-form-label">Mandiri</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="mandiri" id="mandiri" class="form-control" value="<?= $value['mandiri']; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gotong_royong" class="col-sm-3 col-form-label">Gotong-royong</label>
                        <div>
                            <label class="col-sm-1 col-form-label">:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="gotong_royong" id="gotong_royong" class="form-control" value="<?= $value['gotong_royong']; ?>">
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