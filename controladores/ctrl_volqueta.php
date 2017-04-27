<?php

require_once("clases/template.php");
require_once("clases/auth.php");
require_once("clases/volqueta.php");
require_once("clases/respuesta.php");

class ControladorVolqueta extends ControladorIndex{
	function verVolquetas($params = array()){
		$tpl = Template::getInstance();
		$tpl->asignar('location', 'Ver volquetas');
		$tpl->asignar('landing', 'no');
		$tpl->mostrar('verVolquetas');
	}

	function getVolquetas(){
		$volquetas = new Volqueta();		
		$v = $volquetas->getAllVolquetas();
		$arrayVolquetas = array();
		foreach ($v as $volqueta) {
			$arrayVolquetas[] = $volqueta->convertToArray();
		}
		$result = new Respuesta(array("code" => "ok",
									"message" => "",
									"content" => $arrayVolquetas,));
		/*$result = "";
		foreach ($v as $volqueta) {

			$result .= $volqueta->getNumero().";".$volqueta->getLatitud().";".$volqueta->getLongitud().";".$volqueta->getUbicacion().";".$volqueta->getCalleX().";".$volqueta->getCalleY().";".$volqueta->getCalleZ().";".$volqueta->getEstado().":";
		}	
		echo $result;*/
		echo $result->getResult();
	}
}

?>