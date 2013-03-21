<?php 

class Usuario{

	private $apellido;
	private $email;
	private $foto;
	private $idUsuario;
	private $nombre;
	private $pass;
	private $user;

	function __construct(){

	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getUser(){
		return $this->user;
	}

	//Seters
	public function setApellido($apellido){
		$this->apellido= $apellido;
	}

	public function setEmail($email){
		$this->email= $email;
	}

	public function setFoto($foto){
		$this->foto= $foto;
	}

	public function setNombre($nombre){
		$this->nombre= $nombre;
	}

	public function setUser($user){
		$this->user= $user;
	}

	//Fin de la CLase
}


?>