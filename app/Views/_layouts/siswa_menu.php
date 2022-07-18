<div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <!-- Left navbar links -->
    <ul class="navbar-nav font-color-white">
        <!-- <li class="nav-item">
            <a href=""><h3>SMK Terepadu Hadziqiyyah </h3></a>
        </li> -->
        <li class="nav-item">
            <a href="<?= base_url('siswa/datadiri/' . session()->get('id_siswa')); ?>" class="nav-link">Data Siswa</a>
        </li>
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Nilai</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li>
                    <a href="<?= base_url('siswa/nilai/nilai_academik/' . session()->get('id_siswa')) ?>" class="nav-link">Nilai Academik</a>
                </li>
                <li>
                    <a href="<?= base_url('siswa/nilai/nilai_karakter/' . session()->get('id_siswa')) ?>" class="nav-link">Nilai Karakter</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Keterangan</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li>
                    <a href="<?= base_url('siswa/keterangan/pindah_masuk/' . session()->get('id_siswa')) ?>" class="nav-link">Masuk</a>
                </li>
                <li>
                    <a href="<?= base_url('siswa/keterangan/pindah_keluar/' . session()->get('id_siswa')) ?>" class="nav-link">Keluar</a>
                </li>
                <li>
                    <a href="<?= base_url('siswa/keterangan/catatan_prestasi/' . session()->get('id_siswa')) ?>" class="nav-link">Prestasi</a>
                </li>
            </ul>
        </li>

    </ul>

</div>