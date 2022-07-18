    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title1 ?></h1>
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Info boxes -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title"><?= $judul ?> : </h3>

                            <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add
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
                                        <th>Nama</th>
                                        <th style="width: 100px">Pengetahuan</th>
                                        <th style="width: 100px">Ketrampilan</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rombelkelas as $key) : ?>
                                        <?php if ($detailmapelkelas['id_mapelkelas'] == $key['id_mapelkelas']) { ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td><?= $key['nama_siswa']; ?></td>
                                                <td class="text-center"><?= $key['pengetahuan']; ?></td>
                                                <td class="text-center"><?= $key['ketrampilan']; ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editnilai<?= $key['id_rombelmapel'] ?>"><i class="fas fa-book-open"></i></button>
                                                    <a href="<?= base_url('guru/nilai/nilaikelas/' . $key['id_mapelkelas']); ?>" class="btn btn-success btn-sm"><i class="fas fa-book-open"></i></a>
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
                    <?= form_open('guru/nilai/add'); ?>
                    <?= csrf_field(); ?>

                    <table id="example1" class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr class="text-center bg-success">
                                <th style="width: 30px">No</th>
                                <th style="width: 70px">NIS/NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kompetensi Keahlian</th>
                                <th style="width: 40px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($rombelkelas as $key) : ?>
                                <?php if ($detailmapelkelas['id_mapelkelas'] == $key['id_mapelkelas']) { ?>

                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $key['nis']; ?>/<?= $key['nisn']; ?></td>
                                        <td><?= $key['nama_siswa']; ?></td>
                                        <td></td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php endforeach; ?>

                        </tbody>

                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal add-->

    <!-- /.modal edit-->
    <?php foreach ($rombelkelas as $key => $value) { ?>
        <div class="modal fade" id="editnilai<?= $value['id_rombelmapel'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header card-outline card-success">
                        <h4 class="modal-title"><?= $editnilai ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('guru/nilai/edit/' . $value['id_mapelkelas']); ?>
                        <?= csrf_field(); ?>

                        <div class="mb-3 row">
                            <label for="id_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                            <div>
                                <label class="col-sm-1 col-form-label">:</label>
                            </div>
                            <div class="col-sm-8">
                                <label> <?= $value['nama_siswa'] ?></label>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pengetahuan" class="col-sm-3 col-form-label">Pengetahuan</label>
                            <div>
                                <label class="col-sm-1 col-form-label">:</label>
                            </div>
                            <div class="col-sm-8">
                                <input name="pengetahuan" class="form-control" value="<?= $value['pengetahuan']; ?>" placeholder="Nilai Pengetahuan">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ketrampilan" class="col-sm-3 col-form-label">Ketrampilan</label>
                            <div>
                                <label class="col-sm-1 col-form-label">:</label>
                            </div>
                            <div class="col-sm-8">
                                <input name="ketrampilan" class="form-control" value="<?= $value['ketrampilan']; ?>" placeholder="Nilai Ketrampilan">
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