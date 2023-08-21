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
                    <div class="form-group">
                        <label for="">Produk</label>
                        <?= form_input('title', $input->title, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('title') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <?= form_textarea(['name' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
                        <?= form_error('description') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <?= form_input(['type' => 'number', 'name' => 'price', 'value' => $input->price, 'class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('price') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <!-- Param 2 getDropdownList, arr[0] adalah 'value' & arr[1] adalah 'nama option' -->
                        <?= form_dropdown('id_category', getDropdownList('category', ['id', 'title']), $input->id_category, ['class' => 'form-control']) ?>
                        <?= form_error('id_category') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <?= form_input(['type' => 'number', 'name' => 'stock', 'value' => $input->stock, 'class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('stock') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <br>
                        <?= form_upload('image') ?>
                        <?php if ($this->session->flashdata('image_error')) :  ?>
                            <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                        <?php endif ?>
                        <?php if ($input->image) : ?>
                            <img src="<?= base_url("images/product/$input->image") ?>" alt="" height="150">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true]) ?>
                        <?= form_error('slug') ?>
                    </div>
                    <a href="<?= base_url('product') ?>" class="btn btn-dark text-white"> Kembali</a>
                    <button type="submit" class="btn btn-success text-white">Simpan</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>