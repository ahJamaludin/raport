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
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Info boxes -->
                <div class="card card-outline card-success">
                    <!-- <div class="card-header"> -->
                    <!-- <h3 class="card-title"><?= $judul ?></h3>

                        <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add
                            </button>
                        </div>/.card-tools -->
                    <!-- </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th withd="50px">Nama Peserta Didik</th>
                                <th withd="10px">:</th>
                                <td><?= session()->get('nama'); ?></td>
                                <th withd="100px">Kelas</th>
                                <th withd="10px">:</th>
                                <td><?= session()->get('kelas'); ?>/<?= session()->get('jurusan'); ?></td>
                            </tr>
                            <tr>
                                <th withd="50px">NIS/NISN</th>
                                <th withd="10px">:</th>
                                <td><?= session()->get('nis'); ?>/<?= session()->get('username'); ?></td>
                                <th withd="100px">Semester</th>
                                <th withd="10px">: </th>
                                <td><?= $ta_aktif['smt'] ?></td>
                            </tr>
                        </table>

                        <table class="table table-bordered ">
                            <thead>
                                <tr class="text-center bg-success">
                                    <th style="width: 30px">No</th>
                                    <th style="width: 300px">Mata Pelajaran</th>
                                    <th style="width: 100px">Pengetahuan</th>
                                    <th style="width: 100px">Ketrampilan</th>
                                    <th style="width: 100px">Nilai Akhir</th>
                                    <th style="width: 100px">Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                $db = \Config\Database::connect()
                                ?>
                                <?php foreach ($rombelmapel as $key) :
                                    $mapelkelas = $db->table('rombel_mapel')
                                        ->get()->getRowArray()
                                ?>
                                    <?php if ($detailsiswa['id_siswa'] == $key['id_siswa']) { ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><?= $key['mapel'] ?></td>
                                            <td class="text-center"><?= $mapelkelas['pengetahuan'] ?></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                        </tr>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>