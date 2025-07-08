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
                                                <button class="btn btn-light btn-sm rounded-circle btn-detail" 
                                                        data-bs-toggle="tooltip" 
                                                        title="Lihat Detail"
                                                        data-id="<?= $item['id'] ?>"
                                                        data-nama="<?= $item['nama'] ?>"
                                                        data-harga="<?= $item['harga'] ?>"
                                                        data-foto="<?= $item['foto'] ?>">
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

<!-- Modal Detail Produk -->
<div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="productDetailModalLabel">
                    <i class="mdi mdi-watch me-2 text-primary"></i>
                    Detail Produk
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <!-- Product Image -->
                    <div class="col-md-6">
                        <div class="position-relative">
                            <img id="modalProductImage" 
                                 src="" 
                                 alt="" 
                                 class="img-fluid rounded shadow-sm w-100"
                                 style="height: auto; object-fit: cover;">
                            <span class="position-absolute top-0 start-0 m-2 badge bg-success">Terbaru</span>
                        </div>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="col-md-6">
                        <div class="h-100 d-flex flex-column">
                            <h4 id="modalProductName" class="fw-bold mb-3"></h4>
                            
                            <!-- Rating -->
                            <div class="mb-3">
                                <span class="text-warning">
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                </span>
                                <small class="text-muted ms-1">(4.0) • 127 ulasan</small>
                            </div>
                            
                            <!-- Price -->
                            <div class="mb-4">
                                <h3 id="modalProductPrice" class="text-primary fw-bold mb-1"></h3>
                                <small class="text-muted">
                                    <i class="mdi mdi-tag me-1"></i>Harga terbaik • Cicilan 0%
                                </small>
                            </div>
                            
                            <!-- Features -->
                            <div class="mb-4">
                                <h6 class="fw-bold mb-2">Fitur Unggulan:</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">
                                        <i class="mdi mdi-check-circle text-success me-2"></i>
                                        <small>Garansi resmi 2 tahun</small>
                                    </li>
                                    <li class="mb-2">
                                        <i class="mdi mdi-truck text-info me-2"></i>
                                        <small>Gratis ongkir seluruh Indonesia</small>
                                    </li>
                                    <li class="mb-2">
                                        <i class="mdi mdi-shield-check text-warning me-2"></i>
                                        <small>Waterproof hingga 50 meter</small>
                                    </li>
                                    <li class="mb-2">
                                        <i class="mdi mdi-battery text-success me-2"></i>
                                        <small>Baterai tahan hingga 5 tahun</small>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Specifications -->
                            <div class="mb-4">
                                <h6 class="fw-bold mb-2">Spesifikasi:</h6>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <small class="text-muted">Material:</small>
                                        <div class="fw-bold">Stainless Steel</div>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">Diameter:</small>
                                        <div class="fw-bold">42mm</div>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">Tipe:</small>
                                        <div class="fw-bold">Analog</div>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">Warna:</small>
                                        <div class="fw-bold">Silver</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Stock Status -->
                            <div class="mb-4">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-check-circle text-success me-2"></i>
                                    <span class="text-success fw-bold">Stok tersedia</span>
                                    <span class="ms-2 text-muted">(12 unit)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <div class="w-100">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-secondary w-100">
                                <i class="mdi mdi-heart-outline me-2"></i>
                                Tambah ke Wishlist
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary w-100" id="modalAddToCart">
                                <i class="mdi mdi-cart-plus me-2"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Inisialisasi semua tooltip di halaman
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    const productDetailModal = new bootstrap.Modal(document.getElementById('productDetailModal'));
    const modalElement = document.getElementById('productDetailModal');
    const modal = {
        name: modalElement.querySelector('#modalProductName'),
        price: modalElement.querySelector('#modalProductPrice'),
        image: modalElement.querySelector('#modalProductImage'),
        addToCartBtn: modalElement.querySelector('#modalAddToCart')
    };

    // --- Helper Function ---
    const createAndSubmitForm = (data) => {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '<?= base_url('keranjang') ?>';
        form.style.display = 'none';

        for (const key in data) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = data[key];
            form.appendChild(input);
        }

        document.body.appendChild(form);
        form.submit();
    };

    // --- Event Listeners ---

    // Event Delegation untuk Aksi pada Produk dan Modal
    document.body.addEventListener('click', (e) => {
        const detailButton = e.target.closest('.btn-detail');
        const addToCartInModalBtn = e.target.closest('#modalAddToCart');

        // Tombol "Lihat Detail" diklik
        if (detailButton) {
            const { id, nama, harga, foto } = detailButton.dataset;
            
            modal.name.textContent = nama;
            modal.price.textContent = `Rp ${new Intl.NumberFormat('id-ID').format(harga)}`;
            modal.image.src = `<?= base_url('img/') ?>${foto}`;
            modal.image.alt = nama;
            
            // Simpan data di tombol "Tambah ke Keranjang" pada modal
            Object.assign(modal.addToCartBtn.dataset, { id, nama, harga, foto });

            productDetailModal.show();
        }

        // Tombol "Tambah ke Keranjang" di dalam modal diklik
        if (addToCartInModalBtn) {
            createAndSubmitForm(addToCartInModalBtn.dataset);
        }
    });

    // Pencarian Produk
    document.querySelector('input[placeholder="Cari produk..."]').addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        document.querySelectorAll('.col-lg-4.col-md-6').forEach(card => {
            const productName = card.querySelector('.card-title').textContent.toLowerCase();
            card.style.display = productName.includes(searchTerm) ? 'block' : 'none';
        });
    });

    // Tombol "Muat Lebih Banyak"
    document.querySelector('.btn-outline-primary').addEventListener('click', function() {
        const originalText = this.innerHTML;
        this.innerHTML = '<i class="mdi mdi-loading mdi-spin me-2"></i>Memuat...';
        this.disabled = true;

        setTimeout(() => {
            this.innerHTML = originalText;
            this.disabled = false;
            
            const alertContainer = this.parentElement;
            if (!alertContainer.querySelector('.alert-info')) {
                const alert = document.createElement('div');
                alert.className = 'alert alert-info alert-dismissible fade show mt-3';
                alert.innerHTML = `
                    <i class="mdi mdi-information me-2"></i>
                    Tidak ada produk lagi untuk dimuat.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
                alertContainer.appendChild(alert);
                
                setTimeout(() => alert.remove(), 5000);
            }
        }, 2000);
    });
});
</script>

<?= $this->endSection() ?>