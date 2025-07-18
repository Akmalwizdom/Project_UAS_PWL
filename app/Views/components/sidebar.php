<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url() ?>corona/dist/assets/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url() ?>corona/dist/assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
              <img class="img-xs rounded-circle " src="<?= base_url() ?>corona/dist/assets/images/faces/face15.jpg" alt=""> 
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h4 class="mb-0 font-weight-normal"><?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</h4>
            <span></span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-cog text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
        <span class="menu-icon">
          <i class="mdi mdi-home"></i>
        </span>
        <span class="menu-title">Home</span>
      </a>
    </li><!-- End Home Nav -->
    <li class="nav-item menu-items">
      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
        <span class="menu-icon">
          <i class="mdi mdi-cart"></i>
        </span>
        <span class="menu-title">Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->
    <?php
    if (session()->get('role') == 'admin') {
    ?>
      <li class="nav-item menu-items">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
          <span class="menu-icon">
            <i class="mdi mdi-package-variant-closed"></i>
          </span>
          <span class="menu-title">Produk</span>
        </a>
      </li><!-- End Produk Nav -->
    <?php
    }
    ?>
  </ul>
</nav>
<!-- partial -->