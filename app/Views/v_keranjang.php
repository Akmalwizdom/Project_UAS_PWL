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

        <!-- Cart Table Section -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title mb-0">Keranjang</h4>
                            <div class="d-flex align-items-center">
                                <div class="form-group mb-0" style="width: 200px;">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search...">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Nama
                                            <i class="mdi mdi-sort-variant ml-1"></i>
                                        </th>
                                        <th>
                                            Foto
                                            <i class="mdi mdi-sort-variant ml-1"></i>
                                        </th>
                                        <th>
                                            Harga
                                            <i class="mdi mdi-sort-variant ml-1"></i>
                                        </th>
                                        <th>
                                            Jumlah
                                            <i class="mdi mdi-sort-variant ml-1"></i>
                                        </th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ASUS TUF A15 FA506NF</td>
                                        <td>
                                            <img src="<?= base_url()?>assets/images/laptop1.jpg" 
                                                 alt="ASUS TUF A15" 
                                                 style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td>IDR 10,999,000</td>
                                        <td>
                                            <div class="input-group" style="width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold">IDR 10,999,000</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm btn-icon-text">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Asus Vivobook 14 A1404ZA</td>
                                        <td>
                                            <img src="<?= base_url()?>assets/images/laptop2.jpg" 
                                                 alt="Asus Vivobook" 
                                                 style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td>IDR 6,899,000</td>
                                        <td>
                                            <div class="input-group" style="width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold">IDR 6,899,000</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm btn-icon-text">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Asus Vivobook 14 A1404ZA</td>
                                        <td>
                                            <img src="<?= base_url()?>assets/images/laptop2.jpg" 
                                                 alt="Asus Vivobook" 
                                                 style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td>IDR 6,899,000</td>
                                        <td>
                                            <div class="input-group" style="width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold">IDR 6,899,000</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm btn-icon-text">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Info -->
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="text-muted">
                                Showing 1 to 2 of 2 entries
                            </div>
                        </div>

                        <!-- Total Section -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="alert alert-info">
                                    <h5 class="font-weight-bold mb-0">Total = IDR 17,898,000</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <button class="btn btn-primary btn-icon-text mr-2">
                                        <i class="mdi mdi-refresh btn-icon-prepend"></i>
                                        Perbarui Keranjang
                                    </button>
                                    <button class="btn btn-warning btn-icon-text mr-2">
                                        <i class="mdi mdi-cart-remove btn-icon-prepend"></i>
                                        Kosongkan Keranjang
                                    </button>
                                    <button class="btn btn-success btn-icon-text">
                                        <i class="mdi mdi-check-circle btn-icon-prepend"></i>
                                        Selesai Belanja
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('components/footer') ?>
</div>
<?= $this->endSection() ?>