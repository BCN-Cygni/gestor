<?php

class Tarea{
    
    private $idTarea;
    private $descripcion;
    private $fechaInicio;
    private $fechaFin;
    private $estado;
    private $idUsuario;
    private $idModulo;
    
public function __construct() {
    
}

public function setIdTarea($varIdTarea){$this->idTarea = $varIdTarea;}
public function setDescripcion($varDescripcion){$this->descripcion = $varDescripcion;}
public function setFechaInicio($varFechaInicio){$this->fechaInicio = $varFechaInicio;}
public function setFechaFin($varFechaFin){$this->fechaFin = $varFechaFin;}
public function setEstado($varEstado){$this->estado = $varEstado;}
public function setIdUsuario($varIdUsuario){$this->idUsuario = $varIdUsuario;}
public function setIdModulo($varIdModulo){$this->idModulo = $varIdModulo;}

public function getIdTarea(){return $this->idTarea;}
public function getDescripcion(){return $this->descripcion;}
public function getFechaInicio(){return $this->fechaInicio;}
public function getFechaFin(){return $this->fechaFin;}
public function getEstado(){return $this->estado;}
public function getIdUsuario(){return $this->idUsuario;}    
public function getIdModulo(){return $this->idModulo;}    
    
}

 ?>