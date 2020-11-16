<?php if($hayerror){ ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<?php echo $mensajeerror; ?>
</div>
<?php } ?>

<?php if($subidacorrecta){ ?>
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<?php echo $mensajecorrecto; ?>
</div>
<?php } ?>

<a class="btn btn-primary " href="<?php echo base_url('Solicitud/verSolicitud/'.$idsolicitud);?>" role="button"><i
				  class="fa fa-backward fa-fw"></i> Intentar de Nuevo</a>