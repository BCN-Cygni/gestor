<?php 

class Comentario{
    
    private $idComentario;
    private $contenido;
    private $fecha;
    private $hora;
    private $idPublicacion;
    private $idUsuario;
    
public function __construct() {
    
}

public function setIdComentario($varIdComentario){$this->idComentario = $varIdComentario;}
public function setContenido($varContenido){$this->contenido = $varContenido;}
public function setFecha($varFecha){$this->fecha = $varFecha;}
public function setHora($varHora){$this->hora = $varHora;}
public function setIdPublicacion($varIdPublicacion){$this->idPublicacion = $varIdPublicacion;}
public function setIdUsuario($varIdUsuario){$this->idUsuario = $varIdUsuario;}

public function getIdComentario(){return $idComentario;}
public function getContenido(){return $contenido;}
public function getFecha(){return $fecha;}
public function getHora(){return $hora;}
public function getIdPublicaciones(){return $idPublicacion;}
public function getIdUsuario(){return $idUsuario;}
    
}

 ?>