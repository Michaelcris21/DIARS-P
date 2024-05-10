<?php
require_once 'config/config.php';
$ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'];
echo RUTA_ADMIN;
?>