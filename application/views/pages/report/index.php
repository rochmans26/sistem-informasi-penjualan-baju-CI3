<main role="main" class="container">

    <div class="row">
        <div class="col-md-12 mx-auto">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Laporan Pendapatan</span>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <form class="">
                            <div class="form-gruop mb-2">
                                <input type="date" name="" id="">
                            </div>
                        </form>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pembeli</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $total = 0;
                            foreach ($content as $row) {
                            ?>
                                <tr>
                                    <?php if ($row->status == 'delivered') { ?>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->title ?></td>
                                        <td><?= $row->qty ?></td>
                                        <td><?= str_replace('-', '/', date('d-m-Y', strtotime($row->date))) ?></td>
                                        <td>Rp. <?= number_format($row->subtotal) ?>,-</td>
                                        <?php $total = $total + $row->subtotal ?>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h4><strong>TOTAL PENDAPATAN: </strong><span>Rp. <?= number_format($total) ?>,-</span></h4>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('home') ?>" class="btn btn-dark text-white"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>