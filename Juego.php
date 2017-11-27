<?php

class Juego{

function __construct()
	{
		
	}
	// $frame1: array de que contiene el resultado de un frame, dos intentos, ej. [1,2]
	public function sumar($frame1){

		$sumaFrame = array_sum($frame1);
		if ($sumaFrame < 11){
			return $sumaFrame;
		}else{
			echo "\nLa suma de los numeros ingresados no deben superar 10\n";
		}

	}

	public function verificarFrame($frameX){
		if (count($frameX) > 2 ){
			echo "\nLa matriz debe contener solo dos elementos";
			return [0,0];
		}else{
		return $frameX;
		}
	}




}





?>