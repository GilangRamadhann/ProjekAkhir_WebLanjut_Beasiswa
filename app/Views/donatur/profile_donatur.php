<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= $title ?></title>
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/fontawesome.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<!-- <div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div> -->
				<div class="sidebar-brand-text mx-3">BesCamp 🎓<sup></sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('/donatur') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Beranda</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Beasiswa
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/program') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Program Beasiswa</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/penerima') ?>">
					<i class="fa-solid fa-square-check"></i>
					<span>Penerima Beasiswa</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/pendaftar') ?>">
					<i class="fa-solid fa-address-card"></i>
					<span>Pendaftar Beasiswa</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Monitoring
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/laporan2') ?>">
					<i class="fas fa-fw fa-cog"></i>
					<span>Laporan Pengeluaran</span></a>
			</li>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Donatur</span>
								<img class="img-profile rounded-circle" src="<?= base_url('assets/img/cap.png') ?>">
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url('/profile') ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profil
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Keluar
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- DataTales Example -->
					<div class="container-xl px-4 mt-4">
						<!-- Account page navigation-->
						<br>
						<h3><?= $title ?></h3>
						<hr class="mt-0 mb-4">
						<div class="row">
							<div class="col-xl-4">
								<!-- Profile picture card-->
								<div class="card mb-4 mb-xl-0 pict">
									<div class="card-header">Logo</div>
									<div class="card-body text-center">
										<!-- Profile picture image-->
										<img src="<?php foreach ($donatur as $item) : ?>
                            				<?= $item->logo ?? base_url('assets/images/cap.png'); ?> 
                            				<?php endforeach;  ?>" alt="Foto" class="img-account-profile rounded-circle mb-2" width="230px">
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<!-- Account details card-->


								<div class="card mb-4 acc">
									<div class="card-header">Detail Akun</div>
									<div class="card-body">
										<div style="text-align: right;">
											<div>
												<?php
												if ($check == 0) {
												?>
													<a href="<?= base_url('/tambah_profile') ?>" class="btn btn-primary btn-sm">Tambah</a>
												<?php
												} else if ($check == 1) {
												?>
													<a href="<?= base_url('/edit_profile') ?>" class="btn btn-warning btn-sm">Ubah</a>
												<?php
												}
												?>
											</div>
										</div>
										<form>
											<!-- Form Group (username)-->
											<?php
											$current_user = user_id();
											?>
											<div class="mb-3">
												<label class="small mb-1"><b>Nama Organisasi</b></label>
												<p>
													<?php foreach ($donatur as $item) { ?>
														<?= $item->nama ?>
													<?php } ?>
												</p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Deskripsi Organisasi</b></label>
												<p>
													<?php foreach ($donatur as $item) { ?>
														<?= $item->deskripsi ?>
													<?php } ?>
												</p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Nomor Telepon</b></label>
												<p><?php foreach ($donatur as $item) : ?>
														<?= $item->no_telp ?>
													<?php endforeach; ?></p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Alamat</b></label>
												<p><?php foreach ($donatur as $item) : ?>
														<?= $item->alamat ?>
													<?php endforeach; ?></p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Kota</b></label>
												<p><?php foreach ($donatur as $item) : ?>
														<?= $item->kota ?>
													<?php endforeach; ?></p>
											</div>

											<?php
											$auth = service('authentication');
											$current_user = $auth->user();
											?>
											<div class="mb-3">
												<label class="small mb-1"><b>Email</b></label>
												<p><?= $current_user->email ?></p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Instagram</b></label>
												<p><?php foreach ($donatur as $item) : ?>
														<?= $item->instagram ?>
													<?php endforeach; ?></p>
											</div>

											<div class="mb-3">
												<label class="small mb-1"><b>Facebook</b></label>
												<p><?php foreach ($donatur as $item) : ?>
														<?= $item->facebook ?>
													<?php endforeach; ?></p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; BesCamp 2023</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Bootstrap core JavaScript-->
	<script src="<?= ('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= ('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= ('assets/js/sb-admin-2.min.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= ('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= ('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?= ('assets/js/demo/datatables-demo.js') ?>"></script>

</body>

</html>