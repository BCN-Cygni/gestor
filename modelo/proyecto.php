<?php

class Proyecto{
    
    private $idProyecto;
    private $nombre;
    private $descripcion;
    private $fecha;
    private $idCliente;
    private $idUsuario;
    
public function __construct() {
    
}

public function setIdProyecto($varIdProyecto){$this->idProyecto = $varIdProyecto;}
public function setNombre($varNombre){$this->nombre = $varNombre;}
public function setDescripcion($varDescripcion){$this->descripcion = $varDescripcion;}
public function setFecha($varFecha){$this->fecha = $varFecha;}
public function setIdCliente($varIdCliente){$this->idCliente = $varIdCliente;}
public function setIdUsuario($varIdUsuario){$this->idUsuario = $varIdUsuario;}

public function getIdProyecto(){return $this->idProyecto;}
public function getNombre(){return $this->nombre;}
public function getDescripcion(){return $this->descripcion;}
public function getFecha(){return $this->fecha;}
public function getIdCliente(){return $this->idCliente;}
public function getIdUsuario(){return $this->idUsuario;}    
    
    
}

 ?>