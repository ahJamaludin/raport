<?= $this->extend('_layouts/siswa_layout'); ?>

<?= $this->Section('contents'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Tahun Pelajara : <?= $ta_aktif['tahun'] ?> - <?= $ta_aktif['smt'] ?>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Absensi</li>
                </ol> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->

<!-- /.content -->

<?= $this->endSection(); ?>