<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
                <h3 class="font-weight-bold">Home</h3>
            </div>
        </div>

        <!-- Product Cards -->
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/laptop1.jpg" alt="ASUS TUF A15" class="img-fluid mb-3" style="max-height: 200px;">
                        <h5 class="card-title">ASUS TUF A15 FA506NF</h5>
                        <h4 class="text-primary font-weight-bold">IDR 10,999,000</h4>
                        <button class="btn btn-info btn-rounded">Beli</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/images/laptop2.jpg" alt="Asus Vivobook" class="img-fluid mb-3" style="max-height: 200px;">
                        <h5 class="card-title">Asus Vivobook 14 A1404ZA</h5>
                        <h4 class="text-primary font-weight-bold">IDR 6,899,000</h4>
                        <button class="btn btn-info btn-rounded">Beli</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- content-wrapper ends -->
</div>
<?= $this->endSection() ?>