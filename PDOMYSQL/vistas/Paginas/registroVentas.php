<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="post">
		<div class="form-group">
			<label for="nombre">N° Documento:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa-solid fa-file"></i>
					</span>
				</div>
				<input type="text" class="form-control"id="id" name="registroId">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Nombre:</label>
			<div class="input-group">
				<span class="input-group-text"><i class="fa-solid fa-user fa-beat"></i>
					</span>
				<input type="text" class="form-control"id="nombre" name="registroNombre">
			</div>

			<div class="form-group">
				<label for="pwd">fecha:</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa-regular fa-calendar-days"></i>
						</span>
					</div>
					<input type="date"class="form-control" placeholder="Enter fecha" id="fecha" name="registroFecha">
				</div>
			</div>

			<div class="form-group">
				<label for="pwd">Cantidad De toneladas </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i>
						</span>
					</div>
					<input type="double"class="form-control" placeholder="Escriba un valor " id="valor" name="registroCanttonelada">
				</div>
			</div>

			<div class="form-group">
				<label for="pwd">Precio del mes</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa-solid fa-money-bill"></i>
						</span>
					</div>
					<input type="double"class="form-control" placeholder="escriba un valor" id="mes" name="registroPreciomes">
				</div>
			</div>

			<?php 

			$registro = ControladorFormularios::ctrRegistro(); 

			if ($registro == "ok") {

				echo '<script>
				if(window.history.replaceState){
					window.history.replaceState(null,null,window.location.href);

				}

				</script>';
				
				echo '<div class="alert alert-success">El usuario ha sido registrado </di>';
			}
			
			 ?>

			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
</div>