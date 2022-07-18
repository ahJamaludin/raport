    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title"></h3> -->
                <div class="card-tools">
                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-info float-right btn-sm"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Data Diri <?= $ptk['nama_ptk']; ?></h4>
                                <div class="post"></div>

                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="mb-3 row">
                                        <label for="niy" class="col-sm-2 col-form-label">NIY</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="niy" value=": <?= $ptk['niy']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="nuptk" value=": <?= $ptk['nuptk']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="nama_ptk" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="nama_ptk" value=": <?= $ptk['nama_ptk']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="t_lahir" class="col-sm-2 col-form-label">Tempat</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="t_lahir" value=": <?= $ptk['t_lahir']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="tgl_lahir" value=": <?= $ptk['tgl_lahir']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="jk" value=": <?= $ptk['jk']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="alamat" value=": <?= $ptk['alamat']; ?>">
                                        </div>
                                    </div>

                                    <!-- /.post -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?= $ptk['nama_ptk']; ?></h3> -->
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/assets/foto/ptk/' . $ptk['foto_ptk']); ?> " alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $ptk['nama_ptk']; ?></h3>

                        <p class="text-muted text-center"><?= $ptk['niy']; ?></p>
                        <br>

                        <div class="text-center mt-5 mb-3">
                            <a href="<?= base_url('admin/ptk/edit/' . $ptk['id_ptk']); ?>" class="btn btn-sm btn-primary"> Edit</a>
                            <a href="<?= base_url('admin/ptk/delete/' . $ptk['id_ptk']); ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"> Delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->