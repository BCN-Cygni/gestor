<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */

class modulo{
    
    private $idModulo;
    private $idProyecto;
    private $nombre;
    private $descripcion;
    private $precio;
    private $pagado;
    private $prioridad;
    private $estado;
    
    /*Constructor*/
    function __construct(){        
    }
    
    /*Metodos mutadores*/
    public function setIdModulo($varIdModulo){
        $this->idModulo = $varIdModulo;
    }
    
    public function getIdModulo(){
        return $this->idModulo;
    }
    
    public function setIdProyecto($varIdProyecto){
        $this->idProyecto = $varIdProyecto;
    }
    
    public function getIdProyecto(){
        return $this->idProyecto;
    }
    
    public function setNombre($varNombre){
        $this->nombre = $varNombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setDescripcion($varDescripcion){
        $this->descripcion = $varDescripcion;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setPrecio($varPrecio){
        $this->precio = $varPrecio;
    }
    
    public function getPrecio(){
        return $this->precio;
    }
    
    public function setPagado($varPagado){
        $this->pagado = $varPagado;
    }
    
    public function getPagado(){
        return $this->pagado;
    }
    
    public function setPrioridad($varPrioridad){
        $this->prioridad = $varPrioridad;
    }
    
    public function getPrioridad(){
        return $this->prioridad;
    }
    
    public function setEstado($varEstado){
        $this->estado = $varEstado;
    }
    
    public function getEstado(){
        return $this->estado;
    }
}

?>