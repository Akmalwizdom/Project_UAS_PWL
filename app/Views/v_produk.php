<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
// Contoh data produk, biasanya ini akan datang dari database
$products = [
    [
        'id' => 1,
        'name' => 'ASUS TUF A15 FA506NF',
        'price' => '10999000',
        'quantity' => 5,
        'photo' => '/path/to/your/image/tuf_a15.jpg' // Ganti dengan path gambar yang sesuai
    ],
    [
        'id' => 2,
        'name' => 'Asus Vivobook 14 A1404ZA',
        'price' => '6899000',
        'quantity' => 7,
        'photo' => '/path/to/your/image/vivobook_14.jpg' // Ganti dengan path gambar yang sesuai
    ],
    [
        'id' => 3,
        'name' => 'Lenovo IdeaPad Slim 3-14IAU7',
        'price' => '6299000',
        'quantity' => 5,
        'photo' => '/path/to/your/image/ideapad_slim.jpg' // Ganti dengan path gambar yang sesuai
    ],
];
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Produk</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Data Tables</h4>
                            <div>
                                <button class="btn btn-primary">Tambah Data</button>
                                <button class="btn btn-success">Download Data</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
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
                                    <?php foreach ($products as $index => $product) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= $product['name'] ?></td>
                                            <td><?= number_format($product['price'], 0, ',', '.') ?></td>
                                            <td><?= $product['quantity'] ?></td>
                                            <td class="py-1">
                                                <img src="<?= $product['photo'] ?>" alt="image" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"/>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm">Ubah</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>