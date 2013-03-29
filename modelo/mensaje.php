<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */

class mensaje{
    
    private $idMensaje;
    private $idDe;
    private $idPara;
    private $contenido;
    private $fecha;
    private $hora;
    
    /*Constructor*/
    function __construct(){
        
    }
    
    /*Metodo mutador*/
    public function setIdMensaje($varIdMensaje){
        $this->idMensaje = $varIdMensaje;
    }
    
    public function getIdMensaje(){
        return $this->idMensaje;
    }
    
    public function setIdDe($varIdDe){
        $this->idDe = $varIdDe;
    }
    
    public function getIdDe(){
        return $this->idDe;
    }
    
    public function setIdPara($varIdPara){
        $this->idPara = $varIdPara;
    }
    
    public function getIdPara(){
        return $this->idPara;
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
}

?>