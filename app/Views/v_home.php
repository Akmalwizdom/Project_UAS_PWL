<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Header Section -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-2">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
                        <h3 class="font-weight-bold mb-0">Selamat Datang di Toko Kami!</h3>
                        <p class="mb-0">Temukan laptop terbaik untuk kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="row mb-5">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body m-2">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title mb-0">Produk Terbaru</h4>
                            <div class="d-flex align-items-center">
                                <div class="form-group mb-0" style="width: 250px;">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search...">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop1.jpg" alt="ASUS TUF A15" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">ASUS TUF A15 FA506NF</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 10.999.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop2.jpg" alt="Asus Vivobook" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">Asus Vivobook 14 A1404ZA</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 6.899.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 6.299.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 6.299.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 6.299.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                        <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
                                        <h4 class="text-primary font-weight-bold">Rp 6.299.000</h4>
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('components/footer') ?>
</div>
<?= $this->endSection() ?>