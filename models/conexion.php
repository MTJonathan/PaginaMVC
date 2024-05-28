<?php
//Declarar la clase
class Conexion
{
	//Propiedades

	//Metodos
	public static function getConectarMySQL()
	{
		//Variables parametros del PDO
		$cadena = "mysql:host=127.0.0.1; dbname=registro";
		$usuario = "root";
		$clave = "";

		//Instanciar un nuevo objeto PDO
		$conexion = new PDO($cadena,$usuario,$clave);

		//Retornar el objeto de conexion PDO
		return $conexion;
	}
}

?>