<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" <?= base_url('assets/') ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href=" <?= base_url('assets/') ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" <?= base_url('assets/') ?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" <?= base_url('assets/') ?>assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src=" <?= base_url('assets/') ?>assets/images/logo.svg">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" action="<?= base_url('auth/registrasi'); ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" value="<?= set_value('nama');?>" class="form-control form-control-lg"  name="nama" id="nama"
                                        placeholder="Nama Lengkap"><?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" value="<?= set_value('email');?>" class="form-control form-control-lg"  name="email" id="email"
                                        placeholder="Alamat Email"><?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" value="<?= set_value('password');?>" class="form-control form-control-lg"
                                        name="password" id="password1" placeholder="Password"><?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                    name="password" id="password2" placeholder="Confirm Password">
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> I agree to all Terms &
                                            Conditions </label>
                                    </div>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Sign Up</button>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="<?= base_url('Auth'); ?>" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=" <?= base_url('assets/') ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" <?= base_url('assets/') ?>assets/js/off-canvas.js"></script>
    <script src=" <?= base_url('assets/') ?>assets/js/hoverable-collapse.js"></script>
    <script src=" <?= base_url('assets/') ?>assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>