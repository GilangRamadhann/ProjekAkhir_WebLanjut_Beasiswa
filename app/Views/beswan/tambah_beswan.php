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
                <a class="nav-link" href="<?= base_url('/beswan') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Program
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/daftarprogram') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Program Beasiswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/pendaftaran') ?>">
                    <i class="fa-solid fa-square-check"></i>
                    <span>Status Pendaftaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/laporan_pengeluaran') ?>">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Beswan</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/cap.png') ?>">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('/profil') ?>">
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
                        <div class="container-xl px-4 mt-4">
                            <!-- Account page navigation-->
                            <br>
                            <?php
                            $auth = service('authentication');
                            $current_user = $auth->user();
                            $userId = $auth->id();
                            ?>
                            <h3><?= $title ?></h3>
                            <hr class="mt-0 mb-4">
                            <form action="<?= base_url('/simpan_profil') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <input type="hidden" class="form-control" name="id_user" value="<?= $userId ?>">
                                    <div class="col-xl-4">
                                        <!-- Profile picture card-->
                                        <div class="card mb-4 mb-xl-0">
                                            <div class="card-header">Foto</div>
                                            <div class="card-body text-center">
                                                <!-- Profile picture image-->
                                                <!-- <img class="img-account-profile rounded-circle mb-2" src="assets/img/djarum.jpg" width="230px" alt=""> -->
                                                <div class="text-center">
                                                    <input type="file" id="foto" name="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detail</div>
                                            <div class="card-body">
                                                <!-- <form> -->
                                                <!-- Form Group (username)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="nama">Nama</label>
                                                    <input class="form-control" id="nama" type="text" name="nama">
                                                </div>

                                                <!-- Form Group (email address)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="deskripsi">NPM</label>
                                                    <input class="form-control" id="npm" type="text" name="npm">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="kota">Jurusan</label>
                                                    <select class="form-control" name="id_jurusan" value="">
                                                        <option selected value="">Pilih Jurusan</option>
                                                        <?php foreach ($jurusan as $value) : ?>
                                                            <option value="<?= $value['id'] ?>">
                                                                <?= $value['jurusan'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="kota">Fakultas</label>
                                                    <select class="form-control" name="id_fakultas" value="">
                                                        <option selected value="">Pilih Fakultas</option>
                                                        <?php foreach ($fakultas as $value) : ?>
                                                            <option value="<?= $value['id'] ?>">
                                                                <?= $value['fakultas'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="kota">Universitas</label>
                                                    <select class="form-control" name="id_univ" value="">
                                                        <option selected value="">Pilih Universitas</option>
                                                        <?php foreach ($universitas as $value) : ?>
                                                            <option value="<?= $value['id'] ?>">
                                                                <?= $value['universitas'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="nomor">Tahun Masuk Kuliah</label>
                                                    <input class="form-control" id="akt" type="number" name="akt">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="nomor">Agama</label>
                                                    <input class="form-control" id="agama" type="text" name="agama">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="nomor">Tanggal Lahir</label>
                                                    <input class="form-control" id="tgl_lahir" type="date" name="tgl_lahir">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="nomor">Nomor Telepon</label>
                                                    <input class="form-control" id="nomor" type="text" name="no_telp">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="add">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" cols="10" rows="2"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="kota">Kota</label>
                                                    <select class="form-control" name="id_lokasi" value="">
                                                        <option selected value="">Pilih Kota Domisili</option>
                                                        <?php foreach ($lokasi as $value) : ?>
                                                            <option value="<?= $value['id'] ?>">
                                                                <?= $value['kota'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- Save changes button-->
                                                <div class="mt-4 text-right">
                                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <!-- Begin Page Content -->
                <div class="container-fluid">


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