<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<body>
		<div id="st-container" class="st-container">
			<nav class="st-menu st-effect-1" id="menu-1">
                <h2 class=""><i class="fas fa-graduation-cap"></i>
				    <strong>BesCamp</strong></h2>
				<ul>
                    <li><a href="/profiledon"><i class="fa-solid fa-user"></i> Data Diri</a></li>
                    <li><a href="/beadonatur"><i class="fas fa-award"></i> Program Beasiswa</a></li>
                    <li><a href="#" class="dropdown"><i class="fas fa-user-graduate"></i> Beswan <i class="fas fa-angle-down arrow" ></i></a>
                    <div class="sub-menu">
                    <a href="#"><i class="fa-solid fa-users" style="color: #ffffff;"></i> Pendaftar Beasiswa</a>
                    <a href="#"> <i class="fa-regular fa-id-card" style="color: #ffffff;"></i>  Penerima Beswan</a>
                    </div>
                  </li>
                 
                    <li><a href="#"><i class="fas fa-book"></i> Aktivitas <i class="fas fa-angle-down arroww" ></i></a>
                    <div class="sub-menuuu">
                    <a href="#"><i class="fa-solid fa-money-bill-transfer" style="color: #ffffff;"></i> Daftar Pengeluaran</a>
                    <a href="#"><i class="fas fa-dollar-sign"></i> Pengiriman Dana</a>
                    </div>
                    </li>

                    <li><a href="#" id="logoutButton"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
				</ul>
			</nav>
			
			<div class="st-content">
				<div class="st-content-inner">
				<!-- Top Navigation -->
				<header class="codrops-header">
					<h1>BesCamp <span>Dashboard Donatur</span></h1>
				</header>
					<div class="main clearfix">
						<div id="st-trigger-effects" class="">
							<button data-effect="st-effect-1" style="position:fixed;top:1vh;left:1vw;"><i class="fa-solid fa-bars"></i></button>
					</div>
					
	<!-- Basic DataTable -->
	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Beswan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Beasiswa</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/beadonatur">Lihat Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Pengeluaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Pengiriman Dana
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="1000%" height="200"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Pengiriman Dana
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="1000%" height="200"></canvas></div>
                                </div>
                            </div>
                        </div>
                       
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Penerima Beasiswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Asal Pendidikan</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Beasiswa</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Gilang Ramadhan</td>
                                            <td>Universitas Lampung</td>
                                            <td>Kalianda, 19/08/2002</td>
                                            <td>Lampung Selatan</td>
                                            <td>Beasiswa Djarum</td>
                                            <td>Rp. 1.500.000/bulan</td>
                                        </tr>
                                        <tr>
                                            <td>Vidya Sinta Bilkis</td>
                                            <td>Universitas Indonesia</td>
                                            <td>Kemiling, 10/09/2003</td>
                                            <td>Bandar Lampung</td>
                                            <td>Beasiswa KSE</td>
                                            <td>Rp. 1.000.000/bulan</td>
                                        </tr>
                                        <tr>
                                            <td>Cely Febita Ilham</td>
                                            <td>Universitas Lampung</td>
                                            <td>Bandar Jaya, 19/02/2003</td>
                                            <td>Lampung Tengah</td>
                                            <td>Beasiswa BI</td>
                                            <td>Rp. 1.800.000/bulan</td>
                                        </tr>
                                        <tr>
                                            <td>Retno Lestari</td>
                                            <td>Universitas padjajaran</td>
                                            <td>Kotabumi, 125/05/2003</td>
                                            <td>Lampung Utara</td>
                                            <td>Beasiswa Unggulan</td>
                                            <td>Rp. 11.000.000/bulan</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
    <!--/ Basic DataTable -->
			
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/sidebarEffects.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
        </div>
	</body>
	<?= $this->endsection() ?>
