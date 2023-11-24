<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

    <body class="sb-nav-fixed">
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
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Program Beasiswa Donatur</h1>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Donatur Beasiswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Donatur</th>
                                            <th>Beasiswa</th>
                                            <th>Dana</th>
                                            <th>TKategori</th>
                                            <th>Target</th>
                                            <th>Ketentuan</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                            <td>Dikti</td>
                                            <td>Beasiswa Unggulan</td>
                                            <td>Rp. 100.000.000</td>
                                            <td>Megister S2</td>
                                            <td>25 orang</td>
                                            <td>Mahasiswa lanjut S2</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    </body>
	<?= $this->endsection() ?>
