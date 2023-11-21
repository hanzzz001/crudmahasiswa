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
    <!-- partial: <?= base_url('assets/') ?>partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=" <?= base_url('assets/') ?>index.html"><img
            src=" <?= base_url('assets/') ?>assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=" <?= base_url('assets/') ?>index.html"><img
            src=" <?= base_url('assets/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-profile-img">
                <img src=" <?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="image">
                <!-- <span class="availability-status online"></span> -->
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">
                  <?= $user['nama']; ?>
                </p>
              </div>
            </a>
          <li class="nav-item nav-settings d-none d-lg-block">
            <div class="col-md-6"><a href="<?= base_url('auth/logout') ?>" class="btn btn-danger mb-2">Log-Out</a>
            </div>
            <div class="col-md-12">
              </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial: <?= base_url('assets/') ?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src=" <?= base_url('assets/') ?>assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">BPF 1</span>
                <span class="text-secondary text-small">CRUD</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" <?= base_url('assets/') ?>index.html">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <?php if ($user['role'] == 'Admin') { ?>
            <li class="nav-item">
              <a class="nav-link collapsed" href="<?= site_url('Mahasiswa/') ?>">
                <i class="fas fa-fw fa-users"></i> <span>Mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="<?= site_url('Prodi/') ?>">
                <i class="fa fa-fw fa-users"></i> <span>Prodi</span>
              </a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link collapsed" href="<?= site_url('Profil/') ?>">
                <i class="fas fa-fw fa-users"></i> <span>Profil</span>
              </a>
            </li>
          <?php } ?>

          <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('Auth/logout') ?>">
              <i class="fas fa-fw fa-users"></i> <span>Logout</span>
            </a>
          </li>

          </li>
        </ul>
      </nav>