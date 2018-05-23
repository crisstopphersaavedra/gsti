<?php
	require("../../../helpers/ruta.php");
	$RUTAHTML=Ruta::RUTAHTML;
	//$RUTAHTML=$_SERVER["HTTP_HOST"].RUTAHTML;
	require("../../templates/cabecera.php");
	require("../../templates/cabecera_web.php");

?>
	<style type="text/css">
		

		/*Estilos Tablas tamaño y margenes*/
			.table-user{
					margin-left:12.999%;

			}
			@media (max-width: 1199px) {
				.table-user{
					margin-left:0.999%;
				}
			}
			@media (max-width: 991px) {
				.table-user{
					margin-left:0.999%;
				}
			}
			@media (max-width: 767px) {
				.table-user{
					margin-left:0%;
					width: 100%;
				}
			}
		/*Fin Estilos Tablas tamaño y margenes*/
		/* The switch - the box around the slider */
				.switch {
				  position: relative;
				  display: inline-block;
				  width: 26px;
				  height: 10px;

				  /*margin-bottom: 3px;*/
				}

				/* Hide default HTML checkbox */
				.switch input {display:none;}

				/* The slider */
				.slider {
				  position: absolute;
				  cursor: pointer;
				  top: 0;
				  left: 0;
				  right: 0;
				  bottom: 0;
				  background-color: #242428;
				  -webkit-transition: .4s;
				  transition: .4s;

				}

				.slider:before {
				  position: absolute;
				  content: "";
				  height: 17px;
				  width: 17px;
				  left: 0px;
				  bottom: -3px;
				  background-color: #24509b;
				  -webkit-transition: .4s;
				  transition: .4s;

				}

				input:checked + .slider {
				  background-color: #a1a7fe;
				}

				input:focus + .slider {
				  box-shadow: 0 0 1px #242428;
				}

				input:checked + .slider:before {
				  -webkit-transform: translateX(10px);
				  -ms-transform: translateX(10px);
				  transform: translateX(10px);
				}

				/* Rounded sliders */
				.slider.round {
				  border-radius: 34px;
				}

				.slider.round:before {
				  border-radius: 50%;
				}
	</style>
	<link rel="stylesheet" type="text/css" href="<?= $RUTAHTML ?>/css/stylepopup.css">
       <div class="container-fluid">
       			<ol class="breadcrumb">
				  <li>Mantenimiento</li>				  
				  <li class="active">Vehiculo</li>
				</ol>
	       		<div class="col-lg-9 col-md-10 col-sm-10 col-xs-12">
			       		<form class="form-buscar" action="" method="GET">
					        <div class="form-group">
					          <div class="input-group">
					            <input type="text" class="form-control" name="texto" placeholder="Buscar por Placa o Marca">
					            <span class="input-group-btn" style="width: 1%;">
					              <button class="btn btn-default btn-buscar" type="submit"><i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xxs"> Buscar</span></button>
					            </span>
					          </div>
					        </div>
					     </form>
				</div>	
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive table-user" >
						<table class="table table-bordered table-striped table-hover table-condensed" style="min-width: 300px;">
							<thead>
								<tr>
									<th>Código</th>
									<th>Numero de Placa</th>									
									<th>Marca de Vehiculo</th>
									<th>Modelo</th>
									<th>Conductor Asignado</th>
									<th>Ayudante Asignado</th>
									<th>Documentos</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>VH000001</td>
									<td>LRE-034</td>
									<td>Toyota</td>
									<td>Camion</td>
									<td>David Cespedes</td>
									<td>Luis Rosales/Leonard Sales</td>
									<td>Soat/Revision Tecnica</td>
									<td>Activo</td>

									<td class="td-action">
										
										<a href="javascript:;" class="btn btn-default btn-action btn-editar"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-default btn-action"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td>VH000001</td>
									<td>LRE-034</td>
									<td>Toyota</td>
									<td>Camion</td>
									<td>David Cespedes</td>
									<td>Luis Rosales/Leonard Sales</td>
									<td>Soat/Revision Tecnica</td>
									<td>Activo</td>

									<td class="td-action">
										
										<a href="javascript:;" class="btn btn-default btn-action btn-editar"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-default btn-action"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td>VH000001</td>
									<td>LRE-034</td>
									<td>Toyota</td>
									<td>Camion</td>
									<td>David Cespedes</td>
									<td>Luis Rosales/Leonard Sales</td>
									<td>Soat/Revision Tecnica</td>
									<td>Activo</td>

									<td class="td-action">
										
										<a href="javascript:;" class="btn btn-default btn-action btn-editar"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-default btn-action"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td>VH000001</td>
									<td>LRE-034</td>
									<td>Toyota</td>
									<td>Camion</td>
									<td>David Cespedes</td>
									<td>Luis Rosales/Leonard Sales</td>
									<td>Soat/Revision Tecnica</td>
									<td>Activo</td>

									<td class="td-action">
										
										<a href="javascript:;" class="btn btn-default btn-action btn-editar"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-default btn-action"><i class="fa fa-trash-o"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
					<div class="pull-right">
						<a href="javascript:;" class="btn btn-default btn-registrar"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Registrar</a>
					</div>
				</div>
       </div>
 


<?php
	require("new.php");
	require("edit.php");
	require("../../templates/pie_web.php");

?>
	<script type="text/javascript">
		//alert($(window).width());
		$(".btn-registrar").click(function(){
			$("#modalRegistrar").modal("show");
		});
		$(".btn-editar").click(function(){
			$("#modalEditar").modal("show");
		});
	</script>
<?php
	require("../../templates/pie.php");
?>  