<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Pendaftar Beasiswa</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
	<!-- Custom styles for this page -->
	<link href="<?= base_url('assets/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

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

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-3">
						<h1 class="h3 mb-0 text-gray-800">Data Pendaftar Beasiswa</h1>
					</div>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-success">Pendaftar Beasiswa</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Nama Program</th>
											<th>Universitas</th>
											<th>Berkas</th>
											<th>Status Penerimaan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $row=1; foreach ($daftar as $d):?>
										<tr>
											<td><?= $row++;?></td>
											<td><?= $d['beswan_nama'] ?></td>
											<td><?= $d['program_nama'] ?></td>
											<td><?= $d['universitas_nama'] ?></td>
											<td><a href="<?= $d['berkas'] ?>" >BERKAS</a></td>
											<td><?= $d['status'] ?></td>
											<td class="d-flex justify-content">
												<a href="<?= base_url('penerimaan/'.$d['dataId'])?>" type="button" class="btn btn-warning mr-2">AKSI</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
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
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
</body>

</html>