<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="post">
		<div class="form-group">
			<label for="email">Correo electronico:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa-solid fa-envelope fa-beat"></i></i></span>
				</div>
				<input type="email" class="form-control" placeholder="Enter email" id="email" name="IngresoEmail">
			</div>

			<div class="form-group">
				<label for="pwd">Contraseña:</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa-solid fa-lock fa-beat"></i>
						</span>
					</div>
					<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="IngresoPassword">
				</div>
			</div>

			<?php 
				$ingreso = new ControladorFormularios();
				$ingreso-> ctrIngreso(); 
				
			 ?>

			<button type="submit" class="btn btn-primary">Ingreso</button>
		</form>
</div>