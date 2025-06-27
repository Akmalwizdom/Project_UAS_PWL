<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-primary text-white">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-3">
                                        <li class="breadcrumb-item"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">Keranjang Belanja</li>
                                    </ol>
                                </nav>
                                <h2 class="fw-bold mb-2">
                                    <i class="mdi mdi-cart me-2"></i>
                                    Keranjang Belanja Anda
                                </h2>
                                <p class="mb-0 fs-6">Periksa kembali item Anda sebelum melanjutkan ke pembayaran.</p>
                            </div>
                            <div class="col-md-4 text-end d-none d-md-block">
                                <i class="mdi mdi-cart" style="font-size: 4rem; opacity: 0.3;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-circle-outline me-2"></i>
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <?php if (!empty($items)) : ?>
                <div class="col-lg-8">
                    <div class="card">
                        <?= form_open('keranjang/edit') ?>
                        <div class="card-header">
                             <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title fw-bold mb-0">Daftar Item (<?= count($items) ?>)</h4>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-refresh"></i> Perbarui
                                    </button>
                                    <a href="<?= base_url('keranjang/clear') ?>" class="btn btn-outline-danger btn-sm">
                                        <i class="mdi mdi-delete-sweep"></i> Kosongkan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr class="table-light">
                                            <th class="ps-3">Produk</th>
                                            <th class="text-center">Jumlah</th>
                                            <th>Harga</th>
                                            <th>Subtotal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($items as $item) : ?>
                                            <tr>
                                                <td class="ps-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?= base_url('img/' . $item['options']['foto']) ?>" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                                        <div>
                                                            <h6 class="fw-bold mb-0 text-truncate" style="max-width: 200px;"><?= $item['name'] ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input type="number" min="1" name="qty<?= $i++ ?>" class="form-control form-control-sm mx-auto" value="<?= $item['qty'] ?>" style="width: 70px;">
                                                </td>
                                                <td><?= number_to_currency($item['price'], 'IDR', 'id_ID', 0) ?></td>
                                                <td class="fw-bold"><?= number_to_currency($item['subtotal'], 'IDR', 'id_ID', 0) ?></td>
                                                <td>
                                                    <a href="<?= base_url('keranjang/delete/' . $item['rowid']) ?>" class="btn btn-light btn-sm" onclick="return confirm('Yakin ingin menghapus item ini?')" title="Hapus item">
                                                        <i class="mdi mdi-close-circle-outline text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title fw-bold mb-0"><i class="mdi mdi-receipt me-2"></i>Ringkasan Belanja</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Total Harga</span>
                                <span class="fw-bold fs-5"><?= number_to_currency($total, 'IDR', 'id_ID', 0) ?></span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="<?= base_url('checkout') ?>" class="btn btn-success btn-lg fw-bold">
                                    <i class="mdi mdi-check-circle me-2"></i> Checkout
                                </a>
                                <a href="<?= base_url('/') ?>" class="btn btn-outline-primary">
                                    <i class="mdi mdi-arrow-left me-2"></i> Lanjutkan Belanja
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center py-5">
                            <i class="mdi mdi-cart-off display-1 text-muted"></i>
                            <h4 class="fw-bold mt-4">Keranjang Anda Kosong</h4>
                            <p class="text-muted">Sepertinya Anda belum menambahkan produk apapun ke keranjang.</p>
                            <a href="<?= base_url('/') ?>" class="btn btn-primary mt-3">
                                <i class="mdi mdi-arrow-left me-2"></i> Mulai Belanja Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <?= $this->include('components/footer') ?>
</div>

<?= $this->endSection() ?>