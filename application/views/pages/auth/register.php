<!-- <section class="vh-100" style="background-image: url('images/product/online1.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center"><i class="fas fa-user white-text"></i> Register</h3>
                            <?= form_open('register', ['method' => 'POST']) ?>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <?= form_input('name', $input->name, ['class' => 'form-control', 'placeholder' => 'Masukan nama', 'required' => true, 'autofocus' => true]) ?>
                                <?= form_error('name') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan alamat email aktif', 'required' => true]) ?>
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password minimal 8 karakter', 'required' => true]) ?>
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
                                <?= form_error('password_confirmation') ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            <?= form_close() ?>
                            <hr class="my-4">
                            <div class="text-center">
                                <span>Sudah Memiliki Akun?</span>
                                <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="view" style="background-image: url('images/product/online7.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mx-auto col-xl-5" style="height: 690px;">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h3 class="white-text">
                                    REGISTER
                                </h3>
                                <hr class="hr-light">
                            </div>
                            <?= form_open('register', ['method' => 'POST']) ?>
                            <div class="form-group">
                                <label for=""><i class="fas fa-user"> Username</i></label>
                                <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                                <?= form_error('name') ?>
                            </div>
                            <div class="form-group">
                            <label for=""><i class="fas fa-envelope"> Email</i></label>
                                <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan alamat email aktif', 'required' => true]) ?>
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group">
                            <label for=""><i class="fas fa-lock"> Password</i></label>
                                <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password minimal 8 karakter', 'required' => true]) ?>
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group">
                            <label for=""><i class="fas fa-lock"> Konfirmasi Password</i></label>
                                <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
                                <?= form_error('password_confirmation') ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Register</button>
                            </div>
                            <?= form_close() ?>
                            <div>
                                <span>Punya Akun?</span>
                                <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Sign up right now! </h1>
                    
                    <?php $this->load->view('layouts/_alert') ?>
                </div>
            </div>
        </div>
    </div>
</div>