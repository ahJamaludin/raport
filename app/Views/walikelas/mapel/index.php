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
                            <h3 class="card-title"><?= $judul ?></h3>

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
                                        <th>Mata Pelajaran</th>
                                        <th style="width: 300px">Nama PTK</th>
                                        <th style="width: 150px">Anggota Rombel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $i = 1; ?>
                                    <?php foreach ($mapelkelas as $key) :
                                        // $jml = $db->table('rombel_mapel')
                                        //     ->where('id_kelas', $id_kelas)
                                        //     ->countAllResults();
                                    ?>
                                        <?php if ($detailkelas['id_kelas'] == $key['id_kelas']) { ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td><?= $key['mapel']; ?></td>
                                                <td><?= $key['nama_ptk']; ?></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('walikelas/mapel/rombel_mapel/' . $key['id_mapel']) ?>">
                                                        <span class="btn btn-success btn-sm">
                                                            <i class="fas fa-list-alt"></i> Siswa
                                                        </span>
                                                        <br>
                                                    </a>
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

    <!-- modal add-->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header card-outline card-success">
                    <h4 class="modal-title"><?= $add ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('walikelas/mapel/add/' . $detailkelas['id_kelas']); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="id_mapel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-8">
                            <select name="id_mapel" id="id_mapel" class="form-control">
                                <option selected="selected" value="">-- Pilih Mata Pelajaran --</option>
                                <?php foreach ($mapel as $key) : ?>
                                    <option value="<?= $key['id_mapel']; ?>"><?= $key['mapel']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="id_ptk" class="col-sm-4 col-form-label">Guru Mapel</label>
                        <div class="col-sm-8">
                            <select name="id_ptk" id="id_ptk" class="form-control">
                                <option selected="selected" value="">-- Pilih Guru Mapel --</option>
                                <?php foreach ($ptk as $key) : ?>
                                    <option value="<?= $key['id_ptk']; ?>"><?= $key['nama_ptk']; ?></option>
                                <?php endforeach; ?>
                            </select>
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
    <!-- /.modal add-->

    <!-- /.modal edit-->
    <?php foreach ($mapel as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value['id_mapel'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header card-outline card-success">
                        <h4 class="modal-title"><?= $edit ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('walikelas/mapel/edit/' . $value['id_mapel']); ?>
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

                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td class="text-center"></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

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

    <!-- /.modal Delete-->
    <?php foreach ($kelas as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value['id_kelas'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header card-outline card-success">
                        <h4 class="modal-title"><?= $delete ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        Apakah anda yakin ingin menghapus data <br>
                        <b><?= $value['komp_keahlian'] ?> ??</b>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-warning btn-sm " data-dismiss="modal">Close</button>
                        <a href="<?= base_url('admin/kelas/delete/' . $value['id_kelas']); ?>" class="btn btn-primary btn-sm float-right">Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>