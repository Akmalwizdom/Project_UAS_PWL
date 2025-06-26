<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">

        <!-- Flash Messages -->
        <?php if (session()->getFlashData('success')) : ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= session()->getFlashData('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashData('failed')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashData('failed') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manajemen Produk</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="font-weight-bold">Manajemen Produk</h3>
                </div>
            </div>
        </div>

        <!-- Table & Button -->
        <div class="row mb-5">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body m-2">
                        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                            <h4 class="card-title mb-3 mb-md-0">Data Produk</h4>
                            <div class="d-flex align-items-center">
                                <div class="form-group mb-0 me-2" style="width: 200px;">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search...">
                                </div>
                                <div>
                                    <!-- Tombol Modal -->
                                    <button type="button" class="btn btn-primary btn-icon-text me-2" data-bs-toggle="modal" data-bs-target="#addModal">
                                        <i class="mdi mdi-plus-box btn-icon-prepend"></i> Tambah Data
                                    </button>
                                    <button class="btn btn-success btn-icon-text">
                                        <i class="mdi mdi-download btn-icon-prepend"></i> Download Data
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Produk -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $index => $produk) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td>
                                                <?php if (!empty($produk['foto']) && file_exists(FCPATH . 'img/' . $produk['foto'])) : ?>
                                                    <img src="<?= base_url('img/' . $produk['foto']) ?>" alt="<?= $produk['nama'] ?>" width="100px">
                                                <?php else : ?>
                                                    <span class="text-muted">Tidak ada foto</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= esc($produk['nama']) ?></td>
                                            <td><?= esc($produk['harga']) ?></td>
                                            <td>
                                                <div class="badge badge-outline-<?= ($produk['jumlah'] > 5) ? 'success' : 'warning' ?>">
                                                    <?= $produk['jumlah'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                                    <i class="mdi mdi-pencil"></i> Ubah
                                                </button>

                                                <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="mdi mdi-delete-forever"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        </tr>

                                        <!-- Edit Modal Begin -->
                                        <div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="name">Nama</label>
                                                                <input type="text" name="nama" class="form-control" value="<?= esc($produk['nama']) ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Harga</label>
                                                                <input type="text" name="harga" class="form-control" value="<?= esc($produk['harga']) ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Jumlah</label>
                                                                <input type="text" name="jumlah" class="form-control" value="<?= esc($produk['jumlah']) ?>" required>
                                                            </div>
                                                            <?php if (!empty($produk['foto']) && file_exists(FCPATH . 'img/' . $produk['foto'])) : ?>
                                                                <img src="<?= base_url('img/' . $produk['foto']) ?>" width="100px">
                                                            <?php endif; ?>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="check<?= $produk['id'] ?>" name="check" value="1">
                                                                <label class="form-check-label" for="check<?= $produk['id'] ?>">
                                                                    Ceklis jika ingin mengganti foto
                                                                </label>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="name">Foto Baru</label>
                                                                <input type="file" class="form-control" name="foto">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Modal End -->

                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-2">
                                <label>Nama Produk</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>Jumlah Stok</label>
                                <input type="number" name="jumlah" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label>Foto Produk</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?= $this->include('components/footer') ?>
</div>

<?= $this->endSection() ?>