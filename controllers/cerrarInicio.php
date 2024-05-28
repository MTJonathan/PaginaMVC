<?php
session_start();
session_destroy();
header("location: ".$GLOBALS['ruta_raiz']);
exit();
?>