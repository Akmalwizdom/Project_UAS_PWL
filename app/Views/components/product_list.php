<?php if (empty($product)) : ?>
    <div class="col-12 text-center text-muted">
        <i class="mdi mdi-alert-circle-outline"></i> Produk tidak ditemukan.
    </div>
<?php else : ?>
    <?php foreach ($product as $item) : ?>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0">
              <div class="position-relative">
                    <img src="<?= base_url('img/' . $item['foto']) ?>" alt="<?= $item['nama'] ?>" class="card-img-top">
                    <span class="position-absolute top-0 start-0 m-2 badge bg-success">Terbaru</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><?= $item['nama'] ?></h5>
                    <h4 class="text-primary fw-bold">Rp <?= number_format($item['harga'], 0, ',', '.') ?></h4>
                    <?= form_open('keranjang') ?>
                    <?= form_hidden('id', $item['id']) ?>
                    <?= form_hidden('nama', $item['nama']) ?>
                    <?= form_hidden('harga', $item['harga']) ?>
                    <?= form_hidden('foto', $item['foto']) ?>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="mdi mdi-cart-plus me-2"></i>Tambah ke Keranjang
                        </button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif; ?>
