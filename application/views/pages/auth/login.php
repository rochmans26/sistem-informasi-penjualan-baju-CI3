<!-- <section class="vh-100" style="background-image: url('images/product/online1.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h3 class="mb-4 text-center"><i class="fas fa-user white-text"></i> Login</h3>
                            <?= form_open('login', ['method' => 'POST']) ?>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Email</label>
                            <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan email', 'required' => true, 'autofocus' => true]) ?>
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                                <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                <?= form_error('password') ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            <?= form_close() ?>
                            <hr class="my-4">   
                            <div class="text-center">
                                <span>Tidak Memiliki Akun?</span>
                                <a href="<?= base_url('register') ?>" class="btn btn-primary">Register</a>
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
                                    LOGIN
                                </h3>
                                <hr class="hr-light">
                            </div>
                            <?= form_open('login', ['method' => 'POST']) ?>
                            <div class="form-group">
                                <label for=""><i class="fas fa-envelope"> Email</i></label>
                                <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan email', 'required' => true]) ?>
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="fas fa-lock"> Password</i></label>
                                <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                            <?= form_close() ?>
                            <div>
                                <span>Tidak Memiliki Akun?</span>
                                <a href="<?= base_url('register') ?>" class="btn btn-primary">Register</a>
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