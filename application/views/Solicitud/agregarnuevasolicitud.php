<div class="row mt-2 mb-4">
	<div class="col-lg-12 text-right ">
		<a class="btn btn-primary " href="<?php echo base_url('Solicitud/missolicitudes');?>" role="button"><i
				class="fa fa-backward fa-fw"></i> Regresar</a>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Realizar Nueva Solicitud
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
                        <?php echo form_open('solicitud/add'); ?>
							<div class="form-group">
								<label>Nombres Alumno Solicitud:</label>
								<input class="form-control" type="text" name="nombres_alumno_solicitud"
                                    value="<?php echo $this->input->post('nombres_alumno_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('nombres_alumno_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Apellidos Alumno Solicitud:</label>
								<input class="form-control" type="text" name="apellidos_alumno_solicitud"
									value="<?php echo $this->input->post('apellidos_alumno_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('apellidos_alumno_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Matricula Solicitud:</label>
								<input class="form-control" type="text" name="matricula_solicitud"
									value="<?php echo $this->input->post('matricula_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('matricula_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
                                <label>Carrera:</label>
								<select name="carrera_id" class="form-control">
									<option value="">Selecciona la Carrera</option>
									<?php 
                                    foreach($all_carreras as $carrera)
                                    {
                                        $selected = ($carrera['id_carrera'] == $this->input->post('carrera_id')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['nombre_carrera'].'</option>';
                                    } 
                                    ?>
								</select>
                            </div>
                            <?php echo form_error('carrera_id', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
                                <label>Semestre:</label>
								<select name="semestre_id" class="form-control">
									<option value="" >Selecciona el Semestre</option>
									<?php 
                                    foreach($all_semestres as $semestre)
                                    {
                                        $selected = ($semestre['id_semestre'] == $this->input->post('semestre_id')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$semestre['id_semestre'].'" '.$selected.'>'.$semestre['nombre_semestre'].'</option>';
                                    } 
                                    ?>
								</select>
                            </div>
                            <?php echo form_error('semestre_id', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Nombre Empresa Solicitud:</label>
								<input class="form-control" type="text" name="nombre_empresa_solicitud"
									value="<?php echo $this->input->post('nombre_empresa_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('nombre_empresa_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Nombre Dirigido Solicitud:</label>
								<input class="form-control" type="text" name="nombre_dirigido_solicitud"
									value="<?php echo $this->input->post('nombre_dirigido_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('nombre_dirigido_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Puesto Solicitud:</label>
								<input class="form-control" type="text" name="puesto_solicitud"
									value="<?php echo $this->input->post('puesto_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('puesto_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Horario Solicitud:</label>
								<input class="form-control" type="text" name="horario_solicitud"
									value="<?php echo $this->input->post('horario_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('horario_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Nombre Proyecto Solicitud:</label>
								<input class="form-control" type="text" name="nombre_proyecto_solicitud"
									value="<?php echo $this->input->post('nombre_proyecto_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('nombre_proyecto_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Nombre Jefe Solicitud:</label>
								<input class="form-control" type="text" name="nombre_jefe_solicitud"
									value="<?php echo $this->input->post('nombre_jefe_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('nombre_jefe_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Cargo Jefe Solicitud:</label>
								<input class="form-control" type="text" name="cargo_jefe_solicitud"
									value="<?php echo $this->input->post('cargo_jefe_solicitud'); ?>" />
                            </div class="form-group">
                            <?php echo form_error('cargo_jefe_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div>
								<label>Celular Alumno Solicitud:</label>
								<input class="form-control" type="text" name="celular_alumno_solicitud"
									value="<?php echo $this->input->post('celular_alumno_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('celular_alumno_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Correo Alumno Solicitud:</label>
								<input class="form-control" type="email" name="correo_alumno_solicitud"
									value="<?php echo $this->input->post('correo_alumno_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('correo_alumno_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Fecha Inicio Soliciud:</label>
								<input class="form-control" type="date" name="fecha_inicio_soliciud"
									value="<?php echo $this->input->post('fecha_inicio_soliciud'); ?>" />
                            </div>
                            <?php echo form_error('fecha_inicio_soliciud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Fecha Final Solicitud:</label>
								<input class="form-control" type="date" name="fecha_final_solicitud"
									value="<?php echo $this->input->post('fecha_final_solicitud'); ?>" />
                            </div>
                            <?php echo form_error('fecha_final_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Conocimiento Solicitud:</label>
								<textarea class="form-control"
									name="conocimiento_solicitud"><?php echo $this->input->post('conocimiento_solicitud'); ?></textarea>
                            </div>
                            <?php echo form_error('conocimiento_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<div class="form-group">
								<label>Descripcion Solicitud:</label>
								<textarea class="form-control"
									name="descripcion_solicitud"><?php echo $this->input->post('descripcion_solicitud'); ?></textarea>
							</div>
                            <?php echo form_error('descripcion_solicitud', '<div class="alert alert-danger mt-2" role="alert">', '</div>'); ?>  
							<button type="submit" class="btn btn-default">Enviar Solicitud</button>
                        <?php echo form_close(); ?>
					</div>

				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row mt-2 mb-4">
	<div class="col-lg-12 text-right ">
		<a class="btn btn-primary " href="<?php echo base_url('Solicitud/missolicitudes');?>" role="button"><i
				class="fa fa-backward fa-fw"></i> Regresar</a>
	</div>
</div>
<br>