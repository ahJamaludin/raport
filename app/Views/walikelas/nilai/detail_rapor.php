<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $judul ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container">
        <!-- <table class="table table-borderless"> -->
        <table class="table">
            <tr>
                <td withd="5px">1.</td>
                <td withd="20px">Nama Peserta didik (Lengkap)</td>
                <td withd="10px">:</td>
                <td withd="300px"><?= $siswa['nama_siswa'] ?></td>
            </tr>
            <tr>
                <td withd="5px">2.</td>
                <td withd="20px">Nomor Induk/NISN</td>
                <td withd="10px">:</td>
                <td withd="300px"><?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?></td>
            </tr>
        </table>

        <br>


        <div class="row">
            <div class="col-sm-1">
                1.
            </div><!-- /.col -->
            <div class="col-sm-3">
                Nama Peserta didik (Lengkap)
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                2. Nomor Induk/NISN
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                3. Tempat, Tanggal Lahir
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['t_lahir'] ?>, <?= $siswa['tgl_lahir'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                4. Jenis Kelamin
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?php if ($siswa['jk'] == 1) {
                        echo 'Laki-Laki';
                    } elseif ($siswa['jk'] == 2) {
                        echo ' Perempuan';
                    } ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                5. Agama/Kepercayaan
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['agama'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                6. Status dalam Keluarga
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['st_keluarga'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                7. Anak ke
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['anak_ke'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                8. Alamat Peserta didik
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['alm_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                9. Nomor Telepon Rumah
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['tlp_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">
                10. Sekolah Asal
            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['skl_asal'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nama_siswa'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">
                : <?= $siswa['nis'] ?>/<?= $siswa['nisn'] ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-8">

            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
    <!--/. container -->
</section>
<!-- /.content -->