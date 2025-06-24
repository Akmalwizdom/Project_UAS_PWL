<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url()?>corona/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url()?>corona/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        <?= $this->include('components/sidebar') ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            <?= $this->include('components/header') ?>
        <!-- partial -->
            <?= $this->renderSection('content') ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            <?= $this->include('components/footer') ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url()?>corona/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url()?>corona/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="<?= base_url()?>corona/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url()?>corona/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url()?>corona/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url()?>corona/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>corona/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url()?>corona/assets/js/off-canvas.js"></script>
    <script src="<?= base_url()?>corona/assets/js/misc.js"></script>
    <script src="<?= base_url()?>corona/assets/js/settings.js"></script>
    <script src="<?= base_url()?>corona/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url()?>corona/assets/js/proBanner.js"></script>
    <script src="<?= base_url()?>corona/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>