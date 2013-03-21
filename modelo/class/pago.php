<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */

class pago{
    
    private $idPago;
    private $fecha;
    private $idModulo;
    
    /*Constructor*/
    function __construct(){        
    }
    
    /*Metodos mutadores*/
    public function setIdPago($varIdPago){
        $this->idPago = $varIdPago;
    }
    
    public function getIdPago(){
        return $this->idPago;
    }
    
    public function setFecha($varFecha){
        $this->fecha = $varFecha;
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function setIdModulo($varIdModulo){
        $this->idModulo = $varIdModulo;
    }
    
    public function getIdModulo(){
        return $this->idModulo;
    }
}

?>