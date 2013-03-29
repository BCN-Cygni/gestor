<?php 

include ("cnx.php");

class Usuario{

	private $apellido;
	private $email;
	private $foto;
	private $idUsuario;
	private $nombre;
	private $pass;
	private $user;
    private $usuarioDB;

	function __construct(){
        $this->usuarioDB = new UsuarioDB;
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
    
    public static function iniciarSesion($user, $pass){
		$query = 	"SELECT * FROM usuario 
					WHERE user = '$user'
					AND pass = '$pass'";
     
		if ($result = $this->db->query($query))
		{
			return $result->fetch_assoc();				
		}                
     } 
  
    public static function getUsuario($idUsuario){

        $query = "SELECT * FROM
                    usuario 
                    WHERE id = $idUsuario";

        if ($result = $db->query($query)) {
            return $result->fetch_assoc();
        }
    }
    
    public static function altaUsuario($usuario)
    {
       $query =    "INSERT INTO `usuario`
    					(`id_usuario`, `user`, `pass`, `apellido`, `nombre`,
                        `email`, `foto`) 
                    VALUES (
                    	NULL,".
                        $usuario['user'].",".
                    	$usuario['pass'].",".
                    	$usuario['apellido'].",".
                    	$usuario['nombre'].",".
                    	$usuario['email'].",".
                    	$usuario['foto'].")";
        if ($db->query($query)) return true;
        else return false;
    }
    
	//Fin de la CLase
}


?>