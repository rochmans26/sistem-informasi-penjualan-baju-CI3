<main role="main" class="container">

    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <?php
                    foreach ($content as $row) : ?>
                        <div class="row">
                            <div class="col mb-2">
                                <img src="<?= base_url(); ?>/images/product/<?= $row->image; ?>" aalt="" height="440">
                            </div>
                            <div class="col">
                                <h4><?= $row->title ?></h4>
                                <p>Harga : Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</p>
                                <p>Deskripsi : <?= $row->description ?></p>
                                <?php if (!$this->session->userdata('email')) { ?>
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">Ukuran : </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="S" required>
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="M" required>
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio3" value="L" required>
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio3" value="XL" required>
                                                <label class="form-check-label" for="inlineRadio3">XL</label>
                                            </div>
                                        </div>
                                        <p>Kuantitas :</p>
                                        <input type="hidden" name="id_product" value="<?= $row->id ?>">
                                        <div class="input-group">
                                            <div class="input-group-append mb-2">
                                                <input type="number" name="qty" value="1" class="form-control bg-transparent border-black text-black">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="<?= base_url('login') ?>" class="btn btn-warning form-control"><i class="fas fa-cart-plus"> Masukkan Keranjang </i></a>
                                        </div>
                                    </form>
                                <?php } else { ?>
                                    <form action="<?= base_url('cart/add') ?>" method="POST">
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">Ukuran : </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="S" required>
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="M" required>
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio3" value="L" required>
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="size" id="inlineRadio3" value="XL" required>
                                                <label class="form-check-label" for="inlineRadio3">XL</label>
                                            </div>
                                        </div>
                                        <p>Kuantitas :</p>
                                        <input type="hidden" name="id_product" value="<?= $row->id ?>">
                                        <div class="input-group">
                                            <div class="input-group-append mb-2">
                                                <input type="number" name="qty" value="1" class="form-control bg-transparent border-black text-black">
                                            </div>
                                            <p> Tersedia : <?= $row->stock  ?></p>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-warning form-control" type="submit"> <i class="fas fa-cart-plus"> Masukkan Keranjang </i></button>
                                        </div>
                                        <!-- <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-warning form-control" type="submit"> <i class="fas fa-shopping-cart"> Masukkan Keranjang </i></button>
                                            </div>
                                        </div> -->
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('home') ?>" class="btn btn-dark text-white"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>