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
                    Keranjang Belanja
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Produk</th>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr>
                                    <td>
                                        <img src="<?= $row->image ? base_url("images/product/$row->image") :
                                                        base_url('images/product/default.png') ?>" alt="" height="300">
                                    </td>
                                    <td>
                                        <h3><?= $row->title ?></h3>
                                        <p>Rp.<?= number_format($row->price, 0, ',', '.') ?> ,-</p>
                                        <p>Ukuran</p>
                                        <div class="mb-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">L</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">XL</label>
                                            </div>
                                        </div>
                                        <p>Stok Tersedia : 100 Buah</p>
                                        <p>Deskripsi Produk <?= $row->description ?></p>
                                        <p>Kuantitas :</p>
                                        <p>
                                        <form action="<?= base_url('cart/add') ?>" method="POST">
                                            <input type="hidden" name="id_product" value="<?= $row->id ?>">
                                            <div class="input-group">
                                                <div class="input-group-append mb-2">
                                                    <input type="number" name="qty" value="1" class="form-control bg-transparent border-black text-black">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-warning" type="submit"><i class="fas fa-shopping-cart"> Add To Cart</i></button>
                                                </div>
                                            </div>
                                        </form>
                                        </p>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('checkout') ?>" class="btn btn-danger float-right text-white"> Checkout <i class="fas fa-angle-right"></i></a>
                    <a href="<?= base_url('home') ?>" class="btn btn-dark text-white"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>