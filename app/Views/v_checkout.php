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
                                <li class="breadcrumb-item"><a href="<?= base_url('keranjang') ?>">Keranjang</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                        <h3 class="font-weight-bold mb-0">Checkout Pesanan</h3>
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

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Main Content -->
        <div class="row">
            <!-- Form Section -->
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">
                            <i class="mdi mdi-clipboard-text me-2"></i>Detail Pengiriman
                        </h4>

                        <?= form_open('buy', 'class="row g-3"') ?>
                        <?= form_hidden('username', session()->get('username')) ?>
                        <?= form_input(['type' => 'hidden', 'name' => 'total_harga', 'id' => 'total_harga', 'value' => $total]) ?>

                        <div class="col-12">
                            <label for="nama" class="form-label">Nama Penerima</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= session()->get('username') ?>" readonly>
                        </div>

                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input class="form-control" id="alamat" name="alamat" rows="3" required></input>
                        </div>

                        <div class="col-12">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <select class="form-control" id="kelurahan" name="kelurahan" required></select>
                        </div>

                        <div class="col-12">
                            <label for="layanan" class="form-label">Layanan Pengiriman</label>
                            <select class="form-control" id="layanan" name="layanan" required></select>
                        </div>

                        <div class="col-12">
                            <label for="ongkir" class="form-label">Ongkos Kirim</label>
                            <input type="text" class="form-control" id="ongkir" name="ongkir" value="0" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary Section -->
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">
                            <i class="mdi mdi-cart me-2"></i>Ringkasan Pesanan
                        </h4>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($items)) :
                                        foreach ($items as $index => $item) :
                                    ?>
                                            <tr>
                                                <td><?= $item['name'] ?></td>
                                                <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                                                <td><?= $item['qty'] ?></td>
                                                <td><?= number_to_currency($item['price'] * $item['qty'], 'IDR') ?></td>
                                            </tr>
                                        <?php
                                        endforeach;
                                    else :
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">
                                                <i class="mdi mdi-information-outline"></i> Tidak ada item dalam keranjang
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Summary Calculation -->
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span><?= number_to_currency($total, 'IDR') ?></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Ongkos Kirim:</span>
                                    <span id="ongkir_display">Rp 0</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-0">Total Pembayaran:</h5>
                                    <h5 class="mb-0" id="total_display"><?= number_to_currency($total, 'IDR') ?></h5>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-3">
                            <?php if (!empty($items)) : ?>
                                <button type="submit" class="btn btn-success btn-icon-text me-2">
                                    <i class="mdi mdi-check-circle btn-icon-prepend"></i> Buat Pesanan
                                </button>
                            <?php else : ?>
                                <a href="<?= base_url() ?>" class="btn btn-primary btn-icon-text me-2">
                                    <i class="mdi mdi-arrow-left btn-icon-prepend"></i> Kembali Belanja
                                </a>
                            <?php endif; ?>

                            <a href="<?= base_url('keranjang') ?>" class="btn btn-outline-secondary btn-icon-text">
                                <i class="mdi mdi-cart btn-icon-prepend"></i> Kembali ke Keranjang
                            </a>
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
<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        var ongkir = 0;
        var total = 0;
        hitungTotal();

        $('#kelurahan').select2({
            placeholder: 'Ketik nama kelurahan...',
            ajax: {
                url: '<?= base_url('get-location') ?>',
                dataType: 'json',
                delay: 1500,
                data: function(params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.id,
                                text: item.subdistrict_name + ", " + item.district_name + ", " + item.city_name + ", " + item.province_name + ", " + item.zip_code
                            };
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 3
        });

        $("#kelurahan").on('change', function() {
            var id_kelurahan = $(this).val();
            $("#layanan").empty();
            ongkir = 0;

            $.ajax({
                url: "<?= site_url('get-cost') ?>",
                type: 'GET',
                data: {
                    'destination': id_kelurahan,
                },
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(item) {
                        var text = item["description"] + " (" + item["service"] + ") : estimasi " + item["etd"] + "";
                        $("#layanan").append($('<option>', {
                            value: item["cost"],
                            text: text
                        }));
                    });
                    hitungTotal();
                },
            });
        });

        $("#layanan").on('change', function() {
            ongkir = parseInt($(this).val());
            hitungTotal();
        });

        function hitungTotal() {
            total = ongkir + <?= $total ?>;

            $("#ongkir").val(ongkir);
            $("#total_harga").val(total);

            // Format IDR
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });

            $("#ongkir_display").html(formatter.format(ongkir));
            $("#total_display").html(formatter.format(total));
        }

    });
</script>
<?= $this->endSection() ?>