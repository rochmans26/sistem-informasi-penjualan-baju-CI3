<?php if ($this->session->userdata('role') == 'admin') { ?>
	<!-- INI HALAMAN HOME ADMIN -->
	<main role="main" class="container">
		<div class="row MB-2">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-4 mx-auto">
								<div class="card bg-success border border-dark mb-1">
									<div class="card-header text-center">
										<h3>150</h3>
										<p>Diagram Chart</p>
										<a href="chart" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 mx-auto">
								<div class="card bg-warning border border-dark mb-1">
									<div class="card-header text-center">
										<h3>150</h3>
										<p>User Terdaftar</p>
										<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 mx-auto">
								<div class="card bg-danger border border-dark mb-1">
									<div class="card-header text-center">
										<h3>150</h3>
										<p>Pesanan Terjual</p>
										<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="card-header ui-sortable-handle  border border-dark bg-secondary mb-1">
							<h3 class="card-title">
								<i class="fas fa-chart-pie mr-1"></i>
								Grafik Pendapatan Penjualan Fizzul Collection
							</h3>
						</div>

						<div class="card-body  border border-dark">
							<div>
								<div id="chart"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>

<?php } else { ?>

	<main role="main" class="container">

		<?php $this->load->view('layouts/_alert') ?>

		<div class="row">
			<div class="col-md-12">
				<div class="card mb-2">
					<div class="card-body">
						Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
						<span class="float-right">
							Harga: <a href="<?= base_url('shop/sortby/asc') ?>" class="badge badge-warning">Termurah</a> | <a href="<?= base_url('shop/sortby/desc') ?>" class="badge badge-warning">Termahal</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-3">
							<div class="card-header text-center">
								<h5>Kategori</h5>
							</div>
							<ul class="list-group">
								<li class="list-group-item"><a href="<?= base_url('home') ?>" class="list-group-item list-group-item-action" aria-current="true" style="color: black;">Semua kategori</a></li>
								<?php foreach (getCategories() as $category) : ?>
									<li class="list-group-item"><a href="<?= base_url("shop/category/$category->slug") ?>" class="list-group-item list-group-item-action" aria-current="true" style="color: black;"><?= $category->title ?></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php foreach ($content as $row) : ?>
						<div class="col-md-4">
							<div class="card text-center mb-3">
								<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top" style="height: 240px;">
								<div class=" card-body">
									<h5 class="card-title mb-2"><?= $row->product_title ?></h5>
									<p class="card-text mb-2"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
									<!-- <p class="card-text mb-2"><?= $row->description ?></p> -->
									<p class="card-text mb-2">Tersedia : <?= $row->stock ?></p>
									<a href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-warning"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
								</div>
								<div class="card-footer text-muted">
									<a href="<?= base_url("home/getbyid/$row->id") ?>" class="btn btn-danger text-black">Lihat Detail</a>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<nav aria-label="Page navigation example">
					<?= $pagination ?>
				</nav>
			</div>

		</div>
	</main>

<?php } ?>