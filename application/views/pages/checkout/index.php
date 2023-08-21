<main role="main" class="container">

    <div class="row">
        <div class="col-md-8">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Kategori
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Jml</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($cart as $row) : ?>
                                        <tr>
                                            <th scope="row"><?= ++$no ?></th>
                                            <td><?= $row->title ?></td>
                                            <td><?= $row->qty ?></td>
                                            <td>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Subtotal</td>
                                            <td>Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot class="thead-dark">
                                    <tr>
                                        <th colspan="3">Total</th>
                                        <th>Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('cart') ?>" class="btn btn-dark text-white"><i class="fas fa-angle-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Formulir Alamat pengiriman
                </div>
                <div class="card-body">
                    <form action="<?= base_url('checkout/create') ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama penerima" value="<?= $input->name ?>">
                            <?= form_error('name') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="address" cols="30" rows="5" class="form-control"><?= $input->address ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="number" class="form-control" name="phone" placeholder="Masukan nomor telepon penerima" value="<?= $input->phone ?>">
                            <?= form_error('phone') ?>
                        </div>

                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>