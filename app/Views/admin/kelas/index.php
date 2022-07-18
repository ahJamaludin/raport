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
                        <li class="breadcrumb-item active"><?= $title ?></li>
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

                            <table id="example1" class="table table-bordered table-hover table-sm">
                                <thead>
                                    <tr class="text-center bg-success">
                                        <th style="width: 40px">No</th>
                                        <th style="width: 100px">Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th style="width: 400px">Wali Kelas</th>
                                        <th>Tahun Angkatan</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $i = 1; ?>
                                    <?php foreach ($kelas as $key) :
                                        // $jml = $db->table('siswa')
                                        //     ->where('id_kelas', $key['id_kelas'])
                                        //     ->countAllResults();
                                    ?>
                                        <tr>
                                            <td class="text-center "><?= $i++; ?></td>
                                            <td class="text-center "><?= $key['kode_kelas']; ?></td>
                                            <td><?= $key['komp_keahlian']; ?></td>
                                            <td><?= $key['nama_ptk']; ?></td>
                                            <td class="text-center "><?= $key['tahun_angkatan']; ?></td>
                                            <td class="text-center ">
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $key['id_kelas'] ?>"><i class="far fa-edit"></i></button>
                                                <a href="kelas/delete/<?= $key['id_kelas']; ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
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
                    <?= form_open('admin/kelas/add'); ?>
                    <?= csrf_field(); ?>

                    <div class="mb-3 row">
                        <label for="nama_kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <select name="nama_kelas" id="nama_kelas" class="form-control">
                                <option selected="selected" value="">-- Pilih Kelas -- </option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kode_kelas" class="col-sm-4 col-form-label">Kode Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" value="<?= old('kode_kelas'); ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="id_keahlian" class="col-sm-4 col-form-label">Kompetensi Keahlian</label>
                        <div class="col-sm-8">
                            <select name="id_keahlian" id="id_keahlian" class="form-control">
                                <option selected="selected" value="">-- Pilih Kompetensi Keahlian --</option>
                                <?php foreach ($jurusan as $key) : ?>
                                    <option value="<?= $key['id_keahlian']; ?>"><?= $key['komp_keahlian']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="id_ptk" class="col-sm-4 col-form-label">Wali Kelas</label>
                        <div class="col-sm-8">
                            <select name="id_ptk" id="id_ptk" class="form-control">
                                <option selected="selected" value="">-- Pilih Wali Kelas --</option>
                                <?php foreach ($ptk as $key) : ?>
                                    <option value="<?= $key['id_ptk']; ?>"><?= $key['nama_ptk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="id_ta" class="col-sm-4 col-form-label">Tahun Angkatan</label>
                        <div class="col-sm-8">
                            <select name="id_ta" id="id_ta" class="form-control">
                                <option selected="selected" value="">-- Pilih Tahun Angkatan --</option>
                                <?php foreach ($ta as $key) : ?>
                                    <option value="<?= $key['id_ta']; ?>"><?= $key['tahun_angkatan']; ?></option>
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


    <!-- /.modal edit-->
    <?php foreach ($kelas as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value['id_kelas'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header card-outline card-success">
                        <h4 class="modal-title"><?= $edit ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('admin/kelas/edit/' . $value['id_kelas']); ?>
                        <?= csrf_field(); ?>

                        <div class="mb-3 row">
                            <label for="nama_kelas" class="col-sm-4 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <select name="nama_kelas" id="nama_kelas" class="form-control">
                                    <option selected="selected" value="">-- Pilih Kelas -- </option>
                                    <option value="X" <?php if ($value['nama_kelas'] == 'X') {
                                                            echo 'Selected';
                                                        } ?>>X</option>
                                    <option value="X" <?php if ($value['nama_kelas'] == 'XI') {
                                                            echo 'Selected';
                                                        } ?>>XI</option>
                                    <option value="X" <?php if ($value['nama_kelas'] == 'XII') {
                                                            echo 'Selected';
                                                        } ?>>XII</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kode_kelas" class="col-sm-4 col-form-label">Kode Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" value="<?= $value['kode_kelas']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="id_keahlian" class="col-sm-4 col-form-label">Kompetensi Keahlian</label>
                            <div class="col-sm-8">
                                <select name="id_keahlian" id="id_keahlian" class="form-control">
                                    <option selected="selected" value="<?= $value['id_keahlian']; ?>"><?= $value['komp_keahlian']; ?></option>
                                    <?php foreach ($jurusan as $key) : ?>
                                        <option value="<?= $key['id_keahlian']; ?>"><?= $key['komp_keahlian']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="id_ptk" class="col-sm-4 col-form-label">Wali Kelas</label>
                            <div class="col-sm-8">
                                <select name="id_ptk" id="id_ptk" class="form-control">
                                    <option selected="selected" value="<?= $value['id_ptk']; ?>"><?= $value['nama_ptk']; ?></option>
                                    <?php foreach ($ptk as $key) : ?>
                                        <option value="<?= $key['id_ptk']; ?>"><?= $key['nama_ptk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="id_ta" class="col-sm-4 col-form-label">Tahun Angkatan</label>
                            <div class="col-sm-8">
                                <select name="id_ta" id="id_ta" class="form-control">
                                    <option selected="selected" value="<?= $value['id_ta']; ?>"><?= $value['tahun_angkatan']; ?></option>
                                    <?php foreach ($ta as $key) : ?>
                                        <option value="<?= $key['id_ta']; ?>"><?= $key['tahun_angkatan']; ?></option>
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