<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
                <h3 class="font-weight-bold">Produk</h3>
            </div>
        </div>

        <!-- Product Management Table -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- Action Buttons -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <button class="btn btn-primary me-2">Tambah Data</button>
                                <button class="btn btn-success">Download Data</button>
                            </div>
                        </div>

                        <!-- Pagination and Search Controls -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <select class="form-select form-select-sm me-2" style="width: auto;">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <span class="text-muted">entries per page</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ASUS TUF A15 FA506NF</td>
                                        <td>10999000</td>
                                        <td>5</td>
                                        <td>
                                            <img src="assets/images/laptop1.jpg" alt="ASUS TUF A15" style="width: 60px; height: 60px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm me-1">Ubah</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Asus Vivobook 14 A1404ZA</td>
                                        <td>6899000</td>
                                        <td>7</td>
                                        <td>
                                            <img src="assets/images/laptop2.jpg" alt="Asus Vivobook" style="width: 60px; height: 60px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm me-1">Ubah</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Lenovo IdeaPad Slim 3-14IAU7</td>
                                        <td>6299000</td>
                                        <td>5</td>
                                        <td>
                                            <img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad" style="width: 60px; height: 60px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm me-1">Ubah</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Info -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-muted">Showing 1 to 3 of 3 entries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>