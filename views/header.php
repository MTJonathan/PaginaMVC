<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/header.css">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/editar.css">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/inicio.css">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/servicios.css">
    <link rel="stylesheet" href="<?= $GLOBALS['ruta_raiz']; ?>/public/css/ayuda.css">
    <title>Trabajo Final</title>
</head>
<header>
    <nav class="menu-principal">
        <a href="<?= $GLOBALS['ruta_raiz']; ?>/inicio" class="enlace" data-pagina="inicio">Inicio</a>
        <a href="<?= $GLOBALS['ruta_raiz']; ?>/servicios" class="enlace">Servicios</a>
        <a href="<?= $GLOBALS['ruta_raiz']; ?>/centro/ayuda" class="enlace">Centro de Ayuda</a>
        <a href="<?= $GLOBALS['ruta_raiz']; ?>/usuario/editar" class="enlace" data-pagina="miUsuario">Mi Usuario</a>
    </nav>
</header>
