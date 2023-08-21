<nav class="navbar navbar-expand-md navbar-light fixed-top bg-warning">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>" style="font-weight: bold;">
			<img src="<?= base_url('images/product/fizzul.jpeg') ?>" width="65" height="45" alt="" style="border-radius: 1rem;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>"><b>Home</b><span class="sr-only">(current)</span></a>
				</li>
				<?php if ($this->session->userdata('role') == 'admin') { ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Admin</b></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-1">
							<a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
							<a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
							<a href="<?= base_url('order') ?>" class="dropdown-item">Pesanan</a>
							<a href="<?= base_url('report') ?>" class="dropdown-item">Laporan Pendapatan</a>
							<a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
						</div>
					</li>
				<?php  } else if ($this->session->userdata('role') == 'member') { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('myorder') ?>" class="dropdown-item"><b>My order</b></a>
					</li>
				<?php } else { ?>
				<?php } ?>
			</ul>
			<?php if ($this->session->userdata('role') == 'admin') { ?>
				<!-- FITUR CARI -->
				<!-- <form class="d-flex" role="search" action="<?= base_url('shop/search') ?>" method="POST" style="margin-right: 10px;">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari Produk" value="<?= $this->session->userdata('keyword') ?>">
					<div class="input-group-append">
						<button class="btn btn-dark" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form> -->
			<?php } else { ?>
				<!-- FITUR CARI -->
				<form class="d-flex" role="search" action="<?= base_url('shop/search') ?>" method="POST" style="margin-right: 10px;">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="Cari Produk" value="<?= $this->session->userdata('keyword') ?>">
						<div class="input-group-append">
							<button class="btn btn-dark" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>
			<?php } ?>
			<ul class="navbar-nav">
				<?php if ($this->session->userdata('role') == 'member') { ?>
					<li class="nav-item">
						<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-cart-plus"></i> <b class="text-danger">(<?= getCart() ?>)</b></a>
					</li>
				<?php } ?>
				<?php if (!$this->session->userdata('is_login')) : ?>
					<li class="nav-item">
						<a href="<?= base_url('login') ?>" class="nav-link"><b>Login</b></a>
					</li>
					<li class="nav-item">
						<a class="nav-link">|</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('register') ?>" class="nav-link"><b>Register</b></a>
					</li>
				<?php else : ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle">
								<?= $this->session->userdata("name") ?></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">
							<a href="<?= base_url('profile') ?>" class="dropdown-item">Profile</a>
							<a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>