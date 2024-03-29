<?= $this->extend('_layouts/siswa_layout'); ?>

<?= $this->Section('contents'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-success card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/assets/foto/siswa/' . session()->get('foto')) ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= session()->get('nama') ?> | <?= session()->get('username') ?></h3>

                        <p class="text-muted text-center"><?= session()->get('komp_keahlian') ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Data Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table class="table table-borderless">
                            <tr>
                                <th width=200px>Kompetensi Keahlian</th>
                                <th width=10px>:</th>
                                <td><?= session()->get('nama') ?></td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <th>:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>No Telphon</th>
                                <th>:</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <th>:</th>
                                <th></th>
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

<?= $this->endSection(); ?>