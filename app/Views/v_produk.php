<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">

        <?php if (session()->getFlashData('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-circle-outline me-2"></i>
                <?= session()->getFlashData('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashData('failed')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="mdi mdi-alert-circle-outline me-2"></i>
                <?= session()->getFlashData('failed') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-3">
                                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Manajemen Produk</li>
                                    </ol>
                                </nav>
                                <h2 class="fw-bold mb-2">
                                    <i class="mdi mdi-package-variant-closed me-2"></i>
                                    Manajemen Produk
                                </h2>
                                <p class="mb-0 text-muted">Kelola data produk, termasuk stok, harga, dan informasi lainnya.</p>
                            </div>
                            <div class="col-md-4 text-end d-none d-md-block">
                                <i class="mdi mdi-package-variant-closed" style="font-size: 4rem; opacity: 0.2;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="card-title mb-1 fw-bold">
                                    <i class="mdi mdi-format-list-bulleted text-primary me-2"></i>
                                    Data Produk
                                </h4>
                                <small class="text-muted">Daftar semua produk yang tersedia di toko.</small>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="d-flex justify-content-md-end justify-content-start align-items-center gap-2">
                                    <div class="input-group" style="max-width: 250px;">
                                        <span class="input-group-text bg-white border-end-0">
                                            <i class="mdi mdi-magnify text-muted"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Cari produk..." id="searchInput">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                        <i class="mdi mdi-plus-box-outline me-1"></i> Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="productTable">
                                <thead>
                                    <tr class="table-light">
                                        <th class="ps-3">#</th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th class="text-center">Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $index => $produk) : ?>
                                        <tr>
                                            <td class="ps-3 align-middle"><?= $index + 1 ?></td>
                                            <td class="align-middle product-name-cell">
                                                <div class="d-flex align-items-center">
                                                    <?php if (!empty($produk['foto']) && file_exists(FCPATH . 'img/' . $produk['foto'])) : ?>
                                                        <img src="<?= base_url('img/' . $produk['foto']) ?>" alt="<?= esc($produk['nama']) ?>" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                                    <?php else : ?>
                                                        <div class="me-3" style="width: 50px; height: 50px; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: .25rem;">
                                                            <i class="mdi mdi-image-outline text-muted"></i>
                                                        </div>
                                                    <?php endif; ?>
                                                    <span class="fw-bold"><?= esc($produk['nama']) ?></span>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                                            <td class="text-center align-middle">
                                                <div class="badge badge-outline-<?= ($produk['jumlah'] > 10) ? 'success' : (($produk['jumlah'] > 0) ? 'warning' : 'danger') ?>">
                                                    <?= $produk['jumlah'] ?>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                                    <i class="mdi mdi-pencil"></i> Ubah
                                                </button>
                                                <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <i class="mdi mdi-delete-outline"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Data Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="nama-<?= $produk['id'] ?>" class="form-label">Nama Produk</label>
                                                                <input type="text" name="nama" class="form-control" id="nama-<?= $produk['id'] ?>" value="<?= $produk['nama'] ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="harga-<?= $produk['id'] ?>" class="form-label">Harga</label>
                                                                <input type="text" name="harga" class="form-control" id="harga-<?= $produk['id'] ?>" value="<?= $produk['harga'] ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jumlah-<?= $produk['id'] ?>" class="form-label">Jumlah Stok</label>
                                                                <input type="text" name="jumlah" class="form-control" id="jumlah-<?= $produk['id'] ?>" value="<?= $produk['jumlah'] ?>" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Foto Saat Ini</label><br>
                                                                <img src="<?= base_url('img/' . $produk['foto']) ?>" width="100px" class="img-thumbnail">
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox" id="check-<?= $produk['id'] ?>" name="check" value="1">
                                                                <label class="form-check-label" for="check-<?= $produk['id'] ?>">
                                                                    Ceklis jika ingin mengganti foto
                                                                </label>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="foto-<?= $produk['id'] ?>" class="form-label">Upload Foto Baru</label>
                                                                <input type="file" class="form-control" id="foto-<?= $produk['id'] ?>" name="foto">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap">
                            <p class="text-muted mb-0">Menampilkan <?= count($product) ?> data produk.</p>
                            <a type="button" class="btn btn-light" href="<?= base_url() ?>produk/download">
                                <i class="mdi mdi-download me-2"></i>Download Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?= $this->include('components/footer') ?>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const productRows = document.querySelectorAll('#productTable tbody tr'); 

        productRows.forEach(row => {
            const productNameCell = row.querySelector('.product-name-cell span'); 
            if (productNameCell) {
                const productName = productNameCell.textContent.toLowerCase();
                row.style.display = productName.includes(searchTerm) ? '' : 'none';
            }
        });
    });
</script>

<?= $this->endSection() ?>