<?php 

require_once 'conexion.php';

class EmailModels extends Conexion{

	public function emailModel($email){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM email WHERE email = '$email'");	
		//$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		$stmt->execute();

		if($stmt->fetch()){

			return "error";

		}

		else{

			$stmt = Conexion::conectar()->prepare("INSERT INTO email (email,fecha_registro) VALUES (:email,now())");
			$stmt->bindParam(":email",$email, PDO::PARAM_STR);
			$stmt->execute();
			return "exito";



		}

		$stmt->close();

	}
	}

	 ?>