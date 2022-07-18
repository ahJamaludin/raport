    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <br>
                            <div class="text-center">
                                <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" width="90%" height="90%">
                            </div>
                            <h3 class="profile-username text-center">
                                <B><?= session()->get('nama') ?></B>
                                <br>
                                <?= session()->get('username') ?>
                            </h3>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-success card-outline">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table class="table table-borderless">
                                <!-- <tr>
                                    <th width=200px>Nama</th>
                                    <th width=10px>:</th>
                                    <td><?= session()->get('nama') ?></td>
                                </tr> -->
                                <tr>
                                    <th width=150px>Nama</th>
                                    <th width=10px>:</th>
                                    <td><?= session()->get('nama') ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <td><?= session()->get('alamat') ?></td>
                                </tr>
                                <tr>
                                    <th>No Telphon</th>
                                    <th>:</th>
                                    <td><?= session()->get('telp') ?></td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <th>:</th>
                                    <td><?= session()->get('email') ?></td>
                                </tr>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->