<?php 
/*
header("location:config/pepito.php");

$_SESSION[""];
$_POST[""];
$_GET[""];
define("bautista", "se la come");

echo bautista;

$entero = 0;

session_start();
$_SESSION["bautista"] = "se la come";

$_SESSION["usuario"]["nombre"] = "bautista";
$_SESSION[""]

header("location:config/pepito.php?option=1");

$opcion = $_GET["option"];

echo "<a href='pepito.php?option=1'>PEPITO</a>";

echo "<form action='procInsc.php' method='post'>
		<label>Nombre: </label><input name='nombre' type='text'/>
		<input type='submit' />
	  </form>";
*/
/*Estoy en procInsc.php*/
/*session_start();
$_SESSION["usuario"]["nombre"] = $_POST["nombre"];


class Java{

	private $nombre;
	private $db;

	function __construct($db){
		$this->db = $db;
	}

	public function getNombre(){
		if (isset($this->nombre))
		{
			return $this->nombre;
		}else return "puto";
	}
}
*/
$datos = array(
		"nombre" => "Vicente",
		"apellido" => "Chibilisco",
		"edad" => 23,
		"sexo" => "poco"
	);

print_r($datos);

$datos["nombre"] = "Bautista";

while ($datos) {
	echo $datos["nombre"];
}
/*
$java = new Java();
$java->getNombre();*/
?>


