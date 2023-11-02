<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sidebar Transitions</title>
		<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link id="pagestyle" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.7" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
		<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
		<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />


	</head>
	<body>
		<div id="st-container" class="st-container">
			<nav class="st-menu st-effect-1" id="menu-1">
                <h2 class=""><i class="fas fa-graduation-cap"></i>
				    <strong>BesCamp</strong></h2>
				<ul>
                    <li><a href="#"><i class="fas fa-user-graduate"></i> Penerima Beasiswa</a></li>
                    <li><a href="#"><i class="fas fa-award"></i> Program Beasiswa</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> Data Akademik</a></li>
                    <li><a href="#"><i class="fas fa-dollar-sign"></i> Riwayat Keuangan</a></li>
                    <li><a href="#" id="logoutButton"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
				</ul>
			</nav>
			
			<div class="st-content">
				<div class="st-content-inner">
				<!-- Top Navigation -->
				<header class="codrops-header">
					<h1>BesCamp <span>Dashboard BesCamp</span></h1>
				</header>
					<div class="main clearfix">
						<div id="st-trigger-effects" class="">
							<button data-effect="st-effect-1" style="position:fixed;top:1vh;left:1vw;"><i class="fa-solid fa-bars"></i></button>
					</div>
					
	<!-- Basic DataTable -->
    <div class="row">
      <div class="col-12">
        <h4 id="basic-datatable" class="anchor-heading mb-4 fw-bold">Data Penerima Beasiswa</h4>
		<button type="button" class="btn btn-dark mb-3" id="addDataButton">
      		<i class="fas fa-plus"></i> Add Data
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
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Nama Beasiswa</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					<tbody>
                  <tr>
                    <td>1</td>
                    <td>Gilang Ramadhan</td>
                    <td>2117051082</td>
                    <td>Beasiswa BI</td>
                    <td>
					<button class="btn btn-primary btn-sm">
                    	<i class="fas fa-info-circle"></i> Detail
                    </button>
                    <button class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                    </td>
                  </tr>
                  
                </tbody>
                	</table>
            	</div>
            </div>
        </div>
    <!--/ Basic DataTable -->
			
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/sidebarEffects.js"></script>
	</body>
</html>