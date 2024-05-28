<?php
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
        $usuario = "";
        $clave = "";
        $clave2 = "";

        //Armando la vista
        require_once("views/header.php");
        require_once("views/usuario/editar.php");
        require_once("views/footer.php");
    }

    function metodoPOST(){
        
    }
?>