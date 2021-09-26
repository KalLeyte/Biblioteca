<?php
try {
	$base = new PDO("mysql:host=localhost; dbname=biblo1", "root", "");
	//$base=new PDO("mysql:host=localhost; dbname=id10551872_biblo1","id10551872_biblo1","programacion1");
	//$base=new PDO("mysql:host=fdb24.awardspace.net; dbname=3130289_biblo1","3130289_biblo1","programacion1");

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "select * from usuarios where Usuario= :USUARIO and Contrasena= :CONTRASENA";
	$resultado = $base->prepare($sql);
	$Correo = htmlentities(addslashes($_POST["USUARIO"]));
	$Contrasena = htmlentities(addslashes($_POST["CONTRASENA"]));
	$resultado->bindvalue(":USUARIO", $Correo);
	$resultado->bindvalue(":CONTRASENA", $Contrasena);
	$resultado->execute();
	$numero_registro = $resultado->rowcount();
	if ($numero_registro != 0) {
		session_start();
		$_SESSION["USUARIO"] = $_POST["USUARIO"];
		header("location:inicio.php");
	} else {
		header("location:index.php");
	}
} catch(EXCEPTION $e){
	die("Error: " . $e->getmessage() );
}
