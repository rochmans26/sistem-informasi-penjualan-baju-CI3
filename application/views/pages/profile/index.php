<main role="main" class="container">
    <div class="row mb-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Menu Profile</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-4 border border-dark">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img src="<?= $content->image ? base_url("images/user/$content->image") : base_url('images/user/avatar.png') ?>" alt="" height="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card border border-dark">
                                        <div class="card-body">
                                            <p>Nama: <?= $content->name ?></p>
                                            <p>Email: <?= $content->email ?></p>
                                            <a href="<?= base_url("profile/update/$content->id") ?>" class="btn btn-dark text-white">Ubah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>