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
                                <div class="col-md-4">
                                    <img src="<?php echo base_url('assets/images/profile/') . $user['gambar']; ?>"
                                        width="300px" height="300px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?= $user['nama'] ?>
                                        </h5>
                                        <p class="card-text">
                                            <?= $user['email'] ?>
                                        </p>
                                        <p class="card-text"><small class="text_muted">Anggota Sejak
                                                <?= date('d F Y', $user['data_created']); ?>
                                            </small></p>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class = "container-fluid">
    <h1 class = "h3 mb-4 text-gray-800"> </h1>
    <div class="row no-gutters">
        <div class = "col-md-4">
            <img src="<?php echo base_url('assets/images/profile/') . $user['gambar']; ?>" width= "300px" height= "300px">
        </div>
        <div class = "col-md-8">
            <div class = "card-body"> 
                <h5 class = "card-title"><?= $user['nama'] ?></h5>
                <p class = "card-text"><?= $user['email'] ?></p>
                <p class = "card-text"><small class="text_muted">Anggota Sejak<?= date('d F Y', $user['data_created']); ?></small></p>
            </div>
        </div>
    </div> -->