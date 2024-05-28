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

        //Leer las variable
        $usuario = "";
        $clave = "";
        $verificar = "";

        //Armando la Vista
        require_once("views/inicio/acceso.php");
    }

    function metodoPOST(){
        //Incluir el modelo
        require_once("models/usuario.php");

        //Instanciar el modelo
        $objUsuario = new Usuario();

        //Leer las variable
        $usuario = $_POST['txtUsuario'];
        $clave = $_POST['txtClave'];

        //Ejecutar el metodo de busqueda
        $objUsuario = $objUsuario->getBuscarByUsuario($usuario);
        
        //Verificar datos
        if($objUsuario){
            if(password_verify($clave, $objUsuario->clave)){
                //session_start();
                //$_SESSION['usuario'] = $objUsuario->usuario;
                header("Location: ".$GLOBALS['ruta_raiz']."/inicio");
            }else{
                $usuario = $objUsuario->usuario;
                $clave = $_POST['txtClave'];
                $verificar = "Contraseña <br> incorrecta";
                
                //Armando la Vista
                require_once("views/inicio/acceso.php");
            }
        }else{
            $usuario = "Usuario Incorrecto";
            $clave = $_POST['txtClave'];
            $verificar = "";
            //Armando la Vista
            require_once("views/inicio/acceso.php");
        }
        
    }
?>