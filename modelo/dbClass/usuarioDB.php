<?php

include ("cnx.php");
include ("../class/usuario.php");

class UsuarioDB
{

    private $usuario;
    
    function __construct($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getUsuario($idUsuario)
    {

        $query = "SELECT * FROM
                    usuario 
                    WHERE id = $idUsuario";

        if ($result = $db->query($query)) {
            $fila = $result->fetch_assoc();

            $this->usuario->setApellido($fila["apellido"]);
            $this->usuario->setEmail($fila["email"]);
            $this->usuario->setFoto($fila["foto"]);
            $this->usuario->setNombre($fila["nombre"]);
            $this->usuario->setUser($fila["user"]);
            
            return $this->usuario;
        }
    }

    public function altaUsuario($usuario)
    {
       $query =    "INSERT INTO `usuario`
    					(`id_usuario`, `user`, `pass`, `apellido`, `nombre`,
                        `email`, `foto`) 
                    VALUES (
                    	NULL,
                    	'$usuario->user',
                    	'$usuario->pass',
                    	'$usuario->apellido',
                    	'$usuario->nombre',
                    	'$usuario->email',
                        '$usuario->foto'
                    )";
        if ($db->query($query)) return true;
        else return false;
    }
    
    public function iniciarSesion($user, $pass)
	{
		$query = 	"SELECT * FROM usuario 
					WHERE user = '$user'
					AND pass = '$pass'";

		if ($result = $this->db->query($query))
		{
			$fila = $result->fetch_assoc();
			$this->usuario->id_usuario = $fila['id_usuario'];
			$this->usuario->apellido = $fila['apellido'];
			$this->usuario->nombre = $fila['nombrre'];
			$this->usuario->pass = $fila['pass'];
			$this->usuario->email = $fila['email'];
			$this->usuario->user = $fila['user'];
			$this->usuario->foto = $fila['foto'];
							
            return $usuario;
		}
        
        
  } 
		

}


?>