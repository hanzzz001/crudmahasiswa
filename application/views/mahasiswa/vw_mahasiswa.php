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
                                <div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah"
                                        class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
                                <div class="col-md-12">
                                    <?= $this->session->flashdata('message');?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama</td>
                                                <td>Nim</td>
                                                <td>Email</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($mahasiswa as $us): ?>
                                                <tr>
                                                    <td>
                                                        <?= $i; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $us['nim']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $us['email']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('mahasiswa/hapus/') . $us['Id']; ?>"
                                                            class="badge badge-danger">Hapus</a>
                                                        <a href="<?= base_url('mahasiswa/edit/') . $us['Id']; ?>"
                                                            class="badge badge-warning">Edit</a>
                                                        <a href="<?= base_url('mahasiswa/detail/') . $us['Id']; ?>"
                                                            class="badge badge-info">Detail</a>
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