<?php
	//*** DECLARAR VARIABLES GLOBALES ***//
	//Para leer: $GLOBALS['ruta_raiz'];
	$ruta_raiz = "http://127.0.0.1/303/trabajoFinal";

	//*** ENRUTAMIENTO ***//
	//Recoger el valor enviado: modelo/accion
	$ruta = $_GET['ruta'];
	
	//Dividir el texto de la ruta en palabras: 
	//$ruta[0]->modelo
	//$ruta[1]->accion
	$ruta = explode('/', $ruta); //$ruta se convierte en un array

	//Leer el modelo: inicio será el modelo predeterminado 
	$modelo = strlen($ruta[0])>0?$ruta[0]:"acceso";

	//Leer la accion: index será la accion predeterminada
	$accion = isset($ruta[1])?$ruta[1]:"index";

	//Armar la ruta del controlador solicitado
	$controlador = "controllers/" . $modelo . $accion . ".php";

	//Armar la ruta del controlador predeterminado
	$controlador_default = "controllers/inicioIndex.php";

	//Verificar si existe el Archivo del Controlador
	if(file_exists($controlador))
	{
		//Cargar el controlador solicitado
		require_once($controlador);
	}
	else
	{
		//Cargar el controlador predeterminado
		require_once($controlador_default);
	}
?>