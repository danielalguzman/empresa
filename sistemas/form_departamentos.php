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
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/form_input_groups.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
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
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">FORMULARIO</span> - DEPARTAMENTOS</h4>
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
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> INICIO</a>
							<a href="datatable_departamentos.php" class="breadcrumb-item">LISTADO DE DEPARTAMENTOS</a>
							<span class="breadcrumb-item active">GRUPOS DE ENTRADA</span>
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

				<!-- Input group addons -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">DEPARTAMENTOS</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">En este apartado podras registrar los departamentos y las personas encargadas de estos mismos. </p>

						<form action="#">

							<fieldset class="mb-3">

								<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold"> </legend>

		                        <div class="form-group row">
									<label class="col-form-label col-lg-2"><center>CLAVE</center></label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-lock5"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="asigne la clave de su departamento ej. 102">
										</div>
									</div>
								</div>

		                        <div class="form-group row">
									<label class="col-form-label col-lg-2"><center>NOMBRE</center></label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-office"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="asignale un nombre a tu departamento ej. Contabilidad">
										</div>
									</div>
								</div>

		                        <div class="form-group row">
									<label class="col-form-label col-lg-2"><center>RESPONSABLE</center></label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user-tie"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="asignale un jefe responsable al departamento">
										</div>
									</div>
								</div>


<!--   
		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Styled select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control form-control-uniform" data-fouc>
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Custom BS select</label>
		                        	<div class="col-lg-10">
			                            <select class="custom-select">
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple select</label>
									<div class="col-lg-10">
			                            <select multiple="multiple" class="form-control">
			                                <option selected>Amsterdam</option>      
			                                <option selected>Atlanta</option>
			                                <option>Baltimore</option>
			                                <option>Boston</option>
			                                <option>Buenos Aires</option>
			                                <option>Calgary</option>
			                                <option selected>Chicago</option>
			                                <option>Denver</option>
			                                <option>Dubai</option>
			                                <option>Frankfurt</option>
			                                <option>Hong Kong</option>
			                                <option>Honolulu</option>
			                                <option>Houston</option>
			                                <option>Kuala Lumpur</option>
			                                <option>London</option>
			                                <option>Los Angeles</option>
			                                <option>Melbourne</option>
			                                <option>Mexico City</option>
			                                <option>Miami</option>
			                                <option>Minneapolis</option>
			                            </select>
									</div>
								</div>
 -->								
							</fieldset>
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">PUESTO </label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-menu6"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="número de empleado">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-inbox"></i></span>
											</span>
										</div>
									</div>
								</div>
-->								

								<div class="form-group row">
									<label class="col-form-label col-lg-2"><center>PUESTO</center></label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="puesto al que pertenece el responsable de tu departamento">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2"><center>EXTENSIÓN</center></label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-phone"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="asignale una extensión (número rápido a tu departamento)">
										</div>
									</div>
								</div>

					            <div class="table-responsive" align="center">
								    <br>
							        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_default"><center>GUARDAR</center><i class="icon-checkmark3"></i></button>
							        <br><br>
							    </div>    

							    <!-- Basic modal -->
				                <div id="modal_default" class="modal fade" tabindex="-1">
					                <div class="modal-dialog">
						                <div class="modal-content">
							                <div class="modal-header">
								                <h5 class="modal-title">¡REGISTRO EXITOSO!</h5>
								                <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>

							                <div class="modal-body">
								                <h6 class="font-weight-semibold"><center>La información proporcionada se ha almacenado correctamente.</center></h6>
							                </div>

							                <div class="modal-footer">
								                <button type="button" class="btn btn-link" data-dismiss="modal">Aceptar</button>
							                </div>
						                </div>
					                </div>
				                </div>
				<!-- /basic modal -->
					        </div>
				        </div>
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">APELLIDOS</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="apellidos">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">RFC</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=" ">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">PUESTO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="puesto en la empresa">
										</div>
									</div>
								</div>
							
-->								
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right icon addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right icon">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
										</div>
									</div>
								</div>
								
							</fieldset>
-->
<!--	
							<div class="mb-3 mt-2">
	
							<fieldset class="mb-3">														
								<legend class="text-uppercase font-size-sm font-weight-bold">Spinner addon</legend>
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left spinner addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left spinner">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right spinner addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right spinner">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right spinner addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left and right spinners">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-spinner9 spinner"></i></span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
-->								
<!--								
								<legend class="text-uppercase font-size-sm font-weight-bold">AQUÍ EMPIEZA</legend>
-->	
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">CORREO ELECTRONICO</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">@</span>
											</span>
											<input type="text" class="form-control" placeholder="ejemplo@hotmail.com">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">SUELDO SEMANAL</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">$</span>
												<span class="input-group-text">0.00</span>
											</span>
											<input type="text" class="form-control" placeholder="00,00">
										</div>
									</div>
								</div>
