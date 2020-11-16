<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title; ?></title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('resources'); ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url('resources'); ?>/css/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('resources'); ?>/css/startmin.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('resources'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url('Home');?>">Plataforma de Practicas Profesionales</a>
			</div>

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<ul class="nav navbar-right navbar-top-links">

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('correo_usuario'); ?> <b
							class="caret"></b>
					</a>
					<ul class="dropdown-menu dropdown-user">

						<li><a href="<?php echo base_url('Login/logout');?>"><i class="fa fa-sign-out fa-fw"></i>
								Logout</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">

						<li>
							<a href="<?php echo base_url('Home');?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
						</li>
						<!--
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                 /.nav-second-level 
                            </li>-->

						<?php if($this->session->userdata('tipo_usuario') == 0){ ?>
						<li>
							<a href="<?php echo base_url('Solicitud/vertodas');?>"><i class="fa fa-table fa-fw"></i>
								Solicitudes</a>
						</li>
						<li>
							<a href="<?php echo base_url('Solicitud/realizarinforme');?>"><i class="fa fa-edit fa-fw"></i> Informes</a>
						</li>
						<li>
							<a href="<?php echo base_url('Solicitud/papeleradereciclaje');?>"><i class="fa fa-trash-o fa-fw"></i>
								Papelera de Reciclcaje</a>
						</li>
						<?php }else{ ?>
						<li>
							<a href="<?php echo base_url('Solicitud/missolicitudes');?>"><i
									class="fa fa-paper-plane fa-fw"></i> Mis Solicitudes</a>
						</li>
						<li>
							<a href="<?php echo base_url('Solicitud/mipapelera');?>"><i class="fa fa-trash-o fa-fw"></i>
								Mi Papelera</a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row hidden-print">
					<div class="col-lg-12">
						<h1 class="page-header"><?php echo $title; ?></h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<?php echo $body; ?>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url('resources'); ?>/js/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('resources'); ?>/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url('resources'); ?>/js/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="<?php echo base_url('resources'); ?>/js/dataTables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/dataTables/dataTables.bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url('resources'); ?>/js/startmin.js"></script>

	<script>
		$(document).ready(function () {
			$('#dataTables-example').DataTable({
				responsive: true,
				searching: false,
				language: {
					"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
				}
			});
		});

    </script>
    
    <script type="text/javascript">
		$(document).ready(function () {
			$("#print-button").click(function () {
				window.print();
			});
		});

	</script>

	<!-- Flot Charts JavaScript -->
	<script src="<?php echo base_url('resources'); ?>/js/flot/excanvas.min.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot/jquery.flot.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot/jquery.flot.time.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot/jquery.flot.tooltip.min.js"></script>
	<script src="<?php echo base_url('resources'); ?>/js/flot-data.js"></script>
	<?php if(!empty($estoyenadmin)){ ?>
	<script>
		llamarCarreras(<?php echo $SO; ?>, <?php echo $EC; ?>, <?php echo $FI; ?>,<?php echo $CA; ?>);
	</script>
	<?php } ?>
</body>

</html>
