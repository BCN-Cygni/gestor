<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2013
 */

class cliente{
    
    private $idCliente;
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;
    private $celular;
    private $direccion;
    private $mail;
    
    /*Constructor*/
    function __construct(){        
    }
    
    /*Metodos mutadores*/
    public function setIdCliente($varIdCliente){
        $this->idCliente = $varIdCliente;
    }
    
    public function getIdCliente(){
        return $this->idCliente;
    }
    
    public function setNombre($varNombre){
        $this->nombre = $varNombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setApellido($varApellido){
        $this->apellido = $varApellido;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function setDni($varDni){
        $this->dni = $varDni;
    }
    
    public function getDni(){
        return $this->dni;
    }
    
    public function setTelefono($varTelefono){
        $this->telefono = $varTelefono;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }
    
    public function setCelular($varCelular){
        $this->celular = $varCelular;
    }
    
    public function getCelular(){
        return $this->celular;
    }
    
    public function setDireccion($varDireccion){
        $this->direccion = $varDireccion;
    }
    
    public function getDireccion(){
        return $this->direccion;
    }
    
    public function setMail($varMail){
        $this->mail = $varMail;
    }
    
    public function getMail(){
        return $this->mail;
    }
}

?>