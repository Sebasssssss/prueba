<?php

	$a = 3;
	$b = 2;

	if($a > $b){

		echo("<h1>A es mayor que B</h1>");

	}

	if(($a > $b) || ($a/2 < 3)){

		echo('<h1>Esto es porque peudo</h1>');

	}

	echo("<hr>")

	if( $a > $b ){

		echo('<h1> $a es mayor que $b</h1>');
		echo("<h1> $a es mayor que $b</h1>");

	}else{

		echo('<h1> $b es mayor a $a</h1>');
		echo("<h1> $b es mayor a $a</h1>");

	}


?>