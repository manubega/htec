<?php 

require_once 'conexion.php';

class EmailModels extends Conexion{

	public function emailModel($email){
		$stmt = Conexion::conectar()->prepare("INSERT INTO email (email) VALUES (:email)");	
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		if($stmt->execute()){

			return "exito";

		}

		else{

			return "error";

		}

		$stmt->close();


	}
	} ?>