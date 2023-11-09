<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
       
          <div class="card-body p-4 p-sm-5">
            <i class="fa-solid fa-graduation-cap"></i>
            <h5 class="text-center">BesWan Login</h5>
            <form action="/checkLogin" method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email atau Nama Pengguna</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Kata Sandi</label>
              </div>


              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Simpan Kata Sandi
                </label>
              </div>
              

              <div class="d-grid">
                <button class="btn btn-login btn-success text-uppercase fw-bold" type="submit">Masuk</button>
              </div>

              <br><div class="text-center f">
              <a href="#forgot">Lupa Kata Sandi?</a>
              </div>
              <!-- Register buttons -->
              <br><br>
              <div class="text-center">
                <p>Tidak punya akun? <a href="#!">Buat Akun</a></p>

              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    
</body>
<?= $this->endsection() ?>