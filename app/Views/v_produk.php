<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
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
                                    <button class="btn btn-primary btn-icon-text">
                                        <i class="mdi mdi-plus-box btn-icon-prepend"></i> Tambah Data
                                    </button>
                                    <button class="btn btn-success btn-icon-text">
                                        <i class="mdi mdi-download btn-icon-prepend"></i> Download Data
                                    </button>
                                </div>
                            </div>
                        </div>

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
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/laptop1.jpg" alt="ASUS TUF A15"></td>
                                        <td>ASUS TUF A15 FA506NF</td>
                                        <td>Rp 10.999.000</td>
                                        <td><div class="badge badge-outline-success">5</div></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i> Ubah</button>
                                            <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-forever"></i> Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/laptop2.jpg" alt="Asus Vivobook"></td>
                                        <td>Asus Vivobook 14 A1404ZA</td>
                                        <td>Rp 6.899.000</td>
                                        <td><div class="badge badge-outline-success">7</div></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i> Ubah</button>
                                            <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-forever"></i> Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/laptop3.jpg" alt="Lenovo IdeaPad"></td>
                                        <td>Lenovo IdeaPad Slim 3</td>
                                        <td>Rp 6.299.000</td>
                                        <td><div class="badge badge-outline-warning">5</div></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i> Ubah</button>
                                            <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-forever"></i> Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('components/footer') ?>
</div>
<?= $this->endSection() ?>