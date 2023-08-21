<main role="main" class="container">
    <div class="row mb-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Formulir Produk</span>
                </div>
                <div class="card-body">
                    <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                    <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                    <?= isset($input->title) ? form_hidden('title', $input->title) : '' ?>
                    <?= isset($input->description) ? form_hidden('description', $input->description) : '' ?>
                    <?= isset($input->price) ? form_hidden('price', $input->price) : '' ?>
                    <?= isset($input->id_category) ? form_hidden('id_category', $input->id_category) : '' ?>
                    <?= isset($input->image) ? form_hidden('image', $input->image) : '' ?>
                    <?= isset($input->slug) ? form_hidden('slug', $input->slug) : '' ?>

                    <div class="form-group">
                        <label for="">Stok</label>
                        <?= form_input(['type' => 'number', 'name' => 'stock', 'class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('stock') ?>
                    </div>
                    <a href="<?= base_url('product') ?>" class="btn btn-dark text-white"> Kembali</a>
                    <button type="submit" class="btn btn-success text-white">Simpan</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>