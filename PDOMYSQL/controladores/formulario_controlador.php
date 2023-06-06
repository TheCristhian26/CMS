<?php

class ControladorFormularios{

	static public function ctrRegistro(){

		if (isset($_POST["registroId"])) {

			$tabla = "registro-de-ventas-mensual";

			$datos = array("id"=>$_POST["registroId"],
				"nombre"=>$_POST["registroNombre"],
				"valor"=>$_POST["registroCanttonelada"],
				"mes"=> $_POST["registroPreciomes"]
			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
			return $respuesta;
		}

	}
	static public function ctrSeleccionarRegistros(){

		$tabla="registro-de-ventas-mensual";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,null,null);
		return $respuesta;
	}

	public function ctrIngreso(){

		if(isset($_POST["IngresoEmail"])){

			$tabla="registros";
			$item="email";
			$valor= $_POST["IngresoEmail"];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);

		if ($_POST["IngresoEmail"]=="email"&& $_POST["IngresoPassword"]=="password") {

			echo '<pre>'; print_r("ingreso exitoso"); echo '</pre>';
		}else{
			echo '<script>
				if(window.history.replaceState){
					window.history.replaceState(null,null,window.location.href);

				}

				</script>';
				
				echo '<div class="alert alert-danger">El usuario no esta registrado </di>';
			
		}
		}
	}
}
