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
            <a href="<?= base_url('auth') ?>" type="button" class="btn btn-secondary col-4">
                <i class="fas fa-home"></i>
            </a>
            <a href="<?= base_url('auth') ?>" type="button" class="btn btn-secondary col-4">
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
                    <a href="<?= base_url('guru/dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('guru/nilai/nilai_mapel/' . session()->get('id_ptk')) ?>" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Nilai
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>