<div class="row mt-2 mb-4">
	<div class="col-lg-12 text-right ">
		<a class="btn btn-primary " <?php if($this->session->userdata('tipo_usuario') == 0){ ?>
			href="<?php echo base_url('Solicitud/vertodas');?>" <?php }else{ ?>
			href="<?php echo base_url('Solicitud/missolicitudes');?>" <?php } ?> role="button"><i
				class="fa fa-backward fa-fw"></i> Regresar</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Editar Solicitud
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<?php echo form_open('solicitud/edit/'.$solicitude['id_solicitud']); ?>
						<div class="form-group">
							Estado Solicitud :
							<select name="estado_solicitud" class="form-control" disabled>
								<option value="">select</option>
								<?php 
                                    $estado_solicitud_values = array(
                                        '1'=>'Solicitado',
                                        '2'=>'En Curso',
                                        '3'=>'Finalizado',
                                        '4'=>'Cancelado'
                                    );

                                    foreach($estado_solicitud_values as $value => $display_text)
                                    {
                                        $selected = ($value == $solicitude['estado_solicitud']) ? ' selected="selected"' : "";

                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                    } 
                                    ?>
							</select>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Nombres Alumno Solicitud :
							<input disabled class="form-control" type="text" name="nombres_alumno_solicitud"
								value="<?php echo ($this->input->post('nombres_alumno_solicitud') ? $this->input->post('nombres_alumno_solicitud') : $solicitude['nombres_alumno_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('nombres_alumno_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Apellidos Alumno Solicitud :
							<input disabled class="form-control" type="text" name="apellidos_alumno_solicitud"
								value="<?php echo ($this->input->post('apellidos_alumno_solicitud') ? $this->input->post('apellidos_alumno_solicitud') : $solicitude['apellidos_alumno_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('apellidos_alumno_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Matricula Solicitud :
							<input disabled class="form-control" type="text" name="matricula_solicitud"
								value="<?php echo ($this->input->post('matricula_solicitud') ? $this->input->post('matricula_solicitud') : $solicitude['matricula_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('matricula_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Carrera :
							<select disabled class="form-control" name="carrera_id">
								<option value="">select carrera</option>
								<?php 
                                foreach($all_carreras as $carrera)
                                {
                                    $selected = ($carrera['id_carrera'] == $solicitude['carrera_id']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['nombre_carrera'].'</option>';
                                } 
                                ?>
							</select>
							<span class="text-danger"><?php echo form_error('carrera_id');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Semestre :
							<select disabled class="form-control" name="semestre_id">
								<option value="">select semestre</option>
								<?php 
                                foreach($all_semestres as $semestre)
                                {
                                    $selected = ($semestre['id_semestre'] == $solicitude['semestre_id']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$semestre['id_semestre'].'" '.$selected.'>'.$semestre['nombre_semestre'].'</option>';
                                } 
                                ?>
							</select>
							<span class="text-danger"><?php echo form_error('semestre_id');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Nombre Empresa Solicitud :
							<input disabled class="form-control" type="text" name="nombre_empresa_solicitud"
								value="<?php echo ($this->input->post('nombre_empresa_solicitud') ? $this->input->post('nombre_empresa_solicitud') : $solicitude['nombre_empresa_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('nombre_empresa_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Nombre Dirigido Solicitud :
							<input disabled class="form-control" type="text" name="nombre_dirigido_solicitud"
								value="<?php echo ($this->input->post('nombre_dirigido_solicitud') ? $this->input->post('nombre_dirigido_solicitud') : $solicitude['nombre_dirigido_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('nombre_dirigido_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Puesto Solicitud :
							<input disabled class="form-control" type="text" name="puesto_solicitud"
								value="<?php echo ($this->input->post('puesto_solicitud') ? $this->input->post('puesto_solicitud') : $solicitude['puesto_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('puesto_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Horario Solicitud :
							<input disabled class="form-control" type="text" name="horario_solicitud"
								value="<?php echo ($this->input->post('horario_solicitud') ? $this->input->post('horario_solicitud') : $solicitude['horario_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('horario_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Nombre Proyecto Solicitud :
							<input disabled class="form-control" type="text" name="nombre_proyecto_solicitud"
								value="<?php echo ($this->input->post('nombre_proyecto_solicitud') ? $this->input->post('nombre_proyecto_solicitud') : $solicitude['nombre_proyecto_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('nombre_proyecto_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Nombre Jefe Solicitud :
							<input disabled class="form-control" type="text" name="nombre_jefe_solicitud"
								value="<?php echo ($this->input->post('nombre_jefe_solicitud') ? $this->input->post('nombre_jefe_solicitud') : $solicitude['nombre_jefe_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('nombre_jefe_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Cargo Jefe Solicitud :
							<input disabled class="form-control" type="text" name="cargo_jefe_solicitud"
								value="<?php echo ($this->input->post('cargo_jefe_solicitud') ? $this->input->post('cargo_jefe_solicitud') : $solicitude['cargo_jefe_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('cargo_jefe_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Celular Alumno Solicitud :
							<input disabled class="form-control" type="text" name="celular_alumno_solicitud"
								value="<?php echo ($this->input->post('celular_alumno_solicitud') ? $this->input->post('celular_alumno_solicitud') : $solicitude['celular_alumno_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('celular_alumno_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Correo Alumno Solicitud :
							<input disabled class="form-control" type="text" name="correo_alumno_solicitud"
								value="<?php echo ($this->input->post('correo_alumno_solicitud') ? $this->input->post('correo_alumno_solicitud') : $solicitude['correo_alumno_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('correo_alumno_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Fecha Inicio Soliciud :
							<input disabled class="form-control" type="text" name="fecha_inicio_soliciud"
								value="<?php echo ($this->input->post('fecha_inicio_soliciud') ? $this->input->post('fecha_inicio_soliciud') : $solicitude['fecha_inicio_soliciud']); ?>" />
							<span class="text-danger"><?php echo form_error('fecha_inicio_soliciud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Fecha Final Solicitud :
							<input disabled class="form-control" type="text" name="fecha_final_solicitud"
								value="<?php echo ($this->input->post('fecha_final_solicitud') ? $this->input->post('fecha_final_solicitud') : $solicitude['fecha_final_solicitud']); ?>" />
							<span class="text-danger"><?php echo form_error('fecha_final_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Conocimiento Solicitud :
							<textarea disabled class="form-control"
								name="conocimiento_solicitud"><?php echo ($this->input->post('conocimiento_solicitud') ? $this->input->post('conocimiento_solicitud') : $solicitude['conocimiento_solicitud']); ?></textarea>
							<span class="text-danger"><?php echo form_error('conocimiento_solicitud');?></span>
						</div>
						<div class="form-group">
							<span class="text-danger">*</span>Descripcion Solicitud :
							<textarea disabled class="form-control"
								name="descripcion_solicitud"><?php echo ($this->input->post('descripcion_solicitud') ? $this->input->post('descripcion_solicitud') : $solicitude['descripcion_solicitud']); ?></textarea>
							<span class="text-danger"><?php echo form_error('descripcion_solicitud');?></span>
						</div>

						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Documentos Cargados
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#cdp" data-toggle="tab">Carta de Presentación</a>
						</li>
						<li><a href="#cda" data-toggle="tab">Carta de Aceptación</a>
						</li>
						<li><a href="#rm" data-toggle="tab">Reportes Mensuales</a>
						</li>
						<li><a href="#cl" data-toggle="tab">Carta de Liberación</a>
						</li>
						<li><a href="#cf" data-toggle="tab">Carta de Finalización</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<?php if($this->session->userdata('tipo_usuario') == 0){ ?>
						<div class="tab-pane fade in active" id="cdp">
							<?php if($cdp == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .PDF</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCDP/'.$idsolicitud);?>

								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cdp[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCDP/'.$idsolicitud);?>

								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cdp[0]['nombre_documento'].'/'.'cdp');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cda">
							<?php if($cda == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .PDF</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCDA/'.$idsolicitud);?>

								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cda[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCDA/'.$idsolicitud);?>

								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cda[0]['nombre_documento'].'/'.'cda');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="rm">
							<?php if($rm == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirRM/'.$idsolicitud);?>

								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $rm[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirRM/'.$idsolicitud);?>

								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$rm[0]['nombre_documento'].'/'.'rm');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cl">
							<?php if($cl == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCL/'.$idsolicitud);?>

								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cl[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCL/'.$idsolicitud);?>

								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cl[0]['nombre_documento'].'/'.'cl');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cf">
							<?php if($cf == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCF/'.$idsolicitud);?>

								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cf[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCF/'.$idsolicitud);?>

								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cf[0]['nombre_documento'].'/'.'cf');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<?php }else{ ?>
						<div class="tab-pane fade in active" id="cdp">
							<?php if($cdp == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .PDF</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCDP/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="0">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cdp[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCDP/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="1">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cdp[0]['nombre_documento'].'/'.'cdp');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cda">
							<?php if($cda == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .PDF</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCDA/'.$idsolicitud);?>
								<input type="text" style="display: none;" name="qg" value="0">
								<input type="file" name="document" size="20" />
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cda[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCDA/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="1">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cda[0]['nombre_documento'].'/'.'cda');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="rm">
							<?php if($rm == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirRM/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="0">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $rm[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirRM/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="1">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$rm[0]['nombre_documento'].'/'.'rm');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cl">
							<?php if($cl == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCL/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="0">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cl[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCL/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="1">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cl[0]['nombre_documento'].'/'.'cl');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="cf">
							<?php if($cf == "NOHAY"){ ?>
							<h4>No ha cargado Documento <small>Solo .ZIP</small></h4>
							<div class="form-group">
								<label class="text-warning">No he encontrado algun documento de historial</label>
								<?php echo form_open_multipart('Solicitud/subirCF/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="0">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								</form>
							</div>
							<?php }else{ ?>
							<div class="form-group">
								<label class="text-success">Su ultimo documento fue cargado el
									<?php echo $cf[0]['fecha_documento']; ?></label>
								<?php echo form_open_multipart('Solicitud/subirCF/'.$idsolicitud);?>
								<input type="file" name="document" size="20" />
								<input type="text" style="display: none;" name="qg" value="1">
								<br>
								<button type="submit" class="btn btn-default">Subir Documento</button>
								<a class="btn btn-primary "
									href="<?php echo base_url('Solicitud/descargarDocumento/'.$cf[0]['nombre_documento'].'/'.'cf');?>"
									role="button"><i class="fa fa-download fa-fw"></i> Descargar Ultimo Documento</a>
								</form>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<!-- /.panel-body -->
			</div>
		</div>

		<?php if($this->session->userdata('tipo_usuario') == 0){ ?>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Zona de Reportes
				</div>
				<div class="panel-body">
					<a class="btn btn-primary " href="<?php echo base_url('Solicitud/descargarZIP/'.$idsolicitud);?>"
						role="button"><i class="fa fa-download fa-fw"></i> Descargar .zip de todos los Documentos.</a>

					<a style="display: none;" class="btn btn-primary " href="<?php echo base_url('Solicitud/generarXLS/'.$idsolicitud);?>"
						role="button"><i class="fa fa-download fa-fw"></i> Generar .xls del alumno.</a>
				</div>
			</div>
		</div>
		<?php } ?>


	</div>
</div>
<div class="row mt-2 mb-4">
	<div class="col-lg-12 text-right ">
		<a class="btn btn-primary " <?php if($this->session->userdata('tipo_usuario') == 0){ ?>
			href="<?php echo base_url('Solicitud/vertodas');?>" <?php }else{ ?>
			href="<?php echo base_url('Solicitud/missolicitudes');?>" <?php } ?> role="button"><i
				class="fa fa-backward fa-fw"></i> Regresar</a>
	</div>
</div>
<br>
