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
                        <p class="mb-0">Temukan jam tangan terbaik untuk kebutuhan Anda.</p>
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
                            <?php foreach ($product as $key => $item) : ?>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img src="<?php echo base_url() . 'img/' . $item['foto']; ?>" alt="<?php echo $item['nama']; ?>" class="img-fluid mb-3" style="max-height: 200px; border-radius: 8px;">
                                            <h5 class="card-title"><?php echo $item['nama']; ?></h5>
                                            <h4 class="text-primary font-weight-bold">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></h4>
                                            <button class="btn btn-primary btn-rounded">
                                                <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('components/footer') ?>
</div>
<?= $this->endSection() ?>