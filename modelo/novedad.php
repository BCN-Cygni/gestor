<?php 

class Novedad{

    private $idPago;
    private $fecha;
    private $idModulo;
    
public function __construct() {
    
}

public function setIdPago($varIdPago){$this->idPago = $varIdPago;}
public function setFecha($varFecha){$this->fecha = $varFecha;}
public function setIdModulo($varIdModulo){$this->idModulo=$varIdModulo;}

public function getIdPago(){return $idPago;} 
public function getFecha(){return $fecha;}
public function getModulo(){return $idModulo;}
    
}

?>