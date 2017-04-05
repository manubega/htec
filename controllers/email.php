<?php
require_once 'models/email.php';

class EmailC{

public function emailController(){

$correo = null;
	if(!empty($_POST["correo"])){

		$correo = $_POST["correo"];
	}
	$respuesta = EmailModels::emailModel($correo);

	if($respuesta == "error"){
		echo "<script>alert('EL email ya esta registrado');</script>";
	}

}
}



 ?>		