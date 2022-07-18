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
                                        <th>Mata Pelajaran</th>
                                        <th style="width: 300px">Kelas</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $i = 1; ?>
                                    <?php foreach ($mapelkelas as $key) :
                                        $jml = $db->table('siswa')
                                        //     ->where('id_kelas', $key['id_kelas'])
                                        //     ->countAllResults();
                                    ?>
                                        <?php if ($detailmapel['id_mapel'] == $key['id_mapel']) { ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td><?= $key['mapel']; ?></td>
                                                <td class="text-center"><?= $key['kode_kelas']; ?></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('guru/nilai/nilaikelas/' . $key['id_mapelkelas']); ?>" class="btn btn-success btn-sm">
                                                        <i class="fas fa-book-open"></i>
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
                    <?= form_open(''); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="id_mapel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-8">
                            <select name="id_mapel" id="id_mapel" class="form-control">
                                <option selected="selected" value="">-- Pilih Mata Pelajaran --</option>

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="id_ptk" class="col-sm-4 col-form-label">Guru Mapel</label>
                        <div class="col-sm-8">
                            <select name="id_ptk" id="id_ptk" class="form-control">
                                <option selected="selected" value="">-- Pilih Guru Mapel --</option>

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