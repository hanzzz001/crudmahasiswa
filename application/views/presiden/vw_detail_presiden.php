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
                                    Detail Calon Presiden
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?= $presiden['nama_lengkap']; ?>
                                    </h2>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?= $presiden['nik']; ?>
                                    </h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Asal</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $presiden['asal']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Partai Pendukung</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $presiden['partai_pendukung']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Riwayat Pekerjaan</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $presiden['riwayat_pekerjaan']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Umur</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $presiden['umur']; ?>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="<?= base_url('index.php/Presiden') ?>" class="btn 
                btn-danger">Tutup</a>
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>