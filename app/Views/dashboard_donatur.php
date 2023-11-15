<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<body>
		<div id="st-container" class="st-container">
			<nav class="st-menu st-effect-1" id="menu-1">
                <h2 class=""><i class="fas fa-graduation-cap"></i>
				    <strong>BesCamp</strong></h2>
				<ul>
                    <li><a href="#"><i class="fa-solid fa-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="fas fa-award"></i> Program Beasiswa</a></li>
                    <li class=item><a href="#"><i class="fas fa-user-graduate"></i> Beswan</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> My Activity</a></li>
					<li><a href="#"><i class="fas fa-dollar-sign"></i> Transfer</a></li>
                    <li><a href="#" id="logoutButton"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
	<div class="wrapper">
  <div class="boxx">
   <div class="box1">
    <i class="fas fa-user-graduate fa-5x" style="color: white;margin:10px 5px"></i>
    <div class="title"><h2 class="int">Jumlah Beswan</h2>
</div>
	
   </div>
   <div class="box2">
    <i class="fas fa-dollar-sign fa-5x" style="color: white;margin:10px 5px"></i>
    <div class="title"><h2 class="intt">Transaksi Beswan</h2></div>
   </div>
   <div class="box3">
    <i class="fas fa-award fa-5x" style="color: white;margin:10px 5px"></i>
    <div class="title"><h2 class="inttt">Beasiswa</h2></div>
   </div>
   <div class="box4">
    <i class="fa-solid fa-money-bill-trend-up fa-5x" style="color: white;margin:10px 5px"></i>
    <div class="title"><h2 class="intttt">Pengeluaran</h2></div>
   </div>
  </div>

  <!-- Tabel -->
  <div class="row">
      <div class="col-12">
        <h4 id="basic-datatable" class="anchor-heading mb-4 fw-bold">Program Beasiswa </h4>
    	</button>
        <div class="doc-example">
          <ul class="nav nav-tabs-example justify-content-end" role="tablist"></ul>
          <div class="tab-content doc-example-content" id="tab-tabContent" data-label="Example">
            <div class="tab-pane fade show active" id="basic-datatable-preview" role="tabpanel" aria-labelledby="basic-datatable-preview-tab">
              <div class="card">
                <div class="card-datatable table-responsive pt-0">
                	<table class="datatables-basic table border-top">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Beasiswa</th>
                        <th>Pembukaan</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					<tbody>
                  <tr>
                    <td>1</td>
                    <td>Beasiswa Unggulan</td>
                    <td>20 Oktober 2022 s/d 30 November 2022</td>
                    <td>
					<button class="btn btn-primary btn-sm">
                    	<i class="fas fa-info-circle"></i> Detail
                    </button>
                    </td>
                  </tr>
                  
                </tbody>
                	</table>
            	</div>
            </div>
        </div>
		  
  <!-- Tabel -->
    <!--/ Basic DataTable -->
			
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/sidebarEffects.js"></script>
	</body>
	<?= $this->endsection() ?>
