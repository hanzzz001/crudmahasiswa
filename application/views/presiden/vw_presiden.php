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
                            <div class="row">
                                <div class="col-md-6"><a href="<?= base_url() ?>Presiden/tambah"
                                        class="btn btn-info mb-2">Tambah Calon Presiden</a></div>
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Lengkap</td>
                                                <td>Nik</td>
                                                <td>Asal</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($presiden as $us): ?>
                                                <tr>
                                                    <td><?= $i; ?>.</td>
                                                    <td><?= $us['nama_lengkap']; ?></td>
                                                    <td><?= $us['nik']; ?></td>
                                                    <td> <?= $us['asal']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('presiden/hapus/') . $us['Id']; ?> "class="badge badge-danger">Hapus</a>
                                                        <a href="<?= base_url('presiden/edit/') . $us['Id']; ?> "class="badge badge-warning">Edit</a>
                                                        <a href="<?= base_url('presiden/detail/') . $us['Id']; ?> "class="badge badge-info">Detail</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>