-->								
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right text addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right addon">
											<span class="input-group-append">
												<span class="input-group-text">%</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple right addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Multiple right addons">
											<span class="input-group-append">
												<span class="input-group-text">$</span>
												<span class="input-group-text">0.00</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right text addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">$</span>
											</span>
											<input type="text" class="form-control" placeholder="Left and right addons">
											<span class="input-group-append">
												<span class="input-group-text">.00</span>
											</span>
										</div>
									</div>
								</div>								
							</fieldset>
-->							
<!--
							<fieldset class="mb-3">
								<div class="form-group row">
									<label class="col-form-label col-lg-2">FECHA DE INGRESO </label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-menu6"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="día / mes / año">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-inbox"></i></span>
											</span>
										</div>
									</div>
								</div>
-->								
<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">NOMBRE (S)</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left icon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">APELLIDOS</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left icon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">RFC</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left icon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right icon addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right icon">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
										</div>
									</div>
								</div>								
							</fieldset>
-->								
<!--
							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Contextual class</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text bg-primary border-primary text-white">
													<i class="icon-pin-alt"></i>
												</span>
											</span>
											<input type="text" class="form-control border-left-0" placeholder="Primary addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom color class</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control border-right-0" placeholder="Pink addon">
											<span class="input-group-append">
												<span class="input-group-text bg-pink border-pink text-white">
													<i class="icon-help"></i>
												</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Color everything</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text bg-slate-700 border-slate-700 text-white">
													<i class="icon-lock2"></i>
												</span>
											</span>
											<input type="text" class="form-control bg-slate text-white border-transparent" placeholder="Solid background color">
											<span class="input-group-append">
												<span class="input-group-text bg-slate-700 border-slate-700 text-white">
													<i class="icon-help"></i>
												</span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
-->				
				<!-- /input group addons -->

				<!-- Input group buttons -->
<!--				
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Input group buttons</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Optional buttons as addons. Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-prepend (append)</code> to wrap the buttons. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Button addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<button class="btn btn-light" type="button">Button</button>
											</span>
											<input type="text" class="form-control" placeholder="Left button">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right button">
											<span class="input-group-append">
												<button class="btn btn-light" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right buttons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">	
												<button class="btn btn-light btn-icon" type="button"><i class="icon-user"></i></button>
											</span>
											<input type="text" class="form-control" placeholder="Left and right buttons">
											<span class="input-group-append">
												<button class="btn btn-light" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Button dropdown addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button dropdown</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left dropdown">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button dropdown</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right dropdown">
											<div class="input-group-append">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right button dropdowns</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left and right dropdowns">
											<div class="input-group-append">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Segmented button addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light">Action</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left buttons">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right buttons">
											<div class="input-group-append">
												<button type="button" class="btn btn-light">Action</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right buttons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light">Button</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>

											<input type="text" class="form-control" placeholder="Left and right buttons">

											<div class="input-group-append">
												<button type="button" class="btn btn-light btn-icon"><i class="icon-user"></i></button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Contextual button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<button class="btn bg-danger" type="button">Button</button>
											</span>
											<input type="text" class="form-control border-left-0" placeholder="Danger button">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom color button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control border-right-0" placeholder="Teal button">
											<span class="input-group-append">
												<button class="btn bg-teal" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
-->				
				<!-- /input group buttons -->


				<!-- Input group options -->
<!--				
				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Input group options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Besides default addon options, input groups support different variations of checkboxes, radio buttons, switches, contextual validation state options, icons in different positions. All colors can be easily changed in LESS variables, options and positions also can be mixed. However avoid using <code>&lt;select></code> elements here as they cannot be fully styled in WebKit browsers and <code>&lt;textarea></code> elements here as their rows attribute will not be respected in some cases.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Large input group</label>
									<div class="col-lg-10">
										<div class="input-group input-group-lg">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-mention"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group-lg">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default input group</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-git-pull-request"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Small input group</label>
									<div class="col-lg-10">
										<div class="input-group input-group-sm">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-statistics"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group-sm">
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text alpha-success text-success border-success"><i class="icon-comment"></i></span>
											</span>
											<input type="text" class="form-control border-success" placeholder="Success color classes">
										</div>
										<span class="form-text text-success">Success state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text alpha-danger text-danger border-danger"><i class="icon-graph"></i></span>
											</span>
											<input type="text" class="form-control border-danger" placeholder="Danger color classes">
										</div>
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-right row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid with icon</label>
									<div class="col-lg-10">
										<div class="position-relative">
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text alpha-success text-success border-success"><i class="icon-graduation"></i></span>
												</span>
												<input type="text" class="form-control border-success" placeholder="Success color classes">
											</div>
											<div class="form-control-feedback text-success">
												<i class="icon-checkmark-circle"></i>
											</div>
										</div>
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-right row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid with icon</label>
									<div class="col-lg-10">
										<div class="position-relative">
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text alpha-danger text-danger border-danger"><i class="icon-droplets"></i></span>
												</span>
												<input type="text" class="form-control border-danger" placeholder="Danger color classes">
											</div>
											<div class="form-control-feedback text-danger">
												<i class="icon-cancel-circle2"></i>
											</div>
										</div>
										<span class="form-text text-danger">Error input group helper</span>
									</div>
								</div>
							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Addon options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default checkbox</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="checkbox" checked>
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Default checkbox addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled checkbox</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<div class="input-group-text">
													<input type="checkbox" class="form-control-styled" name="input-addon-checkbox" checked data-fouc>
												</div>
											</span>
											<input type="text" class="form-control" placeholder="Styled checkbox addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default radio button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="radio" name="addon-radio">
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Unstyled radio addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled radio button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<div class="input-group-text">
													<input type="radio" name="addon-radio" class="form-control-styled" checked data-fouc>
												</div>
											</span>
											<input type="text" class="form-control" placeholder="Styled radio addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Switchery toggle</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="checkbox" class="form-control-switchery" checked data-fouc>
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Switchery toggle addon">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
-->				
				<!-- /input group options -->


				<!-- Touchspin spinners -->
