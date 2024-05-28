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
        //Incluir el modelo
        require_once("models/usuario.php");

        //Instanciar el modelo
        $objUsuario = new Usuario();

        //Leer las variables enviadas
        $objUsuario->usuario = "";
        $objUsuario->nombres = "";
        $objUsuario->apellidos = "";
        $objUsuario->email = "";
        $objUsuario->clave = "";
        $clave2 = "";

        //Armando la Vista
        require_once("views/usuario/registro.php");
    }

    function metodoPOST(){
        //Incluir el modelo
        require_once("models/usuario.php");

        //Instanciar el modelo
        $objUsuario = new Usuario();

        //Leer las variables enviadas
        $clave = $_POST['txtClave'];
        $clave2 = $_POST['txtClave2'];
        $objUsuario->usuario = $_POST['txtUsuario'];
        $objUsuario->nombres = $_POST['txtNombres'];
        $objUsuario->apellidos = $_POST['txtApellidos'];
        $objUsuario->email = $_POST['txtEmail'];

        //Verificar que ambas claves coincidan
        if(($clave == $clave2)){
            $objUsuario->clave = password_hash($clave, PASSWORD_DEFAULT);
            $objUsuario->setAgregar($objUsuario);
            
            //Redirigiendo a la pagina principal
            header("Location: ".$GLOBALS['ruta_raiz']);
        }else{
            //Armando la vista
            $clave2 = "No coincide";
            require_once("views/usuario/registro.php");
        }
    }
?>