<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Plataforma de Practicas Profesionales</title>

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

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Plataforma de Practicas Profesionales</h3>
                            <h6>Inicie Sesión para Continuar</h6>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo site_url('Usuario/add');?>" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Ingresa un E-mail" name="correo_usuario" type="email" value="<?php echo $this->input->post('correo_usuario'); ?>">
                                    </div>
                                    <?php echo form_error('correo_usuario', '<div class="alert alert-warning" role="alert">', '</div>'); ?>  

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Ingresa una Contraseña" name="password_usuario" type="password">
                                    </div>
                                    <?php echo form_error('password_usuario', '<div class="alert alert-warning" role="alert">', '</div>'); ?>  

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Repite tu Contraseña" name="password_usuario2" type="password">
                                    </div>

                                    <?php echo form_error('password_usuario2', '<div class="alert alert-warning" role="alert">', '</div>'); ?>  
                                   
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Registrarme</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('resources'); ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('resources'); ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('resources'); ?>/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('resources'); ?>/js/startmin.js"></script>

    </body>
</html>
