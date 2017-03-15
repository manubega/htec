<?php 

class EnlacesModels{

	public function enlacesModel($enlaces){

		if($enlaces == 'inicio' ||
			$enlaces == 'soporte' ||
			$enlaces == 'redes' ||
			$enlaces == 'circuito' ||
			$enlaces == 'venta' ||
			$enlaces == 'consultoria' ||
			$enlaces == 'articulos'){

			$module = "views/modules/".$enlaces.".php";
		}
		else if($enlaces == 'index'){
			$module = "../index.php";
		}

		else{
			$module = "../index.php";
		}
		return $module;
	}

}

 ?>