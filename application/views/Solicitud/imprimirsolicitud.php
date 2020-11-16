<div class="row">
	<div class="col-md-12">
		<div class="row hidden-print">
			<div class="col-sm-1">
				<span id="print-button" class="btn btn-default pull-left">Imprimir</span>
			</div>
			<div class="col-sm-5">
				<p></p>
				<p>(Para guardar en la ventana de impresi&oacute;n selecciona guardar como PDF.)</p>
			</div>
			<div class="col-lg-6 text-right ">
				<a class="btn btn-primary " <?php if($this->session->userdata('tipo_usuario') == 0){ ?>
									href="<?php echo base_url('Solicitud/vertodas');?>"
									<?php }else{ ?>
									href="<?php echo base_url('Solicitud/missolicitudes');?>"
									<?php } ?> role="button"><i
						class="fa fa-backward fa-fw"></i> Regresar</a>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-offset-1 col-sm-10">
		<div class="row text-center">
			<div class="col-sm-12">
				<img src="<?php echo base_url('resources'); ?>/imgs/logo-modelo.png" alt="">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table cellspacing="0" class="pull-right">
					<tbody>
						<tr>
							<td align="right"><strong>DEPARTAMENTO:</strong></td>
							<td>&nbsp; ESCUELA DE INGENIER&Iacute;A</td>
						</tr>
						<tr>
							<td align="right"><strong>No. DE OFICIO:</strong></td>
							<td>&nbsp;
								INGPR-<?= date_format(date_create($solicitude['fecha_alta_solicitud']), 'dmy'); ?>-<?= sprintf('%03d', $solicitude['id_solicitud'])?>
							</td>
						</tr>
						<tr>
							<td align="right"><strong>ASUNTO:</strong></td>
							<td>&nbsp; CARTA PRESENTACI&Oacute;N PR&Aacute;CTICAS</td>
						</tr>
						<tr>
							<td colspan="2" align="right">M&eacute;rida, Yucat&aacute;n a
								<?= date_format(date_create($solicitude['fecha_alta_solicitud']), 'd');?> de
								<?= $altasolicitud;?> de
								<?= date_format(date_create($solicitude['fecha_alta_solicitud']), 'Y');?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table cellspacing="0">
					<tbody>
						<tr>
							<td> <strong><?= $solicitude['nombre_dirigido_solicitud']; ?></strong></td>
						</tr>
						<tr>
							<td> <strong><?= $solicitude['puesto_solicitud']; ?></strong> </td>
						</tr>
						<tr>
							<td> <strong><?= $solicitude['nombre_empresa_solicitud']; ?></strong> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<p>Por este medio me permito presentar al <strong>Br. <?= $solicitude['nombres_alumno_solicitud']; ?>
						<?= $solicitude['apellidos_alumno_solicitud']; ?></strong> con matr&iacute;cula
					<strong><?= $solicitude['matricula_solicitud']; ?></strong>, quien es alumno del
					<strong><?= $solicitude['semestre_id']; ?>º semestre</strong> de la carrera de
					<strong> Ingeniería
						<?php foreach ($all_carreras as $carrera) {
                         if($carrera['id_carrera'] == $solicitude['carrera_id']){
                            echo $carrera['nombre_carrera'];
                         }
                    } ?>
					</strong> de nuestra universidad y debido a que quiere
					realizar <strong>Pr&aacute;cticas Profesionales</strong> como parte de su formaci&oacute;n
					ingenieril, solicitamos de la manera m&aacute;s atenta, se le concedan las facilidades necesarias
					para la realizaci&oacute;n de dichas pr&aacute;cticas, comenzando el
					<strong><?= date_format(date_create($solicitude['fecha_inicio_soliciud']), 'd');?> de
						<?= $mesinicio;?> de
						<?= date_format(date_create($solicitude['fecha_inicio_soliciud']), 'Y');?></strong> y
					finalizando el <strong><?= date_format(date_create($solicitude['fecha_final_solicitud']), 'd');?> de
						<?= $mesfinal;?> de
						<?= date_format(date_create($solicitude['fecha_final_solicitud']), 'Y');?></strong>, con horario
					de <strong><?=$solicitude['horario_solicitud'];?></strong>.</p>
				<p>Para el aprovechamiento del alumno requerimos la supervisi&oacute;n de sus actividades mediante
					bit&aacute;cora de cumplimiento mensual, misma que nos servir&aacute; como comprobante de sus
					actividades en el tiempo comprometido. As&iacute; como la flexibilidad necesaria para que el alumno
					cumpla con las responsabilidades y obligaciones para con la universidad.</p>
				<p>Expido la presente para los fines correspondientes que el interesado convenga, agradeciendo de
					antemano su atenci&oacute;n a la presente.</p>
				<p class="text-center">Atentamente</p>
				<br>
				<br>
				<br>
				<p class="text-center">MC LIZETT MAGALY AYUSO RAMOS</p>
				<p class="text-center"> <strong>COORDINADORA DE PROMOCI&Oacute;N Y VINCULACI&Oacute;N</strong> </p>
				<p class="text-center"> <strong>ESCUELA DE INGENIER&Iacute;A</strong> </p>
				<br>
				<br>
				<p class="text-center">
					<strong>Recibi&oacute;:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fecha:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></strong>
				</p>
				<p class="text-center">UNIVERSIDAD MODELO CARRETERA M&Eacute;RIDA - CHOLUL<br>200 MTS DESPU&Eacute;S DEL
					PERIF&Eacute;RICO<br>TEL. 930 19 00</p>
			</div>
		</div>
	</div>
</div>
<div class="row hidden-print">
<div class="col-lg-12 text-right ">
				<a class="btn btn-primary" <?php if($this->session->userdata('tipo_usuario') == 0){ ?>
									href="<?php echo base_url('Solicitud/vertodas');?>"
									<?php }else{ ?>
									href="<?php echo base_url('Solicitud/missolicitudes');?>"
									<?php } ?> role="button"><i
						class="fa fa-backward fa-fw"></i> Regresar</a>
			</div>
</div>
<br>
