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

            $this->usuario->apellido = $fila["apellido"];
            $this->usuario->email = $fila["email"];
            $this->usuario->foto = $fila["foto"];
            $this->usuario->nombre = $fila["nombre"];
            $this->usuario->user = $fila["user"];
            return true;
        } else
            return false;
    }

    public function altaUsuario($usuario)
    {

        $this->usuario->apellido = $usuario->usuario;
        $this->usuario->pass = $usuario->pass;
        $this->usuario->email = $usuario->email;
        $this->usuario->foto = $usuario->foto;
        $this->usuario->nombre = $usuario->nombre;
        $this->usuario->user = $usuario->user;

        $query =    "INSERT INTO `usuario`
    					(`id_usuario`, `email`, `foto`, `pass`, `telefono`,
                        `foto_path`, `dni`, `sexo`, `id_permiso`) 
                    VALUES (
                    	NULL,
                    	'$this->usuario->email',
                    	'$this->usuario->foto',
                    	'$this->usuario->pass',
                    	'$this->usuario->telefono',
                    	'$this->usuario->email',


                    )";
    }
}


?>