<?php

class foro{
    
    private $idPublicacion;
    private $contenido;
    private $fecha;
    private $hora;
    private $idUsuario;
    
    /*Constructor*/    
    function __construct(){
        
    }
    
    /*Metodos mutadore*/
    public function setIdPublicacion($varIdPublicacion){
        $this->idPublicacion = $varIdPublicacion;
    }
    
    public function getIdPublicacion(){
        return $this->idPublicacion;
    }
    
    public function setContenido($varContenido){
        $this->contenido = $varContenido;
    }
    
    public function getContenido(){
        return $this->contenido;
    }
    
    public function setFecha($varFecha){
        $this->fecha = $varFecha;
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function setHora($varHora){
        $this->hora = $varHora;
    }
    
    public function getHora(){
        return $this->hora;
    }
    
    public function setIdUsuario($varIdUsuario){
        $this->idUsuario = $varIdUsuario;
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
}

?>