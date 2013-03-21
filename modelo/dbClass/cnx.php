<?php

require ("../../config/config.php");

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($db->connect_errno)
{
	die("Fallo de Coneccion".$db->connet_error);
}
?>