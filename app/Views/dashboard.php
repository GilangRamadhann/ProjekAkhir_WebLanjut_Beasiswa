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
					<div class="container-fluid">
      					<div class="row">
						<div class="col">
						<div class="card">
						<div class="card-body p-3">
						<div class="row">
						<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
								<h5 class="font-weight-bolder mb-0">
								$53,000
								<span class="text-success text-sm font-weight-bolder">+55%</span>
								</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
					<div class="col">
					<div class="card">
						<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
								<h5 class="font-weight-bolder mb-0">
								2,300
								<span class="text-success text-sm font-weight-bolder">+3%</span>
								</h5>
							</div>
							</div>
							<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
							</div>
							</div>
						</div>
						</div>
					</div>
					
					</div>
					<div class="col">
					<div class="card">
						<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
								<h5 class="font-weight-bolder mb-0">
								2,300
								<span class="text-success text-sm font-weight-bolder">+3%</span>
								</h5>
							</div>
							</div>
							<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="col">
					<div class="card">
						<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
								<h5 class="font-weight-bolder mb-0">
								2,300
								<span class="text-success text-sm font-weight-bolder">+3%</span>
								</h5>
							</div>
							</div>
							<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>		
		</div>
		</div>
			
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/sidebarEffects.js"></script>
	</body>
</html>