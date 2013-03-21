<?php 

define("HOME", 'http://localhost/gestor/');

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "gestor");

define("CIFRADO", MCRYPT_RIJNDAEL_256);
define("MODO", MCRYPT_MODE_ECB);

define("CARPETA_ARCHIVO", $_SERVER['DOCUMENT_ROOT']."gestor/web/uploads/");

?>