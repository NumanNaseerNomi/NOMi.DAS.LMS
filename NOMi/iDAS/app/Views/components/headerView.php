<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- NOMi - Bootstrap CSS File - Start -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
		<!-- NOMi - Bootstrap CSS File - End -->
		<!-- NOMi - Font Awesome CSS File - Start -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/fontAwesome/css/fontAwesomeAll.min.css') ?>">
		<!-- NOMi - Font Awesome CSS File - End -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/iStyle.css') ?>">
		<!-- NOMi - Chart.js File - Start -->
		<script type="text/javascript" src="<?php echo base_url('/assets/plugins/chartJS/js/chart.min.js') ?>"></script>
		<!-- NOMi - Chart.js File - End -->
		<title>iDAS LMS</title>
		<?php $session = session(); ?>
	</head>
	<body>
		<!-- NOMi - Navigation Bar - Start -->
		<header class="fixed-top p-0 fs-4 shadow">
			<nav class="navbar p-0">
				<div class="container-fluid p-0">
					<div>
						<!-- NOMi - Side Navigation Bar - Start -->
						<?php if (isLoggedIn()) { ?>
						<div class="dropdown ms-2" onclick="prevent();">
							<a title="Menu" role="button" id="menuDropdownButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bars"></i></a>
							<div class="dropdown-menu dropdown-menu-dark dropdown-menu-start shadow" aria-labelledby="menuDropdownButton">
								<!-- <a class="dropdown-item" href="<?php echo base_url('/') ?>"><i class="far fa-home"></i>Home</a> -->
								<a class="dropdown-item" href="<?php echo base_url('GradeBook'); ?>"><i class="far fa-chart-bar"></i>Grade Book</a>
								<a class="dropdown-item" href="<?php echo base_url('AccountBook'); ?>"><i class="far fa-file-invoice-dollar"></i>Account Book</a>
								<a class="dropdown-item" href="<?php echo base_url('TimeTable'); ?>"><i class="far fa-calendar-alt"></i>Time Table</a>
								<!-- 	<hr class="dropdown-divider"/>
								<div class="accordion" id="menuAccordion">
										<a class="dropdown-item menuHeadingOne" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseOne" aria-expanded="true" aria-controls="menuCollapseOne">-<i class="far fa-bell"></i>Collapsible #1</a>
										<div id="menuCollapseOne" class="collapse" aria-labelledby="menuHeadingOne" data-bs-parent="#menuAccordion">
												<a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
												<a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
												<a class="dropdown-item" href="">--<i class="far fa-language"></i>Action</a>
										</div>
										<a class="dropdown-item menuHeadingTwo" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapseTwo" aria-expanded="false" aria-controls="menuCollapseTwo">-<i class="far fa-user"></i>Collapsible #2</a>
										<div id="menuCollapseTwo" class="collapse" aria-labelledby="menuHeadingTwo" data-bs-parent="#menuAccordion">
												<a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
												<a class="dropdown-item" href="">--<i class="far fa-user"></i>Action</a>
												<a class="dropdown-item" href="">--<i class="far fa-language"></i>Action</a>
										</div>
								</div>  -->
								<hr class="dropdown-divider"/>
								<p class="small m-0 text-center"><a class="text-decoration-none" href="https://www.fb.com/numan.naseer.nomi" target="_blank"><strong>NOMi</strong></a> - iDAS.1.0.0</p>
							</div>
						</div>
						<?php } ?>
						<!-- NOMi - Side Navigation Bar - End -->
					</div>
					<div>
						<a class="text-decoration-none" href="<?php echo base_url('/') ?>">
							<b class="d-none d-sm-block">DAR-E-ARQAM</b>
							<b class="d-block d-sm-none">DAS</b>
						</a>
					</div>
					<div>
						<!-- NOMi - My TO-DOs - Start -->
						<?php if (isLoggedIn()) { ?>
						<div class="btn-group me-2">
							<div class="dropdown">
								<a title="My TO-DOs" role="button" id="myToDos" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-tasks"></i></a>
								<div class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow" aria-labelledby="myToDos">
									<a class="dropdown-item" href="">Coming Soon...</a>
									<!-- <a class="dropdown-item" href="">Another action</a>
									<hr class="dropdown-divider"/>
									<a class="dropdown-item" href="">Something else here</a> -->
								</div>
							</div>
						</div>
						<!-- NOMi - My TO-DOs - End -->
						<!-- NOMi - My Notifications - Start -->
						<div class="btn-group me-2">
							<div class="dropdown">
								<a title="My Notifications" role="button" id="myNotifications" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="myNotifications">
									<a class="dropdown-item" href="">Coming Soon...</a>
									<!-- <a class="dropdown-item" href="">Another action</a>
									<hr class="dropdown-divider"/>
									<a class="dropdown-item" href="">Something else here</a> -->
								</div>
							</div>
						</div>
						<!-- NOMi - My Notifications - End -->
						<!-- NOMi - Profile Setting - Start -->
						<div class="btn-group me-2">
							<div class="dropdown">
								<a title="My Profile" role="button" id="myProfile" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i></a>
								<div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="myProfile">
									<a class="dropdown-item text-center" href="<?php echo base_url('Profile'); ?>" title="My Profile">
										<p class="m-0"><?php echo $session->iDASUser->name; ?></p>
										<p class="small m-0"><?php echo '@' . $session->iDASUser->userName; ?></p>
										<!-- <p class="small m-0"><?php //echo $session->iDASUser->userRoleName; ?></p> -->
										<!-- <p class="m-0">#if std class</p> -->
									</a>
									<hr class="dropdown-divider"/>
									<a class="dropdown-item" href="<?php echo base_url('Settings'); ?>"><i class="far fa-cogs"></i>Settings</a>
									<hr class="dropdown-divider"/>
									<a class="dropdown-item" href="<?php echo base_url('Logout'); ?>"><i class="far fa-power-off"></i>Log Out</a>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- NOMi - Profile Setting - End -->
					</div>
				</div>
			</nav>
		</header>
		<!-- NOMi - Navigation Bar - End -->
		<!-- NOMi - Main Container - Start -->
		<div class="container-fluid pt-5">
			<?php /*
			<!-- NOMi - sessionTimeOutModal modal - Start -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sessionTimeOutModal">
			Launch static backdrop modal
			</button>
			<!-- NOMi - Modal -->
			<div class="modal fade" id="sessionTimeOutModal" tabindex="-1" aria-labelledby="sessionTimeOutModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content shadow">
						<div class="modal-body">
							<h5 class="modal-title" id="sessionTimeOutModalLabel">Your Session has been Expired..!</h5>
							<hr/>
							<div class="mb-3">
								<label for="userName" class="form-label">User Name</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userName" name="userName" placeholder="numan.naseer.nomi" required />
							</div>
							<div class="mb-3">
								<label for="userPassword" class="form-label">Enter Your Password</label>
								<input type="password" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userPassword" name="userPassword" placeholder="NumanNaseerNomi" required />
							</div>
							<hr/>
							<div class="d-flex gap-2 justify-content-end">
								<a href="<?php echo base_url('logout') ?>"><button type="button" class="btn btn-outline-danger btn-sm">Logout</button></a>
								<a href=""><button type="button" class="btn btn-outline-primary btn-sm">Stay Connected</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- NOMi - sessionTimeOutModal modal - End -->
			*/ ?>