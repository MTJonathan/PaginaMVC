<?php
    //Iniciando gestion de sesiones
    session_start();
    if(!isset($_SESSION["usuario"]))
    {
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
        //Armando la Vista
        require_once("views/header.php");
        require_once("views/inicio/inicio.php");
        require_once("views/footer.php");
        
        
    }

    function metodoPOST(){
        
    }
?>