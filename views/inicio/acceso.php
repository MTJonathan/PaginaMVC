<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/acceso.css">
</head>
<body>
    <form method="post" class="formulario-acceso">
        <h1 class="formulario-titulo">ACCESO A LA APLICACIÓN</h1>
        <table>
            <tr>
                <td><label class="formulario-label" for="txtUsuario">Usuario:</label></td>
                <td><input class="formulario-input" type="text" name="txtUsuario" id="txtUsuario" value="<?= $usuario;?>"></td>
            </tr>
            <tr>
                <td><label class="formulario-label" for="txtClave">Clave:</label></td>
                <td><input class="formulario-input" type="password" name="txtClave" id="password" value="<?= $clave;?>"></td>
                <td><input id="showPassword" type="checkbox"></td>
            </tr>
            <tr>
                <td><?= $verificar;?></td>
                <td><button class="boton-ingresar">Ingresar</button></td>
            </tr>
            <tr>
                <td></td>
                <td><a class="enlace-registro" href="<?= $GLOBALS['ruta_raiz']; ?>/usuario/registro">Registrar Nuevo Usuario</a></td>
            </tr>
        </table>
    </form>
</body>
</html>    
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>