<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="card-body">
                            <form action="<?= base_url('presiden/upload'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="NIM">
                                </div>
                                <div class="form-group">
                                    <label for="email">Asal</label>
                                    <input type="text" name="asal" class="form-control" id="asal" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Partai Pendukung</label>
                                    <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Riwayat Pekerjaan</label>
                                    <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Umur</label>
                                    <input type="text" name="umur" class="form-control" id="umur"
                                        placeholder="Asal Sekolah">
                                </div>
                                
                                <a href="<?= base_url('mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Calon</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- 