<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Program Beasiswa</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
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
                <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Data Lokasi</a>
                        <a class="collapse-item" href="#">Data Universitas</a>
                        <a class="collapse-item" href="#">Data Fakultas</a>
                        <a class="collapse-item" href="#">Data Jurusan</a>
                    </div>
                </div>
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
                <a class="nav-link" href="<?= base_url('/programbeasiswa') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Program Beasiswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/daftardonatur') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Donatur</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Beswan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/penerimabeasiswa') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Penerima Beasiswa</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dataakademik') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Akademik Beswan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/pengeluaran') ?>">
                    <i class="fas fa-fw fa-table"></i>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/cap.png') ?>">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Beasiswa Bank Indonesia</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/genbi.png') ?>" alt="...">
                                    </div>
                                    <p>
                                        Program Beasiswa Bank Indonesia (BI) merupakan beasiswa yang diberikan oleh Bank Indonesia bagi para mahasiswa jenjang sarjana (S1).
                                        Universitas Islam Bandung (Unisba) terpilih sebagai salah satu perguruan tinggi penyelenggara program beasiswa ini. Program Beasiswa Bank Indonesia bertujuan untuk:
                                    <ul>
                                        <li>Meningkatkan angka partisipasi pendidikan tinggi, indeks pembangunan manusia (Human Development Index), dan daya saing bangsa;</li>
                                        <li>Meningkatkan motivasi belajar serta menjamin keberlangsungan studi mahasiswa dan menghidupkan harapan bagi mahasiswa yang mempunyai prestasi (potensi) akademik untuk dapat menempuh serta menyelesaikan pendidikan tinggi; dan</li>
                                        <li>Meningkatkan prestasi mahasiswa baik dalam bidang akademik dan non akademik sehingga mampu menghasilkan SDM yang kreatif, mandiri, produktif, dan memiliki kepedulian sosial yang tinggi serta mampu berperan dalam pemberdayaan masyarakat.</li>
                                    </ul>
                                    Program beasiswa ini diperuntukkan bagi para mahasiswa program studi terpilih, yaitu Program Studi: Hukum Ekonomi Syari’ah, Perbankan Syari’ah, Ilmu Hukum, Statistika, Matematika, Ilmu Komunikasi, Akuntansi, Ekonomi Pembangunan, dan Manajemen (Prioritas) ; Ahwal Al‑Syakhshiyah, Komunikasi dan Penyiaran Islam, dan Teknik Industri (Non-Prioritas). Pemberian beasiswa Bank Indonesia tanpa ikatan dinas dan tidak dikaitkan dengan pelaksanaan seleksi penerimaan calon pegawai Bank Indonesia. Program Beasiswa BI tidak terbatas pada pembiayaan untuk mendukung biaya pendidikan, tunjangan studi, maupun biaya hidup, selain itu para mahasiswa penerima Beasiswa BI juga difasilitasi untuk tergabung dalam komunitas penerima Beasiswa BI. Dalam komunitas tersebut, para penerima Beasiswa BI mendapatkan berbagai pelatihan secara berkala, terencana, dan terarah guna meningkatkan kompetensi individu serta mengembangkan karakter dan jiwa kepemimpinan agar mampu menjadi insan unggul dan berdaya saing.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ketentuan & Persyaratan</h6>
                                </div>
                                <div class="card-body">
                                    <h4>Ketentuan</h4>
                                    <p>
                                    <ul>
                                        <li>Mahasiswa aktif program sarjana (S1) semester 3 (tiga) Universitas Islam Bandung.</li>
                                        <li>Memiliki IPK minimal 3.25 (skala 4).</li>
                                        <li>Setiap mahasiswa, menerima beasiswa paling lama hanya 4 (empat) semester sepanjang memenuhi kriteria yang telah ditentukan.</li>
                                        <li>Maksimal berusia 23 tahun atau belum berusia 24 tahun pada saat ditetapkan sebagai penerima beasiswa.</li>
                                        <li>Tidak sedang menerima beasiswa dari lembaga lain dan/atau berada dalam status ikatan dinas dari lembaga/instansi lain.</li>
                                        <li>Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat.</li>
                                        <li>Diutamakan bagi mahasiswa yang berasal dari latar belakang ekonomi keluarga kurang mampu (pra sejahtera). Dalam hal tidak terdapat calon penerima beasiswa yang berasal dari kalangan keluarga kurang mampu, maka dibuka kesempatan kepada calon penerima beasiswa lainnya sepanjang memenuhi persyaratan lainnya.</li>
                                        <li>Bersedia untuk berperan aktif, mengelola dan mengembangkan Generasi Baru Indonesia (GenBI) serta berpartisipasi dalam kegiatan yang diselenggarakan oleh Bank Indonesia.</li>
                                    </ul>
                                    </p>
                                    <h4>Persyaratan</h4>
                                    <p>
                                    <ul>
                                        <li>Fotokopi Kartu Tanda Penduduk (KTP)</li>
                                        <li>Fotokopi Kartu Tanda Mahasiswa (KTM)</li>
                                        <li>Fotokopi Kartu Keluarga (KK)</li>
                                        <li>Fotokopi sertifikat organisasi</li>
                                        <li>Fotokopi sertifikat/SK/Surat tugas kegiatan sosial atau pengabdian kepada masyarakat</li>
                                        <li>Fotokopi sertifikat prestasi</li>
                                        <li>Transkrip Nilai terbaru (format Per Semester)</li>
                                        <li>Surat Keterangan Tidak sedang Menerima Beasiswa, hubungi Bagian Kemahasiswaan Fakultas</li>
                                        <li>Surat Keterangan Tidak Mampu (SKTM) dari kelurahan/desa setempat, Surat Keterangan Penghasilan Orang Tua dari kelurahan/desa, atau Struk Gaji/Bukti Penghasilan Orang Tua</li>
                                        <li>Resume pribadi dalam Bahasa Indonesia</li>
                                        <li>Motivation letter dalam Bahasa Indonesia</li>
                                        <li>Surat Rekomendasi dari 1 orang tokoh (akademik atau non – akademik)</li>
                                        <li>Surat kesanggupan untuk aktif dalam komunitas GenBI dapat diunduh pada https://bit.ly/draftBRBIUnisba</li>
                                        <li>Form A.1, Biodata dari Bank Indonesia dapat diunduh pada https://bit.ly/draftBRBIUnisba</li>
                                    </ul>
                                    </p>
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
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>