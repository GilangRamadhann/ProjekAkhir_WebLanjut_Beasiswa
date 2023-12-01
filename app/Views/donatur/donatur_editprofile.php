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
                <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <h3>Edit Data Diri</h3>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Gambar</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/djarum.jpg" width="230px" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG atau PNG tidak lebih dari 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-success" type="button">Ganti foto</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detail</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputOrganisasi">Nama Organisasi</label>
                            <input class="form-control" id="inputOrganisasi" type="text" placeholder="" value="PT. Djarum Foundation">
                        </div>
    
    
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputJob">Jobdesk</label>
                            <input class="form-control" id="inputJob" type="text" placeholder="" value="Donatur Beasiswa Djarum Plus">
                        </div>

						<div class="mb-3">
                                <label class="small mb-1" for="tgl">Tanggal Masuk</label>
                                <input class="form-control" id="tgl" type="date" placeholder="" value="30/12/2022">
                            </div>
                        
							<div class="mb-3">
                            <label class="small mb-1" for="sts">Status</label>
                            <input class="form-control" id="sts" type="text" placeholder="" value="Aktif">
                        </div>

						<div class="mb-3">
                            <label class="small mb-1" for="desk">Deskripsi Organisasi</label>
                            <input class="form-control" id="desk" type="text" placeholder="" value="PT Djarum adalah salah satu perusahaan rokok di Indonesia. Perusahaanini mengolah dan menghasilkan jenis rokok kretek dan cerutu. Ada tiga jenis rokok yang kita kenal selama ini. Rokok Cerutu (Terbuat dari dauntembakau dan dibungkus dengan daun tembakau pula), rokok putih(Terbuat dari daun tembakau dan dibungkus dengan kertas sigaret), danrokok kretek (Terbuat dari tembakau ditambah daun cengkeh dandibungkus dengan kertas sigaret).PT Jarum adalah salah satu jenis perusahaan perseroan yang ada diIndonesia. Namun dahulu PT Jarum adalah sebuah perusahaanperseorangan karna didirikan oleh seorang Oei Wie Gwan. PT. Djarummemiliki, 5 nilai-nilai inti dalam pengembangan perusahan. Nilai-nilai ituadalah .Fokus pada pelanggan, Profesionlisme, Organisasi yang terusbelajar, Satu Keluarga, Tanggung Jawab Sosial.">
                        </div>

						<div class="mb-3">
                            <label class="small mb-1" for="add">Alamat Lengkap</label>
                            <input class="form-control" id="add" type="text" placeholder="" value="Jalan Pemuda No. 43, Kudus, Jawa Tengah 59351.">
                        </div>

						
						<div class="mb-3">
                            <label class="small mb-1" for="email">Alamat Email</label>
                            <input class="form-control" id="email" type="text" placeholder="" value="robert01@gmail.com">
                        </div>

						
						<div class="mb-3">
                            <label class="small mb-1" for="tlp">Nomor telepon</label>
                            <input class="form-control" id="tlp" type="text" placeholder="" value="+628967850091">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-success" type="button">Simpan perubahan</button>
                    </form>
                </div>
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