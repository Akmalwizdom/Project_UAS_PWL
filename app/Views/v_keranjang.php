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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                            </ol>
                        </nav>
                        <h3 class="font-weight-bold mb-0">Produk di Keranjang Anda</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash Message -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Keranjang Table -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?= form_open('keranjang/edit') ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    if (!empty($items)) :
                                        foreach ($items as $index => $item) :
                                    ?>
                                            <tr>
                                                <td><?= $item['name'] ?></td>
                                                <td><img src="<?= base_url('img/' . $item['options']['foto']) ?>" width="100px"></td>
                                                <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                                                <td><input type="number" min="1" name="qty<?= $i++ ?>" class="form-control" value="<?= $item['qty'] ?>"></td>
                                                <td><?= number_to_currency($item['subtotal'], 'IDR') ?></td>
                                                <td>
                                                    <a href="<?= base_url('keranjang/delete/' . $item['rowid']) ?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus item ini?')">
                                                        <i class="bi bi-trash-fill"></i> Hapus
                                                    </a>
                                                </td>

                                            </tr>
                                        <?php
                                        endforeach;
                                    else :
                                        ?>
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">
                                                <i class="bi bi-info-circle"></i> Tidak ada produk di keranjang.
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>

                        <!-- Total -->
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <h5 class="font-weight-bold mb-0">Total = <?= number_to_currency($total, 'IDR') ?></h5>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-icon-text me-2">
                                <i class="mdi mdi-refresh btn-icon-prepend"></i> Perbarui Keranjang
                            </button>
                            <a href="<?= base_url('keranjang/clear') ?>" class="btn btn-warning btn-icon-text me-2">
                                <i class="mdi mdi-cart-remove btn-icon-prepend"></i> Kosongkan Keranjang
                            </a>
                            <?php if (!empty($items)) : ?>
                                <a href="<?= base_url('checkout') ?>" class="btn btn-success btn-icon-text">
                                    <i class="mdi mdi-check-circle btn-icon-prepend"></i> Selesai Belanja
                                </a>
                            <?php endif; ?>
                        </div>

                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->include('components/footer') ?>
</div>

<?= $this->endSection() ?>