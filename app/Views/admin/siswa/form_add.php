    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">Tahun Pelajaran</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/siswa'); ?>"><?= $title ?></a></li>
                        <!-- <li class="breadcrumb-item active"></li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><?= $judul ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- <form action="" method="POST" enctype="multipart/form-data"> -->

                            <?= form_open_multipart('admin/siswa/insert'); ?>
                            <?= csrf_field(); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="nis" class="col-sm-6 col-form-label">NIS</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="nis" id="nis" class="form-control " placeholder="NIS" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="nis" class="col-sm-2 col-form-label">NISN</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nisn" id="nisn" class="form-control " placeholder="NISN">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama_siswa" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control " placeholder="Nama Siswa" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="1" value="1" required>
                                                <label class="form-check-label" for="1" <?= 'checked'; ?>>
                                                    Laki-laki
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="2" value="2" required>
                                                <label class="form-check-label" for="p" <?= 'checked'; ?>>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="t_lahir" id="t_lahir" class="form-control " placeholder="Tempat Lahir" required>
                                        </div>
                                        <div class="col">
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alm_siswa" id="alm_siswa" class="form-control " placeholder="Alamat" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- text input -->
                                    <div class="form-group">


                                        <div class="mb-3 row">
                                            <label for="dt_tgl" class="col-sm-4 col-form-label">Tanggal Masuk</label>
                                            <div class="col-sm-3">
                                                <input type="date" name="dt_tgl" id="dt_tgl" class="form-control" placeholder="Tanggal Masuk" required>
                                            </div>
                                            <label for="id_kelas" class="col-sm-1 col-form-label">Kelas</label>
                                            <div class="col-sm-4">
                                                <select name="id_kelas" id="id_kelas" class="form-control">
                                                    <option selected="selected" value="">-- Pilih Kelas --</option>
                                                    <?php foreach ($kelas as $key) : ?>
                                                        <option value="<?= $key['id_kelas']; ?>"><?= $key['kode_kelas']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="id_keahlian" class="col-sm-4 col-form-label">Kompetensi Keahlian</label>
                                            <div class="col-sm-8">
                                                <select name="id_keahlian" id="id_keahlian" class="form-control">
                                                    <option selected="selected" value="">-- Pilih Kompetensi Keahlian --</option>
                                                    <?php foreach ($jurusan as $key) : ?>
                                                        <option value="<?= $key['id_keahlian']; ?>"><?= $key['komp_keahlian']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="skl_asal" class="col-sm-4 col-form-label">Sekolah Asal</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="skl_asal" id="skl_asal" class="form-control" placeholder="Sekolah Asal" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Foto Siswa</label>
                                            <div class="col-sm-8">
                                                <div class="custom-file">
                                                    <input type="file" name="foto_siswa" id="#preview_gambar" class="form-control">
                                                    <!-- <label class="custom-file-label">Pilih Gambar</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <img src="<?= base_url('public/assets/foto/siswa/avatar.png') ?>" id="#gambar_load" width="200px">
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <a href="<?= base_url('admin/siswa') ?>" type="submit" class="btn btn-info"><i class="fas fa-reply"></i> Back</a>
                            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Save</button>
                            <!-- </form> -->
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->