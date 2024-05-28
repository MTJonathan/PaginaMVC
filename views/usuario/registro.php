<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/registro.css">
    <title>REGISTRO</title>
</head>
<body>
    <h1>REGISTRO DE USUARIO</h1>
    <form method="post">
        <table>
            <tr>
                <td>Usuario</td><td><input name="txtUsuario" value="<?= $objUsuario->usuario;?>" type="text"></td><td>Nombres</td><td><input name="txtNombres" value="<?= $objUsuario->nombres;?>" type="text"></td>
            </tr>
            <tr>
                <td>Nueva Clave</td><td><input name="txtClave" value="<?= $objUsuario->clave;?>" type="text"></td><td>Apellidos</td><td><input name="txtApellidos" value="<?= $objUsuario->apellidos;?>" type="text"></td>
            </tr>
            <tr>
                <td>Repite Clave</td><td><input name="txtClave2" value="<?= $clave2;?>" type="text"></td><td>e-mail</td><td><input name="txtEmail" value="<?= $objUsuario->email;?>" type="email"></td>
            </tr>
            <tr>
                <td><button type="button"><a href="<?php echo $GLOBALS['ruta_raiz']; ?>">Cancelar</a></button></td><td></td><td></td><td><button type="submit">Registrar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>