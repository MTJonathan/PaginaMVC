<body>
    <form method="post" class="formulario-registro">
        <h1 class="formulario-titulo">Mi Usuario</h1>
        <table>
            <tr>
                <label><td>Usuario</td><td><input class="formulario-input" value="<?= $_SESSION["usuario"]?>" type="text"></td></label>
            </tr>
            <tr>
                <label><td>Nueva Clave</td><td><input name="clave" value="<?= $clave?>" class="formulario-input" type="text"></td></label>
            </tr>
            <tr>
                <label><td>Repita Clave</td><td><input name="clave2" value="<?= $clave2?>" class="formulario-input" type="text"></td></label>
            </tr>
            <tr>
                <td><a href="<?= $GLOBALS['ruta_raiz']; ?>"><button class="boton-cancelar" type="button">Cancelar</button></a></td><td><button type="submit" class="boton-guardar">Guardar</button></td>
            </tr>
        </table>
    </form>
</body>    