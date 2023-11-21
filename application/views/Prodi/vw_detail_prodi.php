<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample">
                        <div class="container-fluid">
                            <h1 class="h3 mb-4 text-gray-800">
                                <?php echo $judul; ?>
                            </h1>
                            <form action="">
                                <div class="card-header">
                                    Detail Prodi
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?= $Prodi['nama']; ?>
                                    </h2>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?= $Prodi['ruangan']; ?>
                                    </h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Jurusan</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $Prodi['jurusan']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Akreditasi</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $Prodi['akreditasi']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Nama Kaprodi</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $Prodi['nama_kaprodi']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Tahun Berdiri</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $Prodi['tahun_berdiri']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Output Lulusan</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $Prodi['output_lulusan']; ?>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn 
                btn-danger">Tutup</a>
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>