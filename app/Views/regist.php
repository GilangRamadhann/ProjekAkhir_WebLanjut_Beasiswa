<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<center>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?= base_url('assets/img/cap.png')?>" alt=""/>
                        <h3>BesCamp</h3>
                        <p></p>
                        <a href="<?= base_url('/login') ?>">Masuk</a>
                        <!-- <input type="submit" name="" value="Masuk"/><br/> -->
                    </div>
                    <div class="col-md-9 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Donatur</a>
                            </li>
                        </ul> -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">SELAMAT DATANG</h3>
                                <form method="POST" action="<?= base_url('/register/store') ?>" enctype="multipart/form-data">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nama *" value="" name="name"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username *" value="" name="username"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Kata Sandi *" value="" name="password"/>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="role">
                                                    <option class="hidden" selected disabled>Daftar Sebagai</option>
                                                    <option>Mahasiswa</option>
                                                    <option>Donatur</option>
                                                </select>
                                            </div>
                                            <input type="submit" name="submit" class="btnRegister" value="Daftar"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</center>
<?= $this->endsection() ?>