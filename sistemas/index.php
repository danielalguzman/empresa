<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Daniela Guzmán</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Monterrey, NL
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><center>PRINCIPAL</center></div> <i class="icon-menu" title="Main"></i></li>
						
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									INICIO
									<span class="d-block font-weight-normal opacity-50">  </span>
								</span>
							</a>
						</li>
					<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><center>INFORMACIÓN INTERNA</center></div> <i class="icon-menu" title="Forms"></i></li>

						<li class="nav-item nav-item-submenu">	
							<a href="#" class="nav-link"><i class="icon-office"></i> <span>EMPRESAS</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								
								<li class="nav-item"><a href="form_empresa.php" class="nav-link"><CENTER>REGISTRO DE LAS EMPRESAS</CENTER></a></li>

								<li class="nav-item"><a href="datatable_empresa.php" class="nav-link"><CENTER>LISTADO DE LAS EMPRESAS</CENTER></a></li>
							
							</ul>
						</li>	

						<li class="nav-item nav-item-submenu">	
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>DEPARTAMENTOS</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">								
                                <li class="nav-item"><a href="form_departamentos.php " class="nav-link">FORMULARIO DEPARTAMENTO</a></li>
								
								<li class="nav-item"><a href="datatable_departamentos.php" class="nav-link"><CENTER>ESPECIFICACIONES DE LOS DEPARTAMENTOS</CENTER></a></li>
								
							</ul>
						</li>		

						<li class="nav-item nav-item-submenu">
						
							<a href="#" class="nav-link"><i class="icon-man-woman"></i> <span>EMPLEADOS</span></a>
							
							<ul class="nav nav-group-sub" data-submenu-title="EMPLEADOS">
								
								<li class="nav-item"><a href="input_empleados.php" class="nav-link">FORMULARIO DE REGISTRO</a></li>

								<li class="nav-item"><a href="datatable_empleado.php" class="nav-link active">LISTADO DE EMPLEADOS</a></li> 

								<li class="nav-item nav-item-submenu">
								   <a href="#" class="nav-link"><i class="icon-airplane2"></i> <span>VACACIONES</span></a>
								   <ul class="nav nav-group-sub" data-submenu-title="Form components">
								
								        <li class="nav-item"><a href="form_vacaciones.php" class="nav-link">SOLICITUD PARA VACACIONES</a></li>

										<li class="nav-item"><a href="datatable_vacacion.php" class="nav-link active">LISTADO DE SOLICITUDES</a></li>
									</ul>
								</li>								
							</ul>
						</li>

						<li class="nav-item-header">
				   	  		<div class="text-uppercase font-size-xs line-height-xs"><center>APARTADOS PARA ALUMNOS</center></div> <i class="icon-menu" title="Forms"></i>
						</li>
			   			<li class="nav-item nav-item-submenu">	
			    			<a href="#" class="nav-link"><i class="icon-person"></i> <span>ALUMNOS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">							
                          		<li class="nav-item"> <a href="form_alumno.php" class="nav-link">FORMULARIO PARA ALUMNOS</a></li>
			
									<li class="nav-item"><a href="datatable_alumno.php" class="nav-link"><CENTER>ESPECIFICACIONES DE LOS ALUMNOS</CENTER></a></li>			

							</ul>
						</li>

						<li class="nav-item nav-item-submenu">	
			    			<a href="#" class="nav-link"><i class="icon-books"></i> <span>TUTORÍAS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">								
                    			<li class="nav-item"> <a href="form_tutoria.php" class="nav-link">AGENDAR TUTORÍA</a></li>

								<li class="nav-item"><a href="datatable_tutoria.php" class="nav-link"><CENTER>ESPECIFICACIONES DE LAS TUTORÍAS</CENTER></a></li>								
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">	
		    				<a href="#" class="nav-link"><i class="icon-bus"></i> <span>RUTAS</span></a>
		    				<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
                           		<li class="nav-item"> <a href="form_pagos.php" class="nav-link">FORMULARIO DE PAGO</a></li>						
							</ul>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">PÁGINA</span> PRINCIPAL</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-7">
