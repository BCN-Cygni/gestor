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

        $this->usuario->apellido = $usuario->apellido;
        $this->usuario->nombre = $usuario->nombre;
        $this->usuario->pass = $usuario->pass;
        $this->usuario->email = $usuario->email;
        $this->usuario->foto = $usuario->foto;
        $this->usuario->nombre = $usuario->nombre;
        $this->usuario->user = $usuario->user;

        $query =    "INSERT INTO `usuario`
    					(`id_usuario`, `user`, `pass`, `apellido`, `nombre`,
                        `email`, `foto`) 
                    VALUES (
                    	NULL,
                    	'$this->usuario->user',
                    	'$this->usuario->pass',
                    	'$this->usuario->apellido',
                    	'$this->usuario->nombre',
                    	'$this->usuario->email',
                        '$this->usuario->foto'
                    )";
    }
}


?>