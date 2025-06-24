<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control p_input', 
    'placeholder' => 'Username or email *', 
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

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-start mb-3">Login</h3>

                        <?php
                        
                        if (session()->getFlashData('failed')) {
                        ?>
                            <div class="col-12 alert alert-danger" role="alert">
                                <hr>
                                <p class="mb-0">
                                    <?= session()->getFlashData('failed') ?>
                                </p>
                            </div>
                        <?php
                        }
                        ?>

                        <?= form_open('login', 'class="pt-3"')?>

                            <div class="form-group">
                                <label>Username or email *</label>
                                <?= form_input($username) ?>
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <?= form_password($password) ?>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center d-grid gap-2">
                                <?= form_submit($submit) ?>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook me-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook
                                </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus
                                </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>