<?php 
class Conexion{
	static public function conectar(){
		#PDO NOMBRE DEL SERVIDOR, nombre de la base de datos,nombre de usuario,contraseña 

		$link = new PDO("mysql:host=localhost;dbname=proyecto-papa",	   "root",
					""); 
		$link ->exec("set names utf8");

		return $link;
	}
}
?>


