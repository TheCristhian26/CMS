<?php  
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
?>
<table class="table py-5">
	<thead>
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>TELEFONO</th>
			<th>CANTIDAD TONELADAS</th>
			<th>PRECIO TONELADAS</th>
			<th>ACCIONES</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($usuarios as $key => $value): ?>

			<tr>

			<td> <?php echo ($key+1); ?></td>
			<td><?php echo $value["ID"];  ?></td>
			<td><?php echo $value["NOMBRE"];  ?> </td>
			<td><?php echo $value["TELEFONO"];  ?> </td>
			<td><?php echo $value["CANT-TONELADA"];  ?> </td>
			<td><?php echo $value["PRECIO-TONELADA"];  ?> </td>
			<td>
				<div class="btn-group">
					<button class="btn-warning"> <i class="fa-solid fa-pencil"> </i> </i> </button>
					<button class="btn-danger"> <i class="fa-sharp fa-regular fa-delete-right" style="color: #31511f;"></i> </button>
				</div>
			</td>

		</tr>	
		<?php endforeach ?>
	</tbody>
</table>