<!-- Traffic sources 
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Traffic sources</h6>
								<div class="header-elements">
									<div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
										<label class="form-check-label">
											Live update:
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
										</label>
									</div>
								</div>
							</div>

							<div class="card-body py-0">
								<div class="row">
									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
												<i class="icon-plus3"></i>
											</a>
											<div>
												<div class="font-weight-semibold">New visitors</div>
												<span class="text-muted">2,349 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-visitors"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-watch2"></i>
											</a>
											<div>
												<div class="font-weight-semibold">New sessions</div>
												<span class="text-muted">08:20 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-sessions"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-people"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Total online</div>
												<span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="total-online"></div>
									</div>
								</div>
							</div>

							<div class="chart position-relative" id="traffic-sources"></div>
						</div>
/traffic sources -->
					</div>

					<div class="col-xl-5">

<!-- Sales stats
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Sales statistics</h6>
								<div class="header-elements">
									<select class="form-control" id="select_date" data-fouc>
										<option value="val1">June, 29 - July, 5</option>
										<option value="val2">June, 22 - June 28</option>
										<option value="val3" selected>June, 15 - June, 21</option>
										<option value="val4">June, 8 - June, 14</option>
									</select>
			                	</div>
							</div>

							<div class="card-body py-0">
								<div class="row text-center">
									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">5,689</h5>
											<span class="text-muted font-size-sm">new orders</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">32,568</h5>
											<span class="text-muted font-size-sm">this month</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">$23,464</h5>
											<span class="text-muted font-size-sm">expected profit</span>
										</div>
									</div>
								</div>
							</div>

							<div class="chart mb-2" id="app_sales"></div>
							<div class="chart" id="monthly-sales-stats"></div>
						</div>
 /sales stats -->

					</div>
				</div>
				<!-- /main charts -->


				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-8">

						<!-- Marketing campaigns -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Campañas Publicitarias</h6>
								<div class="header-elements">
									<span class="badge bg-success badge-pill">38 active</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Actualizar Datos </a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Registro Detallado </a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estadística</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Limpiar Lista</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>

							<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaigns-donut"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">38,390 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+24.6%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Oct 14, 01:57 pm</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaign-status-pie"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">3,569 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-1.9%)</span></h5>
										<span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Nov 06, 8:50 am</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Campañas</th>
											<th>Clientes</th>
											<th>Cambios</th>
											<th>Presupuesto</th>
											<th>Estado</th>
											<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
										</tr>
									</thead>
									<tbody>										
										<tr class="table-active table-border-double">
											<td colspan="5">AL DÍA DE HOY</td>
											<td class="text-right">
												<span class="progress-meter" id="today-progress" data-progress="30"></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Facebook</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															02:00 - 03:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$5,489</h6></td>
											<td><span class="badge bg-blue">Active</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
								
<!--										
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Youtube videos</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-danger mr-1"></span>
															13:00 - 14:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">CDsoft</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$2,592</h6></td>
											<td><span class="badge bg-danger">Closed</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
											
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Spotify ads</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-grey-400 mr-1"></span>
															10:00 - 11:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Diligence</span></td>
											<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 8.02%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$1,268</h6></td>
											<td><span class="badge bg-grey-400">On hold</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
-->											
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Twitter ads</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-grey-400 mr-1"></span>
															04:00 - 05:00
														</div>
													</div>
												</div>
											</td>

											<td><span class="text-muted">Deluxe</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$7,467</h6></td>
											<td><span class="badge bg-grey-400">On hold</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
<!--										
										<tr class="table-active table-border-double">
											<td colspan="5">Yesterday</td>
											<td class="text-right">
												<span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/bing.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Bing </a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-success mr-1"></span>
															09:00 - 13:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Métrica</span></td>
											<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 2.78%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$500</h6></td>
											<td><span class="badge bg-blue">Active</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Amazon</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-danger mr-1"></span>
															14:00 - 20:00
														</div>
													</div>
												</div>
											</td>
											
											<td><span class="text-muted">Azulado</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 102.79%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$2,190</h6></td>
											<td><span class="badge bg-blue">Active</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
