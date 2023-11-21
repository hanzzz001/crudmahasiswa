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
                            <form action="<?= base_url('presiden/update'); ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $presiden['Id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="<?= $presiden['nama_lengkap']; ?>"
                                        class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIK</label>
                                    <input type="text" name="nim" value="<?= $presiden['nik']; ?>" class="form-control"
                                        id="nim" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Asal</label>
                                    <input type="text" name="asal" value="<?= $presiden['asal']; ?>"
                                        class="form-control" id="asal" placeholder="Asal">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Partai Pendukung</label>
                                    <input type="text" name="partai_pendukung" value="<?= $presiden['partai_pendukung']; ?>" class="form-control"
                                        id="nim" placeholder="partai_pendukung">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Riwayat Pekerjaan</label>
                                    <input type="text" name="riwayat_pekerjaan" value="<?= $presiden['riwayat_pekerjaan']; ?>"
                                        class="form-control" id="riwayat_pekerjaan" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Umur</label>
                                    <input type="text" name="umur" value="<?= $presiden['umur']; ?>" class="form-control"
                                        id="umur" placeholder="Umur">
                                </div>
                                <a href="<?= base_url('presiden') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Calon</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- 