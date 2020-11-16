<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Filtros Aplicables
			</div>
			<div class="panel-body">
				<form action="<?php echo base_url('solicitud/vertodas'); ?>" method="post" class="form-inline">
					<div class="form-group">
						<label>Carrera:</label>
						<select name="carrera_id" class="form-control">
							<option value="">Todas las Carreras</option>
							<?php 
                                    foreach($all_carreras as $carrera)
                                    {
                                        $selected = ($carrera['id_carrera'] == $this->input->post('carrera_id')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['nombre_carrera'].'</option>';
                                    } 
                                    ?>
						</select>
					</div>
					<span>&nbsp;</span>
					<div class="form-group">
						<label>Semestre:</label>
						<select name="semestre_id" class="form-control">
							<option value="">Todos los Semestres</option>
							<?php 
                                    foreach($all_semestres as $semestre)
                                    {
                                        $selected = ($semestre['id_semestre'] == $this->input->post('semestre_id')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$semestre['id_semestre'].'" '.$selected.'>'.$semestre['nombre_semestre'].'</option>';
                                    } 
                                    ?>
						</select>
					</div>
					<span>&nbsp;</span>
					<div class="form-group">
						Estado Solicitud :
						<select name="estado_solicitudes" class="form-control">
							<option value="">Todas las Etapas</option>
							<?php 
                                    $estado_solicitud_values = array(
                                        '1'=>'Solicitado',
                                        '2'=>'En Curso',
                                        '3'=>'Finalizado',
                                        '4'=>'Cancelado'
                                    );

                                    foreach($estado_solicitud_values as $value => $display_text)
                                    {	
                                        $selected = ($value == $this->input->post('estado_solicitudes')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                    } 
                                    ?>
						</select>
					</div>
					<span>&nbsp;</span>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="enviar">Consultar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Mostrando <?php echo $title; ?>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Id Solicitud</th>
								<th>Nombres Alumno Solicitud</th>
								<th>Apellidos Alumno Solicitud</th>
								<th>Matricula Solicitud</th>
								<th>Carrera Id</th>
								<th>Semestre Id</th>
								<th>Nombre Empresa Solicitud</th>

								<th>Correo Alumno Solicitud</th>
								<th>Fecha Inicio Soliciud</th>
								<th>Fecha Final Solicitud</th>

								<th>Estado Solicitud</th>

								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($solicitudes as $s){ ?>
							<tr class="gradeA">
								<td class="center"><?php echo $s['id_solicitud']; ?></td>
								<td class="center"><?php echo $s['nombres_alumno_solicitud']; ?></td>
								<td class="center"><?php echo $s['apellidos_alumno_solicitud']; ?></td>
								<td class="center"><?php echo $s['matricula_solicitud']; ?></td>
								<td class="center"><?php echo $s['carrera_id']; ?></td>
								<td class="center"><?php echo $s['semestre_id']; ?></td>
								<td class="center"><?php echo $s['nombre_empresa_solicitud']; ?></td>

								<td class="center"><?php echo $s['correo_alumno_solicitud']; ?></td>
								<td class="center"><?php echo $s['fecha_inicio_soliciud']; ?></td>
								<td class="center"><?php echo $s['fecha_final_solicitud']; ?></td>
								<td class="center">

									<?php 
                                    $estado_solicitud_values = array(
                                        '1'=>'Solicitado',
                                        '2'=>'En Curso',
                                        '3'=>'Finalizado',
                                        '4'=>'Cancelado'
                                    );

                                    foreach($estado_solicitud_values as $value => $display_text)
                                    {
                                        if($s['estado_solicitud'] == $value){
											echo $display_text;
										}
                                    } 
                                    ?>
								</td>
								<td class="center">
									<a title="Editar"
										href="<?php echo site_url('solicitud/edit/'.$s['id_solicitud']); ?>"><i
											class="fa fa-pencil fa-fw"></i></a>
									<a title="Eliminar"
										href="<?php echo site_url('solicitud/enviarAPapelera/'.$s['id_solicitud']); ?>"><i
											class="fa fa-trash fa-fw"></i></a>
									<a title="Ver"
										href="<?php echo site_url('solicitud/verSolicitud/'.$s['id_solicitud']); ?>"><i
											class="fa fa-eye fa-fw"></i></a>
									<a title="Imprimir"
										href="<?php echo site_url('solicitud/imprimirSolicitud/'.$s['id_solicitud']); ?>"><i
											class="fa fa-print fa-fw"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
