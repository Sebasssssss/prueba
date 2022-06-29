<?php

	// Total de plata que tiene el cajero
	$totalPlata = 150000;
	// Maximo que se puede retirar
	$maximoSacar = 15000;
	// Respuesta que vamos a devolver
	$respuesta = "";
	
	
	$plataGuardada = "50000";
	// plata que voy a sacar
	$plataRetirar = 14900;

	$recibo = "false";

	$prestamo = "3";

	if($plataRetirar > $totalPlata){	
		$respuesta = "Mijo no tenemos esa plata vuelva otra semana";
	
	
	}elseif($plataRetirar >= $maximoSacar){

		$respuesta = "como vas a querer  sacar eso animal robale a otro";

	}elseif($plataRetirar > $plataGuardada){

		$respuesta = "Mijo uested es pobre no puede sacar esa plata";

	}else{

		$respuesta = "Malgaste su dinero en el casino";
		if($recibo){
			$respuesta .= "<br> Imprimiendo recibo te cobramos 1 peso por la imprecion";
		}else{
			$respuesta .= "<br> usted cuida el planeta";
		}
		switch(){
			case 1:
				$respuesta .= "<br> Usted saco 10000";
				break;
			case 2:
				$respuesta .= "<br> Usted saco 10000";
				break;
			case 3:
				$respuesta .= "<br> Usted saco 10000";
				break;
			case 4:
				$respuesta .= "<br> Usted saco 10000";
				break;
					
		}
	}



?>
<html>
	<head>
	</head>
	<body>
		<h1><?=$respuesta?></h1>
	</body>
</html>