-->										
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															20:00 - 21:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Teamable</span></td>
											<td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> 3.83%</span></td>
											<td><h6 class="font-weight-semibold mb-0">$6,350</h6></td>
											<td><span class="badge bg-danger">CERRADO</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /marketing campaigns -->


						<!-- Quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">

								<!-- Members online -->
								<div class="card bg-teal-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">5</h3>
											<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+37,6%</span>
					                	</div>
					                	
					                	<div>
											EMPRESAS EN LÍNEA
											<div class="font-size-sm opacity-75">EN PROMEDIO</div>
										</div>
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-4">

								<!-- Current server load -->
								<div class="card bg-pink-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">79.1%</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-sync"></i> Actualizar Datos</a>
														<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Registro de Datos </a>
														<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estadística</a>
														<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Limpiar Lista</a>
													</div>
						                		</div>
					                		</div>
					                	</div>
					                	
					                	<div>
											CARGA DEL SERVIDOR
											<div class="font-size-sm opacity-75">EN PROMEDIO </div>
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>

							<div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-blue-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">$35,390</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											INGRESOS AL DÍA
											<div class="font-size-sm opacity-75">$18,578 APROXIMADAMENTE</div>
										</div>
									</div>

									<div id="today-revenue"></div>
								</div>
								<!-- /today's revenue -->

							</div>
						</div>
						<!-- /quick stats boxes -->


						<!-- Support tickets -->
