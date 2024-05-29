<?php
    //Iniciando gestion de sesiones
    session_start();
    if(!isset($_SESSION["usuario"])){
        //Redireccionar al inicio
        header("location: ".$GLOBALS['ruta_raiz']);
        exit();
    }

    //Controlar el tipo de solicitud
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            metodoGET();
            break;
            
        case 'POST':
            metodoPOST();
            break;
    }

    //Funcion responde GET
    function metodoGET(){
        $clave = "";
        $clave2 = "";

        //Armando la vista
        require_once("views/header.php");
        require_once("views/usuario/editar.php");
        require_once("views/footer.php");
    }

    function metodoPOST(){
        //Incluir el modelo
        require_once("models/usuario.php");

        //Instanciar el modelo
        $objUsuario = new Usuario();

        //Ejecutar el metodo de busqueda
        $objUsuario = $objUsuario->getBuscarByUsuario($_SESSION["usuario"]);

        //Asignar valor a las variables
        $clave = $_POST["clave"];
        $clave2 = $_POST["clave2"];

        if ($clave == $clave2){
            $objUsuario->clave = password_hash($clave, PASSWORD_DEFAULT);
            $objUsuario->setActualizar($objUsuario);
            $clave = "Clave aztualizada";
            $clave2 = "";
            //Armando la vista
            require_once("views/header.php");
            require_once("views/usuario/editar.php");
            require_once("views/footer.php");
        }else{
            $clave = $_POST["clave"];
            $clave2 = "No coinciden";
            //Armando la vista
            require_once("views/header.php");
            require_once("views/usuario/editar.php");
            require_once("views/footer.php");
        }
    }
?>