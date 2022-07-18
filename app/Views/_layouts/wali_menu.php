<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?= session()->get('nama') ?></a>
        </div>
    </div>

    <div class="row">
        <div class="btn-group col-12" role="group">
            <a href="<?= base_url('auth1') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-home"></i>
            </a>
            <a href="<?= base_url('auth1') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-cogs"></i><br>
            </a>
            <a href="<?= base_url('auth1/logout') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('walikelas/siswa/anggota_rombel/' . session()->get('rombel')) ?>" class="nav-link">
                        <i class="far fa-user nav-icon"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Referensi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/rombel/anggota_rombel/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rombel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/mapel/mapelkelas/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mapel Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/leger/anggota_rombel/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leger</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/rapor/raporSiswa/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rapor</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Penilaian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/c_academic/catatan_academic/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Catatan Akademik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/pkl/catatan_pkl/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Praktik Kerja Lapangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/eskul/n_eskul/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ekstrakurikuler</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/absensi/n_absensi/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ketidakhadiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/d_karakter/deskripsi_karakter/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Deskripsi Karakter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('walikelas/c_karakter/catatan_karakter/' . session()->get('rombel')) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Catatan Karakter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('wali/kenaikan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kenaikan Kelas</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>