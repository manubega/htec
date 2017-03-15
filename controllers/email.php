<?php
require_once 'models/email.php';

class EmailC{

public function emailController(){

	if(isset($_POST["correo"])){

		$correo = $_POST["correo"];
	}
	$respuesta = EmailModels::emailModel($correo);

	echo $respuesta;
}
}



 ?>		