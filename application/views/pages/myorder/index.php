<main role="main" class="container">
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Orders
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Order</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($content as $row) : ?>
                                <tr>
                                    <th scope="row"><?= ++$no ?></th>
                                    <td>
                                        <strong>#<?= $row->invoice ?></strong>
                                    </td>
                                    <td><?= str_replace('-', '/', date('d-m-Y', strtotime($row->date))) ?></td>
                                    <td>Rp.<?= number_format($row->total, 0, ',', '.') ?>,-</td>
                                    <td>
                                        <?php $this->load->view('layouts/_status', ['status' => $row->status]) ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url("myorder/detail/$row->invoice") ?>"><b>Info Order</b></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <?= $pagination ?>
                    </nav>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('home') ?>" class="btn btn-dark text-white"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>