<!--						
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Support tickets</h6>
								<div class="header-elements">
									<a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
										<i class="icon-calendar3 mr-2"></i>
										<span></span>
									</a>
			                	</div>
							</div>

							<div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
								<div class="d-flex align-items-center mb-3 mb-md-0">
									<div id="tickets-status"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-md-0">
									<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
										<i class="icon-alarm-add"></i>
									</a>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">1,132</h5>
										<span class="text-muted">total tickets</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-md-0">
									<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
										<i class="icon-spinner11"></i>
									</a>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">06:25:00</h5>
										<span class="text-muted">response time</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th style="width: 50px">Due</th>
											<th style="width: 300px;">User</th>
											<th>Description</th>
											<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-active table-border-double">
											<td colspan="3">Active tickets</td>
											<td class="text-right">
												<span class="badge bg-blue badge-pill">24</span>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<h6 class="mb-0">12</h6>
												<div class="font-size-sm text-muted line-height-1">hours</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Annabelle Doney</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug</div>
													<span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<h6 class="mb-0">16</h6>
												<div class="font-size-sm text-muted line-height-1">hours</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Chris Macintyre</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div class="font-weight-semibold">[#1249] Vertically center carousel controls</div>
													<span class="text-muted">Try any carousel control and reduce the screen width below...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<h6 class="mb-0">20</h6>
												<div class="font-size-sm text-muted line-height-1">hours</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-blue rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Robert Hauber</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div class="font-weight-semibold">[#1254] Inaccurate small pagination height</div>
													<span class="text-muted">The height of pagination elements is not consistent with...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<h6 class="mb-0">40</h6>
												<div class="font-size-sm text-muted line-height-1">hours</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-warning-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Robert Hauber</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div class="font-weight-semibold">[#1184] Round grid column gutter operations</div>
													<span class="text-muted">Left rounds up, right rounds down. should keep everything...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr class="table-active table-border-double">
											<td colspan="3">Resolved tickets</td>
											<td class="text-right">
												<span class="badge bg-success badge-pill">42</span>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="icon-checkmark3 text-success"></i>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Alan Macedo</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div>[#1046] Avoid some unnecessary HTML string</div>
													<span class="text-muted">Rather than building a string of HTML and then parsing it...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="icon-checkmark3 text-success"></i>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Brett Castellano</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div>[#1038] Update json configuration</div>
													<span class="text-muted">The <code>files</code> property is necessary to override the files property...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="icon-checkmark3 text-success"></i>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Roxanne Forbes</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div>[#1034] Tooltip multiple event</div>
													<span class="text-muted">Fix behavior when using tooltips and popovers that are...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr class="table-active table-border-double">
											<td colspan="3">Closed tickets</td>
											<td class="text-right">
												<span class="badge bg-danger badge-pill">37</span>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="icon-cross2 text-danger-400"></i>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Mitchell Sitkin</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div>[#1040] Account for static form controls in form group</div>
													<span class="text-muted">Resizes control label's font-size and account for the standard...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-spinner11 text-grey"></i> Reopen issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="icon-cross2 text-danger"></i>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-brown-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Katleen Jensen</a>
														<div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
													</div>
												</div>
											</td>
											<td>
												<a href="#" class="text-default">
													<div>[#1038] Proper sizing of form control feedback</div>
													<span class="text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
												</a>
											</td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
															<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
															<a href="#" class="dropdown-item"><i class="icon-spinner11 text-grey"></i> Reopen issue</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
-->						
						<!-- /support tickets -->


						<!-- Latest posts -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">ÚLTIMAS PUBLICACIONES</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
		                	</div>

							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xl-6">
										<div class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
												<div class="card-img-actions">
<!--													
													<a href="#">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
														<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
													</a>
-->													
												</div>
											</div>

				        					<div class="media-body">
												<h6 class="media-title"><a href="#">Entregas de paquetes amigable</a></h6>
					                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
					                    			<li class="list-inline-item"><i class="icon-bubble-dots4"></i> COMENTARIO A MARY INDUSTRIES</li>
					                    		</ul>
												Mary Industries tiene el mejor sistema de entrega ya que puede facilitarte un monton las ent...
											</div>
										</div>

										<div class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
												<div class="card-img-actions">
													<br>
<!--													
													<a href="#">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
														<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
													</a>
-->													
												</div>
											</div>

				        					<div class="media-body">
				        						<br><br>
												<h6 class="media-title"><a href="#">Información y explicación completa</a></h6>
					                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
					                    			<li class="list-inline-item"><i class="icon-bubble-dots4"></i> COMENTARIO A CANNO INDUSTRIES</li>
					                    		</ul>
												Esta empresa proporciona la mejor explicación en cuanto a cualquiera de tus dudas tecno...
											</div>
										</div>
									</div>

									<div class="col-xl-6">
										<div class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
<!--				        						
												<div class="card-img-actions">
													<a href="#">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
														<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
													</a>
												</div>
-->												
											</div>
				        					<div class="media-body">
												<h6 class="media-title"><a href="#">Calidad de vídeo</a></h6>
					                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
					                    			<li class="list-inline-item"><i class="icon-bubble-dots4"></i> COMENTARIO A LALO INDUSTRIES</li>
					                    		</ul>
												LALO maneja una de las mejores calidades en cuanto a los vídeo juegos y tiene fácil acce..
											</div>
										</div>

										<div class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
<!--				        						
												<div class="card-img-actions">
													<a href="#">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
													</a>
												</div>
-->												
											</div>

				        					<div class="media-body">
				        						<br><br>
												<h6 class="media-title"><a href="#">Materiales de calidad</a></h6>
					                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
					                    			<li class="list-inline-item"><i class="icon-bubble-dots4"></i> COMENTARIO A PACOS INDUSTRIES</li>
					                    		</ul>
												Pacos cuenta con una gran variedad de productos escolares y de oficina a un súper precio y adem...
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /latest posts -->

					</div>

					<div class="col-xl-4">

						<!-- Progress counters -->
						<div class="row">
							<div class="col-sm-6">

								<!-- Available hours -->
								<div class="card text-center">
									<div class="card-body">

					                	<!-- Progress counter -->
										<div class="svg-center position-relative" id="hours-available-progress"></div>
										<!-- /progress counter -->


										<!-- Bars -->
										<div id="hours-available-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /available hours -->

							</div>

							<div class="col-sm-6">

								<!-- Productivity goal -->
								<div class="card text-center">
									<div class="card-body">

										<!-- Progress counter -->
										<div class="svg-center position-relative" id="goal-progress"></div>
										<!-- /progress counter -->

										<!-- Bars -->
										<div id="goal-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /productivity goal -->

							</div>
						</div>
						<!-- /progress counters -->

						<!-- Daily sales -->
<!--						
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Daily sales stats</h6>
								<div class="header-elements">
									<span class="font-weight-bold text-danger-600 ml-2">$4,378</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
				                		</div>
				                	</div>
								</div>
							</div>

							<div class="card-body">
								<div class="chart" id="sales-heatmap"></div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th class="w-100">Application</th>
											<th>Time</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Sigma application</a>
														<div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i> New order</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">06:28 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$49.90</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha application</a>
														<div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-1"></i> Renewal</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">04:52 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$90.50</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Delta application</a>
														<div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">01:26 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$60.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Omega application</a>
														<div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">11:46 am</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$55.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha application</a>
														<div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-2"></i> Renewal</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">10:29 am</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$90.50</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
-->						
						<!-- /daily sales -->


						<!-- My messages -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">MIS MENSAJES</h6>
								<div class="header-elements">
									<span><i class="icon-history text-warning mr-2"></i> 05 6, 02:45</span>
									<span class="badge bg-success align-self-start ml-3">EN LÍNEA</span>
								</div>
							</div>

							<!-- Numbers -->
							<div class="card-body py-0">
								<div class="row text-center">
									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">102</h5>
											<span class="text-muted font-size-sm">EN ESTA SEMANA</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">408</h5>
											<span class="text-muted font-size-sm">EN ESTE MES</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">1,087</h5>
											<span class="text-muted font-size-sm">TODOS NUESTROS MENSAJES</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /numbers -->


							<!-- Area chart -->
							<div id="messages-stats"></div>
							<!-- /area chart -->


							<!-- Tabs -->
		                	<ul class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
								<li class="nav-item">
									<a href="#messages-tue" class="nav-link font-size-sm text-uppercase active" data-toggle="tab">
										MARTES
									</a>
								</li>

								<li class="nav-item">
									<a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
										Domingo
									</a>
								</li>
							</ul>
							<!-- /tabs -->


							<!-- Tabs content -->							
							<div class="tab-content card-body">
								<div class="tab-pane active fade show" id="messages-tue">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">10</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Fer Coronado</a>
													<span class="font-size-sm text-muted">14:58</span>
												</div>
												Buen manejo de la aplicacion desde usuarios c...
											</div>
										</li>

										<li class="media">
											<div class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">5</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Amaris Porras</a>
													<span class="font-size-sm text-muted">13:16</span>
												</div>

												Gran variedad de datos bien colocados y entendibles
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Gabby López</a>
													<span class="font-size-sm text-muted">09:48</span>
												</div>

												Excelente manejo de las empresas, todas ellas cumplen con lo espera...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Fabiola Díaz</a>
													<span class="font-size-sm text-muted">23:54</span>
												</div>

												Las empresas con las que cuentas son excelentes y de buena calidad. Sigue reclutando a emp...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">												
												<div class="d-flex justify-content-between">
													<a href="#">Evelyn Guzmán</a>
													<span class="font-size-sm text-muted">12:43</span>
												</div>

												Interesante conjunto de empresas, buena elección.
											</div>
										</li>
									</ul>
								</div>

								<div class="tab-pane fade" id="messages-mon">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Isaac Becerra</a>
													<span class="font-size-sm text-muted">Domingo, 20:58</span>
												</div>

												Me gustó mucho el manejo de la información. Sigue así.
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Victor de León</a>
													<span class="font-size-sm text-muted">Domingo, 14:35</span>
												</div>

												Excelente página.
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Hanna González</a>
													<span class="font-size-sm text-muted">Domingo, 10:16</span>
												</div>

												Buena idea de listados y diseño. Vas muy bien.
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Bob Martínez</a>
													<span class="font-size-sm text-muted">Domingo, 09:20</span>
												</div>

												Muy buena empresa la de Canno I., recluta mas asi.
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Marta Ramírez</a>
													<span class="font-size-sm text-muted">Domingo, 11:29</span>
												</div>

												Excelente página. Saludos.
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /tabs content -->

						</div>
						<!-- /my messages -->


						<!-- Daily financials -->
<!--						
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Daily financials</h6>
								<div class="header-elements">
									<div class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc>
											Realtime
										</label>
									</div>
									<span class="badge bg-danger-400 badge-pill">+86</span>
								</div>
							</div>

							<div class="card-body">
								<div class="chart mb-3" id="bullets"></div>

								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-statistics"></i></a>
										</div>
										
										<div class="media-body">
											Stats for July, 6: <span class="font-weight-semibold">1938</span> orders, <span class="font-weight-semibold text-danger">$4220</span> revenue
											<div class="text-muted">2 hours ago</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
										</div>
										
										<div class="media-body">
											Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
											<div class="text-muted">Dec 18, 18:36</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
										</div>
										
										<div class="media-body">
											Affiliate commission for June has been paid
											<div class="text-muted">36 minutes ago</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-spinner11"></i></a>
										</div>

										<div class="media-body">
											Order <a href="#">#37745</a> from July, 1st has been refunded
											<div class="text-muted">4 minutes ago</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-redo2"></i></a>
										</div>
										
										<div class="media-body">
											Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
											<div class="text-muted">Dec 12, 05:46</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>
-->
									<!-- Share your thoughts -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Envía tu comentario</h6>

								<div class="header-elements">
									<div class="list-icons">
				                    	<div class="list-icons-item dropdown">
					                    	<a href="#" class="list-icons-item" data-toggle="dropdown">
					                    		<i class="icon-arrow-down12"></i>
				                    		</a>

					                    	<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-popout"></i> Notificaciones</a>
												<a href="#" class="dropdown-item"><i class="icon-embed"></i>Vídeo</a>
												<a href="#" class="dropdown-item"><i class="icon-pin-alt"></i> Mostrar la Ubicación</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cog3"></i> Herramientas</a>
											</div>
				                    	</div>
			                    	</div>
								</div>
							</div>

							<div class="card-body">
								<form action="#">
			                    	<textarea name="enter-message" class="form-control mb-3" rows="3"form_ cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="d-flex align-items-center">
			                    		<div class="list-icons list-icons-extended">
			                                <a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add photo"><i class="icon-images2"></i></a>
			                            	<a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add video"><i class="icon-film2"></i></a>
			                                <a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add event"><i class="icon-calendar2"></i></a>
			                    		</div>

			                    		<div class="table-responsive" align="center">
								    <br>
							        <button type="button"class="btn bg-blue btn-labeled btn-labeled-right ml-auto" data-toggle="modal" data-target="#modal_default"><b><i class="icon-paperplane"></i></b>GUARDAR</button>
							        <br><br>
							        
							    </div>    

							    <!-- Basic modal -->
				                <div id="modal_default" class="modal fade" tabindex="-1">
					                <div class="modal-dialog">
						                <div class="modal-content">
							                <div class="modal-header">
								                <h5 class="modal-title">¡ENVÍO EXITOSO!</h5>
								                <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>

							                <div class="modal-body">
								                <h6 class="font-weight-semibold"><center>El comentario ha sido envíado a la plataforma. <br> Tu mensaje lo pueden ver los demas usuarios que ingresen a la página.</center></h6>
							                </div>

							                <div class="modal-footer">
								                <button type="button" class="btn btn-link" data-dismiss="modal">Aceptar</button>
							                </div>
						                </div>
					                </div>
				                </div>
				<!-- /basic modal -->
			         
			                    	</div>
								</form>
							</div>
						</div>
						<!-- /share your thoughts -->
								</ul>
							</div>
						</div>
						<!-- /daily financials -->

					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>