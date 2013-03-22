<?php 
include ("../modelo/class/usuario.php");
include ("../modelo/dbClass/usuarioDB.php");

class controlador{
    
    private $usuario;
    private $usuarioDB;
    
    function __construct(){
        
    }

    //Login    
    public function iniciarSesion($user,$pass){
        $this->usuarioDB = new UsuarioDB();
        $this->usuario = $this->usuarioDB->iniciarSesion($user,$pass);
    }
}
?>