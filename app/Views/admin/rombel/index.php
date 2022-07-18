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
                                        <th style="width: 30px">No</th>
                                        <th style="width: 140px">Tahun Angkatan</th>
                                        <th style="width: 90px">Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Wali Kelas</th>
                                        <th>Jumlah/Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $i = 1; ?>
                                    <?php foreach ($siswa as $key) :
                                        $jml = $db->table('siswa')
                                            ->where('id_siswa', $key['id_kelas'])
                                            ->countAllResults();

                                    ?>
                                        <tr>
                                            <td class="text-center "><?= $i++; ?></td>
                                            <td class="text-center ">
                                                <?php
                                                $str = $key['dt_tgl'];
                                                $explode = explode("-", $str);
                                                echo $explode[0]; //untuk tahun
                                                ?>
                                            </td>
                                            <td class="text-center "><?= $key['kode_kelas']; ?></td>
                                            <td><?= $key['komp_keahlian']; ?></td>
                                            <td></td>
                                            <td class="text-center ">
                                                <span class="badge badge-success right"><?= $jml ?></span>
                                                <br>
                                                <a href="<?= base_url('admin/rombel/anggota_rombel/' . $key['id_kelas']) ?>">Siswa</a>
                                            </td>
                                            <td class="text-center ">
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $key['id_kelas'] ?>"><i class="far fa-edit"></i></button>
                                                <a href="rombel/delete/<?= $key['id_kelas']; ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i></a>
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




    <!-- /.modal Delete-->
    <?php foreach ($siswa as $key => $value) { ?>
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
                        <a href="<?= base_url('admin/rombel/delete/' . $value['id_kelas']); ?>" class="btn btn-primary btn-sm float-right">Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>