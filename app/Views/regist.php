<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link
    href="<?= base_url('assets/css/register.css')?>" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?= base_url('assets/img/cap.png')?>" alt=""/>
                        <h3>BesCamp</h3>
                        <p></p>
                        <input type="submit" name="" value="Masuk"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab"  role="tab" id="toggle-mahasiswa" aria-controls="home" aria-selected="true">Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab"  role="tab" id="toggle-donatur" aria-controls="profile" aria-selected="false">Donatur</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane" id="home" style="display:block;">
                                <h3 class="register-heading">BESWAN </h3>
                                
                                <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                                <div class="row register-form">
                                    <input type="hidden" name="role" value="beswan" />
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control" placeholder="Username" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Anda *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Kata Sandi *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass_confirm" class="form-control"  placeholder="Konfirmasi Sandi *" value="" />
                                        </div>
                                      
                                        <input type="submit" class="btnRegister"  value="Daftar"/>
                                    </div>
                                </div>
</form>
                            </div>
                            <div class="tab-pane" id="profile" style="display:none;">
                                <h3  class="register-heading">DONATUR</h3>
                                <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="row register-form">
                                    <input type="hidden" name="role" value="donatur" />
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control" placeholder="Username" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Anda *" value="" />
                                        </div>

                                        
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    
                                            <input type="password" name="password" class="form-control" placeholder="Kata Sandi *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass_confirm" class="form-control"  placeholder="Konfirmasi Sandi *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Daftar"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
    // Get the toggle buttons
    var toggleDonatur = document.getElementById('toggle-donatur');
    var toggleMahasiswa = document.getElementById('toggle-mahasiswa');

    // Get the content elements
    var profileContent = document.getElementById('profile');
    var homeContent = document.getElementById('home');

    // Add click event listeners to the toggle buttons
    toggleDonatur.addEventListener('click', function () {
        console.log('toggle-donatur clicked');
        // Hide mahasiswa content
        homeContent.style.display = 'none';
        // Show donatur content
        profileContent.style.display = 'block';

        // Add 'active' class to the clicked toggle button
        toggleDonatur.classList.add('active');

        // Remove 'active' class from other toggle button
        toggleMahasiswa.classList.remove('active');
    });

    toggleMahasiswa.addEventListener('click', function () {
        console.log('toggle-mahasiswa clicked');
        // Hide donatur content
        profileContent.style.display = 'none';
        // Show mahasiswa content
        homeContent.style.display = 'block';

        // Add 'active' class to the clicked toggle button
        toggleMahasiswa.classList.add('active');

        // Remove 'active' class from other toggle button
        toggleDonatur.classList.remove('active');
    });
</script>
