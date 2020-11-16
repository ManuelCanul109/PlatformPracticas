  <!-- /.row -->
  <div class="row mt-2 mb-4">
  	<div class="col-lg-12 text-right ">
  		<a class="btn btn-primary " href="<?php echo base_url('Solicitud/add');?>" role="button"><i
  				class="fa fa-plus fa-fw"></i> Agregar Nueva Solicitud</a>
  	</div>
  </div>
  <br>
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

  								<th>Nombre Empresa Solicitud</th>


  								<th>Nombre Jefe Solicitud</th>
  								<th>Cargo Jefe Solicitud</th>

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

  								<td class="center"><?php echo $s['nombre_empresa_solicitud']; ?></td>

  								<td class="center"><?php echo $s['nombre_jefe_solicitud']; ?></td>
  								<td class="center"><?php echo $s['cargo_jefe_solicitud']; ?></td>

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
