<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="<?= base_url('assets/css/landingpage.css') ?>">

        <title>Responsive website delivery</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Bescamp🎓</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Beranda</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Tentang Kami</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Layanan</a>
                        </li>
                    </ul>
                </div>

                <a href="<?= base_url('/register') ?>" class="button button__header">Mulai</a>
            </nav>
        </header>

        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">Raih Impianmu<br>Bersama Bescamp</h1>
                        <p class="home__description">Bersama Bescamp temukan beasiswa menarik yang akan bantu wujudkan impianmu 🎓</p>
                        <a href="#" class="button">Mulai Sekarang</a>
                    </div>   
                    <img src="<?= base_url('assets/images/wisuda.png')?>" alt="">
                </div>
            </section>

            <!--=============== ABOUT ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                <img src="<?= base_url('assets/images/cap.png')?>" alt="">
                    <div class="about__data">
                        <h2 class="section__title-center">Cari Tahu Lebih Banyak <br> Tentang Bescamp</h2>
                        <p class="about__description">Selamat datang di Bescamp🎓, platform inovatif yang bertujuan untuk menyediakan 
                            informasi lengkap dan terkini seputar beasiswa. Kami memahami bahwa akses terhadap pendidikan tinggi dapat 
                            menjadi tantangan, dan itulah mengapa Bescamp hadir untuk membantu mewujudkan impian pendidikan kamu.
                        </p>
                    </div>
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">Cari Tahu Lebih Banyak <br> Tentang Bescamp</h2>
                        <p class="about__description">Bescamp🎓 adalah sumber daya online yang didedikasikan untuk membantu mahasiswa
                            menemukan peluang beasiswa yang sesuai dengan kebutuhan dan aspirasi mereka. 
                            Dengan koleksi informasi yang komprehensif, kami berupaya memberikan panduan yang mudah diakses, informatif, dan terkini.
                        </p>
                    </div>
                    <img src="<?= base_url('assets/images/about.png')?>" alt="">
                </div>
            </section><br><br><br>

            <!--=============== SERVICES ===============-->
            <section class="services section container" id="services">
                <h2 class="section__title">Fitur yang Tersedia pada Bescamp🎓</h2>
                <div class="services__container grid">
                    <div class="services__data">
                        <h3 class="services__subtitle">Informasi Beasiswa</h3>
                        <center><img src="<?= base_url('assets/images/info.png')?>" alt=""></center>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Pendaftaran Beasiswa</h3>
                        <center><img src="<?= base_url('assets/images/daftar.png')?>" alt=""></center>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Pelaporan Pengeluaran</h3>
                        <center><img src="<?= base_url('assets/images/uang.png')?>" alt=""></center>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Pelaporan Akademik</h3>
                        <center><img src="<?= base_url('assets/images/akan.png')?>" alt=""></center>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Seleksi Beasiswa</h3>
                        <center><img src="<?= base_url('assets/images/seleksi.png')?>" alt=""></center>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Monitoring Beasiswa</h3>
                        <center><img src="<?= base_url('assets/images/monitoring.png')?>" alt=""></center>
                    </div>
                </div>
            </section><br><br><br>
        </main>

        <!--=============== MAIN JS ===============-->
        <script src="<?= base_url('assets/js/main.js') ?>"></script>
    </body>
</html>