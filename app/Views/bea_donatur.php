<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

    <body class="sb-nav-fixed">
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
