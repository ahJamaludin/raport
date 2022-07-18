    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('walikelas/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
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
                            <!-- <h3 class="card-title"><?= $judul ?></h3> -->
                            <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>
                            <a href="<?= base_url('./walikelas/siswa/add') ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus-square"></i> Data Siswa
                            </a>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover table-sm">
                                <thead>
                                    <tr class="text-center bg-success">
                                        <!-- <th style="width: 10px">No</th> -->
                                        <th>Foto Siswa</th>
                                        <th style="width: 90px">NIS</th>
                                        <th style="width: 150px">NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Juruasan</th>
                                        <th>Tahun Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($siswa as $key) : ?>
                                        <?php if ($kelas['id_keahlian'] == $key['id_keahlian']) { ?>
                                            <tr>
                                                <!-- <td><?= $i++; ?></td> -->
                                                <td class="text-center"><a href="<?= base_url('walikelas/siswa/view/' . $key['id_siswa']); ?>"><img src="<?= base_url('public/assets/foto/siswa/' . $key['foto_siswa']) ?>" class="img-circle elevation-2" alt="User Image" width="50px"></a></td>
                                                <td class="text-center"><?= $key['nis']; ?></td>
                                                <td class="text-center"><?= $key['nisn']; ?></td>
                                                <td><?= $key['nama_siswa']; ?></td>
                                                <td class="text-center"><?= $key['kode_kelas']; ?></td>
                                                <td><?= $key['komp_keahlian']; ?></td>
                                                <!-- <td class="text-center"></td> -->
                                                <td class="text-center">
                                                    <?php
                                                    $str = $key['dt_tgl'];
                                                    $explode = explode("-", $str);
                                                    echo $explode[0]; //untuk tahun
                                                    // echo $explode[1]; //untuk bulan
                                                    // echo $explode[2]; //untuk tanggal
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
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
                    <?= form_open('admin/kelas/add_anggota_rombel'); ?>
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
                            <?php foreach ($siswa_tpk as $key) : ?>
                                <?php if ($kelas['id_keahlian'] == $key['id_keahlian']) { ?>

                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $key['nis']; ?>/<?= $key['nisn']; ?></td>
                                        <td><?= $key['nama_siswa']; ?></td>
                                        <td><?= $key['komp_keahlian']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('walikelas/siswa/add_anggota_rombel/' . $key['id_siswa'] . '/' . $kelas['id_kelas']); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
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