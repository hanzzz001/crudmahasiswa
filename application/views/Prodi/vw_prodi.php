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
                                <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambahP"
                                        class="btn btn-info mb-2">Tambah Prodi</a></div>
                                <div class="col-md-12">
                                    <?= $this->session->flashdata('message');?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Prodi</td>
                                                <td>Ruangan</td>
                                                <td>Jurusan</td>
                                                <td>Akreditasi</td>
                                                <td>Nama Kaprodi</td>
                                                <td>Tahun Berdiri</td>
                                                <td>Output lulusan</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($prodi as $us): ?>
                                                <tr>
                                                    <td>
                                                        <?= $i; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['nama']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['ruangan']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['jurusan']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['akreditasi']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['nama_kaprodi']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['tahun_berdiri']; ?>.
                                                    </td>
                                                    <td>
                                                        <?= $us['output_lulusan']; ?>.
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('prodi/hapus/') . $us['Id']; ?>"
                                                            class="badge badge-danger">Hapus</a>
                                                        <a href="<?= base_url('prodi/edit/') . $us['Id']; ?>"
                                                            class="badge badge-warning">Edit</a>
                                                        <a href="<?= base_url('Prodi/detail/') . $us['Id']; ?>"
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