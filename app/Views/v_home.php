<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">

        <!-- Flash Message -->
        <?php if (session()->getFlashData('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-circle me-2"></i>
                <?= session()->getFlashData('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-primary text-white">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-3">
                                        <li class="breadcrumb-item">
                                            <a href="#" class="text-white-50 text-decoration-none">
                                                <i class="mdi mdi-home me-1"></i>Home
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                                <h2 class="fw-bold mb-2">
                                    <i class="mdi mdi-watch me-2"></i>
                                    Selamat Datang di Toko Jam Kami!
                                </h2>
                                <p class="mb-0 fs-6">Temukan koleksi jam tangan terbaik dengan kualitas premium dan desain elegan untuk melengkapi gaya hidup Anda.</p>
                            </div>
                            <div class="col-md-4 text-end d-none d-md-block">
                                <i class="mdi mdi-watch" style="font-size: 4rem; opacity: 0.3;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3 col-6">
                <div class="card text-center">
                    <div class="card-body py-3">
                        <i class="mdi mdi-check-circle text-success fs-2"></i>
                        <h6 class="mt-2 mb-0">Kualitas Terjamin</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card text-center">
                    <div class="card-body py-3">
                        <i class="mdi mdi-truck-delivery text-info fs-2"></i>
                        <h6 class="mt-2 mb-0">Pengiriman Cepat</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card text-center">
                    <div class="card-body py-3">
                        <i class="mdi mdi-shield-check text-warning fs-2"></i>
                        <h6 class="mt-2 mb-0">Garansi Resmi</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card text-center">
                    <div class="card-body py-3">
                        <i class="mdi mdi-headphones text-danger fs-2"></i>
                        <h6 class="mt-2 mb-0">Support 24/7</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="card-title mb-1 fw-bold">
                                    <i class="mdi mdi-star-circle text-warning me-2"></i>
                                    Produk Terbaru
                                </h4>
                                <small class="text-muted">Koleksi jam tangan pilihan terbaik</small>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
                                    <div class="input-group" style="max-width: 300px;">
                                        <span class="input-group-text bg-white border-end-0">
                                            <i class="mdi mdi-magnify text-muted"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Cari produk...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">


                        <!-- Product Grid -->
                        <div class="row g-4">
                            <?php foreach ($product as $key => $item) : ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 shadow-sm border-0">
                                        
                                        <!-- Product Image -->
                                        <div class="position-relative">
                                            <img src="<?= base_url('img/' . $item['foto']) ?>" 
                                                 alt="<?= $item['nama'] ?>" 
                                                 class="card-img-top"
                                                 style="height: auto; object-fit: cover;">
                                            
                                            <!-- Badge -->
                                            <span class="position-absolute top-0 start-0 m-2 badge bg-success">Terbaru</span>
                                            
                                            <!-- Quick Action -->
                                            <div class="position-absolute top-0 end-0 m-2">
                                                <button class="btn btn-light btn-sm rounded-circle" 
                                                        data-bs-toggle="tooltip" 
                                                        title="Lihat Detail">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Product Info -->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title fw-bold mb-2 text-truncate">
                                                    <?= $item['nama'] ?>
                                                </h5>
                                                
                                                <!-- Rating -->
                                                <div class="mb-2">
                                                    <span class="text-warning">
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </span>
                                                    <small class="text-muted ms-1">(4.0)</small>
                                                </div>

                                                <!-- Price -->
                                                <div class="mb-3">
                                                    <h4 class="text-primary fw-bold mb-1">
                                                        Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                                                    </h4>
                                                    <small class="text-muted">
                                                        <i class="mdi mdi-tag me-1"></i>Harga terbaik
                                                    </small>
                                                </div>

                                                <!-- Features -->
                                                <div class="mb-3">
                                                    <small class="text-muted d-block">
                                                        <i class="mdi mdi-check-circle text-success me-1"></i>Garansi Resmi
                                                    </small>
                                                    <small class="text-muted d-block">
                                                        <i class="mdi mdi-truck text-info me-1"></i>Gratis Ongkir
                                                    </small>
                                                </div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <?= form_open('keranjang') ?>
                                            <?= form_hidden('id', $item['id']) ?>
                                            <?= form_hidden('nama', $item['nama']) ?>
                                            <?= form_hidden('harga', $item['harga']) ?>
                                            <?= form_hidden('foto', $item['foto']) ?>
                                            
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="mdi mdi-cart-plus me-2"></i>
                                                    Tambah ke Keranjang
                                                </button>
                                                <div class="row g-2">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm w-100">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-outline-info btn-sm w-100">
                                                            <i class="mdi mdi-share-variant"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>

                        <!-- Load More Section -->
                        <div class="text-center mt-5">
                            <div class="mb-3">
                                <small class="text-muted">Menampilkan <?= count($product) ?> dari 50+ produk</small>
                            </div>
                            <button class="btn btn-outline-primary px-4">
                                <i class="mdi mdi-reload me-2"></i>
                                Muat Lebih Banyak Produk
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card bg-info text-white">
                    <div class="card-body text-center py-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <i class="mdi mdi-email-newsletter display-4 mb-3"></i>
                                <h4 class="fw-bold mb-3">Dapatkan Penawaran Terbaik</h4>
                                <p class="mb-4 fs-6">Berlangganan newsletter kami untuk mendapatkan update produk terbaru, penawaran spesial, dan tips perawatan jam tangan</p>
                                
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="email" class="form-control form-control-lg" placeholder="Masukkan email Anda">
                                            <button class="btn btn-light btn-lg fw-bold text-info" type="button">
                                                <i class="mdi mdi-send me-2"></i>Berlangganan
                                            </button>
                                        </div>
                                        <small class="d-block mt-2 opacity-75">
                                            <i class="mdi mdi-shield-check me-1"></i>
                                            Email Anda aman bersama kami
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Highlights -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card border-0 text-center h-100">
                    <div class="card-body">
                        <div class="text-primary mb-3">
                            <i class="mdi mdi-medal display-4"></i>
                        </div>
                        <h5 class="fw-bold">Kualitas Premium</h5>
                        <p class="text-muted">Setiap jam tangan telah melalui quality control ketat untuk memastikan kualitas terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center h-100">
                    <div class="card-body">
                        <div class="text-success mb-3">
                            <i class="mdi mdi-currency-usd display-4"></i>
                        </div>
                        <h5 class="fw-bold">Harga Terjangkau</h5>
                        <p class="text-muted">Dapatkan jam tangan berkualitas dengan harga yang kompetitif dan berbagai pilihan cicilan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center h-100">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="mdi mdi-account-heart display-4"></i>
                        </div>
                        <h5 class="fw-bold">Pelayanan Terbaik</h5>
                        <p class="text-muted">Tim customer service yang siap membantu Anda 24/7 dengan pelayanan yang ramah dan profesional</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?= $this->include('components/footer') ?>
</div>

<?= $this->endSection() ?>