<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Progbes Donatur</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
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
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
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
				Donatur
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- Nav Item - Tables -->
            <li class="nav-item">
				<a class="nav-link" href="<?= base_url('/profiledon') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Data Diri</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/beadonatur') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Program Beasiswa</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Aktifitas
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/pendaftar') ?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Pendaftar Beasiswa</span></a>
			</li>
			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/penerima') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Penerima Beasiswa</span></a>
			</li>

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('/daftarpengeluaran') ?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Pengeluaran Beswan</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Logout -->
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-fw fa-table"></i>
					<span>Keluar</span></a>
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
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Program Beasiswa</h6>
                        </div>
                        <div class="card-body">
						<button type="button" class="btn btn-success" ><a class="text-white" href="<?= base_url('/tambahdata') ?>">Tambah Data</a></button><br>
                            <br><div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Beasiswa</th>
											<th>Nama Donatur</th>
											<th>Deskripsi</th>
											<th>Ketentuan</th>
											<th>Syarat</th>
											<th>No Telp</th>
                                            <th>Pembukaan Pendaftaraan</th>
                                            <th>Penutupan Pendaftaraan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($data as $dt):?>
                                        <tr>
                                            <td><?= $dt['nama']; ?></td>
											<td><?= $dt['username']; ?></td>
											<td><?= $dt['deskripsi']; ?></td>
											<td><?= $dt['ketentuan']; ?></td>
											<td><?= $dt['syarat']; ?></td>
											<td><?= $dt['no_telp']; ?></td>
                                            <td><?= $dt['tgl_buka']; ?></td>
                                            <td><?= $dt['tgl_tutup']; ?></td>
                                            <td class="btn-ed">
												
                                                <button type="button" class="btn btn-warning"><a class= "text-white" href="<?= base_url('/editprogbes') ?>">Edit</a></button>
												<button type="button" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
										<?php endforeach; ?>
                                    </tbody>
                                </table>
								<!-- Pagination-->
								<nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Halaman</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Lainnya</a></li>
                        </ul>
                    </nav>
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