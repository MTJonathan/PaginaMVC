<?php
    //Incluir el archivo de PHP Conexion.
    require_once("conexion.php"); //Ruta relativa

    //Declarar la clase usuario
    class Usuario{
        //Propiedades
        public $usuario;
        public $nombres;
        public $apellidos;
        public $email;
        public $clave;
        //Funciones
        function setAgregar($objUsuario){
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //INSERTAR UN NUEVO REGISTRO
            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("insert into usuarios (usuario, nombres, apellidos, email, clave) values (:usuario, :nombres, :apellidos, :email, :clave);");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario", $objUsuario->usuario);
            $sentencia->bindValue(":nombres", $objUsuario->nombres);
            $sentencia->bindValue(":apellidos", $objUsuario->apellidos);
            $sentencia->bindValue(":email", $objUsuario->email);
            $sentencia->bindValue(":clave", $objUsuario->clave);

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger la fila
            $fila = $sentencia->fetch();
        }

        function getBuscarByUsuario($usuarioBuscar){
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //INSERTAR UN NUEVO REGISTRO
            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("select * from usuarios where usuario=:usuario;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario", $usuarioBuscar);

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger la fila
            $fila = $sentencia->fetch();

            if($fila){
                //Leer los datos de la fila en la misma clave
                $this->usuario = $fila["usuario"];
                $this->nombres = $fila["nombres"];
                $this->apellidos = $fila["apellidos"];
                $this->email = $fila["email"];
                $this->clave = $fila["clave"];
                    
                //Devolver los valores
                return $this;
            }else{
                
                return null;
            }
            
        }
        
        function setActualizar($objUsuario){
             //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //INSERTAR UN NUEVO REGISTRO
            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("update usuarios set clave=:clave where usuario=:usuario;");

            //Pasar el valor al parametro se la sentencia
            $sentencia->bindValue(":clave", $objUsuario->clave);
            $sentencia->bindValue(":usuario", $objUsuario->usuario);

            //Ejecutar la sentencia
            $sentencia->execute();
        }
    }
?>