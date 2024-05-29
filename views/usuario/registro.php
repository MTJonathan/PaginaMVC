<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/registro.css">
    <title>REGISTRO</title>
</head>
<body>
    <form method="post">
        <h1>REGISTRO DE USUARIO</h1>
        <table>
            <tr>
                <td>Usuario</td><td><input name="txtUsuario" value="<?= $usuario?>" type="text" required></td>
                <td>Nombres</td><td><input name="txtNombres" value="<?= $nombres;?>" type="text" required></td>
            </tr>
            <tr>
                <td>Nueva Clave</td><td><input name="txtClave" value="<?= $clave?>" type="text" required></td>
                <td>Apellidos</td><td><input name="txtApellidos" value="<?= $apellidos;?>" type="text" required></td>
            </tr>
            <tr>
                <td>Repite Clave</td><td><input name="txtClave2" value="<?= $clave2;?>" type="text" required></td><td>e-mail</td>
                <td><input name="txtEmail" value="<?= $email;?>" type="email" required></td>
            </tr>
            <tr>
                <td><a href="<?php echo $GLOBALS['ruta_raiz']; ?>"><button type="button">Cancelar</button></a></td><td></td><td></td>
                <td><button type="submit">Registrar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>