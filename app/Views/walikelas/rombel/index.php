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

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr class="text-center bg-success">
                                        <th style="width: 30px">No</th>
                                        <th style="width: 300px">NIS/NISN</th>
                                        <th>Nama Siswa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rombelkelas as $key) : ?>
                                        <?php if ($kelas['id_kelas'] == $key['id_kelas']) { ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td class="text-center"><?= $key['nis']; ?>/</td>
                                                <td><?= $key['nama_siswa']; ?></td>
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