<!--				
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Touchspin spinners
					</h6>
					<span class="text-muted d-block">Touch friendly input spinner component</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Bootstrap touchspin</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Basically Touchspin uses default Bootstrap <code>input-group</code> component styling with ability to add extra classes to the buttons and addons to match your design perfectly.</p>

								<div class="form-group">
									<label>Example with postfix: </label>
									<input type="text" value="55" class="form-control touchspin-postfix">
								</div>

								<div class="form-group">
									<label>Example with prefix: </label>
									<input type="text" value="0" class="form-control touchspin-prefix">
								</div>

								<div class="form-group">
									<label>Init with empty value: </label>
									<input type="text" value="" class="form-control touchspin-empty">
								</div>

								<div class="form-group">
									<label>Incremental/decremental step on up/down change: </label>
									<input type="text" value="10" class="form-control touchspin-step">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Depending on your needs, you can easily swith off mousewheel support, change steps and increments, use more complex examples with button groups and dropdowns.</p>

								<div class="form-group">
									<label>Button group example</label>
									<div class="input-group">
							            <input type="text" class="form-control touchspin-button-group" value="50">
							            <div class="input-group-append">
							                <button type="button" class="btn bg-primary">Action</button>
							                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
							                <div class="dropdown-menu dropdown-menu-right">
							                    <a href="#" class="dropdown-item">Action</a>
							                    <a href="#" class="dropdown-item">Another action</a>
							                    <a href="#" class="dropdown-item">Something else here</a>
							                    <div class="dropdown-divider"></div>
							                    <a href="#" class="dropdown-item">Separated link</a>
							                </div>
							            </div>
							        </div>
								</div>

								<div class="form-group">
									<label>Value attribute is not set: <span class="text-muted">applying settings.initval</span></label>
									<input type="text" value="" class="form-control touchspin-set-value">
								</div>

								<div class="form-group">
									<label>Value is set explicitly to 33: <span class="text-muted">skipping settings.initval</span></label>
									<input type="text" value="33" class="form-control touchspin-set-value">
								</div>

								<div class="form-group">
									<label>No mousewheel support: </label>
									<input type="text" value="10" class="form-control touchspin-no-mousewheel">
								</div>
							</div>
						</div>
					</div>
				</div>
-->				
				<!-- /touchspin spinners -->

				<!-- /default modal -->


				<!-- Touchspin layouts -->
<!--				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Horizontal spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Touchspin supports default Bootstrap <code>input-group</code> component sizing classes, applied to the input or wrapped in <code>div</code> with these classes.</p>

								<div class="form-group">
									<label>Large spinner</label>
									<input type="text" value="55" class="form-control form-control-lg touchspin-basic">
								</div>

								<div class="form-group">
									<label>Default spinner</label>
									<input type="text" value="55" class="form-control touchspin-basic">
								</div>

								<div class="form-group">
									<label>Small spinner</label>
									<input type="text" value="55" class="form-control form-control-sm touchspin-basic">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Vertical spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Also Touchspin library supports <code>vertical</code> spinner controls orientation, that appear on the right side. Buttons and icons are fully customizable.</p>

								<div class="form-group">
									<label>Large spinner</label>
									<input type="text" value="55" class="form-control form-control-lg touchspin-vertical">
								</div>

								<div class="form-group">
									<label>Default spinner</label>
									<input type="text" value="55" class="form-control touchspin-vertical">
								</div>

								<div class="form-group">
									<label>Small spinner</label>
									<input type="text" value="55" class="form-control form-control-sm touchspin-vertical">
								</div>
							</div>
						</div>
					</div>
				</div>
-->				
				<!-- /touchspin layouts -->

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
		<!-- /content wrapper -->

	</div>
	<!-- /page content -->

</body>
</html>