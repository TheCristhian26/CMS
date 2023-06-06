<?php 

require_once "conexion.php";

class Modeloformularios{
	#Registro
	static public function mdlRegistro($tabla,$datos){

		#statement: declaracion

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento,nombre,Canttonelada,Preciomes) VALUES (:documento,:nombre,:Canttonelada,:Preciomes)");
		#bindparam() vincula una variable de php a  un parametro de sustitucion con nombre o signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt ->bindParam(":documento",$datos["id"],PDO::PARAM_STR);
		$stmt ->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
		$stmt ->bindParam(":Canttonelada",$datos["valor"]PDO::PARAM_STR);
		$stmt ->bindParam(":Preciomes",$datos["mes"],PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "ok";

		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt -> close();
		
		$stmt = null;

	}
	static public function mdlSeleccionarRegistros($tabla,$item,$valor){
		if ($item==null && $valor==null) {
			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_add,'%d/%m/%Y') AS fecha_add FROM $tabla ORDER BY id DESC");

		$stmt->execute();

		return $stmt -> fetchAll();	
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_add,'%d/%m/%Y') AS fecha_add FROM $tabla WHERE $item= :$item ORDER BY id DESC");
			$stmt ->bindParam(":".$item,$valor,PDO::PARAM_STR);

		$stmt->execute();

		return $stmt -> fetch();	

		}

		$stmt -> close();
		
		$stmt = null;

	}

}




