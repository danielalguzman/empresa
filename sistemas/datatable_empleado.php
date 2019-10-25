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
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_extension_buttons_flash.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">LISTADO</span> - EMPLEADOS</h4>
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
							<a href="input_empleados.php" class="breadcrumb-item">FORMULARIO-EMPLEADOS</a>
							<span class="breadcrumb-item active">EMPLEADOS</span>
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

				<!-- Basic initialization -->
				<div class="card">

					<div class="card-body">
						<center>EN EL SIGUIENTE LISTADO PODREMOS ENCONTRAR LOS DATOS ORGANIZADOS DE TODOS NUESTROS EMPLEADOS.
						POR UN COSTADO PODRAS ENCONTRAR TAMBIÉN LA OPCION DE EDITAR ESTA INFORMACION Y DE ELIMINARLA.</center>
					</div>
					<table class="table datatable-button-flash-basic">
						<thead>
							<tr>
								<th>  </th>
								<th>  </th>
								<th><center>ID</center></th>
								<th><center>NOMBRE Y APELLIDO</center></th>
								<th><center>RFC</center></th>
								<th><center>PUESTO</center></th>
								<th><center>CORREO ELECTRÓNICO</center></th>
								<th>SALARIO</th>
								<th><center>FECHA DE INGRESO</center></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>
								<td>025</td>
								<td><a href="#"><center>Mayra Vázquez Ramírez</center></a></td>
								<td>VARM710325SS3</td>
								<td><center>Secretaria</center></td>
								<td>mayra@hotmail.com</td>
								<td>$1,400</td>
								<td><center>22-06-2004</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>026</td>
								<td><a href="#"><center>Orlando Zapata Sepúlveda</center></a></td>
								<td>ZASV791102SZ1</td>
								<td><center>Auxiliar Contable</center></td>
								<td>ozapatas@hotmail.com</td>
								<td>$1,200</td>
								<td><center>18-04-2008</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>027</td>
								<td><a href="#"><center>Pedro Arriaga Torres</center></a></td>
								<td>ARTP700210SQ9</td>
								<td><center>Director Administrativo</center></td>
								<td>parriagat@hotmail.com</td>
								<td>$1,800</td>
								<td><center>01-12-2008</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>028</td>
								<td><a href="#"><center>Rodrigo Barrón Uvalle</center></a></td>
								<td>BAUR691030SV3</td>
								<td><center>Auxiliar Operativo</center></td>
								<td>rbarronu@hotmail.com</td>
								<td>$1,200</td>
								<td><center>01-09-1998</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>029</td>
								<td><a href="#"><center>Simón Coronado Vázquez</center></a></td>
								<td>COVS650210WS1</td>
								<td><center>Director en Jefe</center></td>
								<td>scoronadov@hotmail.com</td>
								<td>$1,000</td>
								<td><center>31-10-2010</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>030</td>
								<td><a href="#"><center>Tomas Dosal Hernández</center></a></td>
								<td>DOHT650609SS5</td>
								<td><center>Secretario</center></td>
								<td>tdosalh@hotmail.com</td>
								<td>$1,400</td>
								<td><center>01-09-1998</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>031</td>
								<td><a href="#"><center>Daniela Guzmán Izaguirre</center></a></td>
								<td>GUID700429SS2</td>
								<td><center>Contadora</center></td>
								<td>dguzmani@hotmail.com</td>
								<td>$2,200</td>
								<td><center>04-12-2007</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>032</td>
								<td><a href="#"><center>Enrique Hernández Jimenez</center></a></td>
								<td>HEJE740112SR9</td>
								<td><center>Programador</center></td>
								<td>ehernandezj@hotmail.com</td>
								<td>$2,600</td>
								<td><center>10-01-2003</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>033</td>
								<td><a href="#"><center>Fernanda Rodríguez Chávez</center></a></td>
								<td>ROCF750911SST9</td>
								<td><center>Auxiliar Informático</center></td>
								<td>frodriguezc@hotmail.com</td>
								<td>$2,000</td>
								<td><center>21-08-2016</center></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-pencil7"></i></button>
								</td>

								<td>
									<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger"> <i class="icon-bin"></i></button>
								</td>

								<td>034</td>
								<td><a href="#"><center>Gerardo López Muñoz</center></a></td>
								<td>LOMG630509AA4</td>
								<td><center>Obrero</center></td>
								<td>glopezm@hotmail.com</td>
								<td>$1,000</td>
								<td><center>10-01-2003</center></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /basic initialization -->
			</div>
			<!-- /content area -->

			<!-- modal eliminar -->
				<div id="modal_theme_danger" class="modal fade" >
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-danger">
								<h6 class="modal-title">ESTAS A UN PASO DE PERDER ESTA INFORMACIÓN </h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold"><center>¿En verdad estas seguro de que deseas eliminar este departamento junto con su información?</center></p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">CANCELAR</button>
								<button type="button" class="btn bg-danger">ELIMINAR</button>
							</div>
						</div>
					</div>
				</div>
				<!-- modal eliminar -->

				<!-- modal editar -->
				<div id="modal_form_vertical" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">EDICION DE EMPLEADOS</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#">
								<div class="modal-body">
									<div class="form-group">
										<div class="form-group">

										    <div class="row" align="center">
											    <div class="col-sm-6">
												   <label>ID</label>
												    <input type="text" placeholder="nuemor de empleado" class="form-control">
											    </div>

											    <div class="col-sm-6">
												    <label>NOMBRE Y APELLIDO</label>
												     <input type="text" placeholder="ej. Daniela Guzmán Vázquez" class="form-control">
											    </div>
										    </div>
									    </div>

										<div class="row" align="center">
											<div class="col-sm-6">
												<label>RFC</label>
												<input type="text" placeholder="ej. GUVD010418NA6" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>PUESTO</label>
												<input type="text" placeholder="ej. Contadora" class="form-control">
											</div>
										</div>

										<div class="row" align="center">
										    <div class="col-sm-6">
										    	<br>
												<label>CORREO</label>
												<input type="text" placeholder="ejemplo@hotmail.com" class="form-control">
											</div>

											<div class="col-sm-6">
												<br>
												<label>FECHA INGRESO</label>
												<input type="text" placeholder="día / mes / año" class="form-control">
											</div>
									    </div>

									    <div class="form-group" align="center">
									    	<br>
										<label class="col-form-label col-lg-2">SUELDO</label>
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
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">CANCELAR</button>
									<button type="submit" class="btn bg-primary">GUARDAR</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /modal edición -->

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