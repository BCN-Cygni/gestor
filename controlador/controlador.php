<?php 
include ("../modelo/usuario.php");
class controlador{
            
    function __construct(){
        
    }

    //Login    
    public function iniciarSesion($user,$pass){
        //$this->usuarioDB = new UsuarioDB();
        //$this->usuario = $this->usuarioDB->iniciarSesion($user,$pass);
        $user = Usuario::iniciarSesion($user,$pass);
    }
    
    public function getUsuario($idUsuario){
        $usuario = Usuario::getUsuario($idUsuario);
    }
    
    public function altaUsuario($arrayUsuario){
        Usuario::altaUsuario($arrayUsuario);
    }

    public function vistaLogin(){
        require ("../vista/login.php");
    }
}
?>