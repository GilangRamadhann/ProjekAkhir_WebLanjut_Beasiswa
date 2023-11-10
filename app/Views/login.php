<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
       
          <div class="card-body p-4 p-sm-5">
            <h5 class="text-center text-bold">BesWan Login</h5><br>
            <form action="<?= base_url('/login/checkLogin'); ?>" method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                  placeholder="Password">
                <label for="floatingPassword">Kata Sandi</label>
              </div>


              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Simpan Kata Sandi
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-login btn-success text-uppercase fw-bold" type="submit" name="submit">Masuk</button>
              </div>

              <br><div class="text-center f">
              <a href="#forgot">Lupa Kata Sandi?</a>
              </div>
              <!-- Register buttons -->
              
              <br><br><div class="text-center">
              <div class="underline"></div>
               <br> <p>Tidak punya akun? <a href="#!">Buat Akun</a></p>

              </div>
              <br><br>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
<?= $this->endsection() ?>


