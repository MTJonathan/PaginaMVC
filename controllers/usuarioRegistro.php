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
        $usuario = "";
        $nombres = "";
        $apellidos = "";
        $email = "";
        $clave = "";
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
        $usuario = $_POST['txtUsuario'];
        $nombres = $_POST['txtNombres'];
        $apellidos = $_POST['txtApellidos'];
        $email = $_POST['txtEmail'];

        //Verificar si el usuario existe
        $objUsuario = $objUsuario->getBuscarByUsuario($usuario);
        if($objUsuario){
            //Armando la vista
            $usuario = "Usuario ya existente";
            require_once("views/usuario/registro.php");
        }else{
            //Verificar que ambas claves coincidan
            if(($clave == $clave2)){
                $objUsuario = new Usuario();
                $objUsuario->usuario = $usuario;
                $objUsuario->nombres = $nombres;
                $objUsuario->apellidos = $apellidos;
                $objUsuario->email = $email;
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
        
    }
?>