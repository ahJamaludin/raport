    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tahun Pelajara : <?= $ta_aktif['tahun'] ?> - <?= $ta_aktif['smt'] ?></h1>
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
                                Wali Kelas : <?= session()->get('kelas') ?>
                                <br>
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
                        <br>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box bg-success">
                                        <span class="info-box-icon"><i class="fas fa-users"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Jumlah Siswa</span>
                                            <?= $jml_siswa ?>
                                            <span class="info-box-number">
                                            </span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                <a href="<?= base_url('walikelas/rombel/anggota_rombel/' . session()->get('rombel')) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box bg-success">
                                        <span class="info-box-icon"><i class="fas fa-clone"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Jumlah Siswa</span>
                                            <span class="info-box-number"></span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                <a href="<?= base_url('admin/jurusan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box bg-success">
                                        <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Rombel</span>
                                            <span class="info-box-number"></span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box bg-success">
                                        <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">PTK</span>
                                            <span class="info-box-number"></span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-description">
                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>


                            </div><!-- /.row -->



                            <!-- DONUT CHART -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Absensi</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div><!-- /.card-body -->
                            </div> <!-- /.card -->





                        </div><!-- /.container -->
                    </div><!-- /.card -->
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->