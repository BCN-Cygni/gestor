<?php
include("../config/config.php");

    function encriptar($cadena, $clave = "CYGNI")
    {
		return base64_encode(mcrypt_encrypt(CIFRADO, $clave, $cadena, MODO));
    }	

    function desencriptar($cadena, $clave = "CYGNI")
    {
        return base64_encode(mcrypt_decrypt(CIFRADO, $clave, $cadena, MODO));
    }

    function inicioSesion(){
    	if(!isset($_SESSION['login']) || !$_SESSION['login'])
			return false;
			else return true;
	}
    
?>