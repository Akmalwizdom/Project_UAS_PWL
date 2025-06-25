<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control p_input',
    'placeholder' => 'Username *',
    'type' => 'text'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control p_input',
    'placeholder' => 'Password *',
    'type' => 'password'
];

$submit = [
    'type' => 'submit',
    'class' => 'btn btn-primary btn-block enter-btn',
    'value' => 'Login'
];
?>

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth login-bg">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="card py-5 px-4 shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-3">Login</h3>

                        <?php if (session()->getFlashData('failed')): ?>
                            <div class="alert alert-danger" role="alert">
                                <hr>
                                <p class="mb-0"><?= session()->getFlashData('failed') ?></p>
                            </div>
                        <?php endif; ?>

                        <?= form_open('login', 'class="pt-3"') ?>

                            <div class="form-group">
                                <label>Username *</label>
                                <?= form_input($username) ?>
                            </div>

                            <div class="form-group">
                                <label>Password *</label>
                                <?= form_password($password) ?>
                            </div>

                            <div class="text-center d-grid gap-2 mt-3">
                                <?= form_submit($submit) ?>
                            </div>
                        <?= form_close() ?>
                        <!-- Credits -->
                        <div class="credits text-center mt-3">
                          Designed by <a href="https://www.bootstrapdash.com/">BootstrapDash</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>