<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url('public/assets/foto/user/' . session()->get('foto')) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?= session()->get('nama') ?></a>
        </div>
    </div>

    <div class="row">
        <div class="btn-group col-12" role="group">
            <a href="<?= base_url('auth') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-home"></i>
            </a>
            <a href="<?= base_url('admin/admin') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-cogs"></i><br>
            </a>
            <a href="<?= base_url('auth/logout') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/tahun') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tahun Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/jurusan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/mapel') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mapel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kelas') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/ptk') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PTK</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/siswa') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Akademik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('admin/walikelas') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Wali Kelas</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kelas/rombel') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rombel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/mapelkelas') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mapel Kelas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/tahun/setting') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tahun Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/user') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/user/user_wali') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Wali Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/user/user_ptk') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/user/user_siswa') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Siswa</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>



        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>