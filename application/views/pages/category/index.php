<main role="main" class="container">

    <div class="row">
        <div class="col-md-12 mx-auto">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header border">
                    <a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-dark">Tambah</a>
                    <span>Kategori</span>
                    <div class="float-right">
                        <?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                            <div class="input-group-append">
                                <button class="btn btn-dark btn-sm" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <a href="<?= base_url('category/reset') ?>" class="btn btn-dark btn-sm">
                                    <i class="fas fa-eraser"></i>
                                </a>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($content as $row) : ?>
                                <tr>
                                    <th scope="row"><?= ++$no ?></th>
                                    <td><?= $row->title ?></td>
                                    <td><?= $row->slug ?></td>
                                    <td>
                                        <?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
                                        <?= form_hidden('id', $row->id) ?>
                                        <a href="<?= base_url("category/edit/$row->id") ?>" class="btn btn-sm">
                                            <b class="text-info">Ubah</b>
                                        </a>
                                        <button type="submit" class="btn btn-sm" onclick="return confirm('Are you sure?')">
                                            <b class="text-danger">Hapus</b>
                                        </button>
                                        <?= form_close() ?>
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